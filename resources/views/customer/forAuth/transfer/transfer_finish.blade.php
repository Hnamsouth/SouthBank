@extends('customer.layout')

@section('before-css')
@endsection

@section('main-content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="card-title">Complete Transaction</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">AMOUNT:  </span> <span class="fs-3 text-bg-light-gray" id="info_amount">{{ $trans->amount }}</span></div>
                        <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">Transactions Code:  </span> <span class="fs-3 text-bg-light-gray" id="info_amount">{{ $trans->transaction_code }}</span></div>
                        <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">FROM ACCOUNT:  </span> <span class="fs-3 text-bg-light-gray" id="info_from_acc">{{ $trans->from_number }}</span></div>
                        <hr/>
                        <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">TO ACCOUNT:  </span> <span class="fs-3 text-bg-light-gray" id="info_to_acc">{{ $trans->to_number }}</span></div>
                        <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">ACCOUNT NAME:  </span> <span class="fs-3 text-bg-light-gray" id="info_acc_name">{{ $trans->account_holder_name }}</span></div>
                        <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">BANK NAME:  </span> <span class="fs-3 text-bg-light-gray" id="info_bank_name">{{ $trans->bank_name }}</span></div>
                        <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">DATE:  </span> <span class="fs-3 text-bg-light-gray" id="info_date">{{ $trans->created_at }}</span></div>
                        <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">FEES:  </span> <span class="fs-3 text-bg-light-gray" id="info_fees">{{ $trans->fees }}</span></div>
                        <div class="mb-4"> <span class="fs-3 fw-semibold text-cl-gray me-2">DESCRIPTION:  </span> <span class="fs-3 text-bg-light-gray" id="info_description">{{ $trans->description }}</span></div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a type="button" class="btn btn-primary " href="{{route('user.transfer.within-bank')}}">New Transfer</a>
            </div>
        </div>
    </div>
@endsection
