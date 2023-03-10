@extends("admin.layout")
@section("title","Admin Template empty")

{{--css--}}
@section('center-css')
    <!--This page CSS -->
    <link rel="stylesheet" href="../../assets/extra-libs/taskboard/css/lobilist.css">
    <link rel="stylesheet" href="../../assets/extra-libs/taskboard/css/lobilist.css">
    <link rel="stylesheet" href="../../assets/extra-libs/taskboard/css/lobilist.css">
@endsection

{{-- main--}}
@section("main-content")
    <div class="invoice-application">
        <!-- Left Part -->
        <div class="left-part bg-white fixed-left-part list-of-user">
            <!-- Mobile toggle button -->
            <a class="
                ti-menu ti-close
                btn btn-success
                show-left-part
                d-block d-lg-none
              " href="javascript:void(0)"></a>
            <!-- Mobile toggle button -->
            <div class="p-3">
                <h4>Chat Sidebar</h4>
            </div>
            <div class="scrollable position-relative ps-container ps-theme-default" style="height: 100%" data-ps-id="b1ab6b41-3129-73c5-4c43-39d8a0101b1e">
                <div class="p-3 border-bottom">
                    <h5 class="card-title">Search Invoice</h5>
                    <form>
                        <div class="searchbar">
                            <input class="form-control" type="text" placeholder="Search Invoice">
                        </div>
                    </form>
                </div>
                <ul class="mailbox list-style-none app-invoice">
                    <li>
                        <div class="message-center chat-scroll invoice-users ps-container ps-theme-default" data-ps-id="dbbcbe4b-dd31-fc60-4d4e-15aa4c580f79">
                            <a href="javascript:void(0)" class="
                        invoice-user
                        message-item
                        active
                        listing-user
                        border-bottom
                        px-3
                        py-2
                        align-items-center
                      " id="invoice-123" data-invoice-id="123">
                      <span class="user-img position-relative d-inline-block">
                        <button class="btn btn-success btn-circle">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-sm fill-white"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </button>
                      </span>
                                <div class="mail-contnet w-75 d-inline-block v-middle ps-2">
                                    <h5 class="
                            message-title
                            mb-1
                            mt-1
                            fs-3
                            fw-bold
                            invoice-customer
                            text-truncate
                          ">
                                        To: Shraddha Chhatraliya
                                    </h5>
                                    <small class="mail-desc invoice-id d-block"><span class="fw-bold text-dark">Id:</span>
                                        #123</small>
                                    <small class="time invoice-date"><span class="fw-bold text-dark">Date:</span> 9 Fab
                                        2021</small>
                                </div>
                            </a>
                            <!-- Message -->
                            <a href="javascript:void(0)" class="
                        invoice-user
                        message-item
                        listing-user
                        border-bottom
                        px-3
                        py-2
                        align-items-center
                      " id="invoice-124" data-invoice-id="124">
                      <span class="user-img position-relative d-inline-block">
                        <button class="btn btn-danger btn-circle">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-sm fill-white"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </button>
                      </span>
                                <div class="mail-contnet w-75 d-inline-block v-middle ps-2">
                                    <h5 class="
                            message-title
                            mb-1
                            mt-1
                            fs-3
                            fw-bold
                            invoice-customer
                            text-truncate
                          ">
                                        To: Nirav Joshi
                                    </h5>
                                    <small class="mail-desc invoice-id d-block"><span class="fw-bold text-dark">Id:</span>
                                        #124</small>
                                    <small class="time invoice-date"><span class="fw-bold text-dark">Date:</span> 21 Fab
                                        2021</small>
                                </div>
                            </a>
                            <!-- Message -->
                            <a href="javascript:void(0)" class="
                        invoice-user
                        message-item
                        listing-user
                        border-bottom
                        px-3
                        py-2
                        align-items-center
                      " id="invoice-125" data-invoice-id="125">
                      <span class="user-img position-relative d-inline-block">
                        <button class="btn btn-warning btn-circle">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-sm fill-white"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </button>
                      </span>
                                <div class="mail-contnet w-75 d-inline-block v-middle ps-2">
                                    <h5 class="
                            message-title
                            mb-1
                            mt-1
                            fs-3
                            fw-bold
                            invoice-customer
                            text-truncate
                          ">
                                        To: Sunil Joshi
                                    </h5>
                                    <small class="mail-desc invoice-id d-block"><span class="fw-bold text-dark">Id:</span>
                                        #125</small>
                                    <small class="time invoice-date"><span class="fw-bold text-dark">Date:</span> 21 Jan
                                        2021</small>
                                </div>
                            </a>
                            <!-- Message -->
                            <a href="javascript:void(0)" class="
                        invoice-user
                        message-item
                        listing-user
                        border-bottom
                        px-3
                        py-2
                        align-items-center
                      " id="invoice-126" data-invoice-id="126">
                      <span class="user-img position-relative d-inline-block">
                        <button class="btn btn-primary btn-circle">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-sm fill-white"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </button>
                      </span>
                                <div class="mail-contnet w-75 d-inline-block v-middle ps-2">
                                    <h5 class="
                            message-title
                            mb-1
                            mt-1
                            fs-3
                            fw-bold
                            invoice-customer
                            text-truncate
                          ">
                                        To: Vishank Joshi
                                    </h5>
                                    <small class="mail-desc invoice-id d-block"><span class="fw-bold text-dark">Id:</span>
                                        #126</small>
                                    <small class="time invoice-date"><span class="fw-bold text-dark">Date:</span> 15 Mar
                                        2021</small>
                                </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="
                        invoice-user
                        message-item
                        listing-user
                        border-bottom
                        px-3
                        py-2
                        align-items-center
                      " id="invoice-127" data-invoice-id="127">
                      <span class="user-img position-relative d-inline-block">
                        <button class="btn btn-info btn-circle">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-sm fill-white"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </button>
                      </span>
                                <div class="mail-contnet w-75 d-inline-block v-middle ps-2">
                                    <h5 class="
                            message-title
                            mb-1
                            mt-1
                            fs-3
                            fw-bold
                            invoice-customer
                            text-truncate
                          ">
                                        To: Virat Kohali
                                    </h5>
                                    <small class="mail-desc invoice-id d-block"><span class="fw-bold text-dark">Id:</span>
                                        #127</small>
                                    <small class="time invoice-date"><span class="fw-bold text-dark">Date:</span> 19 Oct
                                        2021</small>
                                </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="
                        invoice-user
                        message-item
                        listing-user
                        border-bottom
                        px-3
                        py-2
                        align-items-center
                      " id="invoice-128" data-invoice-id="128">
                      <span class="user-img position-relative d-inline-block">
                        <button class="btn btn-success btn-circle">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-sm fill-white"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </button>
                      </span>
                                <div class="mail-contnet w-75 d-inline-block v-middle ps-2">
                                    <h5 class="
                            message-title
                            mb-1
                            mt-1
                            fs-3
                            fw-bold
                            invoice-customer
                            text-truncate
                          ">
                                        To: Smith John
                                    </h5>
                                    <small class="mail-desc invoice-id d-block"><span class="fw-bold text-dark">Id:</span>
                                        #128</small>
                                    <small class="time invoice-date"><span class="fw-bold text-dark">Date:</span> 21 Oct
                                        2021</small>
                                </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="
                        invoice-user
                        message-item
                        listing-user
                        border-bottom
                        px-3
                        py-2
                        align-items-center
                      " id="invoice-129" data-invoice-id="129">
                      <span class="user-img position-relative d-inline-block">
                        <button class="btn btn-dark btn-circle">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-sm fill-white"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </button>
                      </span>
                                <div class="mail-contnet w-75 d-inline-block v-middle ps-2">
                                    <h5 class="
                            message-title
                            mb-1
                            mt-1
                            fs-3
                            fw-bold
                            invoice-customer
                            text-truncate
                          ">
                                        To: Sachin Emily
                                    </h5>
                                    <small class="mail-desc invoice-id d-block"><span class="fw-bold text-dark">Id:</span>
                                        #129</small>
                                    <small class="time invoice-date"><span class="fw-bold text-dark">Date:</span> 29 Mar
                                        2021</small>
                                </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="
                        invoice-user
                        message-item
                        listing-user
                        border-bottom
                        px-3
                        py-2
                        align-items-center
                      " id="invoice-130" data-invoice-id="130">
                      <span class="user-img position-relative d-inline-block">
                        <button class="btn btn-dark btn-circle">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-sm fill-white"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </button>
                      </span>
                                <div class="mail-contnet w-75 d-inline-block v-middle ps-2">
                                    <h5 class="
                            message-title
                            mb-1
                            mt-1
                            fs-3
                            fw-bold
                            invoice-customer
                            text-truncate
                          ">
                                        To: Stiphan Robots
                                    </h5>
                                    <small class="mail-desc invoice-id d-block"><span class="fw-bold text-dark">Id:</span>
                                        #130</small>
                                    <small class="time invoice-date"><span class="fw-bold text-dark">Date:</span> 31 Mar
                                        2021</small>
                                </div>
                            </a>
                            <!-- Message -->
                            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                    </li>
                </ul>
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </div>
        <!-- ./Left part -->
        <!-- Right Part -->
        <div class="right-part invoice-box">
            <div class="p-4 invoice-inner-part">
                <div class="chat-not-selected">
                    <div class="text-center">
                        <span class="display-5 text-info"><i class="mdi mdi-file-document-box"></i></span>
                        <h5>Open Invoice from the list</h5>
                    </div>
                </div>
                <div class="invoiceing-box">
                    <div class="card card-body">
                        <div class="
                      invoice-header
                      d-flex
                      align-items-center
                      border-bottom
                      pb-3
                    ">
                            <h3 class="font-weight-medium text-uppercase mb-0">
                                Invoice
                            </h3>
                            <div class="ms-auto">
                                <h4 class="invoice-number"></h4>
                            </div>
                        </div>
                        <div class="" id="custom-invoice">
                            <!-- (1) -->
                            <div class="invoice-123" id="printableArea">
                                <div class="row pt-3">
                                    <div class="col-md-12">
                                        <div class="">
                                            <address>
                                                <h3>&nbsp;From,</h3>
                                                <h4 class="mb-0 fw-bold">&nbsp;Steve Jobs</h4>
                                                <div class="mb-2">
                                                    <span class="fw-bold ms-1">Invoice Id:</span><span class="invoice-number ms-2"></span>
                                                    <h6 class="text-muted font-weight-medium">
                                                        &nbsp;Email: steve@gmail.com
                                                    </h6>
                                                </div>
                                                <p class="text-muted ms-1">
                                                    1108, Clair Street, <br>Massachusetts,
                                                    <br>Woods Hole - 02543
                                                </p>
                                            </address>
                                        </div>
                                        <div class="text-end">
                                            <address>
                                                <h3>To,</h3>
                                                <h4 class="fw-bold">Shraddha Chhatraliya,</h4>
                                                <p class="text-muted ms-4">
                                                    455, Shobe Lane, <br>Colorado, <br>Fort
                                                    Collins - 80524
                                                </p>
                                                <p class="mt-4">
                                                    <b>Invoice Date :</b>
                                                    <i class="fa fa-calendar"></i> 23rd Jan 2021
                                                </p>
                                                <p>
                                                    <b>Due Date :</b>
                                                    <i class="fa fa-calendar"></i> 25th Jan 2021
                                                </p>
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="table-responsive mt-5">
                                            <table class="table table-hover no-wrap">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Description</th>
                                                    <th class="text-end">Quantity</th>
                                                    <th class="text-end">Unit Cost</th>
                                                    <th class="text-end">Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Milk Powder</td>
                                                    <td class="text-end">2</td>
                                                    <td class="text-end">$24</td>
                                                    <td class="text-end">$48</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Air Conditioner</td>
                                                    <td class="text-end">5</td>
                                                    <td class="text-end">$500</td>
                                                    <td class="text-end">$2500</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>RC Cars</td>
                                                    <td class="text-end">30</td>
                                                    <td class="text-end">$600</td>
                                                    <td class="text-end">$18000</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td>Down Coat</td>
                                                    <td class="text-end">62</td>
                                                    <td class="text-end">$5</td>
                                                    <td class="text-end">$310</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pull-right mt-4 text-end">
                                            <p>Sub - Total amount: $20,858</p>
                                            <p>vat (10%) : $2,085</p>
                                            <hr>
                                            <h3><b>Total :</b> $22,943</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <div class="text-end">
                                            <button class="btn btn-danger" type="submit">
                                                Proceed to payment
                                            </button>
                                            <button class="btn btn-default print-page" type="button">
                                                <span><i class="fa fa-print"></i> Print</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./(1) -->
                            <!-- (2) -->
                            <div class="invoice-124" id="printableArea">
                                <div class="row pt-3 printableArea">
                                    <div class="col-md-12">
                                        <div class="">
                                            <address>
                                                <h3>&nbsp;From,</h3>
                                                <h4 class="mb-0 fw-bold">&nbsp;Steve Jobs</h4>
                                                <div class="mb-2">
                                                    <span class="fw-bold ms-1">Invoice Id:</span><span class="invoice-number ms-2"></span>
                                                    <h6 class="text-muted font-weight-medium">
                                                        &nbsp;Email: steve@gmail.com
                                                    </h6>
                                                </div>
                                                <p class="text-muted ms-1">
                                                    4933, Goldcliff Circle, <br>Washington DC,
                                                    <br>Washington - 20002
                                                </p>
                                            </address>
                                        </div>
                                        <div class="text-end">
                                            <address>
                                                <h3>To,</h3>
                                                <h4 class="fw-bold">Nirav Joshi,</h4>
                                                <p class="text-muted ms-4">
                                                    514, Point Street, <br>Illinois, <br>Hickory
                                                    Hills - 60457
                                                </p>
                                                <p class="mt-4">
                                                    <b>Invoice Date :</b>
                                                    <i class="fa fa-calendar"></i> 26th Jan 2021
                                                </p>
                                                <p>
                                                    <b>Due Date :</b>
                                                    <i class="fa fa-calendar"></i> 31st Jan 2021
                                                </p>
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="table-responsive mt-5" style="clear: both">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Description</th>
                                                    <th class="text-end">Quantity</th>
                                                    <th class="text-end">Unit Cost</th>
                                                    <th class="text-end">Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Book</td>
                                                    <td class="text-end">6</td>
                                                    <td class="text-end">$24</td>
                                                    <td class="text-end">$144</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Backpack</td>
                                                    <td class="text-end">3</td>
                                                    <td class="text-end">$400</td>
                                                    <td class="text-end">$1200</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>Batteries</td>
                                                    <td class="text-end">20</td>
                                                    <td class="text-end">$1000</td>
                                                    <td class="text-end">$20000</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td>Box</td>
                                                    <td class="text-end">60</td>
                                                    <td class="text-end">$50</td>
                                                    <td class="text-end">$3000</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pull-right mt-4 text-end">
                                            <p>Sub - Total amount: $24,344</p>
                                            <p>vat (10%) : $2,434</p>
                                            <hr>
                                            <h3><b>Total :</b> $26,778</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <div class="text-end">
                                            <button class="btn btn-danger" type="submit">
                                                Proceed to payment
                                            </button>
                                            <button class="btn btn-default print-page" type="button">
                                                <span><i class="fa fa-print"></i> Print</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./(2)-->
                            <!-- (3) -->
                            <div class="invoice-125" id="printableArea">
                                <div class="row pt-3 printableArea">
                                    <div class="col-md-12">
                                        <div class="">
                                            <address>
                                                <h3>&nbsp;From,</h3>
                                                <h4 class="mb-0 fw-bold">&nbsp;Steve Jobs</h4>
                                                <div class="mb-2">
                                                    <span class="fw-bold ms-1">Invoice Id:</span><span class="invoice-number ms-2"></span>
                                                    <h6 class="text-muted font-weight-medium">
                                                        &nbsp;Email: steve@gmail.com
                                                    </h6>
                                                </div>
                                                <p class="text-muted ms-1">
                                                    4669, Thompson Drive, <br>California,
                                                    <br>San Francisco - 94108
                                                </p>
                                            </address>
                                        </div>
                                        <div class="text-end">
                                            <address>
                                                <h3>To,</h3>
                                                <h4 class="fw-bold">Sunil Joshi,</h4>
                                                <p class="text-muted ms-4">
                                                    1673, Mcwhorter Road, <br>Mississippi,
                                                    <br>Cleveland - 38732
                                                </p>
                                                <p class="mt-4">
                                                    <b>Invoice Date :</b>
                                                    <i class="fa fa-calendar"></i> 23rd Jan 2021
                                                </p>
                                                <p>
                                                    <b>Due Date :</b>
                                                    <i class="fa fa-calendar"></i> 26th Jan 2021
                                                </p>
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="table-responsive mt-5" style="clear: both">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Description</th>
                                                    <th class="text-end">Quantity</th>
                                                    <th class="text-end">Unit Cost</th>
                                                    <th class="text-end">Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Brush</td>
                                                    <td class="text-end">9</td>
                                                    <td class="text-end">$124</td>
                                                    <td class="text-end">$1116</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Calendar</td>
                                                    <td class="text-end">6</td>
                                                    <td class="text-end">$250</td>
                                                    <td class="text-end">$1500</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>Cassette</td>
                                                    <td class="text-end">25</td>
                                                    <td class="text-end">$60</td>
                                                    <td class="text-end">$1500</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td>CD Player</td>
                                                    <td class="text-end">10</td>
                                                    <td class="text-end">$50</td>
                                                    <td class="text-end">$500</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pull-right mt-4 text-end">
                                            <p>Sub - Total amount: $4,616</p>
                                            <p>vat (10%) : $461</p>
                                            <hr>
                                            <h3><b>Total :</b> $5,077</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <div class="text-end">
                                            <button class="btn btn-danger" type="submit">
                                                Proceed to payment
                                            </button>
                                            <button class="btn btn-default print-page" type="button">
                                                <span><i class="fa fa-print"></i> Print</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./(3)-->
                            <!-- (4) -->
                            <div class="invoice-126" id="printableArea">
                                <div class="row pt-3 printableArea">
                                    <div class="col-md-12">
                                        <div class="">
                                            <address>
                                                <h3>&nbsp;From,</h3>
                                                <h4 class="mb-0 fw-bold">&nbsp;Steve Jobs</h4>
                                                <div class="mb-2">
                                                    <span class="fw-bold ms-1">Invoice Id:</span><span class="invoice-number ms-2"></span>
                                                    <h6 class="text-muted font-weight-medium">
                                                        &nbsp;Email: steve@gmail.com
                                                    </h6>
                                                </div>
                                                <p class="text-muted ms-1">
                                                    2280, Roosevelt Road, <br>Kansas,
                                                    <br>Wichita - 67213
                                                </p>
                                            </address>
                                        </div>
                                        <div class="text-end">
                                            <address>
                                                <h3>To,</h3>
                                                <h4 class="fw-bold">Vishank Joshi,</h4>
                                                <p class="text-muted ms-4">
                                                    270, Shearwood Forest Drive, <br>New
                                                    Hampshire, <br>Manchester - 03103
                                                </p>
                                                <p class="mt-4">
                                                    <b>Invoice Date :</b>
                                                    <i class="fa fa-calendar"></i> 19th Jan 2021
                                                </p>
                                                <p>
                                                    <b>Due Date :</b>
                                                    <i class="fa fa-calendar"></i> 22nd Jan 2021
                                                </p>
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="table-responsive mt-5" style="clear: both">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Description</th>
                                                    <th class="text-end">Quantity</th>
                                                    <th class="text-end">Unit Cost</th>
                                                    <th class="text-end">Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Comb</td>
                                                    <td class="text-end">5</td>
                                                    <td class="text-end">$14</td>
                                                    <td class="text-end">$70</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Computer</td>
                                                    <td class="text-end">10</td>
                                                    <td class="text-end">$500</td>
                                                    <td class="text-end">$5000</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>Match</td>
                                                    <td class="text-end">30</td>
                                                    <td class="text-end">$6</td>
                                                    <td class="text-end">$180</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td>Down Coat</td>
                                                    <td class="text-end">20</td>
                                                    <td class="text-end">$6</td>
                                                    <td class="text-end">$120</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pull-right mt-4 text-end">
                                            <p>Sub - Total amount: $5,370</p>
                                            <p>vat (10%) : $537</p>
                                            <hr>
                                            <h3><b>Total :</b> $5,907</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <div class="text-end">
                                            <button class="btn btn-danger" type="submit">
                                                Proceed to payment
                                            </button>
                                            <button class="btn btn-default print-page" type="button">
                                                <span><i class="fa fa-print"></i> Print</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./(4)-->
                            <!-- (5) -->
                            <div class="invoice-127" id="printableArea">
                                <div class="row pt-3 printableArea">
                                    <div class="col-md-12">
                                        <div class="">
                                            <address>
                                                <h3>&nbsp;From,</h3>
                                                <h4 class="mb-0 fw-bold">&nbsp;Steve Jobs</h4>
                                                <div class="mb-2">
                                                    <span class="fw-bold ms-1">Invoice Id:</span><span class="invoice-number ms-2"></span>
                                                    <h6 class="text-muted font-weight-medium">
                                                        &nbsp;Email: steve@gmail.com
                                                    </h6>
                                                </div>
                                                <p class="text-muted ms-1">
                                                    4006, Victoria Street, <br>Louisiana,
                                                    <br>Baton Rouge - 70814
                                                </p>
                                            </address>
                                        </div>
                                        <div class="text-end">
                                            <address>
                                                <h3>To,</h3>
                                                <h4 class="fw-bold">Virat Kohali,</h4>
                                                <p class="text-muted ms-4">
                                                    1850, Tully Street, <br>Michigan,
                                                    <br>Detroit - 48219
                                                </p>
                                                <p class="mt-4">
                                                    <b>Invoice Date :</b>
                                                    <i class="fa fa-calendar"></i> 22nd Jan 2021
                                                </p>
                                                <p>
                                                    <b>Due Date :</b>
                                                    <i class="fa fa-calendar"></i> 26th Jan 2021
                                                </p>
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="table-responsive mt-5" style="clear: both">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Description</th>
                                                    <th class="text-end">Quantity</th>
                                                    <th class="text-end">Unit Cost</th>
                                                    <th class="text-end">Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Folder</td>
                                                    <td class="text-end">123</td>
                                                    <td class="text-end">$4</td>
                                                    <td class="text-end">$192</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Lipstick</td>
                                                    <td class="text-end">15</td>
                                                    <td class="text-end">$5</td>
                                                    <td class="text-end">$75</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>Make-up</td>
                                                    <td class="text-end">20</td>
                                                    <td class="text-end">$300</td>
                                                    <td class="text-end">$6000</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td>Mirror</td>
                                                    <td class="text-end">60</td>
                                                    <td class="text-end">$50</td>
                                                    <td class="text-end">$3000</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pull-right mt-4 text-end">
                                            <p>Sub - Total amount: $9,267</p>
                                            <p>vat (10%) : $926</p>
                                            <hr>
                                            <h3><b>Total :</b> $10,193</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <div class="text-end">
                                            <button class="btn btn-danger" type="submit">
                                                Proceed to payment
                                            </button>
                                            <button class="btn btn-default print-page" type="button">
                                                <span><i class="fa fa-print"></i> Print</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./(5)-->
                            <!-- (6) -->
                            <div class="invoice-128" id="printableArea">
                                <div class="row pt-3 printableArea">
                                    <div class="col-md-12">
                                        <div class="">
                                            <address>
                                                <h3>&nbsp;From,</h3>
                                                <h4 class="mb-0 fw-bold">&nbsp;Steve Jobs</h4>
                                                <div class="mb-2">
                                                    <span class="fw-bold ms-1">Invoice Id:</span><span class="invoice-number ms-2"></span>
                                                    <h6 class="text-muted font-weight-medium">
                                                        &nbsp;Email: steve@gmail.com
                                                    </h6>
                                                </div>
                                                <p class="text-muted ms-1">
                                                    2874, Havanna Street, <br>Indiana,
                                                    <br>Butlerville - 47223
                                                </p>
                                            </address>
                                        </div>
                                        <div class="text-end">
                                            <address>
                                                <h3>To,</h3>
                                                <h4 class="fw-bold">Smith John,</h4>
                                                <p class="text-muted ms-4">
                                                    3837, Oak Lane, <br>Missouri, <br>Kansas
                                                    City - 64106
                                                </p>
                                                <p class="mt-4">
                                                    <b>Invoice Date :</b>
                                                    <i class="fa fa-calendar"></i> 3rd Jan 2021
                                                </p>
                                                <p>
                                                    <b>Due Date :</b>
                                                    <i class="fa fa-calendar"></i> 5th Jan 2021
                                                </p>
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="table-responsive mt-5" style="clear: both">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Description</th>
                                                    <th class="text-end">Quantity</th>
                                                    <th class="text-end">Unit Cost</th>
                                                    <th class="text-end">Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Scissors</td>
                                                    <td class="text-end">5</td>
                                                    <td class="text-end">$52</td>
                                                    <td class="text-end">$260</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Stereo system</td>
                                                    <td class="text-end">2</td>
                                                    <td class="text-end">$100</td>
                                                    <td class="text-end">$200</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>Television</td>
                                                    <td class="text-end">22</td>
                                                    <td class="text-end">$520</td>
                                                    <td class="text-end">$11440</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td>Tickets</td>
                                                    <td class="text-end">36</td>
                                                    <td class="text-end">$52</td>
                                                    <td class="text-end">$1872</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pull-right mt-4 text-end">
                                            <p>Sub - Total amount: $13,772</p>
                                            <p>vat (10%) : $1,377</p>
                                            <hr>
                                            <h3><b>Total :</b> $15,149</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <div class="text-end">
                                            <button class="btn btn-danger" type="submit">
                                                Proceed to payment
                                            </button>
                                            <button class="btn btn-default print-page" type="button">
                                                <span><i class="fa fa-print"></i> Print</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./(6)-->
                            <!-- (7) -->
                            <div class="invoice-129" id="printableArea">
                                <div class="row pt-3 printableArea">
                                    <div class="col-md-12">
                                        <div class="">
                                            <address>
                                                <h3>&nbsp;From,</h3>
                                                <h4 class="mb-0 fw-bold">&nbsp;Steve Jobs</h4>
                                                <div class="mb-2">
                                                    <span class="fw-bold ms-1">Invoice Id:</span><span class="invoice-number ms-2"></span>
                                                    <h6 class="text-muted font-weight-medium">
                                                        &nbsp;Email: steve@gmail.com
                                                    </h6>
                                                </div>
                                                <p class="text-muted ms-1">
                                                    902, Zappia Drive, <br>Kentucky,
                                                    <br>Lexington - 40509
                                                </p>
                                            </address>
                                        </div>
                                        <div class="text-end">
                                            <address>
                                                <h3>To,</h3>
                                                <h4 class="fw-bold">Sachin Emily,</h4>
                                                <p class="text-muted ms-4">
                                                    2867, Rainbow Drive, <br>Ohio, <br>North
                                                    Canton - 44720
                                                </p>
                                                <p class="mt-4">
                                                    <b>Invoice Date :</b>
                                                    <i class="fa fa-calendar"></i> 6th Jan 2021
                                                </p>
                                                <p>
                                                    <b>Due Date :</b>
                                                    <i class="fa fa-calendar"></i> 25th Jan 2021
                                                </p>
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="table-responsive mt-5" style="clear: both">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Description</th>
                                                    <th class="text-end">Quantity</th>
                                                    <th class="text-end">Unit Cost</th>
                                                    <th class="text-end">Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Mobile phone</td>
                                                    <td class="text-end">6</td>
                                                    <td class="text-end">$214</td>
                                                    <td class="text-end">$1284</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Trash can</td>
                                                    <td class="text-end">31</td>
                                                    <td class="text-end">$20</td>
                                                    <td class="text-end">$620</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>CD</td>
                                                    <td class="text-end">50</td>
                                                    <td class="text-end">$600</td>
                                                    <td class="text-end">$30000</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td>Headset</td>
                                                    <td class="text-end">6</td>
                                                    <td class="text-end">$5</td>
                                                    <td class="text-end">$30</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pull-right mt-4 text-end">
                                            <p>Sub - Total amount: $31,934</p>
                                            <p>vat (10%) : $3,193</p>
                                            <hr>
                                            <h3><b>Total :</b> $35,127</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <div class="text-end">
                                            <button class="btn btn-danger" type="submit">
                                                Proceed to payment
                                            </button>
                                            <button class="btn btn-default print-page" type="button">
                                                <span><i class="fa fa-print"></i> Print</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./(7)-->
                            <!-- (8) -->
                            <div class="invoice-130" id="printableArea">
                                <div class="row pt-3 printableArea">
                                    <div class="col-md-12">
                                        <div class="">
                                            <address>
                                                <h3>&nbsp;From,</h3>
                                                <h4 class="mb-0 fw-bold">&nbsp;Steve Jobs</h4>
                                                <div class="mb-2">
                                                    <span class="fw-bold ms-1">Invoice Id:</span><span class="invoice-number ms-2"></span>
                                                    <h6 class="text-muted font-weight-medium">
                                                        &nbsp;Email: steve@gmail.com
                                                    </h6>
                                                </div>
                                                <p class="text-muted ms-1">
                                                    3004, Berkshire Circle, <br>Tennessee,
                                                    <br>Knoxville - 37917
                                                </p>
                                            </address>
                                        </div>
                                        <div class="text-end">
                                            <address>
                                                <h3>To,</h3>
                                                <h4 class="fw-bold">Stiphan Robots,</h4>
                                                <p class="text-muted ms-4">
                                                    3327, Fort Street, <br>Washington,
                                                    <br>Tacoma - 98402
                                                </p>
                                                <p class="mt-4">
                                                    <b>Invoice Date :</b>
                                                    <i class="fa fa-calendar"></i> 21st Jan 2021
                                                </p>
                                                <p>
                                                    <b>Due Date :</b>
                                                    <i class="fa fa-calendar"></i> 27th Jan 2021
                                                </p>
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="table-responsive mt-5" style="clear: both">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Description</th>
                                                    <th class="text-end">Quantity</th>
                                                    <th class="text-end">Unit Cost</th>
                                                    <th class="text-end">Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Notebook</td>
                                                    <td class="text-end">26</td>
                                                    <td class="text-end">$24</td>
                                                    <td class="text-end">$624</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Radio cassette player</td>
                                                    <td class="text-end">13</td>
                                                    <td class="text-end">$500</td>
                                                    <td class="text-end">$6500</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>Scissors</td>
                                                    <td class="text-end">60</td>
                                                    <td class="text-end">$600</td>
                                                    <td class="text-end">$36000</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td>Speakers</td>
                                                    <td class="text-end">20</td>
                                                    <td class="text-end">$5</td>
                                                    <td class="text-end">$100</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pull-right mt-4 text-end">
                                            <p>Sub - Total amount: $43,224</p>
                                            <p>vat (10%) : $4,322</p>
                                            <hr>
                                            <h3><b>Total :</b> $47,546</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <div class="text-end">
                                            <button class="btn btn-danger" type="submit">
                                                Proceed to payment
                                            </button>
                                            <button class="btn btn-default print-page" type="button">
                                                <span><i class="fa fa-print"></i> Print</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./(8)-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Right Part -->
            <!-- -------------------------------------------------------------- -->
        </div>
        <!-- -------------------------------------------------------------- -->
    </div>
@endsection

{{--js--}}
@section('after-js')
    <!--This page JavaScript -->
    <script src="../../dist/js/pages/samplepages/jquery.PrintArea.js"></script>
    <script src="../../dist/js/pages/invoice/invoice.js"></script>

@endsection


