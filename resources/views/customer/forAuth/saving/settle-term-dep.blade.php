@extends('customer.layout')

@section('before-css')
    <link rel="stylesheet" href="../../customer/dist/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">


@endsection

@section('after-css')

@endsection

@section('main-content')
    <div class="container-fluid">
        <div class="col-12">
            <div class="">
                <div class="card-body wizard-content">
                    <h4 class="card-title">Settle Term Deposit</h4>
                    <form  class="validation-wizard wizard-circle mt-5">
                        <!-- Step 1 -->
                        <h6>1. Details</h6>
                        <section>
                            <div class="card">
                                <div class="card-header text-center">
                                    <h3>Settlement Detail</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-4">
                                                <label for="deposit_acc">TERM DEPOSIT ACCOUNT: <span class="text-danger">*</span></label>
                                                <select class="form-select required" id="deposit_acc" name="deposit_acc" style="width: 100%; height: 36px">
                                                    <option></option>
                                                    @foreach($dacc as $item)
                                                        @if(!$item->DepositType->withdraw_before_maturity)
                                                            <option value="{{$item->account_number}}">{{$item->account_number}} - {{$item->DepositType->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <p  class="text-danger hide" id="daccw">This account has not yet reached its settlement period</p>
                                        @error('deposit_acc') <p class="text-danger ms-2">{{$message}} </p> @enderror

                                        <div class="col-12 hide" id="acc_r">
                                            <div class="mb-4">
                                                <label for="acc_to_receive">ACCOUNT TO RECEIVE PRINCIPAL & INTEREST: <span class="text-danger">*</span></label>
                                                <select class="form-select required " id="acc_to_receive" name="acc_to_receive" style="width: 100%; height: 36px">
                                                    <option></option>
                                                    @foreach($acc as $item)
                                                        <option value="{{$item->account_number}}">{{$item->account_number}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        @error('acc_to_receive') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 2 -->
                        <h6>2.Review</h6>
                        <section>
                            <div class="card">
                                <div class="card-header text-center">
                                    <h3>Settlement Review</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">INITIAL AMOUNT:  </span> <span class="fs-3 text-bg-light-gray" id="info_initial_amount"></span></div>
                                            <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">TERM:  </span> <span class="fs-3 text-bg-light-gray" id="info_terms"></span></div>
                                            <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">PROFITS :  </span> <span class="fs-3 text-bg-light-gray" id="info_profit"></span></div>
                                            <div class="mb-4 hide" id="profit2"> <span class="fs-3 fw-semibold text-cl-gray me-2">PROFIT RECEIVED PRIOR:  </span> <span class="fs-3 text-bg-light-gray" id="info_profit_prior"></span></div>

                                            <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">OPEN DATE:  </span> <span class="fs-3 text-bg-light-gray" id="info_start_date"></span></div>
                                            <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">DATE OF MATURITY:  </span> <span class="fs-3 text-bg-light-gray" id="info_end_date"></span></div>
                                            <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">ACCOUNT TO RECEIVE:  </span> <span class="fs-3 text-bg-light-gray" id="info_account_receive"></span></div>
                                            <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">SETTLEMENT METHOD:  </span> <span class="fs-3 text-bg-light-gray" id="info_settlement_method"></span></div>
                                            <hr/>
                                            <div class="mb-4 text-end"> <span class="fs-4 fw-semibold text-cl-gray me-2">TOTAL :  </span> <span class="fs-3 text-bg-light-gray" id="info_total"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <h5 id="mess" class="text-danger px-4"></h5>
                                <div class="card-body">
                                    <div class="mb-4">
                                        <label for="exampleInputEmail1" class="form-label fw-semibold">Type your 6 digits security code</label>
                                        <div class="d-flex align-items-center gap-2 gap-sm-3" id="trans">
                                            <input type="number" class="form-control ip-code" data-index="1" maxlength="1">
                                            <input type="number" class="form-control ip-code" data-index="2" maxlength="1">
                                            <input type="number" class="form-control ip-code" data-index="3" maxlength="1">
                                            <input type="number" class="form-control ip-code" data-index="4" maxlength="1">
                                            <input type="number" class="form-control ip-code" data-index="5" maxlength="1">
                                            <input type="number" class="form-control ip-code" data-index="6" maxlength="1">
                                        </div>
                                    </div>
                                    <p class="text-danger" id="mess-err-trans"></p>
                                    @error('trans_password') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                    <input type="hidden" name="trans_password" id="trans_password">
                                    <div class="d-flex align-items-center">
                                        <p class="fs-4 mb-0 text-dark">Get the code?</p>
                                        <a id="sendCode" class="btn font-medium rounded-pill px-4 text-primary" >
                                            <div class="d-flex align-items-center">
                                                Resend
                                                <i class="ti ti-send ms-1 fs-4"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 3 -->
                        <h6>3.Finish</h6>
                        <section>
                            <div class="card">
                                <div class="card-header text-center">
                                    <h3>Settlement Review</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="p-2">
                                            <i class=" ms-2 ti ti-send ms-1 fs-4"></i>
                                        </div>
                                        <h4 >Thank you for using SouthBank's Savings service</h4>
                                    </div>
                                    <div class="mt-4 text-center hide" id="finishF">
                                        <a href="{{route('user.account.list')}}" type="button" class="btn font-medium rounded-pill px-4  btn-light">
                                            <div class="d-flex align-items-center">
                                                <i class="ti ti-send ms-1 fs-4"></i>
                                                Go to Account List
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </form>

                    <div class="mt-4 text-center " id="actionF">
                        <a id="previous" type="button" class="btn font-medium rounded-pill px-4 btn-light ">
                            <div class="d-flex align-items-center">
                                <i class="me-2 ti ti-send ms-1 fs-4"></i>
                                Previous
                            </div>
                        </a>
                        <a id="next" type="button" class="btn font-medium rounded-pill px-4 btn-default ">
                            <div class="d-flex align-items-center">
                                Next
                                <i class=" ms-2 ti ti-send ms-1 fs-4"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <div>
        @endsection

        @section('after-js')
            <!-- current page js files -->
            {{--            <script src="../../customer/dist/libs/select2/dist/js/select2.full.min.js"></script>--}}
            {{--            <script src="../../customer/dist/libs/select2/dist/js/select2.min.js"></script>--}}
            {{--            <script src="../../customer/dist/js/forms/select2.init.js"></script>--}}

            <script src="../../customer/dist/libs/jquery-steps/build/jquery.steps.min.js"></script>
            <script src="../../customer/dist/libs/jquery-validation/dist/jquery.validate.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

            <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


            <script>
                $(document).ready(function(){
                    // form validate
                    var form = $(".validation-wizard").show();
                    let next=$('#next');
                    let prev=$('#previous');
                    let actionF=$('#actionF');
                    let finishF=$('#finishF');
                    let sm=$('#submit');
                    let s=$('#sendCode');
                    let f= $(".validation-wizard").steps({
                        headerTag: "h6",
                        bodyTag: "section",
                        transitionEffect: "fade",
                        titleTemplate: '<span class="step">#index#</span> #title#',
                        labels: {
                            finish: "Submit",
                        },
                        enablePagination:false,
                        onStepChanging:   function (event, currentIndex, newIndex) {
                            return (currentIndex > newIndex ||
                                (!(3 === newIndex && Number($("#age-2").val()) < 18) &&
                                    (currentIndex < newIndex &&
                                    (form.find(".body:eq(" + newIndex + ") label.error").remove(),
                                        form.find(".body:eq(" + newIndex + ") .error").removeClass("error")),
                                        (form.validate().settings.ignore = ":disabled,:hidden"),
                                        form.valid())));
                        },
                        onFinishing: function (event, currentIndex) {
                            // show transfer info
                            return (form.validate().settings.ignore = ":disabled"), form.valid();
                        },
                        onInit:function(){
                            prev.hide();
                        },
                        onFinished: function (event, currentIndex) {
                            swal(
                                "Form Submitted!",
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed."
                            );
                        },
                    });
                    //
                    // $.validator.addMethod("checkDacc", function (value, element,params) {
                    //         return this.optional(element) || params;
                    //     },"This account has not reached its maturity date");
                    //
                    $(".validation-wizard").validate({
                        ignore: "",
                        errorClass: "text-danger",
                        successClass: "text-success",
                        highlight: function (element, errorClass) {
                            $(element).removeClass(errorClass);
                        },
                        unhighlight: function (element, errorClass) {
                            $(element).removeClass(errorClass);
                        },
                        errorPlacement: function (error, element) {
                            error.insertAfter(element);
                        },
                        rules: {
                            // deposit_acc:{
                            //     checkDacc:true
                            // }
                        }
                    });

                    // action
                    next.on('click',async ()=>{
                        let index=parseInt(form.steps('getCurrentIndex'));
                        if(index===1){
                            let tpw=$('#trans_password').val();
                            if(tpw!==''){
                                let ctp = parseInt( await checkTransPw(tpw));
                                if (ctp === 1) {
                                    $('#mess-err-trans').text("");
                                    let stm=await settlement();
                                    if(stm.status===true){
                                        form.steps('next');
                                        actionF.hide();
                                        finishF.show();
                                    }else{
                                        confirm(stm.status);
                                    }
                                } else if (ctp === 0) {
                                    $('#mess-err-trans').text("Transfer password incorrect.");
                                } else if (ctp === 2) {
                                    $('#mess-err-trans').text("Transaction password has expired.");
                                }
                            }else{
                                $('#mess-err-trans').text("Transaction password is required..");
                            }
                        }else{
                            let a = form.steps('next');
                            if(a===true){
                                prev.show();
                                sendcode();
                            }
                        }
                    })
                    prev.on('click',()=>{
                        let index=form.steps('getCurrentIndex');
                        index===1?prev.hide():null;
                        form.steps('previous')
                    })
                    //
                    async function settlement(){
                        let a;
                        await $.ajax({
                           url:'{{route('settle-term-dep')}}',
                           type:'post',
                           data:{
                               '_token':"{{csrf_token()}}",
                               'deposit_acc': deposit_acc.val(),
                               'acc_to_receive':acc_to_receive.val(),
                               "trans_password":$('#trans_password').val(),
                           },
                            success:(rq)=>{
                               console.log(rq)
                                a=rq;
                            }
                        });
                        return a;
                    }
                    //
                    let deposit_acc=$('#deposit_acc');
                    deposit_acc.on('change', async ()=>{
                        let data=await checkDacc();
                        data.data.profit.status_wbm?$('#daccw').hide():$('#daccw').show();

                        if(data.acc_to_receive !== ''){
                            $('#acc_r').show();
                            $('#acc_to_receive').val(data.acc_to_receive.toString()).change();
                            GetSet(data.data);
                        }
                    })
                    //
                    async function checkDacc(){
                        let a;
                       await $.ajax({
                            url:"{{route('check-acc-saving')}}",
                            type:'post',
                            data:{
                                '_token':'{{csrf_token()}}',
                                'dacc':deposit_acc.val()
                            },
                            success:(response)=>{
                                console.log(response)
                                a=response;
                            }
                        });
                       return a;
                    }
                    let acc_to_receive=$('#acc_to_receive');
                    // get & set steps 2
                    function GetSet(data){
                        console.log(data);
                        let total=parseInt(data.init_amount)+data.profit.pay;
                        $('#info_initial_amount').text(data.init_amount);
                        $('#info_terms').text(data.terms);
                        $('#info_profit').text(data.profit.pay);
                        if(data.mess!==""){
                            total-=data.profit.receive;
                            $('#info_profit_prior').text(data.profit.receive);
                            $('#profit2').show();
                        }
                        $('#mess').text(data.mess);
                        $('#info_start_date').text(data.open_date);
                        $('#info_end_date').text(data.end_date);
                        $('#info_account_receive').text(acc_to_receive.val());
                        $('#info_settlement_method').text(data.settlement_method);
                        $('#info_total').text(total);

                    }
                    let ipc=$('.ip-code');
                    // trans pw
                    for(let i=0;i<ipc.length;i++) {
                        ipc[i].addEventListener('input',(e)=>{
                            let trans_pw='';
                            for(let j=0;j<ipc.length;j++){ trans_pw+=ipc[j].value; }
                            $('#trans_password').val(trans_pw);

                            let nextInput = i===ipc.length?false:ipc[i+1];
                            if (nextInput) {
                                nextInput.focus();
                                nextInput.select();
                            }
                        })

                    }
                    // send trans pw to emal
                    s.on('click',()=>{
                        sendcode();
                    });
                    //
                    function sendcode(){
                        $.ajax({
                            type: 'post',
                            data: {
                                '_token': "{{csrf_token()}}",
                            },
                            url: "{{route('g.t.pw')}}"
                            ,success:function(rp){
                                let text=rp==="0"?"Trans password sent successfully":"Sending error";
                                Toastify({
                                    text: text,
                                    style: {
                                        background: rp==="0"?"#5D87FF":"rgb(250,137,107)",
                                    }
                                }).showToast();
                            }
                        })
                    }
                    // submit
                    sm.on('click',async ()=>{
                        let check=await checkTransPw();
                        if(check===1){
                            $('#mess-err-trans').text("");
                            $(".validation-wizard").steps('next');
                        }else if(check===0){
                            $('#mess-err-trans').text("Transfer password incorrect.");
                        }else if(check===2){
                            $('#mess-err-trans').text("Transaction password has expired.");
                        }
                    });
                    // check transfer pw
                    async function checkTransPw(tpw){
                        let a;
                        await $.ajax({
                            type: 'post',
                            data: {
                                '_token': "{{csrf_token()}}",
                                'transfer_pw':tpw
                            },
                            url: "{{route('c.t.pw')}}",
                            success: function(response) {
                                a=response.status;
                            },
                        });
                        return a;
                    }
                })
            </script>
@endsection
