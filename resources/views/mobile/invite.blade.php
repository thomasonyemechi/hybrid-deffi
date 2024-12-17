@extends('layout.mobile')

@section('page_content')
    <style>
        .icon-book:before {
            content: "\e913";
            color: #fc0;
        }
    </style>



    <div class="pt-68 pb-80">

        <div class="tf-container">



            <h5 class="mt-20">Invite Others</h5>






            <div class="mt-20 ">
                <ul class="menu-tab-v3" role="tablist">
                    <li class="nav-link active" data-bs-toggle="tab" data-bs-target="#cryptocurrency" role="tab"
                        aria-controls="cryptocurrency" aria-selected="true">
                        Your Partners
                    </li>
                </ul>
                <div class="tab-content mt-16 mb-16">
                    <div class="tab-pane fade show active" id="cryptocurrency" role="tabpanel">
                        <ul>
                            @foreach ($direct_downlines as $user)
                                <li class="mt-16">
                                    <a href="javascript:;" class="coin-item style-2 gap-12">

                                        <img class="img"
                                            src="{{ Avatar::create(substr($user->wallet, 0, 1) . ' ' . substr($user->wallet, -1))->toBase64() }}"
                                            alt="img">

                                        <div class="content">
                                            <div class="title">
                                                <p class="mb-4 text-button ">

                                                    @if (isset($user->wallet))
                                                        {{ substr($user->wallet, 0, 6) . '...' . substr($user->wallet, -6) }}
                                                    @else
                                                        {{ $user->username ?? '' }}
                                                    @endif
                                                </p>
                                                <span class="text-secondary"> <span>Joined: </span>
                                                    {{ date('j M Y, h:i a', strtotime($user->created_at)) }}
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center gap-12">
                                                {{-- <span class="text-small"> successful </span> --}}
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach


                            @if (count($direct_downlines) == 0)
                                <li class="mt-16">
                                    <div class="swiper-slide swiper-slide-active mt-12">
                                        <div class="accent-box-v5 bg-menuDark " style="border: 1px solid #fc0">
                                            <div class="mt-12">
                                                <a href="#" class="text-small"> No Items !! </a>
                                                <p class="mt-4">
                                                    There are no items to display on this section, User you refferd to
                                                    hybrid coin will be displayed here
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





            <div class="mt-20 ">
                <ul class="menu-tab-v3" role="tablist">
                    <li class="nav-link active" data-bs-toggle="tab" data-bs-target="#cryptocurrency" role="tab"
                        aria-controls="cryptocurrency" aria-selected="true">
                        Statistics
                    </li>
                </ul>
                <div class="tab-content mt-16 mb-16">
                    <div class="tab-pane fade show active" id="cryptocurrency" role="tabpanel">





                        <div class="swiper-slide swiper-slide-active mt-12">
                            <div class="accent-box-v5 bg-menuDark ">
                                <span class="icon-box bg-icon1"><i class="icon-book"></i></span>
                                <div class="mt-12">
                                    <a href="#" class="text-small">Total Partners </a>
                                    <p class="mt-4">
                                    <div class="d-flex mt-2  justify-content-between">
                                        <span class="badge bg-success px-3">
                                            1 <sup>st</sup> : {{ count($direct_downlines) }}
                                        </span>
                                        <span class="badge bg-primary px-3">
                                            2 <sup>nd</sup> : {{ count($direct_downlines_2) }}
                                        </span>
                                        <span class="badge bg-secondary px-3">
                                            3<sup>rd</sup> : {{ count($direct_downlines_3) }}
                                        </span>
                                    </div>

                                    <br>

                                    </p>

                                    <a href="#" class="text-xs mt-10">Recommended wallet is Trust Wallet</a>
                                </div>
                            </div>
                        </div>



                        <div class="swiper-slide swiper-slide-active mt-12">
                            <div class="accent-box-v5 bg-menuDark ">
                                <span class="icon-box bg-icon1"><i class="icon-user"></i></span>
                                <div class="mt-12">
                                    <a href="#" class="text-small">Valid Partners</a>
                                    <p>

                                    <div class="d-flex mt-2  justify-content-between">
                                        <span class="badge bg-success px-3">
                                            1 <sup>st</sup> : {{ $valid_users }}
                                        </span>
                                        <span class="badge bg-primary px-3">
                                            2 <sup>nd</sup> : {{ $valid_2 }}
                                        </span>
                                        <span class="badge bg-secondary px-3">
                                            3<sup>rd</sup> : {{ $valid_3 }}
                                        </span>
                                    </div>
                                    </p>



                                </div>
                            </div>
                        </div>



                        <div class="swiper tf-swiper swiper-wrapper-r mt-16 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                            data-space-between="16" data-preview="1.3" data-tablet="1.3" data-desktop="3">
                            <div class="swiper-wrapper" id="swiper-wrapper-58b5a9a38e046c3c" aria-live="polite"
                                style="transform: translate3d(0px, 0px, 0px);">

                                <div class="swiper-slide">
                                    <a href="javascript:;" class="coin-box d-block">
                                    
                                        <div class="mt-8 mb-8 coin-chart">
                                            <div id="line-chart-4"></div>
                                        </div>
                 
                                        <div class="coin-price d-flex justify-content-between">
                                            <span> Royalty Strength </span>
                                            <span class="text-primary d-flex align-items-center gap-2"><i class="icon-select-up"></i>{{ number_format(1, 2) }}</span>
                                        </div>



                                        <div class="blur bg1">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>




                    </div>
                </div>
            </div>




        </div>






    </div>
@endsection

@push('scripts')
    <script>
        const input_field = document.getElementById('input_field')

        function yourFunction() {
            input_field.select(); // select the input field
            input_field.setSelectionRange(0, 99999); // For mobile devices
            navigator.clipboard.writeText(input_field.value)

        }
    </script>
@endpush
