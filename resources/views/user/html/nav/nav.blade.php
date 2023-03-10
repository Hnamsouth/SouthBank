<div class="bg-white fixed-top">
<div class="container ">
    <header class="blog-header lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1 pe-2 ps-2">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                         class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>
                @include('user.html.nav.nav-aside')
                @yield('url-tree')
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">SouthBank</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center position-relative!important">
                @yield('right-nav')
            </div>
        </div>
    </header>
</div>
</div>
