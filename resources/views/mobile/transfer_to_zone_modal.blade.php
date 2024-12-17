{{-- <div id="depositModalToZone" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="depositModalToZone"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tranfer To HybridZone Wallet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">


                <div>
                    <form method="post" action="{{ route('transfer_tozone') }}">@csrf
                        <div class="d-1">
                            <div class="alert alert-info">
                                USDT will be transfered to your Hybrid Zone wallet, where you will be able to use
                                funds to activate hyrid zones
                            </div>



                            <div class="card shining-card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{ asset('assets/images/coins/01.png') }}"
                                                class="img-fluid avatar avatar-30 avatar-rounded" style="width: 30px">
                                            <span class="fs-6 fw-bold me-2" style="line-height: 20px">USDT balance
                                                <br>
                                                <span style="font-weight: lighter">
                                                    {{ number_format($usdt_balance, 2) }}
                                                    <small>USDT</small> </span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="amount">Amount <span class="text-danger">*</span> </label>
                                <input type="number" class="form-control amount" name="amount" min="6"
                                    placeholder="Enter Amount" required>
                                <i class="text-danger amt_error "></i>

                                @error('amount')
                                    <i class="text-danger  ">{{ $message }} </i>
                                @enderror
                            </div>
                            <div class="form-group l2 ">
                                <label for="text">Access Pin</label>
                                <input type="password" name="access_pin" autocomplete="new-password"
                                    class="form-control" placeholder="Enter yout six digit pin">
                                <small class="text-info text-sm">
                                    Enter your access pin to completed transaction
                                </small>
                            </div>


                            <div class="d-flex justify-content-end ">
                                <button type="submit" class="btn btn-primary rounded">Transfer to HybridZone
                                    Wallet</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 --}}



<div class="modal fade modalRight" id="depositModalToZone">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="header fixed-top bg-surface d-flex justify-content-center align-items-center">
                <span class="left" data-bs-dismiss="modal" aria-hidden="true"><i class="icon-left-btn"></i></span>
                <h3>Tranfer To HybridZone Wallet</h3>
            </div>
            <div class="overflow-auto pt-45 pb-16">
                <div class="tf-container">
                    <div>
                        <form method="post" action="{{ route('transfer_tozone') }}">@csrf
                            <div class="d-1">



                                <div class="swiper tf-swiper swiper-wrapper-r mt-16 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                                    data-space-between="16" data-preview="2.8" data-tablet="2.8" data-desktop="3">
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
                                                USDT will be transfered to your Hybrid Zone wallet, where you will be
                                                able to use funds to activate hyrid zones
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

                                    @error('amount')
                                        <i class="text-danger  ">{{ $message }} </i>
                                    @enderror


                                </div>


                                <div class="form-group l2 mt-8">

                                    <label class="label-ip">
                                        <p class="mb-8 text-small"> Access Pin </p>
                                        <input class="" type="password" placeholder="Enter yout six digit pin "
                                            autocomplete="new-password" name="access_pin">
                                    </label>
                                </div>


                                <button type="submit" class="mt-20  ">Tranfer To HybridZone Wallet</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
