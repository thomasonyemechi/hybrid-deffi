@extends('layout.mobile')

@section('page_content')
    <div class="pt-68 pb-80">
        <div class="bg-menuDark tf-container">
            <div class="pt-12 pb-12 mt-4">
                <h5> <a href="#" class="choose-account" data-bs-toggle="modal" data-bs-target="#accountWallet"><span
                            class="dom-text">Qucik Actions </span></a> </h5>
                <ul class="mt-16 grid-4 m--16">

                    <li>
                        <a href="javascript:;" class="tf-list-item d-flex flex-column depositModalToZone gap-8 align-items-center text-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i
                                    class="icon icon-way2"></i></span>
                            Internal <br> Transfer
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;"
                            class="tf-list-item d-flex flex-column transferusdt gap-8 align-items-center text-center">
                            <span class="box-round bg-surface d-flex justify-content-center align-items-center"><i
                                    class="icon icon-way"></i></span>
                            USDT <br> Transfer
                        </a>
                    </li>

                </ul>
            </div>
        </div>





        <div class="tf-container">

            <div class="mt-20">
                <ul class="menu-tab-v3" role="tablist">
                    <li class="nav-link active" data-bs-toggle="tab" data-bs-target="#cryptocurrency" role="tab"
                        aria-controls="cryptocurrency" aria-selected="true">
                        Asset Tranfers
                    </li>
                </ul>
                <div class="tab-content mt-16 mb-16">
                    <div class="tab-pane fade show active" id="cryptocurrency" role="tabpanel">
                        <ul>
                            @foreach ($transfers as $dep)
                                <li class="mt-16">
                                    <a href="javascript:;" class="coin-item style-2 gap-12">
                                        <img src="{{ $dep->currency == 'usdt' ? asset('assets/images/coins/01.png') : asset('assets/images/coins/00.png') }}"
                                            class="img" alt="">


                                        <div class="content">
                                            <div class="title">
                                                <p class=" text-large text-danger ">- {{ number_format($dep->amount, 2) }}
                                                    {{ $dep->currency }}</p>
                                                <span class="text-secondary">{{ formatDate($dep->created_at) }}</span>
                                            </div>
                                            <div class="d-flex align-items-center gap-12">
                                                <span class="text-small">
                                                    @if (isset($dep->receiver->wallet))
                                                        {{ substr($dep->receiver->wallet, 0, 6) . '...' . substr($dep->receiver->wallet, -6) }}
                                                    @else
                                                        {{ $dep->receiver->username ?? '' }}
                                                    @endif
                                                </span>
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




    <div class="modal fade modalRight" id="transferusdt">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="header fixed-top bg-surface d-flex justify-content-center align-items-center">
                    <span class="left" data-bs-dismiss="modal" aria-hidden="true"><i class="icon-left-btn"></i></span>
                    <h3>Transfer USDT</h3>
                </div>
                <div class="overflow-auto pt-45 pb-16">
                    <div class="tf-container">
                        <div>
                            <form method="post" id="transferusdt" action="{{ route('transfer') }}">@csrf
                                <div class="d-1">



                                    <div class="swiper tf-swiper swiper-wrapper-r mt-16 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                                        data-space-between="16" data-preview="2" data-tablet="2" data-desktop="3">
                                        <div class="swiper-wrapper" id="swiper-wrapper-58b5a9a38e046c3c" aria-live="polite"
                                            style="transform: translate3d(0px, 0px, 0px);">
                                            <div class="swiper-slide">
                                                <a href="javascript:;" class="coin-box d-block">
                                                    <div class="coin-logo">
                                                        <img src="{{ asset('assets/images/coins/01.png') }}" alt="img"
                                                            class="logo">
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






                                    <div class="swiper-slide swiper-slide-active mt-12 mb-3">
                                        <div class="accent-box-v5 bg-menuDark " style="border-color: #fc0">
                                            <span class="icon-box bg-icon1"><i class="fw-bold"
                                                    style="font-weight: 600 !important; color: white;">!!</i></span>
                                            <div class="mt-12">
                                                <a href="#" class="text-small">Before You Trasnfer !!</a>
                                                <p class="mt-4">
                                                    Enter the correct amount of USDT and receiver's wallet address,
                                                    Funds cannot be reversed
                                                </p>

                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group mt-8">
                                        <label class="label-ip">
                                            <p class="mb-8 text-small"> Amount</p>
                                            <input class="text-white amount" type="number" placeholder="Enter Amount"
                                                required="required" name="amount">
                                            <i class="text-danger amt_error "></i>
                                        </label>


                                    </div>


                                    <div class="form-group mt-8">
                                        <label class="label-ip">
                                            <p class="mb-8 text-small"> Receiver's Wallet Address</p>
                                            <input class="text-white receiver" type="text" placeholder=""
                                                required="required" name="receiver">
                                            <div class="display_name"></div>
                                        </label>




                                    </div>



                                    <button type="button" class="mt-20  transferusdtbtn01 " disabled>Continue</button>
                                </div>

                                <div class="d-2" style="display: none ">
                                    <div class="swiper-slide swiper-slide-active mt-12 mb-3">
                                        <div class="accent-box-v5 bg-menuDark " style="border-color: rgb(27, 151, 32)">
                                            <div class="mt-12">
                                                <a href="#" class="text-small">Complete Transfer !!</a>
                                                <p class="mt-4">
                                                    Enter your access pin to completed transaction
                                                </p>

                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group mt-8">

                                        <label class="label-ip">
                                            <p class="mb-8 text-small"> Receiver's wallet </p>
                                            <select name="wallet_type" class="">
                                                <option selected disabled>... select wallet type ...</option>
                                                <option value="coin">Hybrid Coin Wallet</option>
                                                <option value="zone">Hybrid Zone Wallet</option>
                                            </select>

                                        </label>

                                        <div class="wallet_message mt-3">
                                            <div class="swiper-slide swiper-slide-active mb-3">
                                                <div class="accent-box-v5 bg-menuDark " style="border-color: blue">
                                                    <div class="">
                                                        <a href="#" class="text-small">Coin Transfer</a>
                                                        <p class="mt-4">
                                                            USDT will be sent to receiver hybrid coin wallet
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group l2 mt-8">

                                        <label class="label-ip">
                                            <p class="mb-8 text-small"> Access Pin </p>
                                            <input class="" type="password" placeholder="Enter yout six digit pin "
                                                autocomplete="new-password" name="access_pin">
                                            <input type="hidden" name="user_id">
                                        </label>
                                    </div>
                                    <button type="submit" class="mt-20  transferusdtbtn02" disabled>Send
                                        Funds</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>







    @include('mobile.transfer_to_zone_modal')
