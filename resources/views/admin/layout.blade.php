<!DOCTYPE html>
<html dir="ltr" lang="en"><link type="text/css" rel="stylesheet" id="dark-mode-custom-link"><link type="text/css" rel="stylesheet" id="dark-mode-general-link"><style lang="en" type="text/css" id="dark-mode-custom-style"></style><style lang="en" type="text/css" id="dark-mode-native-style"></style><style lang="en" type="text/css" id="dark-mode-native-sheet"></style><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template">
    <meta name="description" content="MaterialPro is powerful and clean admin dashboard template, inpired from Google's Material Design">
    <meta name="robots" content="noindex,nofollow">
    <title>@yield('title','Laytout')</title>
    @yield('before-css')
    @include('admin.html.css')
    @yield('after-css')

</head>
<body data-new-gr-c-s-check-loaded="14.1098.0" data-gr-ext-installed="">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader" style="display: none;">
    <svg class="tea lds-ripple" width="37" height="48" viewBox="0 0 37 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z" stroke="#1e88e5" stroke-width="2"></path>
        <path d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34" stroke="#1e88e5" stroke-width="2"></path>
        <path id="teabag" fill="#1e88e5" fill-rule="evenodd" clip-rule="evenodd" d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"></path>
        <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="#1e88e5"></path>
        <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#1e88e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full" class="mini-sidebar">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
        @include('admin.html.nav')
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    @include('admin.html.aside')
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" style="display: block;">
        @yield('main-content')
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- customizer Panel -->
<!-- ============================================================== -->
<aside class="customizer">
    <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin fa-cog"></i></a>
    <div class="customizer-body ps-container ps-theme-default" data-ps-id="b2a9fa37-3a54-a2d5-c599-92781d309f32">
        <ul class="nav customizer-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-wrench fs-6"></i></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false" tabindex="-1"><i class="mdi mdi-message-reply fs-6"></i></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" tabindex="-1"><i class="mdi mdi-star-circle fs-6"></i></a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="p-3 border-bottom">
                    <!-- Sidebar -->
                    <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
                    <div class="form-check mt-3">
                        <input type="checkbox" name="theme-view" class="form-check-input" id="theme-view">
                        <label class="form-check-label" for="theme-view">
                            <span>Dark Theme</span>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input type="checkbox" class="sidebartoggler form-check-input" name="collapssidebar" id="collapssidebar">
                        <label class="form-check-label" for="collapssidebar">
                            <span>Collapse Sidebar</span>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input type="checkbox" name="sidebar-position" class="form-check-input" id="sidebar-position">
                        <label class="form-check-label" for="sidebar-position">
                            <span>Fixed Sidebar</span>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input type="checkbox" name="header-position" class="form-check-input" id="header-position">
                        <label class="form-check-label" for="header-position">
                            <span>Fixed Header</span>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input type="checkbox" name="boxed-layout" class="form-check-input" id="boxed-layout">
                        <label class="form-check-label" for="boxed-layout">
                            <span>Boxed Layout</span>
                        </label>
                    </div>
                </div>
                <div class="p-3 border-bottom">
                    <!-- Logo BG -->
                    <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
                    <ul class="theme-color m-0 p-0">
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin1"></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin2"></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin3"></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin4"></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin5"></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin6"></a>
                        </li>
                    </ul>
                    <!-- Logo BG -->
                </div>
                <div class="p-3 border-bottom">
                    <!-- Navbar BG -->
                    <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
                    <ul class="theme-color m-0 p-0">
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin1"></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin2"></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin3"></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin4"></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin5"></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin6"></a>
                        </li>
                    </ul>
                    <!-- Navbar BG -->
                </div>
                <div class="p-3 border-bottom">
                    <!-- Logo BG -->
                    <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
                    <ul class="theme-color m-0 p-0">
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin1"></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin2"></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin3"></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin4"></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin5"></a>
                        </li>
                        <li class="theme-item list-inline-item me-1">
                            <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin6"></a>
                        </li>
                    </ul>
                    <!-- Logo BG -->
                </div>
            </div>
            <!-- End Tab 1 -->
            <!-- Tab 2 -->
            <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                <ul class="mailbox list-style-none mt-3">
                    <li>
                        <div class="message-center chat-scroll position-relative ps-container ps-theme-default" data-ps-id="28d6b623-187d-5c38-bd5b-cf693c09620b">
                            <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_1" data-user-id="1">
                    <span class="user-img position-relative d-inline-block">
                      <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle w-100">
                      <span class="profile-status rounded-circle online"></span>
                    </span>
                                <div class="w-75 d-inline-block v-middle ps-3">
                                    <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                    <span class="fs-2 text-nowrap d-block text-muted">9:30 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_2" data-user-id="2">
                    <span class="user-img position-relative d-inline-block">
                      <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle w-100">
                      <span class="profile-status rounded-circle busy"></span>
                    </span>
                                <div class="w-75 d-inline-block v-middle ps-3">
                                    <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5>
                                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I've sung a song! See you at</span>
                                    <span class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_3" data-user-id="3">
                    <span class="user-img position-relative d-inline-block">
                      <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle w-100">
                      <span class="profile-status rounded-circle away"></span>
                    </span>
                                <div class="w-75 d-inline-block v-middle ps-3">
                                    <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5>
                                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I am a singer!</span>
                                    <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_4" data-user-id="4">
                    <span class="user-img position-relative d-inline-block">
                      <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle w-100">
                      <span class="profile-status rounded-circle offline"></span>
                    </span>
                                <div class="w-75 d-inline-block v-middle ps-3">
                                    <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5>
                                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                    <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_5" data-user-id="5">
                    <span class="user-img position-relative d-inline-block">
                      <img src="../../assets/images/users/5.jpg" alt="user" class="rounded-circle w-100">
                      <span class="profile-status rounded-circle offline"></span>
                    </span>
                                <div class="w-75 d-inline-block v-middle ps-3">
                                    <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5>
                                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                    <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_6" data-user-id="6">
                    <span class="user-img position-relative d-inline-block">
                      <img src="../../assets/images/users/6.jpg" alt="user" class="rounded-circle w-100">
                      <span class="profile-status rounded-circle offline"></span>
                    </span>
                                <div class="w-75 d-inline-block v-middle ps-3">
                                    <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5>
                                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                    <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_7" data-user-id="7">
                    <span class="user-img position-relative d-inline-block">
                      <img src="../../assets/images/users/7.jpg" alt="user" class="rounded-circle w-100">
                      <span class="profile-status rounded-circle offline"></span>
                    </span>
                                <div class="w-75 d-inline-block v-middle ps-3">
                                    <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                    <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_8" data-user-id="8">
                    <span class="user-img position-relative d-inline-block">
                      <img src="../../assets/images/users/8.jpg" alt="user" class="rounded-circle w-100">
                      <span class="profile-status rounded-circle offline"></span>
                    </span>
                                <div class="w-75 d-inline-block v-middle ps-3">
                                    <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5>
                                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                    <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                    </li>
                </ul>
            </div>
            <!-- End Tab 2 -->
            <!-- Tab 3 -->
            <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h6 class="mt-3 mb-3">Activity Timeline</h6>
                <div class="steamline">
                    <div class="sl-item">
                        <div class="sl-left bg-light-success text-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-sm fill-white"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </div>
                        <div class="sl-right">
                            <div class="font-weight-medium">
                                Meeting today <span class="sl-date"> 5pm</span>
                            </div>
                            <div class="desc">you can write anything</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-light-info text-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera feather-sm fill-white"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                        </div>
                        <div class="sl-right">
                            <div class="font-weight-medium">Send documents to Clark</div>
                            <div class="desc">Lorem Ipsum is simply</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left">
                            <img class="rounded-circle" alt="user" src="../../assets/images/users/2.jpg">
                        </div>
                        <div class="sl-right">
                            <div class="font-weight-medium">
                                Go to the Doctor <span class="sl-date">5 minutes ago</span>
                            </div>
                            <div class="desc">Contrary to popular belief</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left">
                            <img class="rounded-circle" alt="user" src="../../assets/images/users/1.jpg">
                        </div>
                        <div class="sl-right">
                            <div>
                                <a href="javascript:void(0)">Stephen</a>
                                <span class="sl-date">5 minutes ago</span>
                            </div>
                            <div class="desc">Approve meeting with tiger</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-light-primary text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-sm fill-white"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </div>
                        <div class="sl-right">
                            <div class="font-weight-medium">
                                Meeting today <span class="sl-date"> 5pm</span>
                            </div>
                            <div class="desc">you can write anything</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-light-info text-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send feather-sm fill-white"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                        </div>
                        <div class="sl-right">
                            <div class="font-weight-medium">Send documents to Clark</div>
                            <div class="desc">Lorem Ipsum is simply</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left">
                            <img class="rounded-circle" alt="user" src="../../assets/images/users/4.jpg">
                        </div>
                        <div class="sl-right">
                            <div class="font-weight-medium">
                                Go to the Doctor <span class="sl-date">5 minutes ago</span>
                            </div>
                            <div class="desc">Contrary to popular belief</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left">
                            <img class="rounded-circle" alt="user" src="../../assets/images/users/6.jpg">
                        </div>
                        <div class="sl-right">
                            <div>
                                <a href="javascript:void(0)">Stephen</a>
                                <span class="sl-date">5 minutes ago</span>
                            </div>
                            <div class="desc">Approve meeting with tiger</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab 3 -->
        </div>
        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
</aside>
<div class="chat-windows hide-chat"></div>
<!-- ============================================================== -->
@yield('before-js')
@include('admin.html.script')
@yield('after-js')


<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M-1 202.348L-1 202.348C-1 202.348 103.96428571428571 202.348 103.96428571428571 202.348C103.96428571428571 202.348 207.92857142857142 202.348 207.92857142857142 202.348C207.92857142857142 202.348 311.8928571428571 202.348 311.8928571428571 202.348C311.8928571428571 202.348 415.85714285714283 202.348 415.85714285714283 202.348C415.85714285714283 202.348 519.8214285714286 202.348 519.8214285714286 202.348C519.8214285714286 202.348 623.7857142857142 202.348 623.7857142857142 202.348C623.7857142857142 202.348 727.75 202.348 727.75 202.348C727.75 202.348 727.75 202.348 727.75 202.348 "></path></svg>
</body>
</html>
