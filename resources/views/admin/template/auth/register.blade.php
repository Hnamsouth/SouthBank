@extends("admin.layout")
@section("title","Admin Template empty")

{{--css--}}
@section('center-css')
    <!--This page CSS -->
    <link href="../../assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="../../assets/libs/jquery-steps/steps.css" rel="stylesheet">
@endsection

{{-- main--}}
@section("main-content")
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Wizard</h3>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Wizard</li>
                    </ol>
                </div>
                <div class="col-md-7 col-12 align-self-center d-none d-md-block">
                    <div class="d-flex mt-2 justify-content-end">
                        <div class="d-flex me-3 ms-2">
                            <div class="chart-text me-2">
                                <h6 class="mb-0"><small>THIS MONTH</small></h6>
                                <h4 class="mt-0 text-info">$58,356</h4>
                            </div>
                            <div class="spark-chart">
                                <div id="monthchart"><canvas width="60" height="35" style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas></div>
                            </div>
                        </div>
                        <div class="d-flex ms-2">
                            <div class="chart-text me-2">
                                <h6 class="mb-0"><small>LAST MONTH</small></h6>
                                <h4 class="mt-0 text-primary">$48,356</h4>
                            </div>
                            <div class="spark-chart">
                                <div id="lastmonthchart"><canvas width="60" height="35" style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- -------------------------------------------------------------- -->
            <!-- Container fluid  -->
            <!-- -------------------------------------------------------------- -->
            <div class="container-fluid">
                <div class="col-12">
                    <div class="card">
                        <div class="border-bottom title-part-padding">
                            <h4 class="card-title mb-0">Step wizard with validation</h4>
                        </div>
                        <div class="card-body wizard-content">
                            <h6 class="card-subtitle mb-3">
                                You can us the validation like what we did
                            </h6>
                            <form action="#" class="validation-wizard wizard-circle mt-5 wizard clearfix" role="application" id="steps-uid-7" novalidate="novalidate"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current error" aria-disabled="false" aria-selected="true"><a id="steps-uid-7-t-0" href="#steps-uid-7-h-0" aria-controls="steps-uid-7-p-0"><span class="current-info audible">current step: </span><span class="step">1</span> Step 1</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-7-t-1" href="#steps-uid-7-h-1" aria-controls="steps-uid-7-p-1"><span class="step">2</span> Step 2</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-7-t-2" href="#steps-uid-7-h-2" aria-controls="steps-uid-7-p-2"><span class="step">3</span> Step 3</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-7-t-3" href="#steps-uid-7-h-3" aria-controls="steps-uid-7-p-3"><span class="step">4</span> Step 4</a></li></ul></div><div class="content clearfix">
                                    <!-- Step 1 -->
                                    <h6 id="steps-uid-7-h-0" tabindex="-1" class="title current">Step 1</h6>
                                    <section id="steps-uid-7-p-0" role="tabpanel" aria-labelledby="steps-uid-7-h-0" class="body current" aria-hidden="false">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="wfirstName2">
                                                        First Name : <span class="danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control required" id="wfirstName2" name="firstName"><label id="wfirstName2-error" class="text-danger" for="wfirstName2">This field is required.</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="wlastName2">
                                                        Last Name : <span class="danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control required" id="wlastName2" name="lastName"><label id="wlastName2-error" class="text-danger" for="wlastName2">This field is required.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="wemailAddress2">
                                                        Email Address : <span class="danger">*</span>
                                                    </label>
                                                    <input type="email" class="form-control required" id="wemailAddress2" name="emailAddress"><label id="wemailAddress2-error" class="text-danger" for="wemailAddress2">This field is required.</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="wphoneNumber2">Phone Number :</label>
                                                    <input type="tel" class="form-control" id="wphoneNumber2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="wlocation2">
                                                        Select City : <span class="danger">*</span>
                                                    </label>
                                                    <select class="form-select required" id="wlocation2" name="location">
                                                        <option value="">Select City</option>
                                                        <option value="India">India</option>
                                                        <option value="USA">USA</option>
                                                        <option value="Dubai">Dubai</option>
                                                    </select><label id="wlocation2-error" class="text-danger" for="wlocation2">This field is required.</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="wdate2">Date of Birth :</label>
                                                    <input type="date" class="form-control" id="wdate2">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 2 -->
                                    <h6 id="steps-uid-7-h-1" tabindex="-1" class="title">Step 2</h6>
                                    <section id="steps-uid-7-p-1" role="tabpanel" aria-labelledby="steps-uid-7-h-1" class="body" aria-hidden="true" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="jobTitle2">Company Name :</label>
                                                    <input type="text" class="form-control required" id="jobTitle2">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="webUrl3">Company URL :</label>
                                                    <input type="url" class="form-control required" id="webUrl3" name="webUrl3">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="shortDescription3">Short Description :</label>
                                                    <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 3 -->
                                    <h6 id="steps-uid-7-h-2" tabindex="-1" class="title">Step 3</h6>
                                    <section id="steps-uid-7-p-2" role="tabpanel" aria-labelledby="steps-uid-7-h-2" class="body" aria-hidden="true" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="wint1">Interview For :</label>
                                                    <input type="text" class="form-control required" id="wint1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="wintType1">Interview Type :</label>
                                                    <select class="form-select required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                        <option value="Banquet">Normal</option>
                                                        <option value="Fund Raiser">Difficult</option>
                                                        <option value="Dinner Party">Hard</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="wLocation1">Location :</label>
                                                    <select class="form-select required" id="wLocation1" name="wlocation">
                                                        <option value="">Select City</option>
                                                        <option value="India">India</option>
                                                        <option value="USA">USA</option>
                                                        <option value="Dubai">Dubai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="wjobTitle2">Interview Date :</label>
                                                    <input type="date" class="form-control required" id="wjobTitle2">
                                                </div>
                                                <div class="mb-3">
                                                    <label>Requirements :</label>
                                                    <div class="c-inputs-stacked">
                                                        <div class="form-check">
                                                            <input type="radio" id="customRadio16" name="customRadio" class="form-check-input">
                                                            <label class="form-check-label" for="customRadio16">Employee</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input">
                                                            <label class="form-check-label" for="customRadio17">Contract</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 4 -->
                                    <h6 id="steps-uid-7-h-3" tabindex="-1" class="title">Step 4</h6>
                                    <section id="steps-uid-7-p-3" role="tabpanel" aria-labelledby="steps-uid-7-h-3" class="body" aria-hidden="true" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="behName1">Behaviour :</label>
                                                    <input type="text" class="form-control required" id="behName1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="participants1">Confidance</label>
                                                    <input type="text" class="form-control required" id="participants1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="participants1">Result</label>
                                                    <select class="form-select required" id="participants1" name="location">
                                                        <option value="">Select Result</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Call Second-time">
                                                            Call Second-time
                                                        </option>
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
                                                            <input type="radio" id="customRadio11" name="customRadio" class="form-check-input">
                                                            <label class="form-check-label" for="customRadio11">1 star</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" id="customRadio12" name="customRadio" class="form-check-input">
                                                            <label class="form-check-label" for="customRadio12">2 star</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" id="customRadio13" name="customRadio" class="form-check-input">
                                                            <label class="form-check-label" for="customRadio13">3 star</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" id="customRadio14" name="customRadio" class="form-check-input">
                                                            <label class="form-check-label" for="customRadio14">4 star</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" id="customRadio15" name="customRadio" class="form-check-input">
                                                            <label class="form-check-label" for="customRadio15">5 star</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Submit</a></li></ul></div></form>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer text-center">
                All Rights Reserved by Materialpro admin.
            </footer>
            <!-- -------------------------------------------------------------- -->
            <!-- End footer -->
            <!-- -------------------------------------------------------------- -->
