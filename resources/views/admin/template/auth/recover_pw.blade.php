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
          background: url(" ..="" assets="" images="" big="" auth-bg.jpg)="" no-repeat="" center="" center;="" "="">
    <div class="auth-box p-4 bg-white rounded">
        <div>
            <div class="logo text-center">
                <span class="db"><img src="../../assets/images/logo-icon.png" alt="logo"></span>
                <h5 class="font-weight-medium mb-3 mt-1">Recover Password</h5>
            </div>
            <!-- Form -->
            <div class="row">
                <div class="col-12">
                    <form class="form-horizontal mt-3" action="index.html">
                        <div class="mb-3 row">
                            <div class="col-12">
                                <input class="form-control" type="text" required="" placeholder="Name">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-12">
                                <input class="form-control" type="text" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="col-xs-12">
                                <button class="btn d-block w-100 btn-info" type="submit">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('after-js')
    <!--This page JavaScript -->
    <script>
        $(".preloader").fadeOut();

    </script>
@endsection
