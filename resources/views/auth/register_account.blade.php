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
                                                <h4 class="card-title">Online Account Register</h4>
                                                <p class="card-subtitle mb-3">  </p>
                                            </div>
                                            <form action="{{ route('acc.register') }}"  class="validation-wizard vertical wizard-circle mt-5">
                                                @method('POST')
                                                @csrf
                                                <!-- Step 1 -->
                                                <h6>Personal Info</h6>
                                                <section>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="firstName1">First Name :</label>
                                                                <input type="text" class="form-control required" id="firstName1" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="lastName1">Last Name :</label>
                                                                <input type="text" class="form-control" id="lastName1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="emailAddress1">Email Address :</label>
                                                                <input type="email" class="form-control" id="emailAddress1" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="phoneNumber1">Phone Number :</label>
                                                                <input type="tel" class="form-control" id="phoneNumber1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="location1">Select City :</label>
                                                                <select class="form-select" id="location1" name="location">
                                                                    <option value="">Select City</option>
                                                                    <option value="Amsterdam">India</option>
                                                                    <option value="Berlin">USA</option>
                                                                    <option value="Frankfurt">Dubai</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="date1">Date of Birth :</label>
                                                                <input type="date" class="form-control" id="date1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <!-- Step 2 -->
                                                <h6>Job Status</h6>
                                                <section>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="jobTitle1">Job Title :</label>
                                                                <input type="text" class="form-control" id="jobTitle1" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="videoUrl1">Company Name :</label>
                                                                <input type="text" class="form-control" id="videoUrl1" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="shortDescription1">Job Description :</label>
                                                                <textarea name="shortDescription" id="shortDescription1" rows="6" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <!-- Step 3 -->
                                                <h6>Interview</h6>
                                                <section>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="int1">Interview For :</label>
                                                                <input type="text" class="form-control" id="int1" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="intType1">Interview Type :</label>
                                                                <select class="form-select" id="intType1" data-placeholder="Type to search cities" name="intType1">
                                                                    <option value="Banquet">Normal</option>
                                                                    <option value="Fund Raiser">Difficult</option>
                                                                    <option value="Dinner Party">Hard</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="Location1">Location :</label>
                                                                <select class="form-select" id="Location1" name="location">
                                                                    <option value="">Select City</option>
                                                                    <option value="India">India</option>
                                                                    <option value="USA">USA</option>
                                                                    <option value="Dubai">Dubai</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="jobTitle2">Interview Date :</label>
                                                                <input type="date" class="form-control" id="jobTitle2" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label>Requirements :</label>
                                                                <div class="c-inputs-stacked">
                                                                    <div class="form-check">
                                                                        <input type="radio" id="customRadio26" name="customRadio" class="form-check-input" />
                                                                        <label class="form-check-label" for="customRadio26">Employee</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input type="radio" id="customRadio27" name="customRadio" class="form-check-input" />
                                                                        <label class="form-check-label" for="customRadio27">Contract</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <!-- Step 4 -->
                                                <h6>Remark</h6>
                                                <section>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="behName1">Behaviour :</label>
                                                                <input type="text" class="form-control" id="behName1" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="participants1">Confidance</label>
                                                                <input type="text" class="form-control" id="participants1" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="participants1">Result</label>
                                                                <select class="form-select" id="participants1" name="location">
                                                                    <option value="">Select Result</option>
                                                                    <option value="Selected">Selected</option>
                                                                    <option value="Rejected">Rejected</option>
                                                                    <option value="Call Second-time"> Call Second-time </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="decisions1">Comments</label>
                                                                <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label>Rate Interviwer :</label>
                                                                <div class="c-inputs-stacked">
                                                                    <div class="form-check">
                                                                        <input type="radio" id="customRadio21" name="customRadio" class="form-check-input" />
                                                                        <label class="form-check-label" for="customRadio21">1 star</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input type="radio" id="customRadio22" name="customRadio" class="form-check-input" />
                                                                        <label class="form-check-label" for="customRadio22">2 star</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input type="radio" id="customRadio23" name="customRadio" class="form-check-input" />
                                                                        <label class="form-check-label" for="customRadio23">3 star</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input type="radio" id="customRadio24" name="customRadio" class="form-check-input" />
                                                                        <label class="form-check-label" for="customRadio24">4 star</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input type="radio" id="customRadio25" name="customRadio" class="form-check-input" />
                                                                        <label class="form-check-label" for="customRadio25">5 star</label>
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
