@extends('customer.layout2')
@section('before-css')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="../../customer/dist/libs/prismjs/themes/prism.min.css">
@endsection

@section('before-js')
    <script src='https://unpkg.com/tesseract.js@4.0.2/dist/tesseract.min.js'></script>
@endsection

@section('main-content')
<div class="position-relative overflow-hidden radial-gradient min-vh-100">
    <div class="position-relative z-index-5">
        <div class="row">
            <div class="col-lg-4 col-xl-4">
                <a href="/" class="text-nowrap logo-img d-block px-4 py-9 pb-5 pb-xl-0 w-100">
                    <img src="../../customer/dist/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <div class="d-none d-lg-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                    <img src="../../customer/dist/images/backgrounds/rocket.png" alt="" class="img-fluid" width="200">
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-8">
                <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
                    <div class="text-center mt-5">
                        <h1>Register Account</h1>
                        <p class="text-danger">{{ $account_type->name_dev??"" }} </p>
                    </div>
                    <div class="d-flex align-items-center w-100 h-100">
                        <div class="card-body wizard-content px-xxl-5">
                            <form method="post" action="{{ route('acc.register') }}"  class="validation-wizard vertical wizard-circle mt-5">
                                @csrf
                                <!-- Step 1 -->
                                <h6>Personal Info</h6>
                                <section>
                                    <div class="row">
                                        @error('phone') {{$message}} @enderror
                                        @error('username') {{$message}} @enderror
                                        @error('CCCD') {{$message}} @enderror
                                        @error('CMND_CCCD_IMG_BEFORE') {{$message}} @enderror
                                        @error('CMND_CCCD_IMG_AFTER') {{$message}} @enderror
                                        @error('gender') {{$message}} @enderror
                                        @error('city') {{$message}} @enderror
                                        @error('district') {{$message}} @enderror
                                        @error('ward') {{$message}} @enderror
                                        @error('detail_address') {{$message}} @enderror
                                        @error('email') {{$message}} @enderror
                                        @error('secret_question') {{$message}} @enderror
                                        @error('name') {{$message}} @enderror
                                        @error('birth_date') {{$message}} @enderror
                                        @error('education_level') {{$message}} @enderror
                                        @error('nationality') {{$message}} @enderror
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone">Phone Number <span class="text-danger">(*)</span></label>
                                                <input type="tel" name="phone" class="form-control required" id="phone" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="CCCD">CMND/CCCD <span class="text-danger">(*)</span></label>
                                                <input type="text" name="CCCD" class="form-control required" id="CMND_CCCD" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="name">Your Full Name <span class="text-danger">(*)</span></label>
                                                <input type="text" name="name" class="form-control required" id="name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="date_of_birth">Date of Birth <span class="text-danger">(*)</span></label>
                                                <input type="date" name="date_of_birth" class="form-control required" id="date_of_birth" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="nationality">Nationality</label>
                                                <select class="form-select  required" id="nationality" name="nationality">
                                                    <option value="1">Viet Nam</option>
                                                    <option value="2">American</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 2 -->
                                <h6>Take CCCD/CMND pictrue and video</h6>
                                <section>
                                    <div class="row text-center justify-content-center">
                                        <!-- img decode form base64 -->
                                        <canvas id="canvas" width="640" height="480" style="display: none;"></canvas>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="CMND_CCCD_IMG_BEFORE">
                                                    <button type="button" class="btn shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="Webcam(1)">
                                                        <img src="https://t3.ftcdn.net/jpg/01/09/90/98/360_F_109909829_vVSrZswcG52MysTLQPo6KQk4gXJq07Al.webp" width="120" >
                                                    </button>
                                                </label>
                                                <input type="hidden" class="form-control required" id="CMND_CCCD_IMG_BEFORE" name="CMND_CCCD_IMG_BEFORE"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="CMND_CCCD_IMG_AFTER">
                                                    <button type="button" class="btn  shadow-sm"  data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="Webcam(2)">
                                                        <img src="https://t4.ftcdn.net/jpg/01/09/90/93/240_F_109909360_pqQbyTj3nFyZWBG1vB30mSn8eVmZCwlr.jpg" width="120" >
                                                    </button>
                                                </label>
                                                <input type="hidden" class="form-control required" id="CMND_CCCD_IMG_AFTER" name="CMND_CCCD_IMG_AFTER"/>
                                            </div>
                                        </div>
                                    </div>

                                </section>
                                <!-- Step 3 -->
                                <h6>Confirm service information</h6>
                                <section>
                                    <div class="row">
                                        <h3>I. Additional information </h3>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Gender <span class="text-danger">(*)</span></label>
                                                <div class="c-inputs-stacked">
                                                    <div class="form-check">
                                                        <input type="radio" id="customRadio26" name="gender" class="form-check-input required" />
                                                        <label class="form-check-label" for="customRadio26">Male</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" id="customRadio27" name="gender" class="form-check-input" />
                                                        <label class="form-check-label" for="customRadio27">Female</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="education_level">Education level</label>
                                                <select class="form-select  required" id="education_level" name="education_level">
                                                    <option value="1">After university</option>
                                                    <option value="2">University</option>
                                                    <option value="2">College</option>
                                                    <option value="2">High school</option>
                                                    <option value="2">Intermediate</option>
                                                    <option value="2">Other</option>
                                                </select>
                                            </div>
                                        </div>

                                        <h3>II. Address information </h3>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="city">City</label>
                                                <select class="form-select  required" id="city" name="city">
                                                    <option value="">Select Result</option>
                                                    <option value="Selected">Selected</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="district">District</label>
                                                <select class="form-select  required" id="district" name="district">
                                                    <option value="">Select Result</option>
                                                    <option value="Selected">Selected</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="ward">Ward</label>
                                                <select class="form-select" id="ward" name="ward">
                                                    <option value="">Select Result</option>
                                                    <option value="Selected">Selected</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="detail_address">Detail Address <span class="text-danger">(*)</span></label>
                                                <input class="form-control  required" id="detail_address" name="detail_address">
                                            </div>
                                        </div>
                                        <h3>III. Transaction information </h3>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="int1">User name eBank :</label>
                                                <input type="text" class="form-control" id="show_username"  disabled/>
                                                <input type="hidden"  name="username" id="hidden_username" class="form-control"   />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="email">Email <span class="text-danger">(*)</span></label>
                                                <input type="email" name="email" class="form-control  required" id="email" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="participants1">Security question <span class="text-danger">(*)</span></label>
                                                <input type="text" name="secret_question" class="form-control  required" id="int1" placeholder="Where is your high school?"/>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="int1">Presenter</label>
                                                <input type="text" name="presenter" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 4 -->
                                <h6>Complete registration</h6>
                                <section>
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{--  card-account information --}}
                                            <div>
                                                <input type="hidden" name="card_type" value="{{ $account_type->CardType[0]->DebitCardType->id}}">
                                                <input type="hidden" name="account_type" value="{{ $account_type->id}}">
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-3 text-center">
                                                        <h3 class="">Successful registration</h3>
                                                        <p>Information about the contract will be sent to your email</p>
                                                    </div>
                                                    <h5>Your information</h5>
                                                    <div class="d-flex justify-content-between">

                                                    </div>
                                                    <hr/>
                                                    <h5>Service</h5>
                                                    <p> <strong>Account Type :</strong>{{ $account_type->name }}</p>
                                                    <p> <strong>Debit card :</strong>{{ $account_type->CardType[0]->DebitCardType->name }}</p>
                                                    <img src="{{  $account_type->CardType[0]->DebitCardType->img }}"  width="200">

                                                    <div class="mb-3 text-center">
                                                        <button type="submit" class="btn text-light" style="background-color:#5d87ff; ">Register</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="CloseWebcam()"></button>
            </div>
            <div class="modal-body text-center">
                <video id="video" width="720" height="560" autoplay muted></video>
                <div class="mt-3">
                    <button type="button" class="btn btn-primary" id="click" data-bs-dismiss="modal" aria-label="Close">Capture</button>
                </div>
            </div>
        </div>
    </div>
