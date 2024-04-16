@extends('layout.admin02')

@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row mb-4">
            <div class="col-lg-4">
                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h6 class="font-weight-bold text-sm mb-2">Credit User</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/admin/credit" method="post">
<<<<<<< HEAD

                            @csrf

                            <div class="alert alert-warning">
                                Credit user's wallet with Hybrid Coin or USDT
                            </div>

                            <div class="form-group">
                                <label for="">Currency <span class="text-danger">*</span></label>
                                <select name="currency" class="form-control" id="">
                                    <option value="hbc"> Hybrid Coin (HBC) </option>
                                    <option value="usdt"> USDT (USDT) </option>
                                </select>
                                @error('currency')
=======
                            @csrf
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="">
                                @error('username')
>>>>>>> 367677a427830c1c9814485233b006af45c4ef94
                                    <i class="text-danger fw-bold ">{{ $message }} </i>
                                @enderror
                            </div>


                            <div class="form-group">
<<<<<<< HEAD
                                <label for="">Wallet Address <span class="text-danger">*</span> </label>
                                <input type="text" name="wallet_address" class="form-control"
                                    value="{{ old('wallet_address') }}" placeholder="Enter user's wallet address">
                                @error('wallet_address')
                                    <i class="text-danger fw-bold ">{{ $message }} </i>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="">Amount <span class="text-danger">*</span></label>
                                <input type="number" name="amount" step="any" class="form-control"
                                    value="{{ old('amount') }}" placeholder="Amount to send ">
=======
                                <label for="">Amount</label>
                                <input type="number" name="amount" class="form-control" placeholder="">
>>>>>>> 367677a427830c1c9814485233b006af45c4ef94
                                @error('amount')
                                    <i class="text-danger fw-bold ">{{ $message }} </i>
                                @enderror
                            </div>



<<<<<<< HEAD
                            <div class="form-group">
                                <div class="d-flex justify-content-between ">
                                    <label for="">Remark</label>
                                    <label for="" class="badge text-end mb-1 bg-warning fill_me">USDT DEPOSIT</label>
                                </div>
                                <input type="text" name="remark" class="form-control" value="{{ old('remark') }}"
                                    placeholder="Describe this transaction">
                                @error('remark')
                                    <i class="text-danger fw-bold ">{{ $message }} </i>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="">Confirm Access Pin</label>
                                <input type="password" name="access_pin" class="form-control"
                                    value="{{ old('access_pin') }}" placeholder="******">
                                @error('access_pin')
                                    <i class="text-danger fw-bold ">{{ $message }} </i>
                                @enderror
                            </div>



                            <div class="mt-2 d-flex justify-content-end ">
                                <button class="btn btn-sm  btn-primary">Credit User</button>
=======
                            <div class="mt-2 d-flex justify-content-end ">
                                <button class="btn btn-sm  btn-primary">Credit</button>
>>>>>>> 367677a427830c1c9814485233b006af45c4ef94
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="col-lg-12">
                    <div class="card card-block card-stretch custom-scroll">
                        <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                            <div class="caption">
                                <h4 class="font-weight-bold mb-2">Credit History</h4>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 text-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="border-0">Amount</th>
<<<<<<< HEAD
                                            <th scope="col" class="border-0">Wallet Address</th>
                                            <th scope="col" class="border-0">Remark</th>
                                            <th scope="col" class="border-0">By</th>
                                            <th scope="col" class="border-0 text-end">Date</th>
=======
                                            <th scope="col" class="border-0">User</th>
                                            <th scope="col" class="border-0">By</th>
                                            <th scope="col" class="border-0">Date</th>
>>>>>>> 367677a427830c1c9814485233b006af45c4ef94
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($credits as $credit)
                                            <tr>
<<<<<<< HEAD
                                                <td class="align-middle text-success border-top-0">
                                                    {{ number_format($credit->amount, 2) }}
                                                    {{ $credit->currency }}
                                                </td>
                                                <td class="align-middle border-top-0">
                                                    {{ $credit->user->wallet ?? $credit->user->username }}
                                                </td>
                                                <td class="align-middle border-top-0">
                                                    {{ $credit->remark }}
=======
                                                <td class="align-middle border-top-0">
                                                    {{ $credit->amount }}
                                                </td>
                                                <td class="align-middle border-top-0">
                                                    {{ $credit->user->username }}
>>>>>>> 367677a427830c1c9814485233b006af45c4ef94
                                                </td>
                                                <td class="align-middle border-top-0">
                                                    {{ $credit->admin->username }}
                                                </td>
<<<<<<< HEAD
                                                <td class="align-middle border-top-0 text-end">
=======
                                                <td class="align-middle border-top-0">
>>>>>>> 367677a427830c1c9814485233b006af45c4ef94
                                                    {{ $credit->created_at }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
<<<<<<< HEAD
                            <div class="d-flex justify-content-end mt-3 ">
                                {{ $credits->links('pagination::bootstrap-4') }}
                            </div>

                        </div>

=======
                        </div>
>>>>>>> 367677a427830c1c9814485233b006af45c4ef94
                    </div>
                </div>
            </div>
        </div>
    @endsection
<<<<<<< HEAD


    @push('scripts')
        <script>
            $(function() {
                $('body').on('click', '.fill_me', function() {
                    text = $(this).html();
                    $('input[name="remark"]').val(text);
                })
            })
        </script>
    @endpush
=======
>>>>>>> 367677a427830c1c9814485233b006af45c4ef94
