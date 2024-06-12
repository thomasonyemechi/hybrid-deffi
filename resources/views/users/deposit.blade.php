@extends('layout.main')

@section('page_content')
    @php
        $vr = $errors->any() ? 1 : 0;
        $er = session('success') || $errors->any() ? 1 : 0;
        $sr = session('success') ? 1 : 0;
    @endphp
    <div class="container-fluid content-inner pb-0">
        <div class="row pt-2">
            <div class="col-lg-12">
                <div class="alert alert-solid alert-warning">
                    Funds will be lost if sent from any wallet different from the wallet address you launched with
                    <br>
                    <span class="badge bg-success"> {{ auth()->user()->wallet }} </span>
                    <br>
                    Recommended wallet is Trust Wallet
                </div>
                <div class="alert alert-solid alert-primary shadow d-flex align-items-center" role="alert">
                    <div>
                        <p>

                            To fund your Hybrid Wallet, kindly send a minimum of 400 TRX (TRC20) to the address below. In
                            less
                            than 12 hours, when your deposit is confirmed, our system will automatically convert TRX
                            to
                            USDT into your Hybrid Wallet.


                        </p>


                        <div class="wallet_area">

                            <div class="wallet_loader mb-3">
                                <span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i
                                    class="">Loading Deposit Wallet Address ... </i>
                            </div>
                            <div class="wallet_copy">

                            </div>
                        </div>


                        <p>

                            The above deposit address is been changed from time to time to ensure an efficient
                            infrastructure and fund security for users. Please always check before sending TRX.</p>

                    </div>
                </div>

                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Your Deposits</h4>
                        </div>
                        {{-- <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#depositModal">Deposit USDT</button>
                        </div> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table data-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Remark</th>
                                        <th scope="col">Timestamp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($deposits as $dep)
                                        <tr class="white-space-no-wrap">
                                            <td class="pe-2"> {!! depositAmount($dep->amount) !!} </td>
                                            <td>
                                                <div class="badge bg-success">
                                                    Successful
                                                </div>
                                            </td>
                                            <td>{{ $dep->remark }} </td>
                                            <td> {{ $dep->created_at }} </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div id="depositModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="depositModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Deposit USDT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">


                        <div id="dep_1">
                            <div class="alert alert-solid alert-primary d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                <div>
                                    <b>NOTE:</b>
                                    To avoid loss of funds, enusre you are sending your USDT TRC20 tokens from the wallet
                                    address that is saved in the profile section.

                                    <bR><br>
                                    <span> {{ auth()->user()->wallet }} </span>
                                    <br><br>



                                    Recommended Wallet to use: Trust Wallet or TronLink Wallet


                                    CLICK ON THE DEPOSIT BUTTON TO START
                                </div>
                            </div>

                            <button class="btn btn-secondary mt-3 got02">Deposit</button>
                        </div>

                        <div id="dep_2" style="display: none">
                            <p>Input the amount of USDT you want to deposit into your Hybridcoin wallet and click on deposit
                            </p>
                            <form method="post" id="depositusdt" action="{{ route('make_deposit') }}">@csrf
                                <div class="form-group">
                                    <label for="amount">Amount *</label>
                                    <input type="number" class="form-control" name="amount" value="{{ old('amount') }}">
                                    @error('amount')
                                        <i class="text-danger  ">{{ $message }} </i>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="text">Your Wallet Address *</label>
                                    <input type="text" name="wallet" class="form-control"
                                        value="{{ auth()->user()->wallet }}" readonly>

                                </div>

                                <button type="submit" class="btn btn-primary depositusdtbtn rounded">Deposit</button>
                            </form>

                        </div>

                        <div id="dep_3" style="display: none">

                            <p>
                                Send the exact amount of USDT (TRC20) tokens you want to deposit to the wallet address
                                below: <br><br>

                            <div class="d-flex justify-content-lg-start">
                                <input type="text" id="input_field" readonly class="form-control"
                                    value="{{ $coin->wallet_address }}">
                                <button class="btn btn-primary" onclick="yourFunction()" type="submit">Copy</button>
                            </div>


                            <br><br>
                            Check back in few minutes, your account will credited as soon as your deposit is confirmed
                            on the blockchain.
                            </p>

                            <button class="btn btn-secondary mt-2 done">Done</button>
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
            er = `{{ $er }}`
            vr = `{{ $vr }}`
            sr = `{{ $sr }}`
            if (er > 0) {
                $('#depositModal').modal('show')
            }
            if (vr > 0) {
                $('#dep_1').hide('slowly');
                $('#dep_2').show('slowly');
            }
            if (sr > 0) {
                $('#dep_1').hide('slowly');
                $('#dep_2').hide('slowly');
                $('#dep_3').show('slowly');
            }
            console.log(er);


            $('#depositusdt').on('submit', function() {
                $('.depositusdtbtn').attr('disabled', 'disabled');
            })


            $('.got02').on('click', function() {
                $('#dep_1').hide('slowly');
                $('#dep_2').show('slowly');
            })

            $('.done').on('click', function() {
                $('#depositModal').modal('hide')
                $('#dep_1').show('slowly');
                $('#dep_2').hide('slowly');
                $('#dep_3').hide('slowly');
            })
        })
    </script>


    <script>
        $(function() {




            function loadWallet() {
                old_wallet = localStorage.getItem('d_wallet');



                $.ajax({
                    method: 'get',
                    url: `/validate_wallet/${old_wallet}`
                }).done(function(res) {
                    if (res.old_wallet_is_valid) {
                        console.log('old is gold');
                    } else {
                        // set expiry time for wallet address
                        localStorage.setItem('d_wallet', res.new_wallet);
                    }

                    loadString();

                }).fail(function(res) {
                    console.log(res);
                })
            }


            function loadString() {
                old_wallet = localStorage.getItem('d_wallet');

                wallet_area = $('.wallet_area');

                wallet_loader = $(wallet_area).find('.wallet_loader');
                wallet_loader.hide();


                wallet_copy = $(wallet_area).find('.wallet_copy');
                wallet_copy.html(`
                    <span class="badge mb-2 bg-danger"> ${old_wallet} </span>
                    <div class="d-flex mb-3 justify-content-lg-start">
                        <input type="text" id="input_field" readonly
                            class="form-control shadow text-danger bg-light form-control-sm fw-bold me-2"
                            style="border: 2px solid red;" value="${old_wallet}">
                        <button class="btn bg-light fw-bold text-danger shadow " onclick="yourFunction()"
                            style="border: 2px solid red;" type="submit">Copy</button>
                    </div>
                `)
            }

            loadWallet();
        })
    </script>



    <script>
        const input_field = document.getElementById('input_field')

        function yourFunction() {
            input_field.select(); // select the input field
            input_field.setSelectionRange(0, 99999); // For mobile devices
            navigator.clipboard.writeText(input_field.value)

        }
    </script>
@endpush
