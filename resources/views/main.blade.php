<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Responsive Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon & bookmark -->

    <link rel="shortcut icon" href="images/favi-icon.ico" type="image/x-icon" />

    <!-- Website Title -->
    <title>Hybrid Coin</title>
    <!-- Stylesheets Start -->
    <link rel="stylesheet" href="{{ asset('main/css/fontawesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/fancybox/jquery.fancybox.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/slick.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/my-style2.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('main/css/responsive2.css') }}" type="text/css" />
</head>

<body>

    <!--Main Wrapper Start-->
    <div class="wrapper" id="top">
        <!--Header Start -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4 logo">
                        {{-- <a href="/" title="Hybrid Coin">
                            <img class="white" src="{{ asset('main/images/section-1/w-logo.png') }}" alt="Hybrid Coin">
                            <img class="black" src="{{ asset('main/images/section-1/b-logo.png') }}" alt="Hybrid Coin">
                        </a> --}}
                    </div>
                    <div class="col-sm-6 col-md-8 main-menu">
                        <div class="menu-icon" style="display: block">
                            <span class="top"></span>
                            <span class="middle"></span>
                            <span class="bottom"></span>
                        </div>
                        <nav class="onepage">
                            <ul>
                                <li class="active"><a href="#top">Home</a></li>
                                <li><a href="#about">About ico</a></li>
                                <li><a href="#token">token</a></li>
                                <li><a href="#roadmap">roadmap</a></li>
                                <li class="nav-btn"><a href="/login">Sign In</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!--Header End-->
        <!-- Content Section Start -->
        <div class="midd-container">
            <!-- Main Section Start -->
            <div class="main coinpool-layout white-sec"
                style="background-image:url({{ asset('main/images/section-1/section-1-banner.jpg') }});">
                <div class="container">
                    <div class="row row-reverse align-items-center">
                        <div class="col-sm-12 col-md-6" data-wow-delay="0.5s">
                            <div class="coinpool-animation">
                                <div class="platinum-move-1"></div>
                                <div class="platinum-move-2"></div>
                                <div class="platinum-move-3"></div>
                                <div class="platinum-move-4"></div>
                                <div class="platinum-move-5"></div>
                                <div class="top-part">
                                    <div class="coin-icon"></div>
                                </div>


                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 mobile-center">
                            <h1 class="text-white d-sm-block-none ">A broader, simple vision for web3 <span> is
                                    here!</span></h1>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu mauris
                                bibendum, tincidunt mauris at, tempor nunc.</p>
                            <div class="hero-btns">
                                <a href="#" class="btn">Buy HybridCoin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Section End -->

            <!--About Start -->
            <div class="about-section c-l p-tb" id="about">

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="{{ asset('main/images/section-3/sec-3-img1.png') }}" alt="about">
                        </div>
                        <div class="col-md-6 about-left">
                            <h2 class="section-heading">About <span>Hybrid Coin</span></h2>
                            <h5>Finally a broader yet simple vision for web3 is here</h5>
                            <p>
                                After several years of work and commitment to building a truly decentralized internet
                                project, payment network and blockchain protocol, the award winning tokenomics team
                                created Hybrid coin primarily as a utility token for the
                                Hybrid ecosystem with vast applications on numerous platforms with an ICO of
                                1,200,000,000 tokens.
                            </p>

                            <p>
                                The Hybrid coin can also be used to invest in ICOs that are listed through several
                                launchpad programs and also in the marketplace of new cryptocurrencies
                            </p>

                        </div>

                    </div>
                </div>
            </div>
            <!--About end -->



            <div class="mobileapp-section p-tb black-bg white-sec">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-lg-5">
                            <div class="iphone-img">
                                <img src="{{ asset('main/images/logo.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h3 class="section-heading">The usuage exceeds the scope of the Hybrid ecosystem but not
                                limited to the following</h3>
                            <p>Hybrid coin has achieved massive support and partnership from other organisations and
                                institutions to help it's utility spread. The Hybrid coin is also used primarily to pay
                                transaction and trading fees on the Hybrid ecosystem.</p>
                            <div class="button-wrapper">
                                <ul>
                                    <li>Making investments.</li>
                                    <li>Making payments and process investments.</li>
                                    <li>Donate to charity and liquidity for community development.</li>
                                    <li>Payment for local and international flights on designated platforms and third
                                        party organisations.</li>
                                    <li>Connecting blockchain based smart contracts with external data and stock prices.
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>




            <!-- Start featured product -->
            <div class="featured-product-sec p-tb white-sec dark-gray-bg-tone-2" id="featured-product">
                <div id="gold-tech-bg"></div>
                <div class="container">
                    <div class="sec-title text-center">
                        <h3>Benefits of Using Our Solution</h3>
                    </div>
                    <div class="sub-txt text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus tincidunt ultrices. Ut
                            quis blandit dolor. Ut laoreet sagittis arcu eu tristique. </p>
                    </div>
                </div>
                <div class="container">
                    <div class="benefits-boxes row">
                        <div class="col-md-6">
                            <div class="item wow fadeInUp">
                                <div class="bf-image">
                                    <img src="{{ asset('main/images/icon-1.png') }}" alt="Read Time Update">
                                </div>
                                <div class="bf-details">
                                    <h3>Circulating Supply <br><small>1,000,000,000 PMC</small> </h3>
                                    <p>
                                        With a significantly high quantity of token been produced and made actively
                                        available for the market, Hybridcoin project becomes the first 100% participant
                                        driven community
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item wow fadeInUp">
                                <div class="bf-image">
                                    <img src="{{ asset('main/images/icon-2.png') }}" alt="Cloud Based">
                                </div>
                                <div class="bf-details">
                                    <h3>Market Cap Vision <br><small>$30,000,000,000</small></h3>
                                    <p>
                                        With the first major block of Hybridcoin distribution been reserved for Pre-Sale,
                                        this will help price quickly skyrockets after the pre-sale duration is over.
                                        Hence this vision is possible few years from now.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.1s">
                                <div class="bf-image">
                                    <img src="{{ asset('main/images/icon-3.png') }}" alt="No transaction fees">
                                </div>
                                <div class="bf-details">
                                    <h3>Airdrop Supply <br><small>200,000,000 PMC.</small></h3>
                                    <p>
                                        Our participants are our major influencers, tell your friends about Hybridcoin
                                        and earn an instantly withdrawable 20% of any purchase they make.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.1s">
                                <div class="bf-image">
                                    <img src="{{ asset('main/images/icon-4.png') }}" alt="Instant operations">
                                </div>
                                <div class="bf-details">
                                    <h3>Minimum Purchase <br><small>$20</small></h3>
                                    <p>
                                        With $20, you can simply buy your future now that it is cheap, everyone deserves
                                        to know about this opportunity including children.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="bf-image">
                                    <img src="{{ asset('main/images/icon-5.png') }}" alt="Strong teams & Advisors">
                                </div>
                                <div class="bf-details">
                                    <h3>Maximum Purchase <br><small>$15,000</small></h3>
                                    <p>
                                        No single member is given a huge autonomy over the project. You cannot purchase
                                        Hybridcoin with more than $15000 at the current price until later period when
                                        only smaller blocks are available.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="bf-image">
                                    <img src="{{ asset('main/images/icon-6.png') }}" alt="Protects the identity">
                                </div>
                                <div class="bf-details">
                                    <h3>Recommended Wallet <br><small>Trust Wallet</small></h3>
                                    <p>
                                        The most recommended wallet for accessing the Hybridcoin ecosystem is Trust
                                        Wallet. Ensure you keep your recovery phrase safe and do not share with anyone
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="bf-image">
                                    <img src="{{ asset('main/images/icon-6.png') }}" alt="Protects the identity">
                                </div>
                                <div class="bf-details">
                                    <h3>ICO Participants <br> <small>370,000+</small></h3>
                                    <p>
                                        Public institutions, retails investors and community members all over the world
                                        can use fiat currencies or other digital currencies to participate in the sale.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="bf-image">
                                    <img src="{{ asset('main/images/icon-6.png') }}" alt="Protects the identity">
                                </div>
                                <div class="bf-details">
                                    <h3>Launch Pre-Sale Price <br><small>$.10</small></h3>
                                    <p>

                                        Lucky participants all over the world get the golden opportunity to accumulate
                                        Hybridcoin at an extremely affordable price before an advertised general public
                                        Sale
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="bf-image">
                                    <img src="{{ asset('main/images/icon-6.png') }}" alt="Protects the identity">
                                </div>
                                <div class="bf-details">
                                    <h3>Pre-Sale Pool Duration <br><small>3 Months+</small></h3>
                                    <p>
                                        The pre-sale pool duration is expected to be about three months to allow more
                                        participants purchase at a low price. These duration can change at any moment.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="bf-image">
                                    <img src="{{ asset('main/images/icon-6.png') }}" alt="Protects the identity">
                                </div>
                                <div class="bf-details">
                                    <h3>Pre-Sale Block Supply <br><small>500,000,000 PMC</small> </h3>
                                    <p>
                                        This quantity of Hybridcoin is exclusively reserved for Presale, once distributed
                                        entirely, the lowest purchase price of Hybridcoin becomes $0.2
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- End featured product -->
            <!-- The Roadmap  start-->
            <div class="roadmap-sec p-tb mercury-layout" id="roadmap">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading">Road Map</h2>
                    </div>
                    <div class="sub-txt text-center">
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus
                            tincidunt ultrices. Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique.</p>
                    </div>
                    <div class="mercury-roadmap owl-carousel">
                        <div class="roadmap-item odd">
                            <div class="roadmap-text">
                                <div class="roadmap-day">
                                    <div class="date">Crypto ICO Platform idea</div>
                                </div>
                                <div class="roadmap-item-text">
                                    <h4>March 2021</h4>
                                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="roadmap-item even">
                            <div class="roadmap-text">
                                <div class="roadmap-day">
                                    <div class="date">ICO Realease</div>
                                </div>
                                <div class="roadmap-item-text">
                                    <h4>January 2021</h4>
                                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="roadmap-item odd">
                            <div class="roadmap-text">
                                <div class="roadmap-day">
                                    <div class="date">Technical development</div>
                                </div>
                                <div class="roadmap-item-text">
                                    <h4>December 2020</h4>
                                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="roadmap-item even">
                            <div class="roadmap-text">
                                <div class="roadmap-day">
                                    <div class="date">Development kit for integrations</div>
                                </div>
                                <div class="roadmap-item-text">
                                    <h4>October 2020</h4>
                                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="roadmap-item odd">
                            <div class="roadmap-text">
                                <div class="roadmap-day">
                                    <div class="date">Beta version of crypto ICO</div>
                                </div>
                                <div class="roadmap-item-text">
                                    <h4>eptember 2020</h4>
                                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- The Roadmap end-->





            <div class="featured-product-sec p-tb white-sec dark-gray-bg-tone-2" id="featured-product">
                <div id="gold-tech-bg"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinPriceBlock.js"></script>
                        <div id="coinmarketcap-widget-coin-price-block" coins="1,1027,825,1839,3890,2,1831,5426"
                            currency="USD" theme="light" transparent="false" show-symbol-logo="true">
                        </div>
                    </div>
                </div>
            </div>



            <div class="token-sale p-tb" id="token">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-6  pt-5 wow zoomIn">
                            <div class="sec-title text-center">
                                <h3>Token Distribution</h3>
                            </div>
                            <div class="col-md-6 wow zoomIn">
                                <div class="sale-chart-view">
                                    <div class="doughnut">
                                        <div class="doughnutChartContainer">
                                            <canvas id="doughnutChart" height="270"></canvas>
                                        </div>
                                        <div id="legend" class="chart-legend"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="col-sm-12 pt-5">
                                <h2 class="section-heading">Currency Convertor</h2>
                                <div class="sub-txt">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus tincidunt
                                        ultrices. Ut quis blandit dolor. Ut Vestibulum ante ipsum primis in fauc</p>
                                </div>
                            </div>

                            <div class="currency-box text-center">
                                <div class="currency-icon">
                                    <img src="{{ asset('main/images/section-6/convert-icon.png') }}"
                                        alt="World Coverage" style="">
                                </div>
                                <div class="currency-form">
                                    <form method="" action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="" id=""
                                                placeholder="Enter Amount">
                                            <input type="text" class="form-control postpend" name=""
                                                readonly="" value="USDT">
                                        </div>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="" id=""
                                                placeholder="Enter Amount">
                                            <input type="text" class="form-control postpend" name=""
                                                readonly="" value="PC">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>








            <!-- Hero Section Start -->
            <div class="hero-main white-sec ">
                <div id="gold-tech-bg"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 hero-caption wow fadeIn text-center">
                            <div class="sec-title text-center">
                                <h1>Token Sales</h1>
                            </div>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu
                                mauris
                                bibendum, tincidunt mauris at, tempor nunc.</p>
                        </div>
                        <div class="col-sm-10 wow fadeIn" data-wow-delay="0.5s">
                            <div class="pre-sale-timer-outer">
                                <div class="pre-sale-timer style-2">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <h3>Pre-Sale <span>will end in</span></h3>
                                            <div id="clock" data-date="2023/7/5"></div>
                                            <div class="hero-right-btn"><a class="btn btn4" href="/signup">Register &
                                                    Buy Tokens Now</a></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rang-slider-main">
                                                <div class="rang-slider-toltip">
                                                    <span>Soft Cap <strong>$25,624</strong></span>
                                                    <span>Hard Cap <strong>$100,000</strong></span>
                                                </div>
                                                <div class="rang-slider">
                                                    <div class="rang-line">
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="rang-slider-total">
                                                    <span>Total raised <strong>$91,000</strong></span>
                                                    <div class="rangTotal">91<small>%</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>











            <!-- FAQ Section start-->
            <div class="faq-section p-tb light-gray-bg" id="faq">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading">Frequently Asked Questions</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div class="tab-section">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <span class="nav-link active" id="general-tab" data-toggle="tab"
                                            href="#general" role="tab" aria-controls="general"
                                            aria-selected="true">General Faqs</span>
                                    </li>


                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="general" role="tabpanel"
                                        aria-labelledby="general-tab">
                                        <div class="accordion md-accordion style-2" id="accordionGeneral"
                                            role="tablist" aria-multiselectable="true">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingOne1">
                                                    <a data-toggle="collapse" data-parent="#accordionGeneral"
                                                        href="#collapseOne1" aria-expanded="true"
                                                        aria-controls="collapseOne1">
                                                        <h5 class="mb-0">
                                                            What is special about HybridCoin? <i
                                                                class="fas fa-caret-down rotate-icon"></i>
                                                        </h5>
                                                    </a>
                                                </div>
                                                <div id="collapseOne1" class="collapse show" role="tabpanel"
                                                    aria-labelledby="headingOne1" data-parent="#accordionGeneral">
                                                    <div class="card-body">
                                                        HybridCoin is the cryptocurrency that will power and be used as
                                                        trading fees for the Hybrid Exchange and ecosystem, one of the
                                                        world leading exchangers. the coin will be used for all products
                                                        within the Hybrid ecosystem.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingTwo2">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordionGeneral" href="#collapseTwo2"
                                                        aria-expanded="false" aria-controls="collapseTwo2">
                                                        <h5 class="mb-0">
                                                            How do I purchase Hybrid coin? <i
                                                                class="fas fa-caret-down rotate-icon"></i>
                                                        </h5>
                                                    </a>
                                                </div>
                                                <div id="collapseTwo2" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingTwo2" data-parent="#accordionGeneral">
                                                    <div class="card-body">
                                                        <u>
                                                            <li>Download Trust Wallet.</li>
                                                            <li>Fund your Trust wallet with USDT (TRC 20) tokens</li>
                                                            <li>Create a free account at Hybridproject.io</li>
                                                            <li>Login and transfer your USDT from Trust wallet to your
                                                            </li>
                                                            <li>Hybridcoin wallet using the deposit button</li>
                                                            <li>Go ahead and purchase using the buy PMC button.</li>
                                                        </u>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingThree3">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordionGeneral" href="#collapseThree3"
                                                        aria-expanded="false" aria-controls="collapseThree3">
                                                        <h5 class="mb-0">
                                                            what is the minimum and maximum amount of Hybridcoin I can
                                                            purchase ? <i class="fas fa-caret-down rotate-icon"></i>
                                                        </h5>
                                                    </a>
                                                </div>
                                                <div id="collapseThree3" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingThree3" data-parent="#accordionGeneral">
                                                    <div class="card-body">
                                                        You can buy Hybridcoin with as low as $20. This makes it possible
                                                        for everyone to be a holder. The maximum Purchase of Hybridcoin
                                                        that any wallet can purchase is $15,000 hence Hybridcoin cannot
                                                        be rug pulled by a single individual or by whales.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingFour4">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordionGeneral" href="#collapseFour4"
                                                        aria-expanded="false" aria-controls="collapseFour4">
                                                        <h5 class="mb-0">
                                                            What is Hybridcoin Airdrop? <i
                                                                class="fas fa-caret-down rotate-icon"></i>
                                                        </h5>
                                                    </a>
                                                </div>
                                                <div id="collapseFour4" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingFour4" data-parent="#accordionGeneral">
                                                    <div class="card-body">
                                                        200,000,000 tokens has been exclusively reserved for rewarding
                                                        community members who are willing to share this life changing
                                                        opportunity with others.

                                                        When you invite someone to purchase Hybridcoin, you instantly get
                                                        rewarded with 20% of any amount they purchase in Hybridcoin
                                                        Airdrop. Hybridcoin airdrop is instantly withdrawable as USDT
                                                        into your Trust Wallet.

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingFive5">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordionGeneral" href="#collapseFive5"
                                                        aria-expanded="false" aria-controls="collapseFive5">
                                                        <h5 class="mb-0">
                                                            What are the risk associated with investing in Hybridcoin? <i
                                                                class="fas fa-caret-down rotate-icon"></i>
                                                        </h5>
                                                    </a>
                                                </div>
                                                <div id="collapseFive5" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingFive5" data-parent="#accordionGeneral">
                                                    <div class="card-body">
                                                        1. Do not share your trust wallet 12 words recovery phrase with
                                                        anyone as your funds can be stolen or tampered with.
                                                        <br>
                                                        2. Do not lose or forget your Hybridcoin wallet password as you
                                                        cannot access your wallet without your password or reset your
                                                        password if forgotten.

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingSix6">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordionGeneral" href="#collapseSix6"
                                                        aria-expanded="false" aria-controls="collapseSix6">
                                                        <h5 class="mb-0">
                                                        <h5 class="mb-0">
                                                            How do I accumulate more Hybridcoin? <i
                                                                class="fas fa-caret-down rotate-icon"></i>
                                                        </h5>
                                                    </a>
                                                </div>
                                                <div id="collapseSix6" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingSix6" data-parent="#accordionPre">
                                                    <div class="card-body">
                                                        You can either deposit USDT into your Hybridcoin wallet and make
                                                        purchase or invite your friends to make purchase and get
                                                        rewarded with airdrop. You can also purchase Hybridcoin with your
                                                        airdrop rewards.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
            <!-- FAQ Section end-->


        </div>
        <!-- Content Section End -->
        <div class="clear"></div>
        <footer class="platinum-footer">
            <div class="footer-widget-area text-center">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-8">

                            <div class="widget-area">
                                <div class="widget">
                                    <ul class="footer-menu horizontal-menu onepage">
                                        <li><a href="#about">About ICO</a></li>
                                        <li><a href="#convertor">Currency Convertor</a></li>
                                        <li><a href="#token">Token</a></li>
                                        <li><a href="#roadmap">Roadmap</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-area">
                                <div class="widget widget-html">
                                    <h2 class="widget-title">Newsletter</h2>
                                    <div class="text">
                                        <p>Keep to date with our progress. Subscribe for e-mail updates.</p>
                                    </div>
                                    <div class="newsletter">
                                        <form method="post">
                                            <input type="email" name="Email" placeholder="Your email address">
                                            <button class="btn" name="subscribe">subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-area">
                                <div class="widget widget-html text-center">
                                    <div class="socials">
                                        <ul>
                                            <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li><a href="https://telegram.org/"><i
                                                        class="fab fa-telegram-plane"></i></a></li>
                                            <li><a href="https://bitcoin.com/"><i class="fab fa-btc"></i></a></li>
                                            <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copy-text">Copyright © {{ date('Y') }} {{ env('APP_NAME') }} All rights
                                reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!--Main Wrapper End-->

    <script src="{{ asset('main/js/jquery.min.js') }}"></script>
    <script src="{{ asset('main/js/circle-progress.js') }}"></script>
    <script src="{{ asset('main/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('main/js/onpagescroll.js') }}"></script>
    <script src="{{ asset('main/js/wow.min.js') }}"></script>
    <script src="{{ asset('main/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('main/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('main/js/slick.min.js') }}"></script>
    <script src="{{ asset('main/js/Chart.js') }}"></script>
    <script src="{{ asset('main/js/chart-function.js') }}"></script>
    <script src="{{ asset('main/js/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('main/js/script2.js') }}"></script>
    <script src="{{ asset('main/js/particles.js') }}"></script>
    <script src="{{ asset('main/js/gold-app2.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            setTimeout(function() {
                jQuery('.coinpool-animation').addClass('start-animation');
            }, 1000);
            setTimeout(function() {
                jQuery('.coinpool-animation .lines').addClass('active');
            }, 2000);
        });
    </script>


    <script>
        (function($) {
            'use strict';
            /*======================= 
              01. Wow Active 
            ======================*/
            new WOW().init();

            /*======================= 
              02. Timer
            ======================*/
            var ClockDate = $('#clock').data("date");
            $('#clock').countdown(ClockDate, function(event) {
                var $this = $(this).html(event.strftime('' +
                    '<ul>' +
                    '<li><span>%D<em>days</em></span></li>' +
                    '<li><span>%H<em>hours </em></span></li>' +
                    '<li><span>%M<em>minutes</em></span></li>' +
                    '<li><span>%S<em>seconds</em></span></li>' +
                    '</ul>'
                ));
            });

        })(jQuery);
    </script>
</body>


</html>
