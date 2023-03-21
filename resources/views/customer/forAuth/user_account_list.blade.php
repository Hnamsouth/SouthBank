@extends('customer.layout')

@section('before-css')
@endsection

@section('main-content')
        @foreach($acc as $item)
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ $item->AccountType->img }}" width="300" class="img-responsive mb-3">
                        <p>{{$item->account_number}}</p>
                    </div>

                </div>
            </div>

        @endforeach
@endsection
