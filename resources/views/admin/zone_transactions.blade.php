@extends('layout.admin02')
@section('page_content')
    <div class="container-fluid content-inner pb-0">



        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class=" pb-4 mb-4 d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-0 h2 fw-bold">Zone Transactions</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mb-4">






            <div class="row">
                <div class="col-md-12">
                    <div class="card card-block card-stretch custom-scroll">
                        <div class="card-body p-0">
                            <div class="table-responsive">



                                <table class="table data-table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Wallet</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Remark</th>
                                            <th class="text-end" scope="col">Timestamp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($slot_transactions as $trno)
                                            <tr>
                                                <td>
                                                    <span class="title fw-bold">
                                                        @if (isset($trno->user->wallet))
                                                            {{ substr($trno->user->wallet, 0, 6) . '...' . substr($trno->user->wallet, -6) }}
                                                        @else
                                                            {{ 'admin' }}
                                                        @endif
                                                    </span>
                                                </td>
                                                <td>
                                                    @if ($trno->amount < 0)
                                                        <span class="text-danger">
                                                            <svg width="10" height="8" viewBox="0 0 8 5"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E">
                                                                </path>
                                                            </svg>
                                                            {{ number_format(abs($trno->amount), 2) }}
                                                            {{ $trno->currency }}
                                                        </span>
                                                    @else
                                                        <span class="text-success">
                                                            <svg width="10" height="8" viewBox="0 0 8 5"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42">
                                                                </path>
                                                            </svg>
                                                            {{ number_format($trno->amount, 2) }} {{ $trno->currency }}

                                                        </span>
                                                    @endif
                                                </td>
                                                <td> {{ $trno->remark }} </td>
                                                <td class="text-end"> {{ $trno->created_at }} </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex justify-content-lg-end " >
                        {{ $slot_transactions->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection


