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
                    <h4 class="card-title">Transfer to Account</h4>
                    <form action="{{route('user.hd-open-saving')}}" class="validation-wizard wizard-circle mt-5" method="post">
                        @csrf
                        <!-- Step 1 -->
                        <h6>Step 1</h6>
                        <section>
                            {{--     Benecifiary transfer details     --}}
                            <div class="card">
                                <div class="card-header text-center">
                                    <h3>Benecifiary transfer details</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-4">
                                                <label for="interest_payment_method">INTEREST PAYMENT METHOD: <span class="text-danger">*</span></label>
                                                <select class="form-select required" id="interest_payment_method" name="interest_payment_method" style="width: 100%; height: 36px">
                                                    <option></option>
                                                    @foreach($dt->InterestPaymentMethod as $item)
                                                        @if($item->id===1)
                                                            <option value="T-1">{{_('Monthly')}}</option>
                                                            <option value="T-3">{{_('Quarterly')}}</option>
                                                            <option value="T-6">{{_('Six-Month')}}</option>
                                                            <option value="T-12">{{_('Yearly')}}</option>
                                                        @else
                                                            <option value="{{ $item->id }}">{{$item->name}}</option>
                                                        @endif

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        @error('interest_payment_method') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                        @error('trans_password') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                        <div class="col-12">
                                            <div class="mb-4">
                                                <label for="source_account">SOURCE ACCOUNT <span class="text-danger">*</span></label>
                                                <select class="form-select required" id="source_account" name="source_account" required style="width: 100%; height: 36px" >
                                                    <option></option>
                                                    @foreach($acc as $item)
                                                        <option value="{{$item->account_number }}">{{ $item->account_number."-".$item->AccountType->name.'. '.$item->BalanceCardAccount->balance }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        @error('source_account') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                        <div class="col-md-8">
                                            <div class="mb-4">
                                                <label for="amount">AMOUNT <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control required" min="{{$dt->min_amount*1000000}}" name="amount" id="amount" required>
                                            </div>
                                        </div>
                                        @error('amount') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <label for="currency"> CURRENCY <span class="text-danger">*</span></label>
                                                <select name="currency" id="currency" class="form-select required" required >
                                                    <option value="VND">VND</option>
                                                </select>
                                            </div>
                                        </div>
                                        @error('currency') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                        <hr/>
                                        <div class="col-md-8">
                                            <div class="mb-4">
                                                <label for="terms">TERM <span class="text-danger">*</span></label>
                                                <select class="form-select required" name="terms" id="terms" >

                                                </select>
                                            </div>
                                        </div>
                                        @error('terms') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <label for="interest_rate">INTEREST RATE</label>
                                                <input type="text" class="form-control" id="interest_rate" disabled value="% / year">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="start_date">EFFECTIVE DATE</label>
                                                <input type="date" class="form-control" id="start_date" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="end_date">STIMATED DUE DATE</label>
                                                <input type="date" class="form-control"  id="end_date" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="settlement_channel">SETTLEMENT CHANEL<span class="text-danger">*</span></label>
                                                <select class="form-select required" id="settlement_channel" name="settlement_channel" required style="width: 100%; height: 36px" >
                                                    <option></option>
                                                  <option value="online">Online settlement</option>
                                                  <option value="online">On-counter settlement</option>
                                                </select>
                                            </div>
                                        </div>
                                        @error('description') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="account_receive">CURRENT ACCOUNT TO SETTLEMENT <span class="text-danger">*</span></label>
                                                <select class="form-select required" id="account_receive" name="account_receive" required style="width: 100%; height: 36px" >
                                                    <option></option>
                                                    @foreach($acc as $item)
                                                        <option value="{{$item->account_number }}">{{ $item->account_number."-".$item->AccountType->name.'. '.$item->BalanceCardAccount->balance }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        @error('account_receive') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="settlement_method">SETTLEMENT METHOD <span class="text-danger">*</span></label>
                                                <select class="form-select required" id="settlement_method" name="settlement_method" required style="width: 100%; height: 36px" >
                                                    <option></option>
                                                    @foreach($stm_method as $stm)
                                                        <option value="{{$stm->id}}">{{$stm->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        @error('settlement_method') <p class="text-danger ms-2">{{$message}} </p> @enderror

                                        <div class="col-12">
                                            <div class="mb-4">
                                                <label for="beneficiary">ADD TO BENEFICIARY</label>
                                                <input type="checkbox" name="beneficiary" id="beneficiary" class="form-check-input required">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 2 -->
                        <h6>Step 2</h6>
                        <section>
                            <div class="card">
                                <div class="card-header text-center">
                                    <h3>Account Information</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">SOURCE ACCOUNT:  </span> <span class="fs-3 text-bg-light-gray" id="info_source_account"></span></div>
                                            <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">AMOUNT:  </span> <span class="fs-3 text-bg-light-gray" id="info_amount"></span></div>
                                            <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">TERM:  </span> <span class="fs-3 text-bg-light-gray" id="info_terms"></span></div>
                                            <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">EFFECTIVE DATE:  </span> <span class="fs-3 text-bg-light-gray" id="info_start_date"></span></div>
                                            <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">STIMATED DUE DATE:  </span> <span class="fs-3 text-bg-light-gray" id="info_end_date"></span></div>
                                            <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">INTEREST RATE:  </span> <span class="fs-3 text-bg-light-gray" id="info_interest_rate"></span></div>
                                            <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">PROVISIONAL INTEREST:  </span> <span class="fs-3 text-bg-light-gray" id="info_provisional_interest"></span></div>
                                            <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">SETTLEMENT CHANEL:  </span> <span class="fs-3 text-bg-light-gray" id="info_settlement_channel"></span></div>
                                            <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">AT MATURED DATE, CHOOSE:  </span> <span class="fs-3 text-bg-light-gray" id="info_settlement_method"></span></div>
                                            <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">CURRENT ACCOUNT TO SETTLEMENT:  </span> <span class="fs-3 text-bg-light-gray" id="info_account_settlement"></span></div>
                                        </div>
                                    </div>
                                </div>
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
                                    <p class="text-danger hide" id="mess-err-trans">Transfer password incorrect</p>
                                    @error('trans_password') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                    <input type="hidden" name="trans_password" id="trans_password">
                                    <input type="hidden" name="deposit_type" value="{{$dt->id}}">
                                    <div class="d-flex align-items-center">
                                        <p class="fs-4 mb-0 text-dark">Get the code?</p>
                                        <a id="sendCode" class="btn font-medium rounded-pill px-4 text-primary" >
                                            <div class="d-flex align-items-center">
                                                Send
                                                <i class="ti ti-send ms-1 fs-4"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </form>
                    <div class="mt-4 text-center ">
                        <a id="submit" type="button" class="btn font-medium rounded-pill px-4 btn-primary hide">
                            <div class="d-flex align-items-center">
                                <i class="ti ti-send ms-1 fs-4"></i>
                                Submit
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
            <script src="../../customer/dist/libs/select2/dist/js/select2.full.min.js"></script>
            <script src="../../customer/dist/libs/select2/dist/js/select2.min.js"></script>
            <script src="../../customer/dist/js/forms/select2.init.js"></script>

            <script src="../../customer/dist/libs/jquery-steps/build/jquery.steps.min.js"></script>
            <script src="../../customer/dist/libs/jquery-validation/dist/jquery.validate.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

            <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


            <script>
                $(document).ready(function(){
                    // form validate
                    var form = $(".validation-wizard").show();
                    $(".validation-wizard").steps({
                        headerTag: "h6",
                        bodyTag: "section",
                        transitionEffect: "fade",
                        titleTemplate: '<span class="step">#index#</span> #title#',
                        labels: {
                            finish: "Submit",
                        },
                        onStepChanging:  function  (event, currentIndex, newIndex) {
                            if(currentIndex < newIndex && currentIndex===0){ // forward
                                GetSet();
                                $('#submit').show();
                            }
                            if(currentIndex > newIndex){
                                $('#submit').hide();
                            }
                            return (
                                currentIndex > newIndex ||
                                (!(3 === newIndex && Number($("#age-2").val()) < 18) &&
                                    (currentIndex < newIndex &&
                                    (form.find(".body:eq(" + newIndex + ") label.error").remove(),
                                        form.find(".body:eq(" + newIndex + ") .error").removeClass("error")),
                                        (form.validate().settings.ignore = ":disabled,:hidden"),
                                        form.valid()))
                            );

                        },
                        onFinishing: function (event, currentIndex) {
                            // show transfer info
                            return (form.validate().settings.ignore = ":disabled"), form.valid();
                        },
                        onFinished: function (event, currentIndex) {
                            swal(
                                "Form Submitted!",
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed."
                            );
                        },
                    });
                    $.validator.addMethod("checkAmount", function (value, element,params) {
                        return this.optional(element) || params.amount && params.min;
                    },function (params){
                            let mess=!params.amount?"Insufficient account balance.":'';
                            mess+=!params.min?"Please enter a value greater than or equal to {{$dt->min_amount*1000000}}.":'';
                            return mess;
                        }
                    );
                    let validator=$(".validation-wizard").validate({
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
                            email: {
                                email: !0,
                            },
                            amount:{
                                required:true,
                                checkAmount:{
                                    amount:1,
                                    min:1
                                },
                            }
                        }
                    });
                    //
                    let amount=$('#amount');
                    amount.on('change', async ()=>{
                        let data = await  CheckAmount(amount.val(), $('#source_account').val() );
                        if(data==="1"){
                            validator.settings.rules.amount.checkAmount.amount = true;
                            validator.settings.rules.amount.checkAmount.min = true;
                            validator.element("#amount");
                        }else if(data==="2"){
                            validator.settings.rules.amount.checkAmount.amount = true;
                            validator.settings.rules.amount.checkAmount.min = false;
                            validator.element("#amount");
                        }else if(data==="3"){
                            validator.settings.rules.amount.checkAmount.amount = false;
                            validator.settings.rules.amount.checkAmount.min = true;
                            validator.element("#amount");
                        }else {
                            validator.settings.rules.amount.checkAmount.amount = false;
                            validator.settings.rules.amount.checkAmount.min = false;
                            validator.element("#amount")
                        }
                        setRate();
                    })
                    // check amount
                    async function CheckAmount(am,acc){
                        let a;
                        await $.ajax({
                            type: 'post',
                            data: {
                                '_token': "{{csrf_token()}}",
                                "amount": am,
                                'account_number': acc,
                                'deposit_type':{{$dt->id}}
                            },
                            url: "{{route('check-amount-saving')}}",
                            success: function (response) {
                                a=response;
                            },
                        })
                        return a;
                    }
                    // set terms
                    let method=$('#interest_payment_method');
                    method.on('change',()=>{
                        setTerms(method.val())
                    });
                    //
                    let term=$('#terms');
                    function setTerms(t){
                        let arr=[1,2,3,4,5,6,7,8,9,10,11,12,13,15,18,24,36];
                        let html='<option></option>'; //<option value="">Select Terms</option>
                        arr.forEach((vl,id)=>{
                            if(t==="T-3"){
                                vl%3===0&&vl>3?html+=`<option value="${vl}">${vl} Month</option>`:'';
                            }else if(t==="T-6"){
                                vl%6===0&&vl>6?html+=`<option value="${vl}">${vl} Month</option>`:'';
                            }else if(t==="T-12"){
                                vl%12===0&&vl>12 || vl>=18?html+=`<option value="${vl}">${vl} Month</option>`:'';
                            }else if(t==="T-1"){
                                vl>=3?html+=`<option value="${vl}">${vl} Month</option>`:'';
                            }else{
                                html+=`<option value="${vl}">${vl} Month</option>`;
                            }
                        })
                        term.html(html);
                    }
                    // set rate
                    let s_date,e_date,i_rate;
                    term.on('change', ()=>{
                        setRate();
                        let start = new Date();
                        let end = new Date(start);
                        end.setMonth(end.getMonth() + parseInt(term.val()));
                        $('#start_date').val(start.toISOString().slice(0, 10));
                        $('#end_date').val(end.toISOString().slice(0, 10));
                        s_date=start.toISOString().slice(0, 10);
                        e_date=end.toISOString().slice(0, 10);
                    });
                    function setRate(){
                        $.ajax({
                            type: 'post',
                            data: {
                                '_token': "{{ csrf_token()}}",
                                "amount": amount.val(),
                                "interest_payment_method": method.val(),
                                'term': term.val().toString(),
                                'deposit_type':{{ $dt->id}}
                            },
                            url: "{{route('check-ir')}}",
                            success: function (response) {
                                if(response && response!==0){
                                    $('#interest_rate').val(response+" %/year");
                                    i_rate=response;
                                }
                            },
                        })
                    }
                    // get & set steps 2
                    function GetSet(){
                        console.log($('input[name="start_date"]').prop("value"));
                        $('#info_source_account').text($('select[name="source_account"]').val());
                        $('#info_amount').text($('input[name="amount"]').val());
                        $('#info_terms').text($('select[name="terms"]').val());
                        $('#info_start_date').text(s_date);
                        $('#info_end_date').text(e_date);
                        $('#info_interest_rate').text(i_rate+"%/year");
                        $('#info_provisional_interest').text(1000);
                        $('#info_settlement_channel').text($('select[name="settlement_channel"]').val());
                        $('#info_settlement_method').text($('select[name="settlement_method"]').val());
                        $('#info_account_settlement').text($('select[name="account_receive"]').val());

                    }
                    // trans pw
                    let ipc=$('.ip-code');
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
                    let s=$('#sendCode');
                    s.on('click',()=>{
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
                    });
                    // submit
                    let sm=$('#submit');
                    sm.on('click',async ()=>{
                        if(await checkTransPw()){
                            form.submit();
                        }else{
                            $('#mess-err-trans').show();
                        }
                    });
                    // check transfer pw
                    async function checkTransPw(){
                        let a;
                        await $.ajax({
                            type: 'post',
                            data: {
                                '_token': "{{csrf_token()}}",
                                'transfer_pw':$('#trans_password').val()
                            },
                            url: "{{route('c.t.pw')}}",
                            success: function(response) {
                                a=response==="0";
                            },
                        });
                        return a;
                    }
                })
            </script>
@endsection
