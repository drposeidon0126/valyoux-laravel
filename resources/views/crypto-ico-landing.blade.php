<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>@yield('title') | Valyou X Music</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/valyou_x_emblem.svg') }}">

    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/owl.carousel/owl.carousel.min.css') }}">

    @include('layouts.head')

</head>
<style>
    .navigation .navbar-nav .nav-item .nav-link{
        padding: 6px 12px;
    }
</style>

<body data-spy="scroll" data-target="#topnav-menu" data-offset="60">

    <nav class="navbar navbar-expand-lg navigation fixed-top sticky">
        <div class="container">
            <a class="navbar-logo" href="index.html">
                <img src="{{ URL::asset('/assets/images/valyou_x_black_logo.svg')}}" alt="" height="40" class="logo logo-dark">
                <img src="{{ URL::asset('/assets/images/valyou_x_white_logo.svg')}}" alt="" height="40" class="logo logo-light">
            </a>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                data-toggle="collapse" data-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav ml-auto" id="topnav-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="account-balance">Bank</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="token-presale">Buy Valyou X Tokens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('projects-list') }}">Market</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#roadmap">Social Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Connect</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">Live</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faqs">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faqs">Log in</a>
                    </li>

                </ul>

                @auth
                    <div class="ml-lg-2">
                        <a href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-outline-success w-xs">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @else
                    <div class="ml-lg-2">
                        <a href="{{ route('login') }}" class="btn btn-outline-success w-xs">Sign Up</a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <!-- hero section start -->
    <section class="section hero-section bg-ico-hero" id="home">
        <div class="bg-overlay bg-primary"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="text-white-50">
                        <h1 class="text-white font-weight-semibold mb-3 hero-title">Buy VXD for up to 10X returns on investment.</h1>
                        <p class="font-size-14">Think about VXD simply as as a digital dollar with a 1 USD: 1 VXD value. An internal currency that will be used inside a new global music industry & Economy</p>

                        <div class="button-items mt-4 btn-landing">
                            <a href="#" class="btn btn-green">Get Whitepaper</a>
                            <a href="#" class="btn btn-pink">How it works</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-10 ml-lg-auto">
                    <div class="card overflow-hidden mb-0 mt-5 mt-lg-0">
                        <div class="card-header text-center">
                            <h5 class="mb-0">Discounted Price | Limited Time</h5>
                        </div>
                        <div class="card-body">
                            <div class="text-center">

                                <h5>Time Left Pre Sale Round 1</h5>
                                <div class="mt-4">
                                    <div data-countdown="2020/12/31" class="counter-number ico-countdown"></div>
                                </div>

                                <div class="mt-4">
                                    <button type="button" class="btn btn-success w-md btn-green w-75">Buy VXD Currency Token</button>
                                </div>

                                <div class="mt-5">
                                    <h4 class="font-weight-semibold">1 VXD = $0.10 USD C</h4>
                                    <div class="clearfix mt-4">
                                        <h5 class="float-right font-size-14">5234.43</h5>
                                    </div>
                                    <div class="progress p-1 progress-xl softcap-progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 15%"
                                            aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-label">15 %</div>
                                        </div>
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                            role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-label">30 %</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- hero section end -->

    <!-- currency price section start -->
    <section class="section bg-white p-0">
        <div class="container">
            <div class="currency-price">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-xs mr-3">
                                        <span
                                            class="avatar-title rounded-circle bg-soft-warning text-warning font-size-18">
                                            <i class="mdi mdi-bitcoin"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-muted">Bitcoin</p>
                                        <h5>$ 9134.39</h5>
                                        <p class="text-muted text-truncate mb-0">+ 0.0012.23 ( 0.2 % ) <i
                                                class="mdi mdi-arrow-up ml-1 text-success"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-xs mr-3">
                                        <span
                                            class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                            <i class="mdi mdi-ethereum"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-muted">Ethereum</p>
                                        <h5>$ 245.44</h5>
                                        <p class="text-muted text-truncate mb-0">- 004.12 ( 0.1 % ) <i
                                                class="mdi mdi-arrow-down ml-1 text-danger"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-xs mr-3">
                                        <span class="avatar-title rounded-circle bg-soft-info text-info font-size-18">
                                            <i class="mdi mdi-litecoin"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-muted">USD C</p>
                                        <h5>$ 63.61</h5>
                                        <p class="text-muted text-truncate mb-0">+ 0.0001.12 ( 0.1 % ) <i
                                                class="mdi mdi-arrow-up ml-1 text-success"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- currency price section end -->

    <!-- about section start -->
    <section class="section pt-4 bg-white" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <div class="small-title">About VXD</div>
                        <h4>Why 10 X Return on Investment? How?</h4>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">

                    <div class="text-muted text-justify">
                        <h4 class="mb-4">The Valyou X Dollar (VXD)</h4>
                        <p>Depending on the time you see this. The price of VXD may have increased. Starting from ICO round of US $0.10 cents per VXD token.</p>
                        <p>Every month for the next 12 months the discount will be reduced by 10% which means that price will keep increasing by $0.10c until VXD price reaches $0.90 cents.</p>
                        <p>Once the current 9 round of VXD pre sale is complete, the tokens will then be locked up.</p>
                        <p>Your 10X ROI depends when you bought your VXD. The success of the Valyou X developments, business model van profes 20% of profits will be used to buy bock the token from you with company profits at oI VXD =I USDC Volume</p>
                        <p>Subject to success of the Valyou X platform, developments, business model revenue profits 20% of profits will be used to buy back the VXD token from you at a rate of 1 USDT for 1VXD </p>
                        <p>This is not investment advice.</p>

                        <div class="button-items btn-landing">
                            <a href="#" class="btn btn-success btn-pink">Read More</a>
                            <a href="#" class="btn btn-outline-primary btn-green">How It works</a>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-4 col-6">
                                <div class="mt-4">
                                    <h4>$ 6.2 M</h4>
                                    <p>Invest amount</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6">
                                <div class="mt-4">
                                    <h4>16245</h4>
                                    <p>Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 ml-auto">
                    <div class="mt-4 mt-lg-0">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card border">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <i class="mdi mdi-bitcoin h2 text-success"></i>
                                        </div>
                                        <h5>Investing with VXD</h5>
                                        <p class="text-muted mb-0">The New Global Music Industry Currency</p>

                                    </div>
                                    <div class="card-footer bg-transparent border-top text-center">
                                        <a href="#" class="text-primary">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card border mt-lg-5">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <i class="mdi mdi-wallet-outline h2 text-success"></i>
                                        </div>
                                        <h5>Direct Payments</h5>
                                        <p class="text-muted mb-0">Deposit, send, request and receive payments directly into you built in Valyou X digital wallet</p>

                                    </div>
                                    <div class="card-footer bg-transparent border-top text-center">
                                        <a href="#" class="text-primary">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <hr class="my-5">

            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme clients-carousel" id="clients-carousel">
                        <div class="item">
                            <div class="client-images">
                                <img src="assets/images/clients/1.png" alt="client-img"
                                    class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-images">
                                <img src="assets/images/clients/2.png" alt="client-img"
                                    class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-images">
                                <img src="assets/images/clients/3.png" alt="client-img"
                                    class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-images">
                                <img src="assets/images/clients/4.png" alt="client-img"
                                    class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-images">
                                <img src="assets/images/clients/5.png" alt="client-img"
                                    class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-images">
                                <img src="assets/images/clients/6.png" alt="client-img"
                                    class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- about section end -->

    <!-- Features start -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <div class="small-title">Features</div>
                        <h4>Key features of the product</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row align-items-center pt-4">
                <div class="col-md-6 col-sm-8">
                    <div>
                        <img src="assets/images/crypto/features-img/img-1.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-md-5 ml-auto">
                    <div class="mt-4 mt-md-auto">
                        <div class="d-flex align-items-center mb-2">
                            <div class="features-number font-weight-semibold display-4 mr-3">01</div>
                            <h4 class="mb-0">Artist</h4>
                        </div>
                        <p class="text-muted">If several languages coalesce, the grammar of the resulting language is
                            more simple and regular than of the individual will be more simple and regular than the
                            existing.</p>
                        <div class="text-muted mt-4">
                            <p class="mb-2"><i class="mdi mdi-circle-medium text-success mr-1"></i>Donec pede justo vel
                                aliquet</p>
                            <p><i class="mdi mdi-circle-medium text-success mr-1"></i>Aenean et nisl sagittis</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row align-items-center mt-5 pt-md-5">
                <div class="col-md-5">
                    <div class="mt-4 mt-md-0">
                        <div class="d-flex align-items-center mb-2">
                            <div class="features-number font-weight-semibold display-4 mr-3">02</div>
                            <h4 class="mb-0">Music Fan (Investor)</h4>
                        </div>
                        <p class="text-muted">It will be as simple as Occidental; in fact, it will be Occidental. To an
                            English person, it will seem like simplified English, as a skeptical Cambridge friend.</p>
                        <div class="text-muted mt-4">
                            <p class="mb-2"><i class="mdi mdi-circle-medium text-success mr-1"></i>Donec pede justo vel
                                aliquet</p>
                            <p><i class="mdi mdi-circle-medium text-success mr-1"></i>Aenean et nisl sagittis</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  col-sm-8 ml-md-auto">
                    <div class="mt-4 mr-md-0">
                        <img src="assets/images/crypto/features-img/img-2.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>

            </div>
            <!-- end row -->

            <div class="row align-items-center pt-4">
                <div class="col-md-6 col-sm-8">
                    <div>
                        <img src="assets/images/crypto/features-img/img-1.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-md-5 ml-auto">
                    <div class="mt-4 mt-md-auto">
                        <div class="d-flex align-items-center mb-2">
                            <div class="features-number font-weight-semibold display-4 mr-3">03</div>
                            <h4 class="mb-0">Business</h4>
                        </div>
                        <p class="text-muted">If several languages coalesce, the grammar of the resulting language is
                            more simple and regular than of the individual will be more simple and regular than the
                            existing.</p>
                        <div class="text-muted mt-4">
                            <p class="mb-2"><i class="mdi mdi-circle-medium text-success mr-1"></i>Donec pede justo vel
                                aliquet</p>
                            <p><i class="mdi mdi-circle-medium text-success mr-1"></i>Aenean et nisl sagittis</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Features end -->

    <!-- Roadmap start -->
    <section class="section bg-white" id="roadmap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <div class="small-title">Timeline</div>
                        <h4>Our Roadmap</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="hori-timeline">
                        <div class="owl-carousel owl-theme events navs-carousel" id="timeline-carousel">
                            <div class="item event-list">
                                <div>
                                    <div class="event-date">
                                        <div class="text-primary mb-1">December, 2019</div>
                                        <h5 class="mb-4">ICO Platform Idea</h5>
                                    </div>
                                    <div class="event-down-icon">
                                        <i class="bx bx-down-arrow-circle h1 text-primary down-arrow-icon"></i>
                                    </div>

                                    <div class="mt-3 px-3">
                                        <p class="text-muted">It will be as simple as occidental in fact it will be
                                            Cambridge</p>
                                    </div>
                                </div>
                            </div>

                            <div class="item event-list">
                                <div>
                                    <div class="event-date">
                                        <div class="text-primary mb-1">January, 2020</div>
                                        <h5 class="mb-4">Research on project</h5>
                                    </div>
                                    <div class="event-down-icon">
                                        <i class="bx bx-down-arrow-circle h1 text-primary down-arrow-icon"></i>
                                    </div>

                                    <div class="mt-3 px-3">
                                        <p class="text-muted">To an English person, it will seem like simplified English
                                            existence.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="item event-list active">
                                <div>
                                    <div class="event-date">
                                        <div class="text-primary mb-1">February, 2020</div>
                                        <h5 class="mb-4">ICO & Token Design</h5>
                                    </div>
                                    <div class="event-down-icon">
                                        <i class="bx bx-down-arrow-circle h1 text-primary down-arrow-icon"></i>
                                    </div>

                                    <div class="mt-3 px-3">
                                        <p class="text-muted">For science, music, sport, etc, Europe uses the same
                                            vocabulary.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="item event-list">
                                <div>
                                    <div class="event-date">
                                        <div class="text-primary mb-1">March, 2020</div>
                                        <h5 class="mb-4">ICO Launch Platform</h5>
                                    </div>
                                    <div class="event-down-icon">
                                        <i class="bx bx-down-arrow-circle h1 text-primary down-arrow-icon"></i>
                                    </div>

                                    <div class="mt-3 px-3">
                                        <p class="text-muted">New common language will be more simple than existing.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="item event-list">
                                <div>
                                    <div class="event-date">
                                        <div class="text-primary mb-1">April, 2020</div>
                                        <h5 class="mb-4">Token sale round 1</h5>
                                    </div>
                                    <div class="event-down-icon">
                                        <i class="bx bx-down-arrow-circle h1 text-primary down-arrow-icon"></i>
                                    </div>

                                    <div class="mt-3 px-3">
                                        <p class="text-muted">It will be as simple as occidental in fact it will be
                                            Cambridge</p>
                                    </div>
                                </div>
                            </div>

                            <div class="item event-list">
                                <div>
                                    <div class="event-date">
                                        <div class="text-primary mb-1">May, 2020</div>
                                        <h5 class="mb-4">Token sale round 2</h5>
                                    </div>
                                    <div class="event-down-icon">
                                        <i class="bx bx-down-arrow-circle h1 text-primary down-arrow-icon"></i>
                                    </div>

                                    <div class="mt-3 px-3">
                                        <p class="text-muted">To an English person, it will seem like simplified English
                                            existence.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Roadmap end -->

    <!-- Team start -->
    <section class="section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <div class="small-title">Team</div>
                        <h4>Meet our team</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="col-lg-12">
                <div class="owl-carousel owl-theme events navs-carousel" id="team-carousel">
                    <div class="item">
                        <div class="card text-center team-box">
                            <div class="card-body">
                                <div>
                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded">
                                </div>

                                <div class="mt-3">
                                    <h5>Mark Hurley</h5>
                                    <P class="text-muted mb-0">CEO & Lead</P>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-top">
                                <div class="d-flex mb-0 team-social-links">
                                    <div class="flex-fill">
                                        <a href="#" data-toggle="tooltip" title="Facebook">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-toggle="tooltip" title="Linkedin">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-toggle="tooltip" title="Google">
                                            <i class="mdi mdi-google"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card text-center team-box">
                            <div class="card-body">
                                <div>
                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded">
                                </div>

                                <div class="mt-3">
                                    <h5>Calvin Smith</h5>
                                    <P class="text-muted mb-0">Blockchain developer</P>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-top">
                                <div class="d-flex mb-0 team-social-links">
                                    <div class="flex-fill">
                                        <a href="#" data-toggle="tooltip" title="Facebook">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-toggle="tooltip" title="Linkedin">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-toggle="tooltip" title="Google">
                                            <i class="mdi mdi-google"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card text-center team-box">
                            <div class="card-body">
                                <div>
                                    <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded">
                                </div>
                                <div class="mt-3">
                                    <h5>Vickie Sample</h5>
                                    <P class="text-muted mb-0">Designer</P>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-top">
                                <div class="d-flex mb-0 team-social-links">
                                    <div class="flex-fill">
                                        <a href="#" data-toggle="tooltip" title="Facebook">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-toggle="tooltip" title="Linkedin">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-toggle="tooltip" title="Google">
                                            <i class="mdi mdi-google"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card text-center team-box">
                            <div class="card-body">
                                <div>
                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded">
                                </div>

                                <div class="mt-3">
                                    <h5>Alma Farley</h5>
                                    <P class="text-muted mb-0">App developer</P>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-top">
                                <div class="d-flex mb-0 team-social-links">
                                    <div class="flex-fill">
                                        <a href="#" data-toggle="tooltip" title="Facebook">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-toggle="tooltip" title="Linkedin">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-toggle="tooltip" title="Google">
                                            <i class="mdi mdi-google"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card text-center team-box">
                            <div class="card-body">
                                <div>
                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded">
                                </div>

                                <div class="mt-3">
                                    <h5>Amy Hood </h5>
                                    <P class="text-muted mb-0">Designer</P>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-top">
                                <div class="d-flex mb-0 team-social-links">
                                    <div class="flex-fill">
                                        <a href="#" data-toggle="tooltip" title="Facebook">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-toggle="tooltip" title="Linkedin">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-toggle="tooltip" title="Google">
                                            <i class="mdi mdi-google"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Team end -->

    <!-- Faqs start -->
    <section class="section" id="faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <div class="small-title">FAQs</div>
                        <h4>Frequently asked questions By</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="vertical-nav">
                        <div class="row">
                            <div class="col-lg-2 col-sm-4">
                                <div class="nav flex-column nav-pills" role="tablist">
                                    <a class="nav-link active" id="v-pills-gen-ques-tab" data-toggle="pill"
                                        href="#v-pills-gen-ques" role="tab">
                                        <i class="bx bx-help-circle nav-icon d-block mb-2"></i>
                                        <p class="font-weight-bold mb-0">Artist</p>
                                    </a>
                                    <a class="nav-link" id="v-pills-token-sale-tab" data-toggle="pill"
                                        href="#v-pills-token-sale" role="tab">
                                        <i class="bx bx-receipt nav-icon d-block mb-2"></i>
                                        <p class="font-weight-bold mb-0">Music Fan (Investor)</p>
                                    </a>
                                    <a class="nav-link" id="v-pills-roadmap-tab" data-toggle="pill"
                                        href="#v-pills-roadmap" role="tab">
                                        <i class="bx bx-timer d-block nav-icon mb-2"></i>
                                        <p class="font-weight-bold mb-0">Business</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-10 col-sm-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="v-pills-gen-ques"
                                                role="tabpanel">
                                                <h4 class="card-title mb-4">General Questions</h4>

                                                <div>
                                                    <div id="gen-ques-accordion" class="accordion custom-accordion">
                                                        <div class="mb-3">
                                                            <a href="#general-collapseOne" class="accordion-list"
                                                                data-toggle="collapse" aria-expanded="true"
                                                                aria-controls="general-collapseOne">

                                                                <div>What is Lorem Ipsum ?</div>
                                                                <i class="mdi mdi-minus accor-plus-icon"></i>

                                                            </a>

                                                            <div id="general-collapseOne" class="collapse show"
                                                                data-parent="#gen-ques-accordion">
                                                                <div class="card-body">
                                                                    <p class="mb-0">Everyone realizes why a new common
                                                                        language would be desirable: one could refuse to
                                                                        pay expensive translators. To achieve this, it
                                                                        would be necessary to have uniform grammar,
                                                                        pronunciation and more common words.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <a href="#general-collapseTwo"
                                                                class="accordion-list collapsed" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="general-collapseTwo">
                                                                <div>Why do we use it ?</div>
                                                                <i class="mdi mdi-minus accor-plus-icon"></i>
                                                            </a>
                                                            <div id="general-collapseTwo" class="collapse"
                                                                data-parent="#gen-ques-accordion">
                                                                <div class="card-body">
                                                                    <p class="mb-0">If several languages coalesce, the
                                                                        grammar of the resulting language is more simple
                                                                        and regular than that of the individual
                                                                        languages. The new common language will be more
                                                                        simple and regular than the existing European
                                                                        languages.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <a href="#general-collapseThree"
                                                                class="accordion-list collapsed" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="general-collapseThree">
                                                                <div>Where does it come from ?</div>
                                                                <i class="mdi mdi-minus accor-plus-icon"></i>
                                                            </a>
                                                            <div id="general-collapseThree" class="collapse"
                                                                data-parent="#gen-ques-accordion">
                                                                <div class="card-body">
                                                                    <p class="mb-0">It will be as simple as Occidental;
                                                                        in fact, it will be Occidental. To an English
                                                                        person, it will seem like simplified English, as
                                                                        a skeptical Cambridge friend of mine told me
                                                                        what Occidental.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <a href="#general-collapseFour"
                                                                class="accordion-list collapsed" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="general-collapseFour">
                                                                <div>Where can I get some ?</div>
                                                                <i class="mdi mdi-minus accor-plus-icon"></i>
                                                            </a>
                                                            <div id="general-collapseFour" class="collapse"
                                                                data-parent="#gen-ques-accordion">
                                                                <div class="card-body">
                                                                    <p class="mb-0">To an English person, it will seem
                                                                        like simplified English, as a skeptical
                                                                        Cambridge friend of mine told me what Occidental
                                                                        is. The European languages are members of the
                                                                        same family. Their separate existence is a myth.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-token-sale" role="tabpanel">
                                                <h4 class="card-title mb-4">Token sale</h4>

                                                <div>
                                                    <div id="token-accordion" class="accordion custom-accordion">
                                                        <div class="mb-3">
                                                            <a href="#token-collapseOne"
                                                                class="accordion-list collapsed" data-toggle="collapse"
                                                                aria-expanded="false" aria-controls="token-collapseOne">
                                                                <div>Why do we use it ?</div>
                                                                <i class="mdi mdi-minus accor-plus-icon"></i>
                                                            </a>
                                                            <div id="token-collapseOne" class="collapse"
                                                                data-parent="#token-accordion">
                                                                <div class="card-body">
                                                                    <p class="mb-0">If several languages coalesce, the
                                                                        grammar of the resulting language is more simple
                                                                        and regular than that of the individual
                                                                        languages. The new common language will be more
                                                                        simple and regular than the existing European
                                                                        languages.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <a href="#token-collapseTwo" class="accordion-list"
                                                                data-toggle="collapse" aria-expanded="true"
                                                                aria-controls="token-collapseTwo">

                                                                <div>What is Lorem Ipsum ?</div>
                                                                <i class="mdi mdi-minus accor-plus-icon"></i>

                                                            </a>

                                                            <div id="token-collapseTwo" class="collapse show"
                                                                data-parent="#token-accordion">
                                                                <div class="card-body">
                                                                    <p class="mb-0">Everyone realizes why a new common
                                                                        language would be desirable: one could refuse to
                                                                        pay expensive translators. To achieve this, it
                                                                        would be necessary to have uniform grammar,
                                                                        pronunciation and more common words.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <a href="#token-collapseThree"
                                                                class="accordion-list collapsed" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="token-collapseThree">
                                                                <div>Where can I get some ?</div>
                                                                <i class="mdi mdi-minus accor-plus-icon"></i>
                                                            </a>
                                                            <div id="token-collapseThree" class="collapse"
                                                                data-parent="#token-accordion">
                                                                <div class="card-body">
                                                                    <p class="mb-0">To an English person, it will seem
                                                                        like simplified English, as a skeptical
                                                                        Cambridge friend of mine told me what Occidental
                                                                        is. The European languages are members of the
                                                                        same family. Their separate existence is a myth.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <a href="#token-collapseFour"
                                                                class="accordion-list collapsed" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="token-collapseFour">
                                                                <div>Where does it come from ?</div>
                                                                <i class="mdi mdi-minus accor-plus-icon"></i>
                                                            </a>
                                                            <div id="token-collapseFour" class="collapse"
                                                                data-parent="#token-accordion">
                                                                <div class="card-body">
                                                                    <p class="mb-0">It will be as simple as Occidental;
                                                                        in fact, it will be Occidental. To an English
                                                                        person, it will seem like simplified English, as
                                                                        a skeptical Cambridge friend of mine told me
                                                                        what Occidental.</p>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-roadmap" role="tabpanel">
                                                <h4 class="card-title mb-4">Roadmap</h4>

                                                <div>
                                                    <div id="roadmap-accordion" class="accordion custom-accordion">

                                                        <div class="mb-3">
                                                            <a href="#roadmap-collapseOne" class="accordion-list"
                                                                data-toggle="collapse" aria-expanded="true"
                                                                aria-controls="roadmap-collapseOne">



                                                                <div>Where can I get some ?</div>
                                                                <i class="mdi mdi-minus accor-plus-icon"></i>

                                                            </a>

                                                            <div id="roadmap-collapseOne" class="collapse show"
                                                                data-parent="#roadmap-accordion">
                                                                <div class="card-body">
                                                                    <p class="mb-0">Everyone realizes why a new common
                                                                        language would be desirable: one could refuse to
                                                                        pay expensive translators. To achieve this, it
                                                                        would be necessary to have uniform grammar,
                                                                        pronunciation and more common words.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <a href="#roadmap-collapseTwo"
                                                                class="accordion-list collapsed" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="roadmap-collapseTwo">
                                                                <div>What is Lorem Ipsum ?</div>
                                                                <i class="mdi mdi-minus accor-plus-icon"></i>
                                                            </a>
                                                            <div id="roadmap-collapseTwo" class="collapse"
                                                                data-parent="#roadmap-accordion">
                                                                <div class="card-body">
                                                                    <p class="mb-0">If several languages coalesce, the
                                                                        grammar of the resulting language is more simple
                                                                        and regular than that of the individual
                                                                        languages. The new common language will be more
                                                                        simple and regular than the existing European
                                                                        languages.</p>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="mb-3">
                                                            <a href="#roadmap-collapseThree"
                                                                class="accordion-list collapsed" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="roadmap-collapseThree">
                                                                <div>Why do we use it ?</div>
                                                                <i class="mdi mdi-minus accor-plus-icon"></i>
                                                            </a>
                                                            <div id="roadmap-collapseThree" class="collapse"
                                                                data-parent="#roadmap-accordion">
                                                                <div class="card-body">
                                                                    <p class="mb-0">To an English person, it will seem
                                                                        like simplified English, as a skeptical
                                                                        Cambridge friend of mine told me what Occidental
                                                                        is. The European languages are members of the
                                                                        same family. Their separate existence is a myth.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <a href="#roadmap-collapseFour"
                                                                class="accordion-list collapsed" data-toggle="collapse"
                                                                aria-expanded="false"
                                                                aria-controls="roadmap-collapseFour">
                                                                <div>Where does it come from ?</div>
                                                                <i class="mdi mdi-minus accor-plus-icon"></i>
                                                            </a>
                                                            <div id="roadmap-collapseFour" class="collapse"
                                                                data-parent="#roadmap-accordion">
                                                                <div class="card-body">
                                                                    <p class="mb-0">It will be as simple as Occidental;
                                                                        in fact, it will be Occidental. To an English
                                                                        person, it will seem like simplified English, as
                                                                        a skeptical Cambridge friend of mine told me
                                                                        what Occidental.</p>
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
                        </div>
                    </div>
                    <!-- end vertical nav -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Faqs end -->


    <!-- Footer start -->
    <footer class="landing-footer">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-4 mb-lg-0">
                        <h5 class="mb-3 footer-list-title">Company</h5>
                        <ul class="list-unstyled footer-list-menu">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-4 mb-lg-0">
                        <h5 class="mb-3 footer-list-title">Resources</h5>
                        <ul class="list-unstyled footer-list-menu">
                            <li><a href="#">Whitepaper</a></li>
                            <li><a href="#">Token sales</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-4 mb-lg-0">
                        <h5 class="mb-3 footer-list-title">Links</h5>
                        <ul class="list-unstyled footer-list-menu">
                            <li><a href="#">Tokens</a></li>
                            <li><a href="#">Roadmap</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="mb-4 mb-lg-0">
                        <h5 class="mb-3 footer-list-title">Latest News</h5>
                        <div class="blog-post">
                            <a href="#" class="post">
                                <div class="badge badge-soft-success font-size-11 mb-3">Cryptocurrency</div>
                                <h5 class="post-title">Donec pede justo aliquet nec</h5>
                                <p class="mb-0"><i class="bx bx-calendar mr-1"></i> 04 Mar, 2020</p>
                            </a>
                            <a href="#" class="post">
                                <div class="badge badge-soft-success font-size-11 mb-3">Cryptocurrency</div>
                                <h5 class="post-title">In turpis, Pellentesque</h5>
                                <p class="mb-0"><i class="bx bx-calendar mr-1"></i> 12 Mar, 2020</p>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <hr class="footer-border my-5">

            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-4">
                        <img src="{{ URL::asset('/assets/images/valyou_x_white_logo.svg')}}" alt="" height="40">
                    </div>

                    <p class="mb-2">2020 © Valyou X</p>
                    <p>Disclosure Statement</p>
                    <p class="text-justify">"Trading or investing in anything not limited to stocks, securities, is risky, please only invest or with trade money you can afford to lose. No gains or the success of the company or results can be guaranteed in any type of real activity within the platform. Participation in the Valyou X or partners Rewards Plan is not a guarantee of success. Both hard work and following the structure of the Rewards Plan are essential to be in the position for results."</p>
                </div>

            </div>
        </div>
        <!-- end container -->
    </footer>
    <!-- Footer end -->

    <!-- JAVASCRIPT -->
    <script src="{{ URL::asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/metismenu/metismenu.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/node-waves/node-waves.min.js') }}"></script>

    <script src="{{ URL::asset('assets/libs/jquery.easing/jquery.easing.min.js') }}"></script>

    <!-- Plugins js-->
    <script src="{{ URL::asset('assets/libs/jquery-countdown/jquery-countdown.min.js') }}"></script>

    <!-- owl.carousel js -->
    <script src="{{ URL::asset('assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>

    <!-- ICO landing init -->
    <script src="{{ URL::asset('assets/js/pages/ico-landing.init.js') }}"></script>

    <script src="{{ URL::asset('assets/js/app.min.js') }}"></script>

</body>

</html>
