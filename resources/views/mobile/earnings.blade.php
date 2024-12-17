@extends('layout.mobile')

@section('page_content')
    <div class="pt-68 pb-80">

        <div class="tf-container">

            <div class="mt-20">
                <ul class="menu-tab-v3" role="tablist">
                    <li class="nav-link active" data-bs-toggle="tab" data-bs-target="#cryptocurrency" role="tab"
                        aria-controls="cryptocurrency" aria-selected="true">
                        Hybrid Earnings
                    </li>
                </ul>
                <div class="tab-content mt-16 mb-16">
                    <div class="tab-pane fade show active" id="cryptocurrency" role="tabpanel">
                        <ul>
                            @foreach ($earnings as $dep)
                                <li class="mt-16">
                                    <a href="javascript:;" class="coin-item style-2 gap-12">
                                        <img src="{{ $dep->currency == 'usdt' ? asset('assets/images/coins/01.png') : asset('assets/images/coins/00.png') }}"
                                            class="img" alt="">


                                        <div class="content">
                                            <div class="title">
                                                <p class=" text-large text-success ">+ {{ number_format($dep->amount, 2) }}
                                                    {{ $dep->currency }}</p>
                                                <span class="text-secondary">{{ formatDate($dep->created_at) }}</span>
                                            </div>
                                            <div class="d-flex align-items-center gap-12">
                                                <span class="text-small">
                                                    @if ($dep->downliner->wallet)
                                                        {{ substr($dep->downliner->wallet, 0, 6) . '...' . substr($dep->downliner->wallet, -6) }}
                                                    @else
                                                        ...
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach

                            @if (count($earnings) == 0)
                                <li class="mt-16">
                                    <div class="swiper-slide swiper-slide-active mt-12">
                                        <div class="accent-box-v5 bg-menuDark " style="border: 1px solid #fc0">
                                            <div class="mt-12">
                                                <a href="#" class="text-small"> No Items !! </a>
                                                <p class="mt-4">
                                                    There are no items to display on this section, all your hybrid earnings
                                                    will
                                                    be displayed here.
                                                    <br>

                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endif


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
