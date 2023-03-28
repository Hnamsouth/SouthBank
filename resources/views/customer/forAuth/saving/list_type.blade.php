@extends('customer.layout')

@section('before-css')
@endsection

@section('main-content')
    <div class="container-fluid">
        <h3 class="text-center mb-4"> Saving deposit Type</h3>
        <div class="row">
            @foreach($sdt as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="card card-hover">
                        <div class="card-body">
                            <h6 class="mb-3">{{$item->name}}</h6>
                            <ul class="ms-1">
                                <li class="breadcrumb-item"></li>
                                <li class="breadcrumb-item">
                                    <span class="px-2">Method of receiving Interest:
                                        @foreach($item->InterestPaymentMethod as $index=>$i)
                                            {{ $i->name }} {{$index===$item->interest_payment_method_count-1?"":','}}
                                        @endforeach
                                    .</span>
                                </li>
                                @if($item->increase_principal===0)
                                    <li class="breadcrumb-item">
                                        <span class="px-2">{{ _('Increase principal, unlimited amount and deposit.') }}</span>
                                    </li>
                                @endif

                                <li class="breadcrumb-item">
                                    <span class="px-2">Minimum Deposit amount: {{ $item->min_amount*1000000 }} VND.</span>
                                </li>
                                <li class="breadcrumb-item">
                                    <span class="px-2">Savings term: {{ $item->min_term." tới ".$item->max_term}} Month.</span>
                                </li>
                                <li class="breadcrumb-item">
                                    <span class="px-2">{{ $item->withdraw_before_maturity?"Early withdrawal will apply the interest rate without term.":"Can't withdraw before maturity."}}</span>
                                </li>

                            </ul>
                            <a href="#" class=" btn font-medium text-warning"> More details  <i class="ti ti-file-description fs-4"></i></a>

                            <div class="text-end mt-3">
                                <a href="{{route('user.open-saving',['deposit_type'=>$item->id])}}" id="clickSubmit" class="btn font-medium btn-primary  px-4" >
                                    <div class="d-flex align-items-center">
                                        Open
                                        <i class="ti ti-send ms-1 fs-4"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
            <style>
                ul li{
                    margin-bottom: 0.5rem;
                }
            </style>
        </div>
    </div>
@endsection
