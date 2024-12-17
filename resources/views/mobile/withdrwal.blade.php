@extends('layout.mobile')

@section('page_content')
    <div class="pt-68 pb-80">

        <div class="tf-container">
            <div class="mt-4 coin-item style-2 gap-8">
                <h5>Withdrawal USDT</h5>
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
                                        <span>{{ number_format($usdt_balance, 2) }} USDT</span>
                                    </div>
                                </div>
                                <div class="blur bg2">
                                </div>
                            </a>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>








            <form method="post" action="/withdrawal">@csrf
                <div class="form-group mt-8">
                    <label class="label-ip">
                        <p class="mb-8 text-small"> Amount In USDT </p>
                        <input type="number" name="amount" min="10" placeholder="Minimum: 10 USDT"
                            max="{{ $usdt_balance }}">

                    </label>

                    @error('amount')
                        <i class="text-danger ">{{ $message }} </i>
                    @enderror

                </div>

                <button class="mt-20 buypmcbtn">Withdraw USDT </button>
            </form>





            <div class="mt-20">
                <ul class="menu-tab-v3" role="tablist">
                    <li class="nav-link active" data-bs-toggle="tab" data-bs-target="#cryptocurrency" role="tab"
                        aria-controls="cryptocurrency" aria-selected="true">
                        USDT Withdrawal History
                    </li>
                </ul>
                <div class="tab-content mt-16 mb-16">
                    <div class="tab-pane fade show active" id="cryptocurrency" role="tabpanel">
                        <ul>

                            @foreach ($withdrawals as $with)
                                <li class="mt-16">
                                    <a class="coin-item style-2 gap-12">
                                        <img src="{{ asset('mobile/images/coin/coin-2.jpg') }}" alt="img"
                                            class="img">
                                        <div class="content">
                                            <div class="title">

                                                @if ($with->status == 'approved')
                                                    <p class="mb-4 text-button text-danger "> -
                                                        {{ number_format($with->amount) }} USDT</p>
                                                @else
                                                    <p class="mb-4 text-button  ">
                                                        {{ number_format($with->amount) }} USDT</p>
                                                @endif

                                                <span
                                                    class="text-secondary">{{ date('j M Y h:i a', strtotime($with->created_at)) }}
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center gap-12">
                                                {!! depositStatus($with->status) !!}
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach

                            @if (count($withdrawals) == 0)
                                <li class="mt-16">
                                    <div class="swiper-slide swiper-slide-active mt-12">
                                        <div class="accent-box-v5 bg-menuDark " style="border: 1px solid #fc0">
                                            <div class="mt-12">
                                                <a href="#" class="text-small"> No Items !! </a>
                                                <p class="mt-4">
                                                    There are no items to display on this section, USDT withdrawals will be
                                                    displayed here
                                                    <br>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>


        </div>


    </div>
@endsection