</div>
    <style>
        .wizard.vertical .content{
            margin: 0;
            width: auto;
        }
    </style>
@endsection

@section('after-js')
            <script src="../../customer/dist/libs/prismjs/prism.js"></script>

            <script src="../../customer/dist/libs/jquery-steps/build/jquery.steps.min.js"></script>
            <script src="../../customer/dist/libs/jquery-validation/dist/jquery.validate.min.js"></script>
            {{--    <script src="../../customer/dist/js/forms/form-wizard.js"></script>--}}

            <script>
                var form = $(".validation-wizard").show();

                $(".validation-wizard").steps({
                    headerTag: "h6",
                    bodyTag: "section",
                    transitionEffect: "fade",
                    titleTemplate: '<span class="step">#index#</span> #title#',
                    labels: {
                        finish: "Register",
                    },
                    onStepChanging: function (event, currentIndex, newIndex) {
                        console.log("asda   "+currentIndex,newIndex)
                        let checkRequied=(
                            currentIndex > newIndex ||(!(3 === newIndex && Number($("#age-2").val()) < 18) &&
                                (currentIndex < newIndex &&(form.find(".body:eq(" + newIndex + ") label.error").remove(),
                                    form.find(".body:eq(" + newIndex + ") .error").removeClass("error")),
                                    (form.validate().settings.ignore = ":disabled,:hidden"),form.valid()))
                        );
                        if(checkRequied){ // nếu form đủ giá trị
                            //   =>  xác thực phone number
                            if(currentIndex===1){
                                let phone=document.getElementById('phone').value;
                                document.getElementById('show_username').setAttribute('value',phone);
                                document.getElementById('hidden_username').setAttribute('value',phone);
                            }
                        }
                        return checkRequied;
                    },
                    onFinishing: function (event, currentIndex) {
                        return (form.validate().settings.ignore = ":disabled"), form.valid();
                    },
                    onFinished: function (event, currentIndex) {
                    },
                });
                $.validator.addMethod("check_register", function (value, element,params) {
                    if(params.phone!=null){
                        return this.optional(element) || params.phone!==0 ;
                    }else if(params.email!=null){
                        return this.optional(element) || params.email!==0 ;
                    }else if(params.CCCD!=null){
                        return this.optional(element) || params.CCCD!==0 ;
                    }
                },function (params){
                    let mess=params.phone===0?"phone number":params.email===0?"email":"CCCD";
                    return "Your "+mess+" is already registered";
                });



                let validator=$(".validation-wizard").validate({
                    ignore: "input[type=hidden]",
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
                            check_register:{
                                email:1
                            }
                        },
                        phone:{
                            required:true,
                            check_register:{
                                phone:1
                            }
                        },
                        CCCD:{
                            check_register:{
                                CCCD:1
                            }
                        }
                    }
                });
                // custom
                let phone=$('#phone');
                let email=$('#email');
                let cccd=$('#CMND_CCCD');

                phone.on('change', async ()=>{
                    let data = await  checkRegister(phone.val(),null,null);
                    if(data !=="1"){
                        validator.settings.rules.phone.check_register.phone = 0;
                        validator.element("#phone");
                    }else {
                        validator.settings.rules.phone.check_register.phone = 1;
                        validator.element("#phone")
                    }
                })
                email.on('change', async ()=>{
                    let data = await  checkRegister(null,email.val(),null);
                    if(data !=="1"){
                        validator.settings.rules.email.check_register.email = 0;
                        validator.element("#email");
                    }else {
                        validator.settings.rules.email.check_register.email = 1;
                        validator.element("#email")
                    }
                })
                cccd.on('change', async ()=>{
                    let data = await  checkRegister(null,null,cccd.val());
                    if(data !=="1"){
                        validator.settings.rules.CCCD.check_register.CCCD = 0;
                        validator.element("#CMND_CCCD");
                    }else {
                        validator.settings.rules.CCCD.check_register.CCCD = 1;
                        validator.element("#CMND_CCCD")
                    }
                })

                async function checkRegister(p,e,c){
                    let a;
                    await $.ajax({
                                url:"{{route('check.register')}}",
                                type:"post",
                                data:{
                                    '_token':'{{ @csrf_token() }}',
                                    'phone':p,
                                    'email':e,
                                    'CCCD':c
                                },
                                success:function(rp){
                                    a=rp;
                                }
                            })
                    return a;
                }

                // auth phone number
                var authPhone=function(phone){
                    $.ajax({
                        url:"",
                        type:"post",
                        data:{
                            '_token':'{{ @csrf_token() }}',
                            'phone':phone
                        },
                        success:function(rp){
                            // rp return true if gửi xác nhận thành công và hiện popup nhập mã xác thơc
                        }
                    })
                }
            </script>
            <script src="../../customer/dist/js/forms/img-capture.js"></script>
@endsection
