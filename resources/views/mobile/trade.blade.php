@extends('layout.mobile')

@section('page_content')
    <div class="pt-68 pb-80">

        <div class="tf-container">
            <div class="mt-4 coin-item style-2 gap-8">
                <h5>Convert SHC to USDT</h5>
            </div>

            <div class="pt-6  mt-16">
                <div class="swiper tf-swiper swiper-wrapper-r mt-16 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                    data-space-between="16" data-preview="2" data-tablet="2" data-desktop="3">
                    <div class="swiper-wrapper" id="swiper-wrapper-58b5a9a38e046c3c" aria-live="polite"
                        style="transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide">
                            <a href="javascript:;" class="coin-box d-block">
                                <div class="coin-logo">
                                    <img src="{{ asset('assets/images/coins/02.png') }}" alt="img" class="logo">
                                    <div class="title">
                                        <p>SHC Balance</p>
                                        <span> {{ number_format($spc_balance, 2) }} SHC</span>
                                    </div>
                                </div>
                                <div class="blur bg1">
                                </div>
                            </a>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>








            <form method="post" id="buypmc" action="{{ route('trade_spc') }}">@csrf
                <div class="form-group mt-8">
                    <label class="label-ip">
                        <p class="mb-8 text-small"> Amount to Trade </p>
                        <input type="number" name="amount" max="{{ $spc_balance }}" value="{{ old('amount') }}">
                    </label>

                    @error('amount')
                        <i class="text-danger ">{{ $message }} </i>
                    @enderror

                </div>

                <button class="mt-20 buypmcbtn">Trade SHC </button>
            </form>





            <div class="mt-20">
                <ul class="menu-tab-v3" role="tablist">
                    <li class="nav-link active" data-bs-toggle="tab" data-bs-target="#cryptocurrency" role="tab"
                        aria-controls="cryptocurrency" aria-selected="true">
                        SHC conversion History
                    </li>
                </ul>
                <div class="tab-content mt-16 mb-16">
                    <div class="tab-pane fade show active" id="cryptocurrency" role="tabpanel">
                        <ul>


                            @foreach ($trades as $pur)
                                <li class="mt-16">
                                    <a class="coin-item style-2 gap-12">
                                        <img src="{{ asset('assets/images/coins/01.png') }}" class="img" alt="">
                                        <div class="content">
                                            <div class="title">
                                                <p class="mb-4 text-button text-success "> +
                                                    {{ number_format($pur->amount) }} USDT</p>
                                                <span
                                                    class="text-secondary">{{ date('j M Y h:i a', strtotime($pur->created_at)) }}
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center gap-12">
                                                <span class="coin-btn decrease">-{{ $pur->amount }} SHC</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach

                            @if (count($trades) == 0)
                                <li class="mt-16">
                                    <div class="swiper-slide swiper-slide-active mt-12">
                                        <div class="accent-box-v5 bg-menuDark " style="border: 1px solid #fc0">
                                            <div class="mt-12">
                                                <a href="#" class="text-small"> No Items !! </a>
                                                <p class="mt-4">
                                                    There are no items to display on this section, SHC that have been converted to usdt will be displayed here 
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
