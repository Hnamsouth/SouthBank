@extends('customer.layout')

@section('before-css')
    <link rel="stylesheet" href="../../customer/dist/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
@endsection

@section('after-css')
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
@endsection

@section('main-content')
  <div class="container-fluid">
      <div class="col-12">
          <div class="">
              <div class="card-body wizard-content">
                  <h4 class="card-title">Transfer to Account</h4>
                  <form action="{{route('user.transfer.within-bank')}}" class="validation-wizard wizard-circle mt-5" method="post">
                      @csrf
                      <!-- Step 1 -->
                      <h6>1.Transfer Info</h6>
                      <section>
                          <div class="card">
                              <div class="card-header text-center">
                                  <h3>Benecifiary transfer details</h3>
                              </div>
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="mb-3">
                                              <label for="from_account">FROM ACCOUNT <span class="text-danger">*</span></label>
                                              <select class=" form-select required" id="from_account" name="from_account" required style="width: 100%; height: 36px" >
                                                  <option></option>
                                                  @foreach($acc as $item)
                                                      <option value="{{$item->account_number }}">{{ $item->account_number."-".$item->AccountType->name.'. '.$item->BalanceCardAccount->balance }}</option>
                                                  @endforeach
                                              </select>
                                          </div>
                                      </div>
                                      @error('from_account') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                      <div class="col-md-6">
                                          <div class="mb-3">
                                              <label for="amount">AMOUNT <span class="text-danger">*</span></label>
                                              <input type="number" class="form-control required" min="5000" name="amount" id="amount" required disabled>
                                          </div>
                                      </div>
                                      @error('amount') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                      <div class="col-md-6">
                                          <div class="mb-3">
                                              <label for="bank">RECIPIENT BANK <img src="{{$banks[0]['logo']}}" width="20" > <span class="text-danger">*</span></label>
                                              <select class=" form-select" id="bank" name="bank" required style="width: 100%; height: 36px">
                                                  <option></option>
                                                  <option value="{{ $banks[0]['bin']}}" >({{ $banks[0]['code'] }}) {{$banks[0]['shortName']}}</option>
                                                  @foreach($banks[1] as $item)
                                                      <option value="{{ $item->bin }}"> ({{ $item->code }}) {{$item->shortName}}</option>
                                                  @endforeach
                                              </select>
                                          </div>
                                      </div>
                                      @error('bank') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                      <div class="col-md-6">
                                          <div class="mb-3">
                                              <label for="account_number">ACCOUNT NUMBER <span class="text-danger">*</span></label>
                                              <input type="text" name="account_number" id="account_number" class="form-control required" required disabled>
                                              <label id="account_number_error" class="text-danger" for="account_number"></label>
                                          </div>
                                      </div>
                                      @error('account_number') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                      <div class="hide account_info">
                                          <div class="col-12">
                                              <div class="mb-3">
                                                  <label for="account_holder_name">ACCOUNT HODLER NAME <span class="text-danger">*</span></label>
                                                  <input type="text" id="account_holder_name" class="form-control" disabled required>
                                                  <input type="hidden" name="account_holder_name" value required>
                                              </div>
                                          </div>
                                      </div>
                                      @error('account_holder_name') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                      <div class="col-12">
                                          <div class="mb-3">
                                              <label for="description">DESCRIPTION <span class="text-danger">*</span></label>
                                              <textarea type="text" class="form-control required" name="description" id="description" ></textarea>
                                          </div>
                                      </div>
                                      @error('description') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                      <div class="col-12">
                                          <div class="mb-3">
                                              <input type="checkbox" name="beneficiary" id="beneficiary" class="form-check-input">
                                              <label for="beneficiary">ADD TO BENEFICIARY</label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                      <!-- Step 2 -->
                      <h6>2. Review</h6>
                      <section>
                          <div class="card">
                              <div class="card-header text-center">
                                  <h3>Transfer  Information</h3>
                              </div>
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">FROM ACCOUNT:  </span> <span class="fs-3 text-bg-light-gray" id="info_from_acc"></span></div>
                                          <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">TO ACCOUNT:  </span> <span class="fs-3 text-bg-light-gray" id="info_to_acc"></span></div>
                                          <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">ACCOUNT NAME:  </span> <span class="fs-3 text-bg-light-gray" id="info_acc_name"></span></div>
                                          <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">BANK NAME:  </span> <span class="fs-3 text-bg-light-gray" id="info_bank_name"></span></div>
                                          <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">AMOUNT:  </span> <span class="fs-3 text-bg-light-gray" id="info_amount"></span></div>
                                          <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">DATE:  </span> <span class="fs-3 text-bg-light-gray" id="info_date"></span></div>
                                          <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">FEES:  </span> <span class="fs-3 text-bg-light-gray" id="info_fees"></span></div>
                                          <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">DESCRIPTION:  </span> <span class="fs-3 text-bg-light-gray" id="info_description"></span></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="card-body">
                                  <div class="mb-3">
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
                                  <div class="d-flex align-items-center">
                                      <p class="fs-4 mb-0 text-dark">Get the code?</p>
                                      <a id="resendCode" class="btn font-medium rounded-pill px-4 text-primary" >
                                          <div class="d-flex align-items-center">
                                              ReSend
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
                                  <h3>Transfer Complete</h3>
                              </div>
                              <div class="card-body">


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
          <script src="../../customer/dist/libs/select2/dist/js/select2.full.min.js"></script>
          <script src="../../customer/dist/libs/select2/dist/js/select2.min.js"></script>
          <script src="../../customer/dist/js/forms/select2.init.js"></script>

    <script src="../../customer/dist/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="../../customer/dist/libs/jquery-validation/dist/jquery.validate.min.js"></script>
          <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
{{--        <script src="../../customer/dist/js/forms/form-wizard.js"></script>--}}


    <script>
        $(document).ready(function(){
            // form validate
            var form = $(".validation-wizard").show();
            let next=$('#next');
            let prev=$('#previous');
            let actionF=$('#actionF');
            let finishF=$('#finishF');

            $(".validation-wizard").steps({
                headerTag: "h6",
                bodyTag: "section",
                transitionEffect: "fade",
                titleTemplate: '<span class="step">#index#</span> #title#',
                labels: {
                    finish: "Submit",
                },
                enablePagination:false,
                onInit:()=>{
                    prev.hide();
                },
                onStepChanging:  function  (event, currentIndex, newIndex) {
                    let check =( currentIndex > newIndex ||
                        (!(3 === newIndex && Number($("#age-2").val()) < 18) &&
                            (currentIndex < newIndex &&
                            (form.find(".body:eq(" + newIndex + ") label.error").remove(),
                                form.find(".body:eq(" + newIndex + ") .error").removeClass("error")),
                                (form.validate().settings.ignore = ":disabled,:hidden"),
                                form.valid())));

                    if(check && currentIndex===0){ // forward
                        GetSet();
                        $('#submit').show();
                    }
                    if(currentIndex===1){
                        $('#submit').hide();
                    }
                    return check;

                },
                onFinishing: function (event, currentIndex) {
                    return (form.validate().settings.ignore = ":disabled"), form.valid();
                },
                onFinished: function (event, currentIndex) {
                    swal(
                        "Form Submitted!",
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed."
                    );
                },
            });

            $.validator.addMethod("checkAccount", function (value, element,params) {
                if(params.duplicate===false){
                    return false;
                }
                return this.optional(element) || params.bank ;
            },function(params){
                let mess=!params.bank?"Please enter a valid account number.":"";
                    mess=params.duplicate===false?"Can't create a transaction on the same account":mess;
                    return mess;
            });

            $.validator.addMethod("checkAmount", function (value, element,params) {
                    return this.optional(element) || params.amount && params.min;
                },function (params){
                    let mess=!params.amount?"Insufficient account balance.":'';
                    mess+=!params.min?"Please enter a value greater than or equal to 5000 .":'';
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
                    account_number:{
                        required:true,
                        checkAccount:{
                            bank:1,
                            duplicate:1
                        },
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
            next.on('click', async ()=>{
                let index=parseInt(form.steps('getCurrentIndex'));
                if(index===1){
                    let tpw=$('#trans_password').val();
                    if(tpw!==''){
                        let ctp = parseInt( await checkTransPw(tpw));
                        if (ctp === 1) {
                            $('#mess-err-trans').text("");
                            let stm= await Transfer();
                            if(stm.status===true){
                                form.steps('next');
                                actionF.hide();
                                $('#finishF').show();
                            }else{
                                console.log(stm.status);
                                alert(stm.status);
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
            async function Transfer(){
                let a;
                await $.ajax({
                    url:'{{route('user.transfer.within-bank')}}',
                    type:'post',
                    data:{
                        '_token':"{{csrf_token()}}",
                        'bank': $('#bank').val(),
                        'account_number':$('#account_number').val() ,
                        'account_holder_name':$('#account_holder_name').val() ,
                        'from_account':$('#from_account').val() ,
                        'amount':$('#amount').val() ,
                        'description':$('#description').val() ,
                        'trans_password':$('#trans_password').val() ,
                    },
                    success:(response)=>{
                        console.log(response);
                        a=response;
                    },
                });
                return a;
            }

            //
            let bank=$('#bank');
            bank.on('change',()=>{
                if(bank.val()!==''){
                    acc.attr('disabled',false);
                }else{
                    acc.attr('disabled',true);
                }
            });
            // to acc
            let acc=$('#account_number');
            acc.on('change', async ()=>{
                let bank=$('#bank').val();
                if(bank!==''){
                    let data = await  searchAcc( $('#bank').val() , acc.val());
                    if(data!=="1"){
                        validator.settings.rules.account_number.checkAccount.bank = true;
                        validator.element("#account_number");
                        $('.account_info').show();
                        $('#account_holder_name').val(data.name);
                        $('input[name="account_holder_name"]').val(data.name);
                        checkAcc();
                    }else {
                        validator.settings.rules.account_number.checkAccount.bank = false;
                        validator.element("#account_number")
                        $('.account_info').hide();
                    }
                }else{
                    validator.element("#bank");
                }


            });
            // search acc
            async function searchAcc(bank,acc){
                let a;
                await $.ajax({
                    type: 'post',
                    data: {
                        '_token': "{{csrf_token()}}",
                        "bin": bank,
                        'account_number': acc
                    },
                    url: "{{route('search-acc')}}",
                    success: function (response) {
                        a=response;
                    },
                })
                return a;
            }
            let amount=$('#amount');
            amount.on('change', async ()=>{
                let data = await CheckAmount(amount.val(), $('#from_account').val() );
                if(!isNaN(data.status)){
                    setValidateAmount(data.status);
                }else{
                    confirm(data.status);
                }
            });
            // from acc
            let F_acc=$('#from_account');
            F_acc.on('change',async ()=>{
                if(F_acc.val()!==''){
                    amount.attr('disabled',false);
                    if(amount.val()!==''){
                        let data = await CheckAmount(amount.val(), F_acc.val() );
                        if(!isNaN(data.status)){
                            setValidateAmount(data.status);
                        }else{
                            confirm(data.status);
                        }
                    }
                    if(acc.val()!==''){
                        checkAcc();
                    }
                }else{
                    amount.val('');
                    amount.attr('disabled',true);
                }

            });
            // check acc
            function checkAcc(){
                if(parseInt(acc.val())===parseInt(F_acc.val())){
                    validator.settings.rules.account_number.checkAccount.duplicate = false;
                    validator.element("#account_number");
                }else{
                    validator.settings.rules.account_number.checkAccount.duplicate = true;
                    validator.element("#account_number");
                }
            }

            //
            function setValidateAmount(data){
                if(data===1){
                    validator.settings.rules.amount.checkAmount.amount = true;
                    validator.settings.rules.amount.checkAmount.min = true;
                    validator.element("#amount");
                }else if(data===2){
                    validator.settings.rules.amount.checkAmount.amount = true;
                    validator.settings.rules.amount.checkAmount.min = false;
                    validator.element("#amount");
                }else if(data===3){
                    validator.settings.rules.amount.checkAmount.amount = false;
                    validator.settings.rules.amount.checkAmount.min = true;
                    validator.element("#amount");
                }else {
                    validator.settings.rules.amount.checkAmount.amount = false;
                    validator.settings.rules.amount.checkAmount.min = false;
                    validator.element("#amount")
                }
            }
            // check amount
            async function CheckAmount(am,acc){
                let a;
                await $.ajax({
                    type: 'post',
                    data: {
                        '_token': "{{csrf_token()}}",
                        "amount": am,
                        'account_number': acc,
                    },
                    url: "{{route('check-amount-transfer')}}",
                    success: function (response) {
                        a=response;
                    },
                })
                return a;
            }
            // get & set steps 2
            function GetSet(){
                $('#info_from_acc').text($('select[name="from_account"]').val());
                $('#info_to_acc').text($('input[name="account_number"]').val());
                $('#info_acc_name').text($('input[name="account_holder_name"]').val());
                $('#info_bank_name').text($('select[name="bank"]').val());
                $('#info_amount').text($('input[name="amount"]').val());
                let date=new Date("Y-m-d H:i:s");
                $('#info_date').text(date);
                $('#info_fees').text(0);
                $('#info_description').text($('textarea[name="description"]').val());
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
            let s=$('#resendCode');
            s.on('click',()=>{
                sendcode();
            });
            async function sendcode(){
               await  $.ajax({
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
            let sm=$('#submit');
            sm.on('click',async ()=>{
                if(await checkTransPw()){
                    form.submit();
                }else{
                    $('#mess-err-trans').show();
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
