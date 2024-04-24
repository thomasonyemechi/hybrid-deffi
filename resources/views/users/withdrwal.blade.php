@extends('layout.main')

@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row pt-2">
            <div class="col-lg-4">

                <div class="alert alert-solid alert-warning">
                    Funds will be converted to TRX and sent to your TRX Wallet
                    <br>
                    <span class="badge bg-success"> {{ auth()->user()->wallet }} </span>
                </div>


                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Withdraw</h4>
                        </div>
                    </div>
                    <div class="card-body">

                        

                        <form method="post"  action="/withdrawal">@csrf
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

                            <div class="form-group">
                                <label for="text"> Amount In USDT </label>
                                <input type="number" name="amount" class="form-control" min="10" placeholder="Minimum: 10 USDT"
                                    max="{{ $usdt_balance }}" >
                                @error('amount')
                                    <i class="text-danger ">{{ $message }} </i>
                                @enderror
                            </div>

                            <div class="d-flex justif   y-content-end ">
                                <button type="submit" class="btn buypmcbtn btn-primary">Withdraw</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Withdrawal History</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table data-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Wallet Address</th>
                                        <th scope="col">Timestamp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($withdrawals as $with)
                                          <tr>
                                            <td>{{$with->amount}} USDT</td>    
                                            <td>{!! depositStatus($with->status) !!}</td> 
                                            <td>{{$with->wallet_address}}</td>    

                                            <td>{{$with->created_at}}</td>    
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

