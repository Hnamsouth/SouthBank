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

    @yield('main-content')
</div>

<!-- Import Js Files -->
@yield('before-js')
@include('customer.html.js')
@yield('after-js')

</body>

</html>
