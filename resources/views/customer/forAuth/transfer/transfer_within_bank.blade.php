@extends('customer.layout')

@section('before-css')
    <link rel="stylesheet" href="../../customer/dist/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
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
                                          <div class="mb-3">
                                              <label for="bank">RECIPIENT BANK <span class="text-danger">*</span></label>
                                              <select class=" form-control" id="bank" name="bank" required style="width: 100%; height: 36px">
                                                  <option value="{{ $banks[0]['bin']}}">{{$banks[0]['name']}}</option>
                                                  @foreach($banks[1] as $item)
                                                      <option value="{{ $item->bin }}">({{ $item->code }}) {{$item->shortName}}</option>
                                                  @endforeach
                                              </select>
                                          </div>
                                      </div>
                                      @error('bank') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                      <div class="col-12">
                                          <div class="mb-3">
                                              <label for="account_number">ACCOUNT NUMBER <span class="text-danger">*</span></label>
                                              <input type="text" name="account_number" id="account_number" class="form-control required" required>
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
                                              <input type="checkbox" name="beneficiary" id="beneficiary" class="form-check-input">
                                              <label for="beneficiary">ADD TO BENEFICIARY</label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          {{--    Transaction information    --}}
                          <div class="card">
                              <div class="card-header text-center">
                                  <h3>Transaction information</h3>
                              </div>

                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="mb-3">
                                              <label for="from_account">FROM ACCOUNT <span class="text-danger">*</span></label>
                                              <select class="select2 form-control required" id="from_account" name="from_account" required style="width: 100%; height: 36px" >
                                                  @foreach($acc as $item)
                                                      <option value="{{$item->account_number }}">{{ $item->account_number."-".$item->AccountType->name.'. '.$item->BalanceCardAccount->balance }}</option>
                                                  @endforeach
                                              </select>
                                          </div>
                                      </div>
                                      @error('from_account') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                      <div class="col-md-6 col-lg-8">
                                          <div class="mb-3">
                                              <label for="amount">AMOUNT <span class="text-danger">*</span></label>
                                              <input type="number" class="form-control required" min="5000" name="amount" id="amount" required>
                                          </div>
                                      </div>
                                      @error('amount') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                      <div class="col-md-6 col-lg-4">
                                          <div class="mb-3">
                                              <label for="currency"> CURRENCY <span class="text-danger">*</span></label>
                                              <select name="currency" id="currency" class="form-control required" required>
                                                  <option value="VND">VND</option>
                                              </select>
                                          </div>
                                      </div>
                                      @error('currency') <p class="text-danger ms-2">{{$message}} </p> @enderror
                                      <div class="col-12">
                                          <div class="mb-3">
                                              <label for="description">DESCRIPTION</label>
                                              <textarea type="text" class="form-control" name="description" id="description" ></textarea>
                                          </div>
                                      </div>
                                      @error('description') <p class="text-danger ms-2">{{$message}} </p> @enderror
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
                                          <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">FROM ACCOUNT:  </span> <span class="fs-3 text-bg-light-gray" id="info_from_acc"></span></div>
                                          <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">TO ACCOUNT:  </span> <span class="fs-3 text-bg-light-gray" id="info_to_acc"></span></div>
                                          <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">ACCOUNT NAME:  </span> <span class="fs-3 text-bg-light-gray" id="info_acc_name"></span></div>
                                          <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">BANK NAME:  </span> <span class="fs-3 text-bg-light-gray" id="info_bank_name"></span></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-header text-center">
                                  <h3>Transfer Information</h3>
                              </div>
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-12">
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
                                      <a id="clickSubmit" class="btn font-medium rounded-pill px-4 text-primary" >
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
{{--        <script src="../../customer/dist/js/forms/form-wizard.js"></script>--}}


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

            $.validator.addMethod("checkAccount", function (value, element,params) {
                return this.optional(element) || params.bank===0;
            }, "Please enter a valid account number.");

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
                            bank:1
                        },
                    }
                }
            });
            //
            let acc=$('#account_number');
            acc.on('change', async ()=>{
                let data = await  searchAcc( $('#bank').val() , acc.val());
                if(data!=="1"){
                    validator.settings.rules.account_number.checkAccount.bank = 0;
                    validator.element("#account_number");
                    $('.account_info').show();
                    $('#account_holder_name').val(data.name);
                    $('input[name="account_holder_name"]').val(data.name);
                }else {
                    validator.settings.rules.account_number.checkAccount.bank = 1;
                    validator.element("#account_number")
                    $('.account_info').hide();
                }

            })
            // search acc
            async function searchAcc(bank,acc){
                let a;
                await $.ajax({
                    type: 'post',
                    data: {
                        '_token': "{{csrf_token()}}",
                        "pin": bank,
                        'account_number': acc
                    },
                    url: "{{route('search-acc')}}",
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
            let s=$('#clickSubmit');
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
          <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
          <script>
              function findAccountName(accountNumber, bankId) {
                  var xmlhttp = new XMLHttpRequest();
                  let params = JSON.stringify({
                      "accountNumber": "019704060211184",
                      "bin": "970441",
                  });
                  xmlhttp.onreadystatechange = function () {
                      if (xmlhttp.readyState == XMLHttpRequest.DONE) { // XMLHttpRequest.DONE == 4
                          if (xmlhttp.status == 200) {
                              let data = JSON.parse(xmlhttp.responseText)
                              if (data.code == "00") {
                                  document.getElementById("accountName").value = data.data.accountName;
                                  $('input[name="account_holder_name"]').val( data.data.accountName);
                              } else {
                              }
                          } else if (xmlhttp.status == 400) {
                              alert('There was an error 400');
                          } else {
                              alert('something else other than 200 was returned');
                          }
                      }
                  };

                  xmlhttp.open("POST", "https://api.vietqr.io/v2/lookup", true);
                  xmlhttp.setRequestHeader("Content-Type", "application/json");

                  xmlhttp.setRequestHeader("x-api-key", "5f37c036-b61b-4311-bd28-d29bbbeaa265");
                  xmlhttp.setRequestHeader("x-client-id", "5f37c036-b61b-4311-bd28-d29bbbeaa265");
                  xmlhttp.send(params);
              }
          </script>


@endsection
