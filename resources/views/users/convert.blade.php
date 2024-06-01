@extends('layout.main')

@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row pt-2">
            <div class="col-lg-4">
                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Buy Hybrid Coin</h4>
                        </div>
                    </div>
                    <div class="card-body">



                        <div class="d-flex justify-content-start mb-2 gap-2">
                            <span class="fs-6 fw-bold me-2">1 USDT = {{ $rate }} HBC</span>
                        </div>



                        <div class="card shining-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/images/coins/01.png') }}"
                                            class="img-fluid avatar avatar-30 avatar-rounded" style="width: 30px">
                                        <span class="fs-6 fw-bold me-2" style="line-height: 20px">USDT balance <br>
                                            <span style="font-weight: lighter"> {{ number_format($usdt_balance, 2) }}
                                                <small>USDT</small> </span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @php
                            $price = coinTotalPurchase(auth()->user()->id);
                        @endphp

                        {{-- @if ($price > 0)
                            <div class="d-flex justify-content-start mb-2 gap-2">
                                <small class=" me-2">Maximum Purchase Left = $ {{ number_format(15000 - $price) }} </small>
                            </div>
                        @else
                            <div class="d-flex justify-content-start mb-2 gap-2">
                                <span class="fs-6  me-2">Minimum Purchase = $20 </span>
                            </div>
                        @endif --}}





                        <form method="post" id="buypmc" action="{{ route('buy_hybridcoin') }}">@csrf
                            <div class="alert alert-warning alert-">
                                <span class="fw-bold small">Minimum Purchase</span><br>
                                <span class="badge bg-success" >
                                    First Time: $40
                                </span>
                                <span class="badge bg-secondary" >Afterwards: $5</span>
                            </div>

                            <div class="form-groupo">
                                <label for="text"> Amount In USDT </label>
                                <input type="number" name="usdt_amount" class="form-control" {{ ($price > 0) ? 'min=5' : 'min=40' }}
                                    max="{{ $usdt_balance }}" name="usdt" id="usdt" value="{{ old('wallet') }}">
                                @error('wallet')
                                    <i class="text-danger ">{{ $message }} </i>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="amount">Amount In HBC</label>
                                <input type="number" class="form-control" name="pc" id="pc" readonly>
                            </div>

                            <div class="d-flex justify-content-end ">
                                <button type="submit" class="btn buypmcbtn btn-primary">Buy</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Purchase History</h4>
                        </div>
                    </div>
                    <div class="card-body">


                        <div class="row">
                            <div class="card border-bottom border-4 border-0 border-warning col-md-5 ">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span>Royalty Strength </span>
                                        </div>
                                        <div>
                                            <span class="counter" style="visibility: visible;"> $
                                                {{ number_format($price) }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card border-bottom border-4 border-0 border-success col-md-5 offset-md-2 ">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span>Royalty Benchmark </span>
                                        </div>
                                        <div>
                                            <span class="counter" style="visibility: visible;"> $
                                                {{ number_format(1500) }} </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table data-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">USDT</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">HBC</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Timestamp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchases as $pur)
                                        <tr>
                                            <td> {{ $pur->amount }} USDT </td>
                                            <td> {{ $pur->rate }}/USDT </td>
                                            <td> $ {{ number_format(1 / $pur->rate, 2) }} </td>
                                            <td> {{ number_format($pur->amount * $pur->rate, 2) }} HBC </td>
                                            <td>
                                                <div class="badge  bg-success">
                                                    successful
                                                </div>
                                            </td>
                                            <th>{{ $pur->created_at }}</th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
