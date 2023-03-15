<!DOCTYPE html>
<html lang="en">

<head>
    <!-- --------------------------------------------------- -->
    <!-- Title -->
    <!-- --------------------------------------------------- -->
    <title>@yield('title','SouthBank')</title>
    <!-- --------------------------------------------------- -->
    <!-- Required Meta Tag -->
    <!-- --------------------------------------------------- -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- --------------------------------------------------- -->
    <!-- Favicon -->
    <!-- --------------------------------------------------- -->
    <link rel="shortcut icon" type="image/png" href="../../customer/dist/images/logos/favicon.png" />
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
    <img src="../../customer/dist/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
</div>
<!-- --------------------------------------------------- -->
<!-- Body Wrapper -->
<!-- --------------------------------------------------- -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- --------------------------------------------------- -->
    <!-- Sidebar -->
    <!-- --------------------------------------------------- -->
    @include('customer.html.aside')
    <!-- --------------------------------------------------- -->
    <!-- Main Wrapper -->
    <!-- --------------------------------------------------- -->
    <div class="body-wrapper">
        <!-- --------------------------------------------------- -->
        <!-- Header Start -->
        <!-- --------------------------------------------------- -->
        <header class="app-header">
            @include('customer.html.nav')
        </header>
        <!-- --------------------------------------------------- -->
        <!-- Header End -->
        <!-- --------------------------------------------------- -->
        <div class="container-fluid">
            @yield('main-content')
        </div>
    </div>
</div>
<!--  Mobilenavbar -->
@include('customer.html.mobilenav')
<!--  Search Bar -->
@include('customer.html.searchbar')
<!-- Customizer theme-->
@include('customer.html.customizer')
<!-- Import Js Files -->
@yield('before-js')
@include('customer.html.js')
@yield('after-js')

</body>

</html>
