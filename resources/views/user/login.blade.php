<style>
    .form-control{
        border: 0 !important;
        border-bottom: 1px solid !important;
        border-radius: 0 !important;
    }
</style>
    <div class=" col-xl-10 col-xxl-8 px-4 py-5 " style="max-width: 1220px;
    margin: 0 auto;">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-6 text-center ">
                <h1 class="display-4 fw-bold lh-1 mb-3">Login with QR</h1>
                <p class="fs-4">Scan on your app</p>
                {{$qr}}
            </div>
            <div class="col-md-10 mx-auto col-lg-6">
                <form class="p-4 p-md-5 rounded-3" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" style="">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control form-control-navbar @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="checkbox mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <button class="w-100 btn btn-lg btn-wn bg-wn" type="submit"><span class="fs-5 fw-semibold">Sign up</span></button>
                    <hr class="my-4">
                    <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                </form>
            </div>
        </div>
    </div>
