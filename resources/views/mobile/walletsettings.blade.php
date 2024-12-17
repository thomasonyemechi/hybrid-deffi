@extends('layout.mobile')

@section('page_content')
    <style>
        .icon-book:before {
            content: "\e913";
            color: #fc0;
        }
    </style>



    <div class="pt-68 pb-80">

        <div class="tf-container">



            <h5 class="mt-20">Manage Wallet </h5>

            <ul class="mt-16 pb-16 line-bt">

                <li>
                    <form method="POST" action="/wallet_update" autocomplete="off">@csrf

                        @if (auth()->user()->wallet == null ||
                                strtolower(substr(auth()->user()->wallet, 0, 1)) != 't' ||
                                strlen(auth()->user()->wallet) < 20)
                            <div class="form-group mt-8">
                                <label class="label-ip">
                                    <p class="mb-8 text-small"> TRX Wallet Address: </p>
                                    <input type="text" name="wallet_address" value="{{ old('wallet_address') }}"
                                        autocomplete="off">
                                </label>

                                @error('wallet_address')
                                    <i class="text-danger ">{{ $message }} </i>
                                @enderror

                            </div>






                            <div class="form-group mt-8">
                                <label class="label-ip">
                                    <p class="mb-8 text-small"> Access Pin: </p>
                                    <input type="password" name="access_pin" required autocomplete="new-psword"
                                        placeholder=" 6 Digit Pin">
                                </label>
                                @error('access_pin')
                                    <i class="text-danger  ">{{ $message }} </i>
                                @enderror

                            </div>





                            <div class="form-group mt-8">
                                <label class="label-ip">
                                    <p class="mb-8 text-small">Confirm Access Pin: </p>
                                    <input type="password" name="confirm_access_pin" placeholder="Confirm Access Pin"
                                        required autocomplete="new-psword">
                                </label>
                                @error('confirm_access_pin')
                                    <i class="text-danger  ">{{ $message }} </i>
                                @enderror

                            </div>



                            <button class="mt-20" type="submit">Update Wallet Address </button>
                        @else
                            <div class="form-group mt-8">
                                <label class="label-ip">
                                    <p class="mb-8 text-small">TRX Wallet Address: </p>
                                    <input type="text" name="old" value="{{ auth()->user()->wallet }}" readonly>
                                </label>
                            </div>
                        @endif

                    </form>
                </li>

            </ul>





            <ul class="mt-16 pb-16 line-bt">
                <li>
                    <h5>Control Payment Currency </h5>



                    <div class="swiper-slide swiper-slide-active mt-12">
                        <div class="accent-box-v5 bg-menuDark ">
                            <span class="icon-box bg-icon1"><i class="icon-wallet"></i></span>
                            <div class="mt-12">
                                <p class="mt-4">
                                    If turned on, TRX deposited will be converted to USDT. If turned off, TRX
                                    deposited will be converted to HBC
                                </p>

                                <br>




                                <a href="#" class="text-xs mt-10">
                                    Current TRX deposited will be converted to
                                    <span class="fw-bold">{{ strtoupper(auth()->user()->collect_currency) }}</span>
                                </a>
                            </div>
                        </div>
                    </div>





                </li>
                <li>

                    <form action="/update_collect_currency" method="post">
                        @csrf

                        <div class="mt-16 d-flex justify-content-between align-items-center">
                            <p class="text-small">Accept Payment in USDT</p>
                            <input class="tf-switch-check" type="checkbox"  onchange="submit()" {{ (auth()->user()->collect_currency == 'usdt') ? 'checked' : '' }}>
                        </div>
                    </form>
                </li>

                <li>
                    <form action="/update_collect_currency" method="post">
                        @csrf
                        <div class="mt-16 d-flex justify-content-between align-items-center">
                            <p class="text-small">Accept Payment in HBC</p>
                            <input class="tf-switch-check" type="checkbox"  onchange="submit()" {{ (auth()->user()->collect_currency == 'hbc') ? 'checked' : '' }}>
                        </div>
                    </form>
                </li>

            </ul>


        </div>






    </div>
@endsection
