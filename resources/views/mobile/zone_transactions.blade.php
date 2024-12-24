@extends('layout.mobile')

@section('page_content')
    <div class="pt-68 pb-80">
    

        <div class="tf-container">

            <div class="mt-20">
                <ul class="menu-tab-v3" role="tablist">
                    <li class="nav-link active" data-bs-toggle="tab" data-bs-target="#cryptocurrency" role="tab"
                        aria-controls="cryptocurrency" aria-selected="true">
                        Hybrid Zone Transactions 
                    </li>
                </ul>
                <div class="tab-content mt-16 mb-16">
                    <div class="tab-pane fade show active" id="cryptocurrency" role="tabpanel">
                        <ul>
                            @foreach ($transactions as $trno)
                                <li class="mt-16">
                                    <a href="javascript:;" class="coin-item style-2 gap-12">
                                        @if ($trno->remark == 'withdrawal')
                                        <img src="{{ asset('mobile/images/coin/coin-2.jpg') }}" class="img"
                                            alt="">
                                    @else
                                        <img src="{{ $trno->currency == 'usdt' ? '../../assets/images/coins/01.png' : '../../assets/images/coins/00.png' }}"
                                            class="img" alt="">
                                    @endif

                                        <div class="content">
                                            <div class="title">
                                                <p
                                                class="mb-4 text-large {{ $trno->amount > 0 ? 'text-success' : 'text-danger' }} ">
                                                {{ number_format($trno->amount, 2) }} {{ $trno->currency }}</p>


                                                <span class="text-secondary">{{ formatDate($trno->created_at) }}</span>
                                            </div>
                                            <div class="d-flex align-items-center gap-12">
                                                <p class="text-end">{{ $trno->remark }} </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


