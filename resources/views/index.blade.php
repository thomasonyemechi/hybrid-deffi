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
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}" type="text/css" />

    <style>
        .more {
            display: none;
        }

        .date {
            color: white !important;
        }

        .bf-image {
            color: #7777dd;
        }
    </style>
</head>

<body>

    <!--Main Wrapper Start-->
    <div class="wrapper" id="top">
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
                                <li class="nav-btn"><a href="/access" class="text-white" >Launch</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class="midd-container">

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
                            {{-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu mauris
                                bibendum, tincidunt mauris at, tempor nunc.</p> --}}
                            <div class="hero-btns">
                                <a href="/launch" class="btn">Buy {{ env('APP_NAME') }}</a>
                                <a href="/access" class="btn bg-white btn-outline-light text-dark ">GAIN ACCESS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



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



            <!-- Benefits Start -->
            <div class="benefits p-tb light-gray-bg ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="benefit-box text-center ">
                                <div class="benefit-icon">
                                </div>
                                <div class="text" id="idea">
                                    <h4>THE Hybrid STRATEGY - THE IDEA</h4>
                                    <div>
                                        <p>
                                            Cryptocurrency is any form of currency that exists virtually or digitally
                                            and
                                            uses cryptography to secure transactions. One of the most secured
                                            technologies
                                            ever created is the blockchain technology which makes it difficult for
                                            hackers
                                            to corrupt. In cryptocurrency, banks are not needed to very transactions or
                                            payment. When you transfer cryptocurrencies, <span class="dot">...</span>
                                            <span class="more">
                                                the transactions are recorded in a public ledger. Cryptocurrency is
                                                stored in digital wallets.

                                                The prices of cryptocurrencies fluctuates because of the influence of
                                                demand and supply which can be further influenced by user sentiments,
                                                media hype and government regulations.

                                                Many cryptocurrencies are promoted and marketed as speculative
                                                investments which attract investors looking to make quick profits. Some
                                                of these investors are less concerned with the long term value of the
                                                cryptocurrency rather they are more focused on short term price
                                                movements which can further skyrocket or plummet the prices of
                                                cryptocurrencies. The critical fact behind the value of a particular
                                                cryptocurrency is if enough people agree it is valuable, the more people
                                                want to own it and buy, the higher the price goes, the more people do
                                                not want to own the coin and sell of, the lower the price goes.

                                                Hybrid coin is focused on creating a project to solve several user and
                                                technology challenges investors encounter with cryptocurrencies. The
                                                best of profits and crypto gains are experienced by investors and
                                                traders who jump into sustainable projects for the long term and not
                                                just quick gains which drastically affect the market price. The Hybrid
                                                Strategy requires you to compulsorily hold your assets for a minimum of
                                                1 year before you allowed by the technology to sell. This way the coin
                                                is fortified against user sentiments, panic crypto news, media hype,
                                                government regulation and bitcoin dominance. This tested strategy
                                                ensures only an upward movement in the price of Hybrid coin for the first
                                                twelve months and a steady fluctuation and growth in the price
                                                afterwards. Everyone in this project is compelled to aim towards
                                                appealing long term profits rather than short term gains which creates
                                                market turmoil.

                                                Too many investors globally have been wanting and desiring a Hodl
                                                strategy like this. Patience is key! Most crypto investors posses little
                                                or no experience, skills and ability to play the market and hence are
                                                not well equipped the market volatility and trade assets, only a few
                                                professionals stand the chance of making tangible profits from the
                                                market but the Hybrid strategy makes it easy and convenient for all to
                                                win, amateurs and professionals alike. Generally the Hybrid hodl strategy
                                                refers to the strategy of preventing community members from selling
                                                their digital assets over a stipulated period to create an overall
                                                steady growth in coin price.
                                            </span>
                                        </p>
                                    </div>

                                    <a href="javascript:;" class="text-center readmore" data-id="idea">Read More <i
                                            class="fa fa-arrow-alt-circle-right"></i> </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="benefit-box text-center ">
                                <div class="benefit-icon">
                                </div>
                                <div class="text" id="airdrop">
                                    <h4>THE Hybrid REWARD - AIRDROP</h4>
                                    <div>
                                        <p>

                                            THE Hybrid REWARD - AIRDROP
                                            Promoting consumer goods like food and clothing is entirely different from
                                            cryptocurrency projects. Promoting crypto projects requires a different set
                                            of language and approach. As the use of cryptocurrencies becomes more
                                            popular, crypto projects need to develop more efficient reward and promotion
                                            strategies to stand out from competitors <span class="dot">...</span>
                                            <span class="more">
                                                especially for newly developed crypto projects. Instead of spending huge
                                                amount in paying crypto influencers and manually manipulating coin
                                                value, we have decided to embrace a more organic route to project and
                                                community development.

                                                The Hybrid reward is a technique to offer incentives for community
                                                development through airdropping members when they perform simple
                                                publicity tasks. Airdrop means sending coins to community members to
                                                generate excitement, create awareness and attract talents into the
                                                project. This airdrop reward model implies that community members who
                                                invite others to purchase Hybrid coin instantly receives as airdrop 20%
                                                of any amount purchased by those they invited. Therefore anytime Hybrid
                                                coin is purchased, someone get rewarded with instantly withdrawable
                                                Hybrid coin tokens as airdrop. You are not required to make any
                                                investment to qualify for Hybrid rewards(airdrop).

                                                Simply spread the news and get rewarded. In the Hybrid ecosystem,
                                                airdrops are instantly withdrawable or tradable for other assets such as
                                                USDT. 200,000,000 tokens have been kept aside for distribution as
                                                airdrop to community members. This way, the Hybrid coin project recieves
                                                greater support from a wide range of users. This will encourage
                                                community members to get involved and take on more responsibilities thus
                                                a collective contribution in the growth of the coin.
                                            </span>
                                        </p>
                                    </div>

                                    <a href="javascript:;" class="text-center readmore" data-id="airdrop">Read More
                                        <i class="fa fa-arrow-alt-circle-right"></i> </a>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-6 col-md-6">
                            <div class="benefit-box text-center ">
                                <div class="benefit-icon">
                                </div>
                                <div class="text" id="margin">
                                    <h4>THE Hybrid CION REWARD MARGIN</h4>
                                    <div>
                                        <p>

                                            You are invited to play a critical role in the expansion of our ecosystem
                                            and share in the rewards. As an investor, if the total amount of USDT
                                            invested in purchasing Hybrid coin is up to $1000, then all your Hybrid
                                            rewards(airdrop) are instantly withdrawable. As an investor, if the total
                                            amount of USDT invested in purchasing Hybrid coin is not up to $1000, <span
                                                class="dot">...</span>
                                            <span class="more">
                                                then 50% of all your Hybrid rewards (airdrop) are instantly withdrawable
                                                while the other 50% is used to purchase more Hybrid coin for you
                                                automatically. This way you accumulate more Hybrid coin while you earn
                                                rewards.

                                                The more attention a coin has the more likely it is for purchases to be
                                                made globally by random individuals and organisations, when purchases
                                                are made by new community members who are not invited by old community
                                                members, the Hybrid rewards are randomly allocated to investors with over
                                                $1000 worth of {{ env('APP_NAME') }} purchased. Together we can make history
                                            </span>
                                        </p>
                                    </div>

                                    <a href="javascript:;" class="text-center readmore" data-id="margin">Read More <i
                                            class="fa fa-arrow-alt-circle-right"></i> </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="benefit-box text-center " style="height: auto">
                                <div class="benefit-icon">
                                </div>
                                <div class="text" id="blocks">
                                    <h4>MAJOR / MINOR BLOCKS & MULTI-MINING</h4>
                                    <div>
                                        <p>



                                            We are simply combining all the key aspects of carrying out an efficient and
                                            productive mining activity. From building a highly effective data center to
                                            providing a robust mining system for our ecosystem. The blockchain
                                            distribute database that maintains a continous growing list of ordered
                                            records called major blocks and these blocks are linked using <span
                                                class="dot">...</span>
                                            <span class="more">
                                                cryptography. The total Hybrid coin created is 1,200,000,000 coins,
                                                200,000,000 is exclusively reserved for Hybrid rewards(airdrop) for
                                                members who are interested in spreading the news of Hybrid coin while
                                                1,000,000,000 coin reserved exclusively for multi-mining. This powerful
                                                strategy also helps to ascertain the price of {{ env('APP_NAME') }}. The total
                                                quantity of Hybrid coins are divided into major blocks and distributed
                                                across minor blocks

                                                The first Major block is half of the total multi-mining quantity which
                                                is 500,000,000 coins (1,000,000,000/2) The next major block contains
                                                half the quantity of the previous major block which is 250,000,000 coins
                                                (500,000,000/2) and it continues this way downwards. So each major block
                                                contains twice the quantity of the next major block. Major block
                                                copmprises of minor blocks, each major blocks contains 5 minor blocks
                                                and each minor block contains one-fifth of the amount of coins that
                                                particular major block contains. The distribution of Hybrid coin to our
                                                community will be carried out according to the minor blocks of each
                                                major block. From the first to the fifth minor block, as the coins
                                                embedded in a major block are exhausted, the Hybrid coin price changes
                                                and distribution continues from the next minor block causing a gradual
                                                decrease in the total coins remaining hence Hybrid coin becomes more
                                                expensive and scarce.
                                            </span>
                                        </p>
                                    </div>

                                    <a href="javascript:;" class="text-center readmore" data-id="blocks">Read More <i
                                            class="fa fa-arrow-alt-circle-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>




            <div class="roadmap-sec p-tb" id="roadmap">
                <div class="container">
                    <div class="sec-title  text-center">
                        <h3 class="mt-5 pt-5">Our Network</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div>
                                <div class="benefit-icon d-flex justify-content-center ">
                                    <i class="fa fa-cloud" style="font-size: 100px; color: #7777dd;" ></i>
                                </div>
                                <div class="text-center ">
                                    <h4 class="title fs-4 fw-bold">HIGH ENERGY EFFICIENCY</h4>
                                    <p>
                                        Thanks to {{ env('APP_NAME') }}'s next generation nominated proof-of-stake model which
                                        enables a
                                        consumption of only a small fraction of the energy used by their regular and
                                        conventional blockchains in the industry.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <div class="benefit-icon d-flex justify-content-center ">
                                    <i class="fa fa-bitcoin-sign" style="font-size: 100px; color: #7777dd;" ></i>

                                </div>
                                <div class="text-center  ">
                                    <h4 class="title fs-4 fw-bold">TOKEN MANAGEMENT & ECOSYSTEM</h4>
                                    <p>
                                        Storing and managing tokens on a blockchain provides greater transparency,
                                        accuracy,
                                        integrity than traditional forms of asset accounting and trading. These token
                                        protocols power a variety of projects.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <div class="benefit-icon d-flex justify-content-center ">
                                    <i class="fa fa-coins" style="font-size: 100px; color: #7777dd;" ></i>
                                </div>
                                <div class="text-center  ">
                                    <h4 class="title fs-4 fw-bold">DEFI APPLICATIONS & NFTS.</h4>
                                    <p>
                                        To create more utility for our project, our network is scalable enough to
                                        accommodate a wide variety of decentralized applications and NFT projects.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="mobileapp-section p-tb black-bg white-sec">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-lg-12">
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







            <div class="featured-product-sec p-tb white-sec dark-gray-bg-tone-2" id="featured-product">
                <div id="gold-tech-bg"></div>
                <div class="container">
                    <div class="sec-title text-center">
                        <h3>Benefits of Using Our Solution</h3>
                    </div>
                    <div class="sub-txt text-center">
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus tincidunt ultrices. Ut
                            quis blandit dolor. Ut laoreet sagittis arcu eu tristique. </p> --}}
                    </div>
                </div>
                <div class="container">
                    <div class="benefits-boxes row">
                        <div class="col-md-6">
                            <div class="item wow fadeInUp">
                                <div class="bf-image">
                                    <i class="fa fa-circle-nodes" style="font-size: 100px;" ></i>
                                </div>
                                <div class="bf-details">
                                    <h3>Circulating Supply <br><small>1,000,000,000 PMC</small> </h3>
                                    <p>
                                        With a significantly high quantity of token been produced and made actively
                                        available for the market, {{ env('APP_NAME') }} project becomes the first 100% participant
                                        driven community
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item wow fadeInUp">
                                <div class="bf-image">
                                    <i class="fa fa-cloud-arrow-up" style="font-size: 100px;" ></i>

                                </div>
                                <div class="bf-details">
                                    <h3>Market Cap Vision <br><small>$30,000,000,000</small></h3>
                                    <p>
                                        With the first major block of {{ env('APP_NAME') }} distribution been reserved for Pre-Sale,
                                        this will help price quickly skyrockets after the pre-sale duration is over.
                                        Hence this vision is possible few years from now.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.1s">
                                <div class="bf-image">
                                    <i class="fa fa-rocket" style="font-size: 100px;" ></i>

                                </div>
                                <div class="bf-details">
                                    <h3>Airdrop Supply <br><small>200,000,000 PMC.</small></h3>
                                    <p>
                                        Our participants are our major influencers, tell your friends about {{ env('APP_NAME') }}
                                        and earn an instantly withdrawable 20% of any purchase they make.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.1s">
                                <div class="bf-image">
                                    <i class="fa fa-square-minus" style="font-size: 100px;" ></i>

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
                                    <i class="fa fa-square-plus" style="font-size: 100px;" ></i>

                                </div>
                                <div class="bf-details">
                                    <h3>Maximum Purchase <br><small>$15,000</small></h3>
                                    <p>
                                        No single member is given a huge autonomy over the project. You cannot purchase
                                        {{ env('APP_NAME') }} with more than $15000 at the current price until later period when
                                        only smaller blocks are available.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="bf-image">
                                    <i class="fa fa-wallet" style="font-size: 100px;" ></i>

                                </div>
                                <div class="bf-details">
                                    <h3>Recommended Wallet <br><small>Trust Wallet</small></h3>
                                    <p>
                                        The most recommended wallet for accessing the {{ env('APP_NAME') }} ecosystem is Trust
                                        Wallet. Ensure you keep your recovery phrase safe and do not share with anyone
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="bf-image">
                                    <i class="fa fa-users" style="font-size: 100px;" ></i>

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
                                    <i class="fa fa-tag" style="font-size: 100px;" ></i>

                                </div>
                                <div class="bf-details">
                                    <h3>Launch Pre-Sale Price <br><small>$.10</small></h3>
                                    <p>

                                        Lucky participants all over the world get the golden opportunity to accumulate
                                        {{ env('APP_NAME') }} at an extremely affordable price before an advertised general public
                                        Sale
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="bf-image">
                                    <i class="fa fa-clock" style="font-size: 100px;" ></i>

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
                                    <i class="fa fa-clock-rotate-left" style="font-size: 100px;" ></i>
                                </div>
                                <div class="bf-details">
                                    <h3>Pre-Sale Block Supply <br><small>500,000,000 PMC</small> </h3>
                                    <p>
                                        This quantity of {{ env('APP_NAME') }} is exclusively reserved for Presale, once distributed
                                        entirely, the lowest purchase price of {{ env('APP_NAME') }} becomes $0.2
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="roadmap-sec p-tb mercury-layout" id="roadmap">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading">Road Map</h2>
                    </div>
                    <div class="mercury-roadmap owl-carousel">
                        <div class="roadmap-item odd">
                            <div class="roadmap-text">
                                <div class="roadmap-day">
                                    <div class="date">PHASE 1</div>
                                </div>
                                <div class="roadmap-item-text">
                                    <h4>March 2022</h4>
                                    <p class="lead">White paper,Launchpad and initial utility development.</p>
                                </div>
                            </div>
                        </div>
                        <div class="roadmap-item even">
                            <div class="roadmap-text">
                                <div class="roadmap-day">
                                    <div class="date">PHASE 2</div>
                                </div>
                                <div class="roadmap-item-text">
                                    <h4>July 2023</h4>
                                    <p class="lead">Commencement of presale & airdrop distribution.</p>
                                </div>
                            </div>
                        </div>
                        <div class="roadmap-item odd">
                            <div class="roadmap-text">
                                <div class="roadmap-day">
                                    <div class="date">PHASE 3</div>
                                </div>
                                <div class="roadmap-item-text">
                                    <h4>Coming Soon</h4>
                                    <p class="lead">Development & implementation of further used cases.</p>
                                </div>
                            </div>
                        </div>
                        <div class="roadmap-item even">
                            <div class="roadmap-text">
                                <div class="roadmap-day">
                                    <div class="date">PHASE 4</div>
                                </div>
                                <div class="roadmap-item-text">
                                    <h4>Coming Soon</h4>
                                    <p class="lead"> NFT distribution to $10K+ holders of {{ env('APP_NAME') }}.</p>
                                </div>
                            </div>
                        </div>
                        <div class="roadmap-item odd">
                            <div class="roadmap-text">
                                <div class="roadmap-day">
                                    <div class="date">PHASE 5</div>
                                </div>
                                <div class="roadmap-item-text">
                                    <h4>Coming Soon</h4>
                                    <p class="lead">Collaboration and blockchain project partnerships.</p>
                                </div>
                            </div>
                        </div>
                        <div class="roadmap-item even">
                            <div class="roadmap-text">
                                <div class="roadmap-day">
                                    <div class="date">PHASE 6</div>
                                </div>
                                <div class="roadmap-item-text">
                                    <h4>Coming Soon</h4>
                                    <p class="lead">Global merchant adoption for enhanced utility.</p>
                                </div>
                            </div>
                        </div>
                        <div class="roadmap-item odd">
                            <div class="roadmap-text">
                                <div class="roadmap-day">
                                    <div class="date">PHASE 7</div>
                                </div>
                                <div class="roadmap-item-text">
                                    <h4>Coming Soon</h4>
                                    <p class="lead">{{ env('APP_NAME') }} crypto exchange launch with over 300+ trading pairs.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="roadmap-item even">
                            <div class="roadmap-text">
                                <div class="roadmap-day">
                                    <div class="date">PHASE 8</div>
                                </div>
                                <div class="roadmap-item-text">
                                    <h4>Coming Soon</h4>
                                    <p class="lead">NFT Marketplace, gaming and international traders hub.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                        rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on
                            TradingView</span></a></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                    {
                        "width": "100%",
                        "height": "100%",
                        "defaultColumn": "overview",
                        "screener_type": "crypto_mkt",
                        "displayCurrency": "USD",
                        "colorTheme": "light",
                        "locale": "en",
                        "isTransparent": false
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->

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
                                <h2 class="section-heading fs-3 ">Currency Converter</h2>
                                <div class="sub-txt">
                                </div>
                            </div>

                            <div class="currency-box text-center">
                                <div class="currency-icon mt-3">
                                    <img src="{{ asset('main/images/section-6/convert-icon.png') }}"
                                        alt="World Coverage" style="">
                                </div>
                                <div class="currency-form">
                                    <form method="" action="#">
                                        <div class="input-group">
                                            <input type="text" id="usdt" class="form-control" name=""
                                                placeholder="Enter Amount">
                                            <input type="text" class="form-control postpend" name=""
                                                readonly="" value="USDT">
                                        </div>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="" id="hbc"
                                                placeholder=" readonly ">
                                            <input type="text" class="form-control postpend" name=""
                                                readonly="" value="hbc">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="hero-main white-sec ">
                <div id="gold-tech-bg"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 hero-caption wow fadeIn text-center">
                            <div class="sec-title text-center">
                                <h1>Token Sales</h1>
                            </div>
                            {{-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu
                                mauris
                                bibendum, tincidunt mauris at, tempor nunc.</p> --}}
                        </div>
                        <div class="col-sm-10 wow fadeIn" data-wow-delay="0.5s">
                            <div class="pre-sale-timer-outer">
                                <div class="pre-sale-timer style-2">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <h3>Sales<span>will Start in</span></h3>
                                            <div id="clock" data-date="2023/7/5"></div>
                                            <div class="hero-right-btn"><a class="btn btn4" href="/launch">Register &
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
                                                            What is special about {{ env('APP_NAME') }}? <i
                                                                class="fas fa-caret-down rotate-icon"></i>
                                                        </h5>
                                                    </a>
                                                </div>
                                                <div id="collapseOne1" class="collapse show" role="tabpanel"
                                                    aria-labelledby="headingOne1" data-parent="#accordionGeneral">
                                                    <div class="card-body">
                                                        {{ env('APP_NAME') }} is the cryptocurrency that will power and be used as
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
                                                            <li>{{ env('APP_NAME') }} wallet using the deposit button</li>
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
                                                            what is the minimum and maximum amount of {{ env('APP_NAME') }} I can
                                                            purchase ? <i class="fas fa-caret-down rotate-icon"></i>
                                                        </h5>
                                                    </a>
                                                </div>
                                                <div id="collapseThree3" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingThree3" data-parent="#accordionGeneral">
                                                    <div class="card-body">
                                                        You can buy {{ env('APP_NAME') }} with as low as $20. This makes it possible
                                                        for everyone to be a holder. The maximum Purchase of {{ env('APP_NAME') }}
                                                        that any wallet can purchase is $15,000 hence {{ env('APP_NAME') }} cannot
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
                                                            What is {{ env('APP_NAME') }} Airdrop? <i
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

                                                        When you invite someone to purchase {{ env('APP_NAME') }}, you instantly get
                                                        rewarded with 20% of any amount they purchase in {{ env('APP_NAME') }}
                                                        Airdrop. {{ env('APP_NAME') }} airdrop is instantly withdrawable as USDT
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
                                                            What are the risk associated with investing in {{ env('APP_NAME') }}? <i
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
                                                        2. Do not lose or forget your {{ env('APP_NAME') }} wallet password as you
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
                                                                How do I accumulate more {{ env('APP_NAME') }}? <i
                                                                    class="fas fa-caret-down rotate-icon"></i>
                                                            </h5>
                                                    </a>
                                                </div>
                                                <div id="collapseSix6" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingSix6" data-parent="#accordionPre">
                                                    <div class="card-body">
                                                        You can either deposit USDT into your {{ env('APP_NAME') }} wallet and make
                                                        purchase or invite your friends to make purchase and get
                                                        rewarded with airdrop. You can also purchase {{ env('APP_NAME') }} with your
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

        </div>
        <div class="clear"></div>
        <footer class="platinum-footer pt-0 pb-0">
            <div class="footer-widget-area pt-5 text-center">
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
                                    <div class="    ">
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

    <script>
        $(function() {
            $('body').on('click', '.readmore', function() {
                id = $(this).data('id');
                console.log(id);
                ele = $(`#${id}`)

                ele.find('.more').show('slowly');
                console.log(ele);
            })



            $('#usdt').on('keyup', function() {
                usdt = $('#usdt');
                amt_usdt = parseInt(usdt.val());
                $.ajax({
                    method: 'get',
                    url: '/get_price',
  
                }).done(function(res) {
                    price = amt_usdt * res.price

                    price = (price == NaN) ? 0 : price;

                    $('#hbc').val(price)
                }).fail(function(res) {
                    console.log(res);
                })
            })

        })
    </script>
</body>

</html>
