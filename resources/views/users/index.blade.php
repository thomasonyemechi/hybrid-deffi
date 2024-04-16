@extends('layout.main')

@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row mb-4">
            <div class="col-lg-12">

                <marquee behavior="" direction="" class="mb-3">
                    @foreach ($announcement as $ann)
                        {{ $ann->announcement }} <b></b>
                    @endforeach
                </marquee>



                <div class="row align-items-center">
                    {{-- <div class="col-xl-9 d-none d-md-block">
                        <div class="card mb-0">
                            <div class="card-body ">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="d-flex">
                                        <img src="{{ asset('assets/images/coins/00.png') }}"
                                            class="img-fluid avatar avatar-40 avatar-rounded" alt="img8">
                                        <div class="dropdown mt-2 ms-2">
                                            <a href="#" class="text-white" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="mt-2">Hybridcoin</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                                <li>
                                                    <a href="#" class="dropdown-item">
                                                        <img src="{{ asset('assets/images/coins/00.png') }}"
                                                            class="img-fluid avatar avatar-30 avatar-rounded"
                                                            alt="img71">Stable Hybridcoin
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-none d-lg-block w-50">
                                        <div class="d-flex justify-content-evenly flex-1">
                                            <span class=" text-primary">
                                                37,390.00<br>
                                                <small>$37,390.00</small>
                                            </span>
                                            <span class=" text-primary">
                                                129.51+0.8%<br>
                                                <small>24th changes</small>
                                            </span>
                                            <span class="">
                                                37,440.01<br>
                                                <small>24th high</small>
                                            </span>
                                            <span class="">
                                                37,327.30<br>
                                                <small>24th low</small>
                                            </span>
                                            <span class="d-none">
                                                37,390.00<br>
                                                <small>24th volume(BTC)</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-xl-4">
                        <div class="d-grid grid-3-auto gap-card">
                            <div class="dropdown">
                                <a href="/deposit" class="btn btn-primary w-100">
                                    Deposit
                                </a>
                            </div>
                            <div class="dropdown">
                                <a href="/convert" class="btn btn-primary w-100" type="button">
                                    Buy Coin
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card shining-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <div class="">
                                                <span class="fs-1 text-white fw-bold me-2"
                                                    style="font-size: 20px">${{ number_format($total, 2) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card shining-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets/images/coins/00.png') }}"
                                                    class="img-fluid avatar avatar-30 avatar-rounded" style="width: 30px">
                                                <span class="fs-6 fw-bold me-2" style="line-height: 20px"><a href="/convert"
                                                        class="text-white">Hybridcoin</a> <br>
                                                    <span
                                                        style="font-weight: lighter">${{ number_format(1 / $rate, 2) }}</span></span>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="fs-6 fw-bold me-2"
                                                    style="line-height: 20px">{{ number_format($pc_balance, 2) }} HBC <br>
                                                    <span style="font-weight: lighter">$
                                                        {{ number_format($pc_total, 2) }}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card shining-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets/images/coins/01.png') }}"
                                                    class="img-fluid avatar avatar-30 avatar-rounded" style="width: 30px">
                                                <span class="fs-6 fw-bold me-2" style="line-height: 20px">USDT <br>
                                                    <span
                                                        style="font-weight: lighter">${{ number_format(1, 2) }}</span></span>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="fs-6 fw-bold me-2" style="line-height: 20px">
                                                    {{ number_format(usdtBalance($user_id), 2) }} USDT <br>
                                                    <span
                                                        style="font-weight: lighter">${{ number_format($usdt_balance, 2) }}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card shining-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets/images/coins/02.png') }}"
                                                    class="img-fluid avatar avatar-30 avatar-rounded" style="width: 30px">
                                                <span class="fs-6 fw-bold me-2" style="line-height: 20px">Airdrop <br>
                                                    <span
                                                        style="font-weight: lighter">${{ number_format(1, 2) }}</span></span>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="fs-6 fw-bold me-2"
                                                    style="line-height: 20px">{{ number_format($spc_balance, 2) }} SHC <br>
                                                    <span
                                                        style="font-weight: lighter">${{ number_format($spc_balance, 2) }}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{-- <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between flex-wrap">
                                        <div class="header-title">
                                            <h4 class="card-title">Quick Transfer</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-grid grid-cols-5 gap-card mb-4">
                                            <div class="">
                                                <img src="../assets/images/avatars/02.png"
                                                    class="img-fluid avatar avatar-30px avatar-rounded" alt="img36">
                                            </div>
                                            <div class="">
                                                <img src="../assets/images/avatars/03.png"
                                                    class="img-fluid avatar avatar-30px avatar-rounded" alt="img37">
                                            </div>
                                            <div class="">
                                                <img src="../assets/images/avatars/04.png"
                                                    class="img-fluid avatar avatar-30px avatar-rounded" alt="img38">
                                            </div>
                                            <div class="">
                                                <img src="../assets/images/avatars/05.png"
                                                    class="img-fluid avatar avatar-30px avatar-rounded" alt="img39">
                                            </div>
                                            <div class="">
                                                <img src="../assets/images/avatars/06.png"
                                                    class="img-fluid avatar avatar-30px avatar-rounded" alt="img40">
                                            </div>
                                        </div>
                                        <div class="input-group mb-4">
                                            <span class="input-group-text" id="basic-addon7">Amount</span>
                                            <input type="text" class="form-control col-lg-8" placeholder="126.5"
                                                aria-label="Recipient's username" aria-describedby="basic-addon3">
                                        </div>
                                        <div class="d-grid grid-cols-1 gap-card justify-content-between">
                                            <div>
                                                <button type="button" class="btn btn-primary w-100">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.74074 8.25926L2 6.7037L16 1M8.74074 8.25926L10.8148 15L16 1M8.74074 8.25926L16 1"
                                                            stroke="white" />
                                                    </svg>
                                                    <span class="ms-2">Transfer Now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="p-2 rounded bg-warning disabled">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="none"
                                                        viewBox="0 0 24 24" stroke="white">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                                    </svg>
                                                </div>
                                                <h4 class="px-3">Conversion</h4>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class=" border rounded">
                                                    <svg width="28" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.9393 12.0129H15.9483" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M11.9301 12.0129H11.9391" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M7.92128 12.0129H7.93028" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form class="d-grid gap-card">
                                            <div class="form-group mb-2">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="1000"
                                                        aria-label="Recipient's username" aria-describedby="basic-addon3">
                                                    <span class="input-group-text" id="basic-addon3">GRD</span>
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="100"
                                                        aria-label="Recipient's username" aria-describedby="basic-addon4">
                                                    <span class="input-group-text" id="basic-addon4">USD</span>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary">Archive</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-12">

                


                        <div class="card card-block card-stretch custom-scroll">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                                <div class="caption">
                                    <h4 class="font-weight-bold mb-2">Recent Transactions</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table data-table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Timestamp</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transactions as $trno)
                                                <tr>
                                                    <td>{{ number_format($trno->amount, 2) }} {{ $trno->currency }} </td>
                                                    <td> {{ $trno->remark }} </td>
                                                    <td> {{ $trno->created_at }} </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <a href="/how-to-earn" class="btn btn-primary mt-2 py-1">HOW TO EARN IN Hybrid
                                        PROJECT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="header-title">
                                    <h4 class="card-title">History</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-inline m-0 p-0">
                                    <li class="d-flex  align-items-center pt-3">
                                        <div
                                            class="d-flex justify-content-between rounded-pill gap-3 flex-wrap flex-md-nowrap">
                                            <img src="../assets/images/coins/01.png"
                                                class="img-fluid avatar avatar-40 avatar-rounded" alt="img6">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-2 d-inline-block">Bitcoin</h5>
                                                <p class=" text-success mb-2 d-inline-block ms-1">+$10,00</p>
                                                <p class="fs-6">Bitcoins Evolution™. 234000 Satisfied Customers
                                                    From 107 Countries.</p>
                                            </div>
                                            <div class="">
                                                <p>11/02/21</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

    </div>
@endsection



@push('scripts')
    <script>
        function myFunction() {
            // Get the text field
            var copyText = document.getElementById("wallet_address");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            alert("Referral ID has been copied");
        }
    </script>
@endpush
