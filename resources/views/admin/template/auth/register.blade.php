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
                <!-- -------------------------------------------------------------- -->
                <!-- Start Page Content -->
                <!-- -------------------------------------------------------------- -->
                <div class="row">
                    <!-- -------------------------------------------------------------- -->
                    <!-- Example -->
                    <!-- -------------------------------------------------------------- -->
                    <div class="col-12">
                        <div class="card">
                            <div class="border-bottom title-part-padding">
                                <h4 class="card-title mb-0">Basic Example</h4>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-3"></h6>
                                <div id="example-basic" class="mt-5 wizard clearfix" role="application"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="example-basic-t-0" href="#example-basic-h-0" aria-controls="example-basic-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> Keyboard</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="example-basic-t-1" href="#example-basic-h-1" aria-controls="example-basic-p-1"><span class="number">2.</span> Effects</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="example-basic-t-2" href="#example-basic-h-2" aria-controls="example-basic-p-2"><span class="number">3.</span> Pager</a></li></ul></div><div class="content clearfix">
                                        <h3 id="example-basic-h-0" tabindex="-1" class="title current">Keyboard</h3>
                                        <section id="example-basic-p-0" role="tabpanel" aria-labelledby="example-basic-h-0" class="body current" aria-hidden="false">
                                            <p>
                                                Try the keyboard navigation by clicking arrow left or
                                                right!
                                            </p>
                                        </section>
                                        <h3 id="example-basic-h-1" tabindex="-1" class="title">Effects</h3>
                                        <section id="example-basic-p-1" role="tabpanel" aria-labelledby="example-basic-h-1" class="body" aria-hidden="true" style="display: none;">
                                            <p>Wonderful transition effects.</p>
                                        </section>
                                        <h3 id="example-basic-h-2" tabindex="-1" class="title">Pager</h3>
                                        <section id="example-basic-p-2" role="tabpanel" aria-labelledby="example-basic-h-2" class="body" aria-hidden="true" style="display: none;">
                                            <p>
                                                The next and previous buttons help you to navigate
                                                through your content.
                                            </p>
                                        </section>
                                    </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li></ul></div></div>
                            </div>
                        </div>
                    </div>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Example -->
                    <!-- -------------------------------------------------------------- -->
                    <div class="col-12">
                        <div class="card">
                            <div class="border-bottom title-part-padding">
                                <h4 class="card-title mb-0">Custom Design Example</h4>
                            </div>
                            <div class="card-body wizard-content">
                                <h6 class="card-subtitle mb-3"></h6>
                                <form action="#" class="tab-wizard wizard-circle wizard clearfix" role="application" id="steps-uid-5"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="steps-uid-5-t-0" href="#steps-uid-5-h-0" aria-controls="steps-uid-5-p-0"><span class="current-info audible">current step: </span><span class="step">1</span> Personal Info</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-5-t-1" href="#steps-uid-5-h-1" aria-controls="steps-uid-5-p-1"><span class="step">2</span> Job Status</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-5-t-2" href="#steps-uid-5-h-2" aria-controls="steps-uid-5-p-2"><span class="step">3</span> Interview</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-5-t-3" href="#steps-uid-5-h-3" aria-controls="steps-uid-5-p-3"><span class="step">4</span> Remark</a></li></ul></div><div class="content clearfix">
                                        <!-- Step 1 -->
                                        <h6 id="steps-uid-5-h-0" tabindex="-1" class="title current">Personal Info</h6>
                                        <section id="steps-uid-5-p-0" role="tabpanel" aria-labelledby="steps-uid-5-h-0" class="body current" aria-hidden="false">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="firstName1">First Name :</label>
                                                        <input type="text" class="form-control" id="firstName1">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="lastName1">Last Name :</label>
                                                        <input type="text" class="form-control" id="lastName1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="emailAddress1">Email Address :</label>
                                                        <input type="email" class="form-control" id="emailAddress1">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="phoneNumber1">Phone Number :</label>
                                                        <input type="tel" class="form-control" id="phoneNumber1">
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
                                                        <input type="date" class="form-control" id="date1">
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Step 2 -->
                                        <h6 id="steps-uid-5-h-1" tabindex="-1" class="title">Job Status</h6>
                                        <section id="steps-uid-5-p-1" role="tabpanel" aria-labelledby="steps-uid-5-h-1" class="body" aria-hidden="true" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="jobTitle1">Job Title :</label>
                                                        <input type="text" class="form-control" id="jobTitle1">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="videoUrl1">Company Name :</label>
                                                        <input type="text" class="form-control" id="videoUrl1">
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
                                        <h6 id="steps-uid-5-h-2" tabindex="-1" class="title">Interview</h6>
                                        <section id="steps-uid-5-p-2" role="tabpanel" aria-labelledby="steps-uid-5-h-2" class="body" aria-hidden="true" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="int1">Interview For :</label>
                                                        <input type="text" class="form-control" id="int1">
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
                                                        <input type="date" class="form-control" id="jobTitle2">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Requirements :</label>
                                                        <div class="c-inputs-stacked">
                                                            <div class="form-check">
                                                                <input type="radio" id="customRadio6" name="customRadio" class="form-check-input">
                                                                <label class="form-check-label" for="customRadio6">Employee</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" id="customRadio7" name="customRadio" class="form-check-input">
                                                                <label class="form-check-label" for="customRadio7">Contract</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Step 4 -->
                                        <h6 id="steps-uid-5-h-3" tabindex="-1" class="title">Remark</h6>
                                        <section id="steps-uid-5-p-3" role="tabpanel" aria-labelledby="steps-uid-5-h-3" class="body" aria-hidden="true" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="behName1">Behaviour :</label>
                                                        <input type="text" class="form-control" id="behName1">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="participants1">Confidance</label>
                                                        <input type="text" class="form-control" id="participants1">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="participants1">Result</label>
                                                        <select class="form-select" id="participants1" name="location">
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
                                                                <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                                                <label class="form-check-label" for="customRadio1">1 star</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                                                                <label class="form-check-label" for="customRadio2">2 star</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" id="customRadio3" name="customRadio" class="form-check-input">
                                                                <label class="form-check-label" for="customRadio3">3 star</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" id="customRadio4" name="customRadio" class="form-check-input">
                                                                <label class="form-check-label" for="customRadio4">4 star</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" id="customRadio5" name="customRadio" class="form-check-input">
                                                                <label class="form-check-label" for="customRadio5">5 star</label>
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
                    <!-- -------------------------------------------------------------- -->
                    <!-- Example -->
                    <!-- -------------------------------------------------------------- -->
                    <div class="col-12">
                        <div class="card">
                            <div class="border-bottom title-part-padding">
                                <h4 class="card-title mb-0">Step wizard with validation</h4>
                            </div>
                            <div class="card-body wizard-content">
                                <h6 class="card-subtitle mb-3">
                                    You can us the validation like what we did
                                </h6>
                                <form action="#" class="validation-wizard wizard-circle mt-5 wizard clearfix" role="application" id="steps-uid-7" novalidate="novalidate"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="steps-uid-7-t-0" href="#steps-uid-7-h-0" aria-controls="steps-uid-7-p-0"><span class="current-info audible">current step: </span><span class="step">1</span> Step 1</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-7-t-1" href="#steps-uid-7-h-1" aria-controls="steps-uid-7-p-1"><span class="step">2</span> Step 2</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-7-t-2" href="#steps-uid-7-h-2" aria-controls="steps-uid-7-p-2"><span class="step">3</span> Step 3</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-7-t-3" href="#steps-uid-7-h-3" aria-controls="steps-uid-7-p-3"><span class="step">4</span> Step 4</a></li></ul></div><div class="content clearfix">
                                        <!-- Step 1 -->
                                        <h6 id="steps-uid-7-h-0" tabindex="-1" class="title current">Step 1</h6>
                                        <section id="steps-uid-7-p-0" role="tabpanel" aria-labelledby="steps-uid-7-h-0" class="body current" aria-hidden="false">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="wfirstName2">
                                                            First Name : <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="wlastName2">
                                                            Last Name : <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control required" id="wlastName2" name="lastName">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="wemailAddress2">
                                                            Email Address : <span class="danger">*</span>
                                                        </label>
                                                        <input type="email" class="form-control required" id="wemailAddress2" name="emailAddress">
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
                                                        </select>
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
                    <!-- -------------------------------------------------------------- -->
                    <!-- Example -->
                    <!-- -------------------------------------------------------------- -->
                    <div class="col-12">
                        <div class="card">
                            <div class="border-bottom title-part-padding">
                                <h4 class="card-title mb-0">Step wizard Vertical</h4>
                            </div>
                            <div class="card-body wizard-content">
                                <h6 class="card-subtitle mb-3"></h6>
                                <form action="#" class="tab-wizard vertical wizard-circle mt-5 wizard clearfix" role="application" id="steps-uid-6"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="steps-uid-6-t-0" href="#steps-uid-6-h-0" aria-controls="steps-uid-6-p-0"><span class="current-info audible">current step: </span><span class="step">1</span> Personal Info</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-6-t-1" href="#steps-uid-6-h-1" aria-controls="steps-uid-6-p-1"><span class="step">2</span> Job Status</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-6-t-2" href="#steps-uid-6-h-2" aria-controls="steps-uid-6-p-2"><span class="step">3</span> Interview</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-6-t-3" href="#steps-uid-6-h-3" aria-controls="steps-uid-6-p-3"><span class="step">4</span> Remark</a></li></ul></div><div class="content clearfix">
                                        <!-- Step 1 -->
                                        <h6 id="steps-uid-6-h-0" tabindex="-1" class="title current">Personal Info</h6>
                                        <section id="steps-uid-6-p-0" role="tabpanel" aria-labelledby="steps-uid-6-h-0" class="body current" aria-hidden="false">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="firstName1">First Name :</label>
                                                        <input type="text" class="form-control" id="firstName1">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="lastName1">Last Name :</label>
                                                        <input type="text" class="form-control" id="lastName1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="emailAddress1">Email Address :</label>
                                                        <input type="email" class="form-control" id="emailAddress1">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="phoneNumber1">Phone Number :</label>
                                                        <input type="tel" class="form-control" id="phoneNumber1">
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
                                                        <input type="date" class="form-control" id="date1">
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Step 2 -->
                                        <h6 id="steps-uid-6-h-1" tabindex="-1" class="title">Job Status</h6>
                                        <section id="steps-uid-6-p-1" role="tabpanel" aria-labelledby="steps-uid-6-h-1" class="body" aria-hidden="true" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="jobTitle1">Job Title :</label>
                                                        <input type="text" class="form-control" id="jobTitle1">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="videoUrl1">Company Name :</label>
                                                        <input type="text" class="form-control" id="videoUrl1">
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
                                        <h6 id="steps-uid-6-h-2" tabindex="-1" class="title">Interview</h6>
                                        <section id="steps-uid-6-p-2" role="tabpanel" aria-labelledby="steps-uid-6-h-2" class="body" aria-hidden="true" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="int1">Interview For :</label>
                                                        <input type="text" class="form-control" id="int1">
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
                                                        <input type="date" class="form-control" id="jobTitle2">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Requirements :</label>
                                                        <div class="c-inputs-stacked">
                                                            <div class="form-check">
                                                                <input type="radio" id="customRadio26" name="customRadio" class="form-check-input">
                                                                <label class="form-check-label" for="customRadio26">Employee</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" id="customRadio27" name="customRadio" class="form-check-input">
                                                                <label class="form-check-label" for="customRadio27">Contract</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Step 4 -->
                                        <h6 id="steps-uid-6-h-3" tabindex="-1" class="title">Remark</h6>
                                        <section id="steps-uid-6-p-3" role="tabpanel" aria-labelledby="steps-uid-6-h-3" class="body" aria-hidden="true" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="behName1">Behaviour :</label>
                                                        <input type="text" class="form-control" id="behName1">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="participants1">Confidance</label>
                                                        <input type="text" class="form-control" id="participants1">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="participants1">Result</label>
                                                        <select class="form-select" id="participants1" name="location">
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
                                                                <input type="radio" id="customRadio21" name="customRadio" class="form-check-input">
                                                                <label class="form-check-label" for="customRadio21">1 star</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" id="customRadio22" name="customRadio" class="form-check-input">
                                                                <label class="form-check-label" for="customRadio22">2 star</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" id="customRadio23" name="customRadio" class="form-check-input">
                                                                <label class="form-check-label" for="customRadio23">3 star</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" id="customRadio24" name="customRadio" class="form-check-input">
                                                                <label class="form-check-label" for="customRadio24">4 star</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" id="customRadio25" name="customRadio" class="form-check-input">
                                                                <label class="form-check-label" for="customRadio25">5 star</label>
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
                    <!-- -------------------------------------------------------------- -->
                    <!-- Example -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- Example -->
                    <!-- -------------------------------------------------------------- -->
                    <div class="col-12">
                        <div class="card">
                            <div class="border-bottom title-part-padding">
                                <h4 class="card-title mb-0">Basic Form Example</h4>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-3"></h6>
                                <form id="example-form" action="#" class="mt-5" novalidate="novalidate">
                                    <div role="application" class="wizard clearfix" id="steps-uid-1"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="steps-uid-1-t-0" href="#steps-uid-1-h-0" aria-controls="steps-uid-1-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> Account</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-1-t-1" href="#steps-uid-1-h-1" aria-controls="steps-uid-1-p-1"><span class="number">2.</span> Profile</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-1-t-2" href="#steps-uid-1-h-2" aria-controls="steps-uid-1-p-2"><span class="number">3.</span> Hints</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-1-t-3" href="#steps-uid-1-h-3" aria-controls="steps-uid-1-p-3"><span class="number">4.</span> Finish</a></li></ul></div><div class="content clearfix">
                                            <h3 id="steps-uid-1-h-0" tabindex="-1" class="title current">Account</h3>
                                            <section id="steps-uid-1-p-0" role="tabpanel" aria-labelledby="steps-uid-1-h-0" class="body current" aria-hidden="false">
                                                <label for="userName">User name *</label>
                                                <input id="userName" name="userName" type="text" class="required form-control">
                                                <label for="password">Password *</label>
                                                <input id="password" name="password" type="text" class="required form-control">
                                                <label for="confirm">Confirm Password *</label>
                                                <input id="confirm" name="confirm" type="text" class="required form-control">
                                                <p>(*) Mandatory</p>
                                            </section>
                                            <h3 id="steps-uid-1-h-1" tabindex="-1" class="title">Profile</h3>
                                            <section id="steps-uid-1-p-1" role="tabpanel" aria-labelledby="steps-uid-1-h-1" class="body" aria-hidden="true" style="display: none;">
                                                <label for="name">First name *</label>
                                                <input id="name" name="name" type="text" class="required form-control">
                                                <label for="surname">Last name *</label>
                                                <input id="surname" name="surname" type="text" class="required form-control">
                                                <label for="email">Email *</label>
                                                <input id="email" name="email" type="text" class="required email form-control">
                                                <label for="address">Address</label>
                                                <input id="address" name="address" type="text" class="form-control">
                                                <p>(*) Mandatory</p>
                                            </section>
                                            <h3 id="steps-uid-1-h-2" tabindex="-1" class="title">Hints</h3>
                                            <section id="steps-uid-1-p-2" role="tabpanel" aria-labelledby="steps-uid-1-h-2" class="body" aria-hidden="true" style="display: none;">
                                                <ul>
                                                    <li>Foo</li>
                                                    <li>Bar</li>
                                                    <li>Foobar</li>
                                                </ul>
                                            </section>
                                            <h3 id="steps-uid-1-h-3" tabindex="-1" class="title">Finish</h3>
                                            <section id="steps-uid-1-p-3" role="tabpanel" aria-labelledby="steps-uid-1-h-3" class="body" aria-hidden="true" style="display: none;">
                                                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                                <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                            </section>
                                        </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li></ul></div></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Example -->
                    <!-- -------------------------------------------------------------- -->
                    <div class="col-12">
                        <div class="card">
                            <div class="border-bottom title-part-padding">
                                <h4 class="card-title mb-0">Advanced Form Example</h4>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-3"></h6>
                                <form id="example-advanced-form" action="#" class="mt-5 wizard clearfix" role="application" novalidate="novalidate"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="example-advanced-form-t-0" href="#example-advanced-form-h-0" aria-controls="example-advanced-form-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> Account</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="example-advanced-form-t-1" href="#example-advanced-form-h-1" aria-controls="example-advanced-form-p-1"><span class="number">2.</span> Profile</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="example-advanced-form-t-2" href="#example-advanced-form-h-2" aria-controls="example-advanced-form-p-2"><span class="number">3.</span> Warning</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="example-advanced-form-t-3" href="#example-advanced-form-h-3" aria-controls="example-advanced-form-p-3"><span class="number">4.</span> Finish</a></li></ul></div><div class="content clearfix">
                                        <h3 id="example-advanced-form-h-0" tabindex="-1" class="title current">Account</h3>
                                        <fieldset id="example-advanced-form-p-0" role="tabpanel" aria-labelledby="example-advanced-form-h-0" class="body current" aria-hidden="false">
                                            <h4>Account Information</h4>
                                            <label for="userName-2">User name *</label>
                                            <input id="userName-2" name="userName" type="text" class="required form-control">
                                            <label for="password-2">Password *</label>
                                            <input id="password-2" name="password" type="text" class="required form-control">
                                            <label for="confirm-2">Confirm Password *</label>
                                            <input id="confirm-2" name="confirm" type="text" class="required form-control">
                                            <p>(*) Mandatory</p>
                                        </fieldset>
                                        <h3 id="example-advanced-form-h-1" tabindex="-1" class="title">Profile</h3>
                                        <fieldset id="example-advanced-form-p-1" role="tabpanel" aria-labelledby="example-advanced-form-h-1" class="body" aria-hidden="true" style="display: none;">
                                            <legend>Profile Information</legend>
                                            <label for="name-2">First name *</label>
                                            <input id="name-2" name="name" type="text" class="required form-control">
                                            <label for="surname-2">Last name *</label>
                                            <input id="surname-2" name="surname" type="text" class="required form-control">
                                            <label for="email-2">Email *</label>
                                            <input id="email-2" name="email" type="text" class="required email form-control">
                                            <label for="address-2">Address</label>
                                            <input id="address-2" name="address" type="text" class="form-control">
                                            <label for="age-2">Age (The warning step will show up if age is less than
                                                18) *</label>
                                            <input id="age-2" name="age" type="text" class="required number form-control">
                                            <p>(*) Mandatory</p>
                                        </fieldset>
                                        <h3 id="example-advanced-form-h-2" tabindex="-1" class="title">Warning</h3>
                                        <fieldset id="example-advanced-form-p-2" role="tabpanel" aria-labelledby="example-advanced-form-h-2" class="body" aria-hidden="true" style="display: none;">
                                            <legend>You are to young</legend>
                                            <p>Please go away ;-)</p>
                                        </fieldset>
                                        <h3 id="example-advanced-form-h-3" tabindex="-1" class="title">Finish</h3>
                                        <fieldset id="example-advanced-form-p-3" role="tabpanel" aria-labelledby="example-advanced-form-h-3" class="body" aria-hidden="true" style="display: none;">
                                            <legend>Terms and Conditions</legend>
                                            <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required form-control">
                                            <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                        </fieldset>
                                    </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li></ul></div></form>
                            </div>
                        </div>
                    </div>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Example -->
                    <!-- -------------------------------------------------------------- -->
                    <div class="col-12">
                        <div class="card">
                            <div class="border-bottom title-part-padding">
                                <h4 class="card-title mb-0">Dynamic Manipulation Example</h4>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-3"></h6>
                                <div id="example-manipulation" class="mt-5 wizard clearfix" role="application"><div class="steps clearfix"><ul role="tablist"><li role="tab" aria-disabled="false" class="first current" aria-selected="true"><a id="example-manipulation-t-0" href="#example-manipulation-h-0" aria-controls="example-manipulation-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> Add Step</a></li><li role="tab" aria-disabled="false"><a id="example-manipulation-t-1" href="#example-manipulation-h-1" aria-controls="example-manipulation-p-1"><span class="number">2.</span> Insert Step</a></li><li role="tab" aria-disabled="false" class="last"><a id="example-manipulation-t-2" href="#example-manipulation-h-2" aria-controls="example-manipulation-p-2"><span class="number">3.</span> Remove Step</a></li></ul></div><div class="content clearfix">
                                        <h3 id="example-manipulation-h-0" tabindex="-1" class="title current">Add Step</h3>
                                        <section id="example-manipulation-p-0" role="tabpanel" aria-labelledby="example-manipulation-h-0" class="body current" aria-hidden="false">
                                            <p>
                                                <label for="title-3">HTML Title *</label>
                                                <br>
                                                <input id="title-3" type="text" class="form-control">
                                                <br>
                                                <label for="text-3">HTML Content *</label>
                                                <br>
                                                <textarea id="text-3" rows="5" class="form-control"></textarea>
                                            </p>
                                            <p>
                                                <a href="javascript:void(0);" onclick="$('#wizard-4').steps('add', { title: $('#title-3').val(), content: $('#text-3').val() });">Add</a>
                                            </p>
                                            <p>(*) Mandatory</p>
                                        </section>
                                        <h3 id="example-manipulation-h-1" tabindex="-1" class="title">Insert Step</h3>
                                        <section id="example-manipulation-p-1" role="tabpanel" aria-labelledby="example-manipulation-h-1" class="body" aria-hidden="true" style="display: none;">
                                            <p>
                                                <label for="position-3">Position (zero-based) *</label>
                                                <br>
                                                <input id="position-3" type="text" class="form-control">
                                                <br>
                                                <label for="title2-3">HTML Title *</label>
                                                <br>
                                                <input id="title2-3" type="text" class="form-control">
                                                <br>
                                                <label for="text2-3">HTML Content *</label>
                                                <br>
                                                <textarea id="text2-3" rows="5" class="form-control"></textarea>
                                            </p>
                                            <p>
                                                <a href="javascript:void(0);" onclick="$('#wizard-4').steps('insert', Number($('#position-3').val()), { title: $('#title2-3').val(), content: $('#text2-3').val() });">Insert</a>
                                            </p>
                                            <p>(*) Mandatory</p>
                                        </section>
                                        <h3 id="example-manipulation-h-2" tabindex="-1" class="title">Remove Step</h3>
                                        <section id="example-manipulation-p-2" role="tabpanel" aria-labelledby="example-manipulation-h-2" class="body" aria-hidden="true" style="display: none;">
                                            <p>
                                                <label for="position2-3">Position (zero-based) *</label>
                                                <br>
                                                <input id="position2-3" type="text" class="form-control">
                                            </p>
                                            <p>
                                                <a href="javascript:void(0);" onclick="$('#wizard-4').steps('remove', Number($('#position2-3').val()));">Remove</a>
                                            </p>
                                            <p>(*) Mandatory</p>
                                        </section>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Example -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- Example -->
                    <!-- -------------------------------------------------------------- -->
                    <div class="col-12">
                        <div class="card">
                            <div class="border-bottom title-part-padding">
                                <h4 class="card-title mb-0">Vertical Steps Example</h4>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-3"></h6>
                                <div id="example-vertical" class="mt-5 wizard clearfix vertical" role="application"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="example-vertical-t-0" href="#example-vertical-h-0" aria-controls="example-vertical-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> Keyboard</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="example-vertical-t-1" href="#example-vertical-h-1" aria-controls="example-vertical-p-1"><span class="number">2.</span> Effects</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="example-vertical-t-2" href="#example-vertical-h-2" aria-controls="example-vertical-p-2"><span class="number">3.</span> Pager</a></li></ul></div><div class="content clearfix">
                                        <h3 id="example-vertical-h-0" tabindex="-1" class="title current">Keyboard</h3>
                                        <section id="example-vertical-p-0" role="tabpanel" aria-labelledby="example-vertical-h-0" class="body current" aria-hidden="false">
                                            <p>
                                                Try the keyboard navigation by clicking arrow left or
                                                right!
                                            </p>
                                        </section>
                                        <h3 id="example-vertical-h-1" tabindex="-1" class="title">Effects</h3>
                                        <section id="example-vertical-p-1" role="tabpanel" aria-labelledby="example-vertical-h-1" class="body" aria-hidden="true" style="display: none;">
                                            <p>Wonderful transition effects.</p>
                                        </section>
                                        <h3 id="example-vertical-h-2" tabindex="-1" class="title">Pager</h3>
                                        <section id="example-vertical-p-2" role="tabpanel" aria-labelledby="example-vertical-h-2" class="body" aria-hidden="true" style="display: none;">
                                            <p>
                                                The next and previous buttons help you to navigate
                                                through your content.
                                            </p>
                                        </section>
                                    </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li></ul></div></div>
                            </div>
                        </div>
                    </div>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Example -->
                    <!-- -------------------------------------------------------------- -->
                </div>
                <!-- -------------------------------------------------------------- -->
                <!-- End PAge Content -->
                <!-- -------------------------------------------------------------- -->
            </div>
            <!-- -------------------------------------------------------------- -->
            <!-- End Container fluid  -->
            <!-- -------------------------------------------------------------- -->
            <!-- -------------------------------------------------------------- -->
            <!-- footer -->
            <!-- -------------------------------------------------------------- -->
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
    <script src="../../assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../../assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script>
        //Basic Example
        $("#example-basic").steps({
            headerTag: "h3",
            // bodyTag: "section",
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


