<div id="depositModalToZone" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="depositModalToZone"
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
