@extends('customer.layout')

@section('before-css')
@endsection

@section('main-content')
    <div class="container-fluid">
        <section>
        <div class="row">
            @foreach($acc as $index=>$item)
                <div class="col-12">
                    <div class="card card-hover">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-xl-3">
                                    <img
                                        {{--                                        src="../../customer/dist/images/big/img8.jpg"--}}
                                        src="{{$item->AccountType->img}}"
                                        alt="image"
                                        class="rounded"
                                        width="200"
                                    />
                                </div>
                                <div class="col-md-8 col-lg-8 col-xl-9">
                                    <div class="d-flex justify-content-between m-2">
                                        <h4>Main Account</h4>
                                        <h4 class="balance-ui">Balance</h4>
                                    </div>
                                        <div class="card ">
                                            <div class="p-3 row align-items-center">
                                                <a class="col-sm-8 col-md-6 account-redirect" href="{{route('user.account.detail',["account"=>$item->id])}}" type="button" data-account="{{$item->id}}">
                                                    <h4>Account Number:</h4>
                                                    <p>{{$item->account_number}}</p>
                                                </a>
                                                <div class="col-sm-4 col-md-6 text-end">
                                                    <div class="">
                                                        <input type="password" class="form-bl text-end" id="balance" value="{{ $item->BalanceCardAccount->balance}}" disabled> <a class="ms-2" type="button" href="#" onclick="showBalance(true)"><i class="ti ti-aperture"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    </div>
@endsection

@section('after-js')
    <style>
        .form-bl {
           border: none;
            background: none;
        }
    </style>
    <script>

//        const element = document.querySelector('.account-redirect');
//
//        element.addEventListener('click', () => {
//            const dataAccount = element.getAttribute('data-account');
//            console.log(dataAccount);
//        });




        let bl=false;
        function showBalance(tg){
            bl = tg !== bl;
            $('#balance').attr('type',bl?'text':'password')
        }
    </script>
@endsection
