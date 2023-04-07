@extends('customer.layout2')

@section('main-content')
<div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
                <div class="card mb-0">
                    <div class="card-body pt-5">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="./index.html" class="text-nowrap logo-img text-center d-block mb-4">
                            <img src="../../customer/dist/images/logos/dark-logo.svg" width="180" alt="">
                        </a>
                        <div class="mb-5 text-center">
                            <p class="mb-0 ">
                                Please enter the email address associated with your account and We will email you a link to reset your password.
                            </p>
                        </div>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-8 mb-3">Forgot Password</button>
                            <a href="{{route('login')}}" class="btn btn-light-primary text-primary w-100 py-8">Back to Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