@endsection





@push('scripts')
    <script>
        $(function() {



            $('.depositModalToZone').on('click', function() {
                $('#depositModalToZone').modal('show');
            })

            $('.transferusdt').on('click', function() {
                $('#transferusdt').modal('show');
            })


        })
    </script>

    <script>
        $(function() {

            $('select[name="wallet_type"]').on('change', function() {
                val = $(this).val();
                console.log(val);

                msg = $('.wallet_message');

                if (val == 'coin') {
                    msg.html(`
                        <div class="swiper-slide swiper-slide-active mb-3">
                            <div class="accent-box-v5 bg-menuDark " style="border-color: blue">
                                <div class="">
                                    <a href="#" class="text-small">Coin Transfer</a>
                                    <p class="mt-4">
                                        USDT will be sent to receiver hybrid coin wallet
                                    </p>

                                </div>
                            </div>
                        </div>
                    `)

                    $('.transferusdtbtn02').removeAttr('disabled');


                } else if (val == 'zone') {
                    msg.html(`
                        <div class="swiper-slide swiper-slide-active mb-3">
                            <div class="accent-box-v5 bg-menuDark " style="border-color: red">
                                <div class="">
                                    <a href="#" class="text-small">Zone Transfer</a>
                                    <p class="mt-4">
                                         USDT will be sent to receiver hybrid zone wallet
                                    </p>

                                </div>
                            </div>
                        </div>
                    `)
                    $('.transferusdtbtn02').removeAttr('disabled');

                } else {
                    $('.transferusdtbtn02').attr('disabled', 'disabled');
                }
            })


            $('input[name="amount"]').on('keyup', function() {
                val = $(this).val();
                console.log(val);
                if (val < 6) {
                    $('.amt_error').html('Amount must be greated than 6 usdt !');
                    $('.transferusdtbtn01').attr('disabled', 'disabled');
                } else {
                    $('.amt_error').html(``);
                    $('.transferusdtbtn01').removeAttr('disabled');
                }
            })

            $('#transferusdt').on('submit', function() {
                $('.transferusdtbtn02').attr('disabled', 'disabled');
            })


            $('.transferusdtbtn01').on('click', function() {
                val = $('.receiver').val();
                amt = $('.amount').val();


                if (val == '' || amt == '') {
                    alert('all fields are required');
                    return;
                }

                balance = parseInt(`{{ $usdt_balance }}`)

                if (amt > balance) {
                    alert('Amount you entered is more than your balance');
                    return;
                }

                btn = $(this);

                // dis

                $.ajax({
                    method: 'get',
                    url: `/get_user?username=${val}`,
                    beforeSend: () => {
                        $(this).html('<i>Validating ID ... </1>')
                    }
                }).done(res => {
                    $('.d-1').hide('slowly')
                    $('.d-2').show('slowly')
                    $('.dd-2').html(`Send ${amt} USDT to ${res.wallet}`)
                    btn.removeAttr('disabled', 'disabled');
                    $('input[name="user_id"]').val(res.id);
                    // dis.html(`<i class="text-success">Send to ${res.username}</i>`)
                }).fail(res => {
                    alert('This wallet address does not exist in our database');
                    // dis.html('<i class="text-danger" >This username does not exist</i>')
                    btn.html('Continue');
                })
            })

        })
    </script>
@endpush
