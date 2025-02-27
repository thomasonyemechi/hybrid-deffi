@extends('layout.main')

@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row pt-2">
            <div class="col-lg-12">
                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Transfers</h4>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#depositModalToZone">Internal Transfer</button>
                        </div>

                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#depositModal">Transfer USDT</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm  mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Wallet</th>

                                        <th scope="col">Status</th>
                                        <th scope="col">Timestamp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transfers as $dep)
                                        <tr class="white-space-no-wrap">
                                            <td class="pe-2"> {!! depositAmount($dep->amount) !!} </td>
                                            <td>
                                                <span class="title fw-bold">
                                                    @if (isset($dep->receiver->wallet))
                                                        {{ substr($dep->receiver->wallet, 0, 6) . '...' . substr($dep->receiver->wallet, -6) }}
                                                    @else
                                                        {{ $dep->receiver->username ?? '' }}
                                                    @endif
                                                </span>
                                            </td>
                                            <td>
                                                <div class="badge  bg-success">
                                                    successful
                                                </div>
                                            </td>
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
                        <h5 class="modal-title">Tranfer USDT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">


                        <div>
                            <form method="post" id="transferusdt" action="{{ route('transfer') }}">@csrf
                                <div class="d-1">
                                    <div class="alert alert-warning">
                                        Enter the correct amount of USDT and receiver's wallet address,
                                        Funds cannot be reversed
                                    </div>



                                    <div class="card shining-card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="{{ asset('assets/images/coins/01.png') }}"
                                                        class="img-fluid avatar avatar-30 avatar-rounded"
                                                        style="width: 30px">
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
                                    <div class="form-group ">
                                        <label for="text">Receiver's Wallet Address <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="receiver" class="form-control receiver" placeholder="">
                                        <div class="display_name"></div>
                                    </div>



                                    <button type="button" class="btn btn-primary transferusdtbtn01 rounded"
                                        disabled>Continue</button>
                                </div>

                                <div class="d-2" style="display: none">
                                    <div>
                                        <div class="dd-2 badge bg-success"></div>
                                        <p class="mt-2">Enter your access pin to completed transaction</p>
                                    </div>



                                    <div class="form-group">
                                        <label for="amount"> Receiver's wallet <span class="text-danger">*</span> </label>

                                        <select name="wallet_type" class="form-control">
                                            <option selected  disabled  >... select wallet type ...</option>
                                            <option value="coin">Hybrid Coin Wallet</option>
                                            <option value="zone">Hybrid Zone Wallet</option>
                                        </select>

                                        @error('wallet')
                                            <i class="text-danger  ">{{ $message }} </i>
                                        @enderror


                                        <div class="wallet_message mt-3">
                                            <div class="alert alert-primary">
                                                USDT will be sent to receiver hybrid coin wallet
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group l2 ">
                                        <label for="text">Access Pin</label>
                                        <input type="password" name="access_pin" autocomplete="new-password"
                                            class="form-control" placeholder="Enter yout six digit pin">
                                        <input type="hidden" name="user_id">
                                    </div>


                                    <button type="submit" class="btn btn-primary transferusdtbtn02 rounded" disabled>Send
                                        Funds</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        @include('users.transfer_to_zone_modal')


    </div>
@endsection


@push('scripts')
    <script>
        $(function() {

            $('select[name="wallet_type"]').on('change', function() {
                val = $(this).val();
                console.log(val);

                msg = $('.wallet_message');

                if (val == 'coin') {
                    msg.html(`
                        <div class="alert alert-primary">
                            USDT will be sent to receiver hybrid coin wallet 
                        </div>
                    `)

                    $('.transferusdtbtn02').removeAttr('disabled');


                } else if (val == 'zone') {
                    msg.html(`
                        <div class="alert alert-info">
                            USDT will be sent to receiver hybrid zone wallet
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
