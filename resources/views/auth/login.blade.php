@extends('customer.layout2')

@php
    $token = bcrypt('hello, world!'); // generate a unique token
     $qr =QrCode::size(250)->generate($token); // generate QR code with the token
@endphp


@section('after-js')
    <script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.29.7.min.js"></script>

    <script>
        // Khởi tạo đối tượng PubNub với các thông số cấu hình
        var pubnub = new PubNub({
            publishKey: 'pub-c-cb039d69-9983-4bb9-841e-9cff92581900',
            subscribeKey: 'sub-c-2e353e34-0625-454d-839d-857d622da1a7'
        });

        // Đăng ký sự kiện nhận tin nhắn trên kênh 'my_channel'
        pubnub.addListener({
            message: function(response) {
                confirm(response)
                console.log(response.message.token);
                if(response.message.login_token){
                    callAjax(response.message.login_token);
                }

            }
        });
        pubnub.subscribe({
            channels: ['msg']
        });

        function callAjax(token){
            $.ajax({
                url:'{{route('app.login')}}',
                type:'post',
                data:{
                  '_token':"{{csrf_token()}}",
                  'login_token':token,
                },
                success: (response)=>{
                    console.log(response);
                    window.location.replace(response.url);
                }
            })
        }
    </script>
@endsection

@section('main-content')
    <div class="position-relative overflow-hidden radial-gradient min-vh-100">
        <div class="position-relative z-index-5">
            <div class="row">
                <div class="col-lg-6 col-xl-8 col-xxl-8">
                    <a href="./index.html" class="text-nowrap logo-img d-block px-4 py-9 pb-5 pb-xl-0 w-100">
                        <img src="../../customer/dist/images/logos/dark-logo.svg" width="180" alt="">
                    </a>
                    <div class="d-none d-lg-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
{{--                        <img src="../../customer/dist/images/backgrounds/login-security.svg" alt="" class="img-fluid" width="500">--}}
                    {{$qr}}
                    </div>
                </div>
                <div class="hide" id="qr_code">{{$token}}</div>
                <div class="col-lg-6 col-xl-4 col-xxl-4">
                    <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
                        <div class="d-flex align-items-center w-100 h-100">
                            <div class="card-body px-xxl-5">
                                <h2 class="mb-3 fs-7 fw-bolder text-center">Welcome to Modernize</h2>


                                <div class="position-relative text-center my-4">
                                    <p class="mb-0 fs-4 px-3 d-inline-block bg-white text-dark z-index-5 position-relative"></p>
                                    <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" value="{{ old('username') }}" required class="form-control  @error('username') is-invalid @enderror" id="username" aria-describedby="emailHelp">
                                        @error('username')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" required class="form-control  @error('password') is-invalid @enderror" id="password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
{{--                                        <div class="form-check">--}}
{{--                                            <input class="form-check-input primary" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }} id="flexCheckChecked" checked="">--}}
{{--                                            <label class="form-check-label text-dark" for="flexCheckChecked">--}}
{{--                                                Remeber this Device--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
                                        <a class="text-primary fw-medium" href="{{route('password.request')}}">Forgot Password ?</a>
                                    </div>
                                    <button class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-medium">New to Modernize?</p>
                                        <a class="text-primary fw-medium ms-2" href="{{ route('account.list') }}">Create an account</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
