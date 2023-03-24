<!DOCTYPE html>
<html lang="en">

<head>
    <!-- --------------------------------------------------- -->
    <!-- Title -->
    <!-- --------------------------------------------------- -->
    <title>@yield('title','SouthBank')</title>
    <base href="/"/>
    <!-- --------------------------------------------------- -->
    <!-- Required Meta Tag -->
    <!-- --------------------------------------------------- -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="handheldfriendly" content="true"/>
    <meta name="MobileOptimized" content="width"/>
    <meta name="description" content="Mordenize"/>
    <meta name="author" content=""/>
    <meta name="keywords" content="Mordenize"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- --------------------------------------------------- -->
    <!-- Favicon -->
    <!-- --------------------------------------------------- -->
    <link rel="shortcut icon" type="image/png" href="../../customer/dist/images/logos/favicon.png"/>
    <!-- --------------------------------------------------- -->
    <!-- Core Css -->
    <!-- --------------------------------------------------- -->
    @yield('before-css')
    @include('customer.html.css')
    @yield('after-css')
</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <img src="../../customer/dist/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid"/>
</div>
<!-- --------------------------------------------------- -->
<!-- Body Wrapper -->
<!-- --------------------------------------------------- -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed"
     data-header-position="fixed">
    <!-- --------------------------------------------------- -->
    <!-- Sidebar -->
    <!-- --------------------------------------------------- -->
    {{--    @include('customer.html.aside')--}}

    <!-- --------------------------------------------------- -->
    <!-- Main Wrapper -->
    <!-- --------------------------------------------------- -->
    <div class="position-relative">
        <!-- --------------------------------------------------- -->
        <!-- Header Start -->
        <!-- --------------------------------------------------- -->
        <header class="app-header" style="margin: 0 auto; left:0; right:0;">
            @include('customer.new.nav')
        </header>

        <div class="" style="    padding-top: calc(105px + -30px);">
            @yield('main-content')
        </div>
    </div>
</div>
<!--  Mobilenavbar -->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
     aria-labelledby="offcanvasWithBothOptionsLabel">
    <nav class="sidebar-nav scroll-sidebar">
        <div class="offcanvas-header justify-content-between">
            <img src="../../customer/dist/images/logos/favicon.png" alt="" class="img-fluid">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body profile-dropdown mobile-navbar" data-simplebar="" data-simplebar>
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <span>
                      <i class="ti ti-apps"></i>
                    </span>
                        <span class="hide-menu">Apps</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level my-3">
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div
                                    class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="../../customer/dist/images/svgs/icon-dd-chat.svg" alt="" class="img-fluid"
                                         width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">New messages arrived</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div
                                    class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="../../customer/dist/images/svgs/icon-dd-invoice.svg" alt=""
                                         class="img-fluid" width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">Get latest invoice</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div
                                    class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="../../customer/dist/images/svgs/icon-dd-mobile.svg" alt=""
                                         class="img-fluid" width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div
                                    class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="../../customer/dist/images/svgs/icon-dd-message-box.svg" alt=""
                                         class="img-fluid" width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">Email App</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div
                                    class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="../../customer/dist/images/svgs/icon-dd-cart.svg" alt="" class="img-fluid"
                                         width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">learn more information</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div
                                    class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="../../customer/dist/images/svgs/icon-dd-date.svg" alt="" class="img-fluid"
                                         width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div
                                    class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="../../customer/dist/images/svgs/icon-dd-lifebuoy.svg" alt=""
                                         class="img-fluid" width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div
                                    class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="../../customer/dist/images/svgs/icon-dd-application.svg" alt=""
                                         class="img-fluid" width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">To-do and Daily tasks</span>
                                </div>
                            </a>
                        </li>
                        <ul class="px-8 mt-7 mb-4">
                            <li class="sidebar-item mb-3">
                                <h5 class="fs-5 fw-semibold">Quick Links</h5>
                            </li>
                            <li class="sidebar-item py-2">
                                <a class="fw-semibold text-dark" href="#">Pricing Page</a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a class="fw-semibold text-dark" href="#">Authentication Design</a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a class="fw-semibold text-dark" href="#">Register Now</a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a class="fw-semibold text-dark" href="#">404 Error Page</a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a class="fw-semibold text-dark" href="#">Notes App</a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a class="fw-semibold text-dark" href="#">User Application</a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a class="fw-semibold text-dark" href="#">Account Settings</a>
                            </li>
                        </ul>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="app-chat.html" aria-expanded="false">
                    <span>
                      <i class="ti ti-message-dots"></i>
                    </span>
                        <span class="hide-menu">Chat</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="app-calendar.html" aria-expanded="false">
                    <span>
                      <i class="ti ti-calendar"></i>
                    </span>
                        <span class="hide-menu">Calendar</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="app-email.html" aria-expanded="false">
                    <span>
                      <i class="ti ti-mail"></i>
                    </span>
                        <span class="hide-menu">Email</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!--  Search Bar -->
@include('customer.html.searchbar')
<!-- Customizer theme-->
@include('customer.new.customizer')
<!-- Import Js Files -->
@yield('before-js')
@include('customer.html.js')
@yield('after-js')

<style>
    /*.app-header {*/
    /*    width: calc(100% - 540px) !important;*/
    /*}*/
</style>
</body>

</html>
