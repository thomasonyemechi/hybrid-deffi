@extends('layout.mobile')

@section('page_content')
    <style>
        .icon-book:before {
            content: "\e913";
            color: #fc0;
        }
    </style>

    @php
        $price = coinTotalPurchase(auth()->user()->id);
    @endphp



    <div class="pt-68 pb-80">

        <div class="tf-container">
            <div class="mt-4 coin-item style-2 gap-8">
                <h5>Buy Hybrid Coin</h5>
            </div>

            <div class="pt-6  mt-16">
         

                <div class="swiper tf-swiper swiper-wrapper-r mt-16 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                    data-space-between="16" data-preview="2" data-tablet="2" data-desktop="3">
                    <div class="swiper-wrapper" id="swiper-wrapper-58b5a9a38e046c3c" aria-live="polite"
                        style="transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide">
                            <a href="javascript:;" class="coin-box d-block">
                                <div class="coin-logo">
                                    <img src="{{ asset('assets/images/coins/01.png') }}" alt="img" class="logo">
                                    <div class="title">
                                        <p>USDT Balance</p>
                                        <span>{{ number_format($usdt_balance, 2) }} usdt</span>
                                    </div>
                                </div>
                                <div class="blur bg3">
                                </div>
                            </a>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>







            </div>



            <div class="swiper-slide swiper-slide-active mt-12">
                <div class="accent-box-v5 bg-menuDark " style="border-color: #fc0">
                    <span class="icon-box bg-icon1"><i class="fw-bold"
                            style="font-weight: 600 !important; color: white;">!!</i></span>
                    <div class="mt-12">
                        <a href="#" class="text-small">Minimum Purchase</a>
                        <p class="mt-4">
                            <span class="badge bg-success">
                                First Time: $50
                            </span>
                            <span class="badge bg-secondary">Afterwards: $10</span>

                        </p>
                    </div>
                </div>
            </div>




            <form method="post" id="buypmc" action="{{ route('buy_hybridcoin') }}">@csrf

                <div class="mt-16 group-ip-select">
                    <input type="number" name="usdt_amount" {{ $price > 0 ? 'min=10' : 'min=50' }}
                        max="{{ $usdt_balance }}" name="usdt" id="usdt" value="{{ old('wallet') }}">
                    <div class="select-wrapper">
                        <select class="tf-select">
                            <option value="">USDT</option>
                        </select>
                    </div>


                    @error('wallet')
                        <i class="text-danger ">{{ $message }} </i>
                    @enderror
                </div>
                <p class="mt-8">10 - 10,0000 USDT</p>

                <div class="mt-16 group-ip-select">
                    <input type="number" name="pc" id="pc" readonly>
                    <div class="select-wrapper">
                        <select class="tf-select">
                            <option value="">HBC</option>
                        </select>
                    </div>
                </div>



                <button type="submit" class="tf-btn lg primary mt-20 buypmcbtn ">Buy</button>

            </form>




            <div class=" mt-5 d-flex ">
                <div class="swiper-slide swiper-slide-active mt-12" style="width: 50%; margin-right: 12px;">
                    <div class="accent-box-v5 bg-menuDark " style="border-color: blue">
                        <div class="mt-12">
                            <a href="#" class="text-small">Royalty Strength </a>
                            <h3>
                                {{ number_format($price) }}
                            </h3>
                        </div>
                    </div>
                </div>



                <div class="swiper-slide swiper-slide-active mt-12" style="width: 50%; margin-right: 12px;">
                    <div class="accent-box-v5 bg-menuDark " style="border-color: green">
                        <div class="mt-12">
                            <a href="#" class="text-small">Royalty Benchmark </a>
                            <h3>
                                {{ number_format(2000) }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-20">
                <ul class="menu-tab-v3" role="tablist">
                    <li class="nav-link active" data-bs-toggle="tab" data-bs-target="#cryptocurrency" role="tab"
                        aria-controls="cryptocurrency" aria-selected="true">
                        Crypto Purchases
                    </li>
                </ul>
                <div class="tab-content mt-16 mb-16">
                    <div class="tab-pane fade show active" id="cryptocurrency" role="tabpanel">
                        <ul>


                            @foreach ($purchases as $pur)
                                <li class="mt-16">
                                    <a class="coin-item style-2 gap-12">
                                        <img src="{{ asset('assets/images/coins/00.png') }}" class="img" alt="">


                                        <div class="content">
                                            <div class="title">
                                                <p class="mb-4 text-button text-success "> +
                                                    {{ number_format($pur->amount * $pur->rate, 2) }} HBC</p>
                                                <span
                                                    class="text-secondary">{{ date('j M Y h:i a', strtotime($pur->created_at)) }}
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center gap-12">
                                                <span class="text-small"> {{ $pur->rate }} / USDT </span>
                                                <span class="coin-btn decrease">-{{ $pur->amount }} USDT</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>


        </div>


    </div>
@endsection


@push('scripts')
    <script>
        $(function() {

            // $('#pc').on('keyup', function() {
            //     pc = $('#pc');
            //     usdt = $('#usdt');
            //     coin = parseInt(pc.val());
            //     $.ajax({
            //         method: 'get',
            //         url: '/get_price'
            //     }).done(function(res) {
            //         price = coin / res.price
            //         usdt.val(price)
            //     }).fail(function(res) {
            //         console.log(res);
            //     })
            // })


            $('#buypmc').on('submit', function() {
                $('.buypmcbtn').attr('disabled', 'disabled');
            })


            $('#usdt').on('keyup', function() {
                usdt = $('#usdt');



                amt_usdt = parseInt(usdt.val());
                $.ajax({
                    method: 'get',
                    url: '/get_price'
                }).done(function(res) {
                    price = amt_usdt * res.price

                    price = (price == NaN) ? 0 : price;

                    $('#pc').val(price)
                }).fail(function(res) {
                    console.log(res);
                })
            })

        })
    </script>
@endpush
