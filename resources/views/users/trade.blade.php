@extends('layout.main')

@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row pt-2">
            <div class="col-lg-4">
                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Convert SHC for USDT</h4>
                        </div>
                    </div>
                    <div class="card-body">



                        <div class="d-flex justify-content-start mb-2 gap-2">
                            <span class="fs-6 fw-bold me-2" >1 SHC = 1 USDT</span>
                        </div>

                        <div class="card shining-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/images/coins/02.png') }}"
                                            class="img-fluid avatar avatar-30 avatar-rounded" style="width: 30px">
                                        <span class="fs-6 fw-bold me-2" style="line-height: 20px">SHC balance <br>
                                            <span style="font-weight: lighter"> {{  number_format($spc_balance,2) }} <small>SHC</small> </span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form method="post" id="buypmc" action="{{ route('trade_spc') }}">@csrf

                            <div class="form-group">
                                <label for="text"> Amount to Trade </label>
                                <input type="number" name="amount" class="form-control" max="{{ $spc_balance }}" value="{{ old('amount') }}">
                                @error('amount')
                                    <i class="text-danger ">{{ $message }} </i>
                                @enderror
                            </div>

               
                            <div class="d-flex justify-content-end ">
                                <button type="submit" class="btn buypmcbtn btn-primary">Trade</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">History</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table data-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">USDT</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">HBC</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Timestamp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trades as $pur)
                                        <tr>
                                            <td> {{$pur->amount}} USDT </td>
                                            <td> {{$pur->rate}}/USDT </td>
                                            <td> {{number_format($pur->amount*$pur->rate, 2)}} HBC </td>
                                            <td>
                                                <div class="badge  bg-success" >
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

            $('#buypmc').on('submit', function() {
                $('.buypmcbtn').attr('disabled', 'disabled');
            })


        })
    </script>
@endpush