@endsection

{{--js--}}
@section('after-js')
    <!--This page JavaScript -->
    <script src="../../assets/libs/jquery-steps/build/jquery.steps.min.js"></script>

    <script src="../../assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>

    <script>
        //Basic Example
        $("#example-basic").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            autoFocus: true,
        });

        // Basic Example with form
        var form = $("#example-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) {
                element.before(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password",
                },
            },
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function (event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function (event, currentIndex) {
                alert("Submitted!");
            },
        });

        // Advance Example

        var form = $("#example-advanced-form").show();

        form
            .steps({
                headerTag: "h3",
                bodyTag: "fieldset",
                transitionEffect: "slideLeft",
                onStepChanging: function (event, currentIndex, newIndex) {
                    // Allways allow previous action even if the current form is not valid!
                    if (currentIndex > newIndex) {
                        return true;
                    }
                    // Forbid next action on "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age-2").val()) < 18) {
                        return false;
                    }
                    // Needed in some cases if the user went back (clean up)
                    if (currentIndex < newIndex) {
                        // To remove error styles
                        form.find(".body:eq(" + newIndex + ") label.error").remove();
                        form
                            .find(".body:eq(" + newIndex + ") .error")
                            .removeClass("error");
                    }
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex) {
                    // Used to skip the "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
                        form.steps("next");
                    }
                    // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3) {
                        form.steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex) {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },
                onFinished: function (event, currentIndex) {
                    alert("Submitted!");
                },
            })
            .validate({
                errorPlacement: function errorPlacement(error, element) {
                    element.before(error);
                },
                rules: {
                    confirm: {
                        equalTo: "#password-2",
                    },
                },
            });

        // Dynamic Manipulation
        $("#example-manipulation").steps({
            headerTag: "h3",
            bodyTag: "section",
            enableAllSteps: true,
            enablePagination: false,
        });

        //Vertical Steps

        $("#example-vertical").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            stepsOrientation: "vertical",
        });

        //Custom design form example
        $(".tab-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "Submit",
            },
            onFinished: function (event, currentIndex) {
                swal(
                    "Form Submitted!",
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed."
                );
            },
        });

        var form = $(".validation-wizard").show();

        $(".validation-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "Submit",
            },
            onStepChanging: function (event, currentIndex, newIndex) {
                return (
                    currentIndex > newIndex ||
                    (!(3 === newIndex && Number($("#age-2").val()) < 18) &&
                        (currentIndex < newIndex &&
                        (form.find(".body:eq(" + newIndex + ") label.error").remove(),
                            form
                                .find(".body:eq(" + newIndex + ") .error")
                                .removeClass("error")),
                            (form.validate().settings.ignore = ":disabled,:hidden"),
                            form.valid()))
                );
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
        }),
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
    </script>
@endsection


