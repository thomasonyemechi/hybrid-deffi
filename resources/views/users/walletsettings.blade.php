@extends('layout.main')

@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row pt-2">
            <div class="col-lg-5">
                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Update Wallet Address</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-solid alert-primary d-flex align-items-center" role="alert">
                            <div>
                                <b>Note:</b> To ensure security and streamline our processes, you can only update your
                                wallet address once.
                            </div>
                        </div>

                        <form method="POST" action="/wallet_update" autocomplete="off">@csrf

                            @if (auth()->user()->wallet == null ||
                                    strtolower(substr(auth()->user()->wallet, 0, 1)) != 't' ||
                                    strlen(auth()->user()->wallet) < 20)
                                <div class="form-group">
                                    <label class="form-label">TRX Wallet Address:</label>
                                    <input type="text" class="form-control" name="wallet_address"
                                        value="{{ old('wallet_address') }}" autocomplete="off">
                                    @error('wallet_address')
                                        <i class="text-danger  ">{{ $message }} </i>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Access Pin:</label>
                                    <input type="password" class="form-control" name="access_pin" required
                                        autocomplete="new-psword" placeholder=" 6 Digit Pin">
                                    @error('access_pin')
                                        <i class="text-danger  ">{{ $message }} </i>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Confirm Access Pin:</label>
                                    <input type="password" class="form-control" name="confirm_access_pin"
                                        placeholder="Confirm Access Pin" required autocomplete="new-psword">
                                    @error('confirm_access_pin')
                                        <i class="text-danger  ">{{ $message }} </i>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary rounded">Update</button>
                                </div>
                            @else
                                <div class="form-group">
                                    <label class="form-label" for="email">TRX Wallet Address:</label>
                                    <input type="text" class="form-control" name="old"
                                        value="{{ auth()->user()->wallet }}" readonly>
                                </div>
                            @endif

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Wallet Update History</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table data-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Address</th>
                                        <th scope="col">Timestamp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wallets as $wallet)
                                        <tr>
                                            <td>{{ $wallet->wallet_address }}</td>
                                            <td>{{ $wallet->created_at }}</td>
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
@endpush
