@extends('layout.mobile')

@section('page_content')
    <div class="pt-68 pb-80">

        @if (count($announcement) > 0)
            <marquee behavior="" direction="" class="mb-3 text-white">
                @foreach ($announcement as $ann)
                    {{ $ann->announcement }} <b></b>
                @endforeach
            </marquee>
        @endif



        <div class="bg-menuDark tf-container">
            <div class="pt-12 pb-12 mt-4">
                <h5><span class="text-primary">Wallet</span> - <a href="#" class="choose-account" data-bs-toggle="modal"
                        data-bs-target="#accountWallet"><span class="dom-text">Hybrid Coin </span>
                        &nbsp;<i class="icon-select-down"></i></a> </h5>
                <h1 class="mt-16"><a href="#">${{ number_format($total, 2) }}</a></h1>
                <ul class="mt-16 grid-4 m--16">

                    <li>
                        <a href="/deposit" class="tf-list-item d-flex flex-column gap-8 align-items-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i
                                    class="icon icon-bank"></i></span>
                            Deposit
                        </a>
                    </li>
                    <li>
                        <a href="/convert" class="tf-list-item d-flex flex-column gap-8 align-items-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i
                                    class="icon icon-swap"></i></span>
                            Buy Coin
                        </a>
                    </li>
                    <li>
                        <a href="/earnings" class="tf-list-item d-flex flex-column gap-8 align-items-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i
                                    class="icon icon-exchange"></i></span>
                            Earnings
                        </a>
                    </li>
                    <li>
                        <a href="/transfer" class="tf-list-item d-flex flex-column gap-8 align-items-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i
                                    class="icon icon-way"></i></span>
                            Transfer
                        </a>
                    </li>
                </ul>
            </div>
        </div>










        <div class="bg-menuDark tf-container">
            <div class="pt-12 pb-12 mt-4">
                <h5>Other Balance</h5>

                <div class="swiper tf-swiper swiper-wrapper-r mt-16 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                    data-space-between="16" data-preview="2.2" data-tablet="2.2" data-desktop="3">
                    <div class="swiper-wrapper" id="swiper-wrapper-58b5a9a38e046c3c" aria-live="polite"
                        style="transform: translate3d(0px, 0px, 0px);">

                        <div class="swiper-slide">
                            <a href="javascript:;" class="coin-box d-block">
                                <div class="coin-logo">
                                    <img src="{{ asset('assets/images/coins/00.png') }}" alt="img" class="logo">
                                    <div class="title">
                                        <p>Hybrid Coin</p>
                                        <span>HBC</span>
                                    </div>
                                </div>
                                <div class="mt-8 mb-8 coin-chart">
                                    <div id="line-chart-4"></div>
                                </div>
                                <div class="coin-price d-flex justify-content-between">
                                    <span>{{ number_format($pc_balance, 4) }} HBC <br> <small
                                            style="font-size: 10px; color: rgb(197, 186, 186)">${{ number_format($pc_total, 4) }}</small>
                                    </span>
                                    <span class="text-primary d-flex align-items-center gap-2"><i
                                            class="icon-select-up"></i> ${{ number_format(1 / $rate, 4) }}</span>
                                </div>
                                <div class="blur bg1">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="coin-box d-block">
                                <div class="coin-logo">
                                    <img src="{{ asset('assets/images/coins/01.png') }}" alt="img" class="logo">
                                    <div class="title">
                                        <p>USDT</p>
                                    </div>
                                </div>
                                <div class="mt-8 mb-8 coin-chart">
                                    <div id="line-chart-4"></div>
                                </div>
                                <div class="coin-price d-flex justify-content-between">
                                    <span>{{ number_format($usdt_balance, 4) }} USDT <br> <small
                                            style="font-size: 10px; color: rgb(197, 186, 186)">${{ number_format($usdt_balance, 4) }}</small>
                                    </span>
                                </div>
                                <div class="blur ">
                                </div>
                            </a>
                        </div>


                        <div class="swiper-slide">
                            <a href="javascript:;" class="coin-box d-block">
                                <div class="coin-logo">
                                    <img src="{{ asset('assets/images/coins/02.png') }}" alt="img" class="logo">
                                    <div class="title">
                                        <p>Commision</p>
                                        <span>SHC</span>
                                    </div>
                                </div>
                                <div class="mt-8 mb-8 coin-chart">
                                    <div id="line-chart-5"></div>
                                </div>
                                <div class="coin-price d-flex justify-content-between">
                                    <span> {{ number_format($spc_balance, 2) }} SHC <br> <small
                                            style="font-size: 10px; color: rgb(197, 186, 186)">$
                                            ${{ number_format($spc_balance, 2) }}</small> </span>
                                    <span class="text-primary d-flex align-items-center gap-2"><i
                                            class="icon-select-up"></i>${{ number_format(1, 2) }}</span>
                                </div>
                                <div class="blur bg2">
                                </div>
                            </a>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>

            </div>
        </div>





        <div class="bg-menuDark tf-container">
            <div class="tf-tab pt-12 mt-4">
                <div class="tab-slide">
                    <ul class="nav nav-tabs wallet-tabs" role="tablist">
                        <li class="item-slide-effect"></li>
                        <li class="nav-item active" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#history"
                                aria-selected="true" role="tab">Transactions</button>
                        </li>
                        {{-- <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#market" aria-selected="false"
                                tabindex="-1" role="tab">Market</button>
                        </li> --}}


                    </ul>
                </div>
                <div class="tab-content pt-16 pb-16">
                    <div class="tab-pane fade active show" id="history" role="tabpanel">
                        <ul>


                            @foreach ($transactions as $trno)
                                <li class="mt-8">
                                    <a href="javascript:;" class="coin-item style-1 gap-12 bg-surface">
                                        <img src="{{ $trno->currency == 'usdt' ? '../../assets/images/coins/01.png' : '../../assets/images/coins/00.png' }}"
                                            class="img" alt="">
                                        <div class="content">
                                            <div class="title">
                                                <p
                                                    class="mb-4 text-large {{ $trno->amount > 0 ? 'text-success' : 'text-danger' }} ">
                                                    {{ number_format($trno->amount, 2) }} {{ $trno->currency }}</p>
                                                <span class="text-secondary">{{ formatDate($trno->created_at) }}</span>
                                            </div>
                                            <div class="box-price">
                                                <p class="text-end">{{ $trno->remark }} </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach




                        </ul>
                    </div>
                    <div class="tab-pane fade" id="market" role="tabpanel">
                        <ul>

                            {{-- <li class="mt-8">
                                <a href="choose-payment" class="coin-item style-1 gap-12 bg-surface">
                                    <img src="images/coin/coin-4.jpg" alt="img" class="img">
                                    <div class="content">
                                        <div class="title">
                                            <p class="mb-4 text-large">Anchor</p>
                                            <span class="text-secondary">12:00 AM</span>
                                        </div>
                                        <div class="box-price">
                                            <p class="text-small mb-4"><span class="text-primary">+</span> ETH 1,498</p>
                                            <p class="text-end"><span class="text-red">-</span> $12948,68</p>
                                        </div>
                                    </div>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>



    </div>



    <div class="modal fade action-sheet" id="accountWallet">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span>Wallet</span>
                    <span class="icon-cancel" data-bs-dismiss="modal"></span>
                </div>
                <ul class="mt-20 pb-16">
                    <li data-bs-dismiss="modal">
                        <div
                            class="d-flex justify-content-between align-items-center gap-8 text-large item-check active dom-value">
                            Hybrid Coin Account <i class="icon icon-check-circle"></i> </div>
                    </li>
                    <li class="mt-4" data-bs-dismiss="modal">
                        <div class="d-flex  justify-content-between gap-8 text-large item-check dom-value">hybrid Zone
                            Account<i class="icon icon-check-circle"></i></div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
@endsection
