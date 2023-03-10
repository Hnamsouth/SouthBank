@extends("admin.layout")
@section("title","Admin Template empty")

@section('center-css')
    <!--This page CSS -->
@endsection

@section("main-content")
    <div class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
        " style="
          background: url(" ..="" assets="" images="" background="" login-register.jpg)="" no-repeat="" center="" center;="" background-size:="" cover;="" "="">
    <div class="auth-box  p-4 bg-white m-0">
        <div id="loginform">
            <div class="logo text-center">
              <span class="db"><img src="../../assets/images/logo-icon.png" alt="logo"><br>
                <img src="../../assets/images/logo-text.png" alt="Home"></span>
            </div>
            <!-- Form -->
            <div class="row">
                <div class="col-12">
                    <form class="form-horizontal mt-3 form-material" id="loginform" action="index.html">
                        <div class="form-group mb-3">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="d-flex">
                                <div class="checkbox checkbox-info pt-0">
                                    <input id="checkbox-signup" type="checkbox" class="material-inputs chk-col-indigo">
                                    <label for="checkbox-signup"> Remember me </label>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0)" id="to-recover" class="link font-weight-medium"><i class="fa fa-lock me-1"></i> Forgot pwd?</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center my-3">
                            <div class="col-xs-12">
                                <button class="
                          btn btn-info
                          d-block
                          w-100
                          waves-effect waves-light
                        " type="submit">
                                    Log In
                                </button>
                            </div>
                        </div>
{{--                        <div class="row">--}}
{{--                            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-center">--}}
{{--                                <div class="social mb-3">--}}
{{--                                    <a href="javascript:void(0)" class="btn btn-facebook" data-bs-toggle="tooltip" title="Login with Facebook">--}}
{{--                                        <i aria-hidden="true" class="fab fa-facebook-f"></i>--}}
{{--                                    </a>--}}
{{--                                    <a href="javascript:void(0)" class="btn btn-googleplus" data-bs-toggle="tooltip" title="Login with Google">--}}
{{--                                        <i aria-hidden="true" class="fab fa-google"></i>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form-group mb-0">
                            <div class="col-sm-12 justify-content-center d-flex">
                                <p>
                                    Don't have an account?
                                    <a href="authentication-register1.html" class="text-info font-weight-medium ms-1">Sign Up</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="recoverform">
            <div class="logo">
                <h3 class="font-weight-medium mb-3">Recover Password</h3>
                <span>Enter your Email and instructions will be sent to you!</span>
            </div>
            <div class="row mt-3">
                <!-- Form -->
                <form class="col-12 form-material" action="index.html">
                    <!-- email -->
                    <div class="form-group row">
                        <div class="col-12">
                            <input class="form-control" type="email" required="" placeholder="Username">
                        </div>
                    </div>
                    <!-- pwd -->
                    <div class="row mt-3">
                        <div class="col-12">
                            <button class="btn btn-block btn-lg btn-primary text-uppercase" type="submit" name="action">
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('after-js')
    <!--This page JavaScript -->
    <script>
        $(".preloader").fadeOut();
        // ==============================================================
        // Login and Recover Password
        // ==============================================================
        $("#to-recover").on("click", function () {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
@endsection
