@extends('layout.admin02')
@section('page_content')
    <div class="container-fluid content-inner pb-0">



        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class=" pb-4 mb-4 d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-0 h2 fw-bold">Zone Overview</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mb-4">



            <div class="row">
                <div class="col-md-12">
                    <div class="card " style="box-shadow: 1px 1px #fc0;">
                        <div class="card-body mb-0">
                            <div class="row">

                                <div class="col-lg-3">
                                    <div class="card shining-card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="fs-6 fw-bold me-2" style="line-height: 20px"><a
                                                            href="#" class="text-white">Energy <br> Generatd </a>
                                                        <br></span>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="fw-bold">$
                                                        {{ number_format($total_purchase, 2) }}
                                                    </span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="card shining-card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="fs-6 fw-bold me-2" style="line-height: 20px"><a
                                                            href="#" class="text-white">Zone <br>Clients </a>
                                                        <br></span>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="fw-bold">
                                                        {{ number_format($clients) }}
                                                    </span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="card shining-card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="fs-6 fw-bold me-2" style="line-height: 20px"><a
                                                            href="#" class="text-white">Earnings <br> Generated </a>
                                                        <br></span>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="fw-bold">$
                                                        {{ number_format($earnings, 2) }}
                                                    </span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card shining-card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="fs-6 fw-bold me-2" style="line-height: 20px"><a
                                                            href="#" class="text-white">Missed <br> Earning </a>
                                                        <br></span>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="fw-bold">$
                                                        {{ number_format($missed_earnings, 2) }}
                                                    </span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-3">
                                    <div class="card shining-card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="fs-6 fw-bold me-2" style="line-height: 20px"><a
                                                            href="#" class="text-white">USDT <br> Deposit </a>
                                                        <br></span>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="fw-bold">$
                                                        {{ number_format($total_deposit, 2) }}
                                                    </span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card shining-card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/images/coins/01.png') }}"
                                                            class="img-fluid avatar avatar-30 avatar-rounded"
                                                            style="width: 30px">
                                                        <span class="fs-6 fw-bold me-2" style="line-height: 20px">USDT
                                                            Balance <br>
                                                            <span
                                                                style="font-weight: lighter">${{ number_format(1, 2) }}</span></span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="fs-6 fw-bold me-2" style="line-height: 20px">
                                                            {{ number_format($total_deposit - $total_purchase, 2) }} USDT
                                                            <br>
                                                            <span
                                                                style="font-weight: lighter">${{ number_format($total_deposit - $total_purchase, 2) }}</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    <div class="col-lg-6">
                                        <div class="card shining-card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/images/coins/00.png') }}"
                                                            class="img-fluid avatar avatar-30 avatar-rounded"
                                                            style="width: 30px">
                                                        <span class="fs-6 fw-bold me-2" style="line-height: 20px"><a
                                                                href="#" class="text-white">Hybridcoin</a> <br>
                                                            <span
                                                                style="font-weight: lighter">${{ number_format(1 / 1, 4) }}</span></span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="fs-6 fw-bold me-2"
                                                            style="line-height: 20px">{{ number_format($total_hbc, 4) }}
                                                            HBC <br>
                                                            <span style="font-weight: lighter">$ 0.0000
                                                            </span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- 
            <div class="row">
                <div class="col-md-12">
                    <div class="card " style="box-shadow: 1px 1px #fc0;">
                        <div class="card-body mb-0">

                            <h4 class="fw-bold small mb-3">Quick Actions</h4>

                            <div class="d-flex  justify-content-start pb-2 " style="overflow-x: scroll;">
                                <button class="btn btn-outline-info me-2 action-btn editSlot ">Edit <br> Slot Info</button>
                                <a href="#" class="btn btn-dark me-2 action-btn ">Check <br> Slot Owners</a>
                                <a href="#" class="btn btn-outline-warning me-2 action-btn ">Missed <br> Earnings</a>
                                <a href="#" class="btn btn-outline-success me-2 action-btn ">Client <br> Earnings</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div> --}}





            <div class="row">
                <div class="col-md-12">
                    <div class="card card-block card-stretch custom-scroll">
                        <div class="card-body p-0">
                            <div class="caption d-flex justify-content-between  p-2">
                                <h4 class="font-weight-bold mt-2">Recent Transactions</h4>

                                <a href="/admin/zone/transactions" class="btn ">View all Transactions</a>
                            </div>
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
                                                            <a href="/admin/user/{{ $trno->user->wallet }}">
                                                                {{ substr($trno->user->wallet, 0, 6) . '...' . substr($trno->user->wallet, -6) }}
                                                            </a>
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
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(function() {
            $('.editSlot').on('click', function() {
                $('#editSlot').modal('show')
            })
        })
    </script>
@endpush
