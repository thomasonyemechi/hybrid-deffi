@extends('layout.main')

@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title fs-1 text-primary ">How To Earn In Hybrid Project.</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="acc-privacy">
                            <div class="data-privacy">
                                <small>
                                    <h4 class="mb-2">THREE ARMS OF EARNING</h4>
                                </small>
                                <p>


                                    {{-- def sd defin3e here -n --}}
                                    For now, there are three major ways of staying profitable in our ecosystem,
                                    you can decide to participate in one of more of the three.
                                </p>
                            </div>
                            <hr>
                            <div class="data-privacy">
                                <h4 class="mb-2">1. THE COIN</h4>
                                <p>
                                    With a minimum of $20 and a maximum of $15,000 you can purchase Hybridcoin and hold
                                    while
                                    price skyrocket.
                                    This is the most profitable way to earn in the long term.
                                </p>
                            </div>
                            <hr>
                            <div class="data-privacy">
                                <h4 class="mb-2"> 2. AFFILIATE COMMISSION </h4>
                                <p>
                                    When you invite your friends, community and loved ones to the Hybrid project ecosystem,
                                    you earn 6% for 1st generation, 2% for 2nd generation and 2% for 3rd generation of their
                                    investment anytime they purchase Hybridcoin.

                                    You can withdraw this reward instantly. to withdraw your commission, simply convert your
                                    SHC (Stable Hybrid Commission) to USDT and withdraw.

                                    A pool has been reserved for this purpose; rewarding community members who
                                    spread the good news.
                                </p>
                            </div>
                            <hr>
                            <div class="data-privacy">
                                <h4 class="mb-2"> 3. THE ROYALTY</h4>
                                <p>
                                    Updated Information: When you purchase Hybridcoin up to a total amount of $2000 (whether
                                    instantly or gradually) you become a Royalty Member.

                                    Or if you are able to invite 60 partners to the hybrid project you qualify for royalty.

                                    You automatically become a royalty member if you are able to attain any of the both
                                    target.

                                    Every month end 5% of the total revenue generated in the entire ecosystem is
                                    automatically distributed among royalty members in proportion of their royalty strength.
                                    <br>
                                    <span class="text-primary " > Your current royalty strength is: <span class="fw-bold text-large" > $ {{ number_format(coinTotalPurchase(auth()->user()->id)) }} </span> </span>
                                </p>
                            </div>
                            <hr>
                            <div class="data-privacy">
                                <h4 class="mb-2"> 4. THE GAMING - <span class="text-primary"> Coming Soon</span></h4>
                                <p>
                                    Community members can earn Hybridcoin, NFTs, USDT and other cryptos playing games in our
                                    ecosystem,
                                    you can also connect with players across countries.
                                </p>
                            </div>
                            <hr>
                            <div class="data-privacy">
                                <h4 class="mb-2"> 5. THE HybridVERSE - <span class="text-primary"> Coming Soon</span></h4>
                                <p>
                                    Community members can buy and sell virtual real estate, create virtual store, host and
                                    perform in concerts, event and shows, create and sell NFTs and earn while participating
                                    in the metaverse
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
