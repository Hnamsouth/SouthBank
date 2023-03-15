@extends('customer.layout2')
@section('before-css')
    <link rel="stylesheet" href="../../customer/dist/libs/prismjs/themes/prism.min.css">
@endsection
@section('main-content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body wizard-content">
                                            <div class="text-center">
                                                <h4 class="card-title">Online Register</h4>
                                                <p class="card-subtitle mb-3">  </p>
                                            </div>
                                            <form  method="post" action="{{ route('register') }}" class="validation-wizard wizard-circle mt-5">
                                                @csrf
                                                <!-- Step 1 -->
                                                <h6>General Information</h6>
                                                <section>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="wfirstName2"> Fullname : <span class="danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control required" id="wfirstName2" name="name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label>Requirements :</label>
                                                                <div class="c-inputs-stacked">
                                                                    <div class="form-check">
                                                                        <label class="form-check-label" for="male">Male</label>
                                                                        <input type="radio" id="male" name="gender" class="form-check-input required" />
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input type="radio" id="female" name="gender" class="form-check-input" />
                                                                        <label class="form-check-label" for="female">Female</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="wemailAddress2"> Email Address : <span class="danger">*</span>
                                                                </label>
                                                                <input type="email" class="form-control required" id="wemailAddress2" name="email" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="phoneNumber2">Phone Number :</label>
                                                                <input type="tel" name="phone" class="form-control required" id="phoneNumber2" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="password">Password</label>
                                                                <input type="text" name="password" class="form-control required" id="password" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <!-- Step 2 -->
                                                <h6>Personal</h6>
                                                <section>
                                                    <div class="row">
                                                        <h2>Basic information</h2>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="CCCD">ID number/CCCD</label>
                                                                <input type="number" name="CCCD" class="form-control required" id="CCCD" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="old_CCCD">Old ID card/CCCD(If any)</label>
                                                                <input type="number" name="old_CCCD" class="form-control" id="old_CCCD" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="date_of_birth">Date of birth</label>
                                                                <input type="date" name="date_of_birth" class="form-control required" id="date_of_birth" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="education">Academic level</label>
                                                                <select class="form-select required" id="education" name="education">
                                                                    <option value="1">After university</option>
                                                                    <option value="2">University</option>
                                                                    <option value="3">College</option>
                                                                    <option value="4">High school</option>
                                                                    <option value="5">Intermediate</option>
                                                                    <option value="6">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="employment">Employment status</label>
                                                                <select class="form-select required" id="employment" name="employment_status">
                                                                    <option value="1">Go to word</option>
                                                                    <option value="2">Self-employed</option>
                                                                    <option value="3">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="marriage">Marriage</label>
                                                                <select class="form-select required" id="marriage" name="marriage">
                                                                    <option value="1">Single</option>
                                                                    <option value="2">Married</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="marriage">Job</label>
                                                                <select class="form-select required" id="marriage" name="marriage">
                                                                    <option value="1">Doctor/dentist/pharmacist</option>
                                                                    <option value="2">Sales/Marketing (Marketing)</option>
                                                                    <option value="2">Officials/Experts of the State Sector</option>
                                                                    <option value="2">Bar staff, night club, karaoke, massage room</option>
                                                                    <option value="2">Casino staff, pawn shop</option>
                                                                    <option value="2">Teacher/Lecturer</option>
                                                                    <option value="2">Accountant/Audit/Inspector/Valuator</option>
                                                                    <option value="2">Engineer/Attorney</option>
                                                                    <option value="2">Workers / Security guards</option>
                                                                    <option value="2">Debt collection officer</option>
                                                                    <option value="2">Office staff</option>
                                                                    <option value="2">Banker, Finance</option>
                                                                    <option value="2">Driver, crew, sailor</option>
                                                                    <option value="2">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="income">Monthly income(Example:7,000,000 VND)</label>
                                                                <input type="number" name="income" class="form-control required" id="income" />
                                                            </div>
                                                        </div>
                                                        <h2>Contact person when needed</h2>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="emergencyContactNumber1">Phone number of friends and relatives 1</label>
                                                                <input type="number" name="emergencyContactNumber1" class="form-control" id="emergencyContactNumber1" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="emergencyContactNumber2">Phone number of friends and relatives 2</label>
                                                                <input type="number" name="emergencyContactNumber2" class="form-control" id="emergencyContactNumber2" />
                                                            </div>
                                                        </div>
                                                        <h2>Referrer information (optional)</h2>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="shortDescription3">Short Description :</label>
                                                                <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <h6>Face Authentication</h6>
                                                <!-- Step 3 -->
                                                <section>
                                                    <div class="row">
                                                        <h2>Face Authenticatio</h2>
                                                        <div class="col-md-6">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/45/45010.png" alt="" width="130">
                                                        </div>
                                                    </div>
                                                </section>
                                                <!-- Step 4 -->
                                                <h6>Additional information</h6>
                                                <section>
                                                    <h2>Current residence information</h2>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="city">Province/City</label>
                                                                <select class="form-select required" id="city" name="city">
                                                                    <option value="1">Select City</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="district">District</label>
                                                                <select class="form-select required" id="district" name="district">
                                                                    <option value="1">Select City</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="wards">Wards</label>
                                                                <select class="form-select required" id="wards" name="wards">
                                                                    <option value="1">Select City</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="current_address"> Current address (house number, street)</label>
                                                                <input class="form-select required" id="current_address" name="current_address">
                                                            </div>
                                                        </div>
                                                        <h2>Information about working agency</h2>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="company_name"> Company name</label>
                                                                <input class="form-select required" id="company_name" name="company_name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="company_city">Province/City</label>
                                                                <select class="form-select required" id="company_city" name="company_city">
                                                                    <option value="1">Select City</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="company_district">District</label>
                                                                <select class="form-select required" id="company_district" name="company_district">
                                                                    <option value="1">Select City</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="company_wards">Wards</label>
                                                                <select class="form-select required" id="company_wards" name="company_wards">
                                                                    <option value="1">Select City</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="company_address"> Current address (house number, street)</label>
                                                                <input class="form-select required" id="company_address" name="company_address">
                                                            </div>
                                                        </div>
                                                        <p>Working time at current agency</p>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="workingYears">Working time - Years </label>
                                                                <select class="form-select required" id="workingYears" name="workingYears">
                                                                    <option value="1">Select City</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="workingMonths">
                                                                    Working time - Month
                                                                </label>
                                                                <select class="form-select required" id="workingMonths" name="workingMonths">
                                                                    <option value="1">Select City</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <h2>Card pick up address</h2>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="current_pickup_address">Current address </label>
                                                                <input type="radio" class="form-check-input required" name="pick_up_address" id="current_pickup_address">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="work_pickup_address">Work address </label>
                                                                <input type="radio" class="form-check-input" name="pick_up_address" id="work_pickup_address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <!-- Step 5 -->
                                                <h6>ID number/CCCD Authentication</h6>
                                                <section>
                                                    <div class="row">
                                                        <h2>ID number/CCCD Authentication</h2>
                                                        <div class="col-md-6">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/45/45010.png" alt="" width="130">
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
            </div>
        </div>
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
                        // console.log(currentIndex,newIndex)
                        let checkRequied=(
                            currentIndex > newIndex ||(!(3 === newIndex && Number($("#age-2").val()) < 18) &&
                                (currentIndex < newIndex &&(form.find(".body:eq(" + newIndex + ") label.error").remove(),
                                    form.find(".body:eq(" + newIndex + ") .error").removeClass("error")),
                                    (form.validate().settings.ignore = ":disabled,:hidden"),form.valid()))
                        );
                        if(checkRequied){ // nếu form đủ giá trị
                            //   =>  xác thực phone number

                        }
                        return checkRequied;
                    },
                    onFinishing: function (event, currentIndex) {
                        // console.log((form.validate().settings.ignore = ":disabled"), form.valid())
                        return (form.validate().settings.ignore = ":disabled"), form.valid();
                    },
                    onFinished: function (event, currentIndex) {
                        // console.log(event, currentIndex);
                    },
                });
                $(".validation-wizard").validate({
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
                        },
                    },
                });
                // custom
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
@endsection
