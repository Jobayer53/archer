<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title>Personal Portfolio</title>

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/elegant-font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/jquery.animatedheadline.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/owl.carousel.css') }}">


    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- main CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/main.css') }}">

</head>

<body class="dark" data-spy="scroll" data-target="#scrollspy" data-offset="1">

    <!--menu toggle-->
    <div class="menu-toggle" id="menuToggle">
        <span></span>
    </div>

    <!--header-left-->
    <div class="header-left" id="scrollspy">
        <!--logo-->
        <div class="logo bg-base-color">
            <a href="index.html" class="mb-0">N</a>
        </div>

        <!--menu-->
        <div class="main-menu" id="js-menu">
           <div class="cross bg-base-color">
                <span><i class="fas fa-times text-white"></i></span>
           </div>
            <nav class="menu">
                <ul class="menu-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">About </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#works">Works</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!--btn-share-->
        <div class="btn-share">
            <span class="social_share text-dark"></span>
        </div>

    </div>



    <!--main-->
    <div class="main">
        <!--Home -->
        <section class="home bg-light vh-100" id="home" style="background-image: url('{{ asset('frontend_asset/assets/img/bg')}}/{{ $banner->first()->image }}')">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-lg-12 ">
                        <!--social-media-->
                        <div class="social-home">
                            <ul class="list-inline">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram "></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-dribbble"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-behance "></i>
                                        </a>
                                    </li>
                            </ul>
                        </div>

                        <div class="d-flex align-items-center vh-100">
                            <div class="full-width">
                                <div class="banner">
                                    <h6>Hi There,</h6>
                                    <h1 class="cd-headline clip">I Am a
                                        <span class="cd-words-wrapper">
                                            <b class="is-visible"> {{ $banner->first()->title_1 }}</b>
                                            <b>{{ $banner->first()->title_2 }}</b>
                                            @if ($banner->first()->title_3 == null)

                                            @else
                                                <b>{{ $banner->first()->title_3 }}</b>
                                            @endif

                                        </span>
                                    </h1>
                                    <p class="max-width-450  mt-20 mb-30">
                                        {{ $banner->first()->short_title }}
                                    </p>
                                    <a href="#about" class="btn-custom">
                                        <span><i class="fas fa-user"></i></span>
                                        <span> More About Me</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--my-info-->
                        <div class="my-info">
                            <div class="item">
                                <p class="font-w-700 mb-0">Email</p>
                                <p class="mb-0"> {{ $banner->first()->email }}</p>
                            </div>

                            <div class="item">
                                <p class="font-w-700 mb-0">Phone</p>
                                <p class="mb-0"> {{ $banner->first()->phone }}</p>
                            </div>

                            <div class="item">
                                <p class="font-w-700  mb-0">Location</p>
                                <p class="mb-0"> {{ $banner->first()->location }}</p>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </section>

        <!-- About -->
        <section id="about" class="section about">
            <div class="container-fluid">
                <div class="row mb-50 pt-30">
                    <div class="col-md-12">
                        <div class="section-title">
                        <h2 class="mb-0">About me</h2>
                        <p class="text-muted mb-0">Main informations about me and what I love to do.</p>
                        </div>
                    </div>
                </div>
                <!--Hero & info-->
                <div class="row mb-50">
                    <div class="col-lg-5">
                        <div class="hero">
                            <img src="{{ asset('uploads/about')}}/{{ $about->first()->image }}" alt="">
                        </div>
                    </div>

                     <div class="col-lg-7 d-flex align-items-center">
                        <div class="details">
                            <h5>{{ $about->first()->title }}</h5>
                            <p class="mb-25">
                                {{ $about->first()->short_title }}
                            </p>

                            <!--about info-->
                            <ul class="info mb-5 list-inline">
                                <li><span>Name :</span> {{ $about->first()->name }}</li>
                                <li><span>Phone :</span>  {{ $about->first()->phone }}</li>
                                <li><span>Date of birth :</span> {{ $about->first()->birth_date }}</li>
                                <li><span>Email :</span><a href="mailto:justnirjonhasan4u@gmail.com"> {{ $about->first()->email }}</a></li>
                                <li><span>Nationality :</span>  {{ $about->first()->nationality }}</li>
                                <li><span>Address :</span>  {{ $about->first()->address }}</li>
                                <li><span>Work Status :</span>  {{ $about->first()->work_status }}</li>
                                <li><span>Freelancer :</span>  {{ $about->first()->freelancer }}</li>
                            </ul>

                            <a href="{{ route('download.cv') }}" class="btn-custom">
                                <span><i class="fas fa-cloud-download-alt"></i></span>
                                <span>Downland My CV</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!--Features-->
                <div class="row features mb-20">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="icon mb-10"><i class="fas fa-user"></i></div>
                            <p class="mb-0">129 Projects Complate</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="icon mb-10">
                                <i class="fas fa-coffee"></i>
                            </div>
                            <p class="mb-0">1000 Cup of coffee</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="icon mb-10">
                                <i class="fas fa-smile"></i>
                            </div>
                            <p class="mb-0">400 Satisfied Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="icon mb-10">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <p class="mb-0">8 Years job experience</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="icon mb-10">
                                <i class="fas fa-medal"></i>
                            </div>
                            <p class=" mb-0">+15 awards won</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="icon mb-10">
                                <i class="fas fa-code"></i>
                            </div>
                            <p class="mb-0">2000 lines of code</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="">My Expericence</h5>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="mb-30">My Education</h5>
                    </div>
                </div>
                <!-- Timeline-->
                <div class="row ">


                    <div class="col-lg-6 scroll">
                        <!--Timeline-->

                        <div class="timeline">

                            <!--item 1-->
                            <div class="item">
                                <div class="content">
                                    <h6 class="mb-0">senior web developer
                                        <span class="text-muted"> - </span> Creative It</h6>
                                    <small class="text-muted">2021 - present</small>
                                    <p class="pt-15 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit praesentium aut repellendus rem non repudiandae
                                    sint dolor illo officia dignissimos.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="content">
                                    <h6 class="mb-0">senior web developer
                                        <span class="text-muted"> - </span> Creative It</h6>
                                    <small class="text-muted">2021 - present</small>
                                    <p class="pt-15 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit praesentium aut repellendus rem non repudiandae
                                    sint dolor illo officia dignissimos.</p>
                                </div>
                            </div>
                            <!--item 2-->
                            <div class="item">
                                <div class="content">
                                    <h6 class="mb-0">mid-level web developer
                                        <span class="text-muted"> - </span> Creative It</h6>
                                    <small class="text-muted">2020 - 2021</small>
                                    <p class="pt-15 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit praesentium aut repellendus rem non repudiandae
                                    sint dolor illo officia dignissimos.</p>
                                </div>
                            </div>
                            <!--item 3-->
                            <div class="item">
                                <div class="content">
                                    <h6 class="mb-0">junoir web developer
                                        <span class="text-muted"> - </span> Creative It</h6>
                                    <small class="text-muted">2019 - 2020</small>
                                    <p class="pt-15 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit praesentium aut repellendus rem non repudiandae
                                    sint dolor illo officia dignissimos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 scroll">

                        <div class="timeline">
                            <!--item 1-->
                            <div class="item">
                                <div class="content">
                                    <h6 class="mb-0">Enginering Degree
                                        <span class="text-muted"> - </span> Paris University</h6>
                                    <small class="text-muted">2015 - 2016</small>
                                    <p class="pt-15 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit praesentium aut repellendus rem non repudiandae
                                        sint dolor illo officia dignissimos.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="content">
                                    <h6 class="mb-0">Enginering Degree
                                        <span class="text-muted"> - </span> Paris University</h6>
                                    <small class="text-muted">2015 - 2016</small>
                                    <p class="pt-15 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit praesentium aut repellendus rem non repudiandae
                                        sint dolor illo officia dignissimos.
                                    </p>
                                </div>
                            </div>
                            <!--item 2-->
                            <div class="item">
                                <div class="content">
                                    <h6 class="mb-0">Master Degree
                                        <span class="text-muted"> - </span> Paris University</h6>
                                    <small class="text-muted ">2016 - 2018</small>
                                    <p class="pt-15 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit praesentium aut repellendus rem non repudiandae
                                    sint dolor illo officia dignissimos.</p>
                                </div>
                            </div>

                            <!--item 3-->
                            <div class="item">
                                <div class="content">
                                    <h6 class="mb-0">Bachlor Degree
                                        <span class="text-muted"> - </span> Paris University</h6>
                                    <small class="text-muted">2015 - 2016 </small>
                                    <p class=" pt-15 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit praesentium aut repellendus rem non repudiandae
                                    sint dolor illo officia dignissimos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section id="services" class="section services">
            <div class="container-fluid">
                <div class="row mb-50">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="mb-0">My Services</h2>
                            <p class="text-muted mb-0">I Have Worked With A Number Of Clients.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- item -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="item">
                            <div class="circle">
                               <h2>01</h2>
                            </div>
                            <div class="content ">
                                <h5 class="mt-15 mb-10">Photography</h5>
                                <p class="mb-0">
                                     Lorem ipsum dolor sit amet consectetuer
                                     adipiscing elit aenean commodo ligula eget.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="item">
                            <div class="circle">
                                <h2>02</h2>
                            </div>
                            <div class="content">
                                <h5 class="mt-15 mb-10">Web Development</h5>
                                <p class="mb-0">
                                     Lorem ipsum dolor sit amet consectetuer
                                      adipiscing elit aenean commodo ligula eget.</p>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="item">
                            <div class="circle">
                                <h2>03</h2>
                            </div>
                            <div class="content">
                                <h5 class=" mt-15 mb-10">Mobile Application</h5>
                                <p class="mb-0"> Lorem ipsum dolor sit amet
                                    consectetuer adipiscing elit aenean commodo ligula eget.</p>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="item">
                            <div class="circle">
                                <h2>04</h2>
                            </div>
                            <div class="content">
                                <h5 class="mt-15 mb-10">Graphic Design</h5>
                                <p class="mb-0"> Lorem ipsum dolor sit amet consectetuer adipiscing elit aenean commodo ligula eget.</p>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="item">
                            <div class="circle">
                                <h2>05</h2>
                            </div>
                            <div class="content">
                                <h5 class="mt-15 mb-10">Video Editing</h5>
                                <p class="mb-0"> Lorem ipsum dolor sit amet consectetuer adipiscing elit aenean commodo ligula eget.</p>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="item">
                            <div class="circle">
                                <h2>06</h2>
                            </div>
                            <div class="content">
                                <h5 class="mt-15 mb-10">Videography</h5>
                                <p class="mb-0"> Lorem ipsum dolor sit
                                     amet consectetuer adipiscing elit aenean commodo ligula eget.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Works -->
        <section id="works" class="section works">
            <div class="container-fluid">
                <div class="row mb-50">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="mb-0">My Works</h2>
                            <p class="text-muted mb-0">A latest creative works</p>
                        </div>
                    </div>
                </div>
                <!--works-items -->
                <div class="row works-items">
                    <div class="col-lg-4 col-md-6">
                        <!--item -->
                        <div class="item">
                            <div class="image">
                                <img src="{{ asset('frontend_asset/assets/img/works/7.jpg') }}" alt="">
                                <div class="overly">
                                    <a href="{{ asset('frontend_asset/assets/img/works/7.jpg') }}" class="view-work"> View Work</a>
                                </div>
                            </div>

                            <div class="details d-flex align-items-center">
                                <p class="mb-0">Photography</p>
                                <a href="{{ url('work') }}" class="ml-auto"><i class="fas fa-external-link-alt"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!--item -->
                        <div class="item">
                            <div class="image">
                                <img src="{{ asset('frontend_asset/assets/img/works/8.jpg') }}" alt="">
                                <div class="overly">
                                    <a href="{{ asset('frontend_asset/assets/img/works/8.jpg') }}" class="view-work"> View Work</a>
                                </div>
                            </div>

                            <div class="details d-flex align-items-center">
                                <p class="mb-0">PSD Template Design</p>
                                <a href="{{ url('work') }}" class="ml-auto">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!--item -->
                        <div class="item">
                            <div class="image">
                                <img src="{{ asset('frontend_asset/assets/img/works/9.jpg') }}" alt="">
                                <div class="overly">
                                    <a href="{{ asset('frontend_asset/assets/img/works/9.jpg') }}" class="view-work"> View Work</a>
                                </div>
                            </div>

                            <div class="details d-flex align-items-center">
                                <p class="mb-0">Mobile Application</p>
                                <a href="{{ url('work') }}" class="ml-auto">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!--item -->
                        <div class="item">
                            <div class="image">
                                <img src="{{ asset('frontend_asset/assets/img/works/10.jpg') }}" alt="">
                                <div class="overly">
                                    <a href="{{ asset('frontend_asset/assets/img/works/10.jpg') }}" class="view-work"> View Work</a>
                                </div>
                            </div>

                            <div class="details d-flex align-items-center">
                                <p class="mb-0">Graphic Design</p>
                                <a href="{{ url('work') }}" class="ml-auto">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!--item -->
                        <div class="item">
                            <div class="image">
                                <img src="{{ asset('frontend_asset/assets/img/works/11.jpg') }}" alt="">
                                <div class="overly">
                                    <a href="{{ asset('frontend_asset/assets/img/works/11.jpg') }}" class="view-work"> View Work</a>
                                </div>
                            </div>

                            <div class="details d-flex align-items-center">
                                <p class="mb-0">Video Editing</p>
                                <a href="{{ url('work') }}" class="ml-auto">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!--item -->
                        <div class="item">
                            <div class="image">
                                <img src="{{ asset('frontend_asset/assets/img/works/12.jpg') }}"alt="">
                                <div class="overly">
                                    <a href="{{ asset('frontend_asset/assets/img/works/12.jpg') }}" class="view-work"> View Work</a>
                                </div>
                            </div>

                            <div class="details d-flex align-items-center">
                                <p class="mb-0">Videography</p>
                                <a href="{{ url('work') }}" class="ml-auto">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--more works-->
                    <div class="col-lg-12">
                        <div class="more-posts">
                            for more works Visit
                            <a href="portfolio.html">our Portfolio.</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- testimonials-->
        <section class="section testimonials">
            <div class="container-fluid">
                <div class="row mb-50">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="mb-0">My Clients</h2>
                            <p class="text-muted mb-0">What My Clients Say About Me .</p>
                        </div>
                    </div>
                </div>
                <!--testimonials-items-->
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel">
                            <!--item 1-->
                            <div class="item d-flex align-items-center">
                                <div class="image">
                                    <img src="{{ asset('frontend_asset/assets/img/clients/1.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <span class="icon_quotations_alt2 mb-0 icon"></span>
                                    <p class="text-muted mb-30 mt-30">In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional
                                    context it often happens that private or corporate clients corder a publication to be made.</p>

                                    <p class="author mb-0 ">
                                        <span class="font-w-700">Amar Smith</span>
                                          <span class="dot"></span> Product Manager</p>
                                </div>
                            </div>

                            <!--item 2-->
                            <div class="item d-flex align-items-center">
                                <div class="image">
                                    <img src="{{ asset('frontend_asset/assets/img/clients/2.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <span class="icon_quotations_alt2 mb-0 icon"></span>
                                    <p class="text-muted mb-30 mt-30">In a professional context it often happens that private or corporate clients corder a publication to be made.In a
                                            professional context it often happens that private or corporate clients corder a publication to be made.</p>
                                    <p class="author  mb-0 ">
                                        <span class="font-w-700">Amar Smith</span>
                                        <span class="dot"></span> Product Manager</p>
                                </div>
                            </div>

                            <!--item 3-->
                            <div class="item d-flex align-items-center">
                                <div class="image">
                                    <img src="{{ asset('frontend_asset/assets/img/clients/3.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <span class="icon_quotations_alt2 mb-0 icon"></span>
                                    <p class="text-muted mb-30 mt-30">In a professional context it often happens that private or corporate clients corder a publication to be made.In a
                                            professional context it often happens that private or corporate clients corder a publication to be made.</p>
                                    <p class="author  mb-0 ">
                                        <span class="font-w-700">Amar Smith</span>
                                        <span class="dot"></span> Product Manager
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog -->
        <section class="section blog" id="blog">
            <div class="container-fluid">
                <div class="row mb-50">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="mb-0">My Blog</h2>
                            <p class="text-muted mb-0">The Last posts About Graphic And Web Design.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--item-->
                    <div class="col-lg-6 col-md-6">
                        <div class="item">
                            <div class="image">
                                <img src="{{ asset('frontend_asset/assets/img/blog/1.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <small class="text-muted">09 March, 2020 <span class="dot"></span>  #Design , #web</small>
                                <h5 class="title  mb-15 mt-10">
                                    <a href="{{ route('blog') }}" >what's the different between Graphic and web design</a>
                                </h5>
                                <p class=" mb-25">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, soluta rerum molestias optio distinctio blanditiis
                                        cupiditate...
                                </p>
                                <a href="{{ route('blog') }}" class="btn-custom">
                                    <span>Read More</span>
                                    <span class="arrow_right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--item-->
                    <div class="col-lg-6 col-md-6">
                        <div class="item">
                            <div class="image">
                                <img src="{{ asset('frontend_asset/assets/img/blog/2.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <small class="text-muted">09 March, 2020
                                    <span class="dot"></span> #Design , #web</small>
                                <h5 class="title mb-15 mt-10">
                                    <a href="{{ route('blog') }}" >How to Create successful Website for Your Business</a>
                                </h5>
                                <p class="mb-25">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, soluta rerum molestias optio distinctio
                                    blanditiis cupiditate...
                                </p>
                                <a href="{{ route('blog') }}" class="btn-custom">
                                    <span>Read More</span>
                                    <span class="arrow_right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--item-->
                    <div class="col-lg-6 col-md-6">
                        <div class="item">
                            <div class="image">
                                <img src="{{ asset('frontend_asset/assets/img/blog/3.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <small class="text-muted">09 March, 2020
                                    <span class="dot"></span> #Design , #web
                                </small>
                                <h5 class="title mb-15 mt-10">
                                    <a href="{{ route('blog') }}" >What Is Imposter Syndrome? And How You Can Beat It!</a>
                                </h5>
                                <p class=" mb-25">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, soluta rerum molestias optio distinctio
                                                blanditiis cupiditate...
                                </p>
                                <a href="{{ route('blog') }}" class="btn-custom">
                                    <span>Read More</span>
                                    <span class="arrow_right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--item-->
                    <div class="col-lg-6 col-md-6">
                        <div class="item">
                            <div class="image">
                                <img src="{{ asset('frontend_asset/assets/img/blog/4.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <small class="text-muted">09 March, 2020
                                    <span class="dot"></span> #Design , #web
                                </small>
                                <h5 class="title mb-15 mt-10">
                                    <a href="{{ route('blog') }}" >5 Best Tools will help you to grow your mobile app</a>
                                </h5>
                                <p class="mb-25">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, soluta rerum molestias optio distinctio
                                                    blanditiis cupiditate...
                                </p>
                                <a href="{{ route('blog') }}" class="btn-custom">
                                    <span>Read More</span>
                                    <span class="arrow_right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--more posts-->
                    <div class="col-lg-12">
                        <div class="more-posts">
                            for more posts Visit
                            <a href="#">our Blog.</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section class="section contact pb-70" id="contact">
            <div class="container-fluid">
                <div class="row mb-50">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="mb-0">Contact Me</h2>
                            <p class="text-muted mb-0">Feel Free To Contact Me Any Time </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <form action="https://mariama.netlify.app/html/assets/php/mail.php" method="post" id="main_contact_form" class="form contact_form ">
                            <div class="alert alert-success contact_msg " style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="required">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required">
                            </div>

                            <div class="form-group">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required="required">
                            </div>

                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message" required="required"></textarea>
                            </div>

                            <button  type="submit" name="submit" class="btn-custom">
                                <span><i class="fas fa-paper-plane"></i></span>
                                <span> Send Message</span>
                            </button>

                        </form>
                    </div>
                    <!--Contact -info -->
                    <div class="col-lg-6">
                        <h5 >Let's talk about everything!</h5>
                        <p class=" mb-30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Lorem
                            ipsum dolor sit amet, consectetuer adipiscing elit.
                             Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                        <div class="contact-info">
                            <div class="item mb-20">
                                <p class="font-w-700 mb-0">Phone: </P>
                                <p class="mb-0"><i class="fas fa-phone base-color"></i>+880 1740 737 837</p>
                            </div>
                            <div class="item mb-20">
                                <p class="font-w-700 mb-0">Email: </p>
                                <p class="mb-0"><i class="fas fa-envelope base-color"> </i> justnirjonhasan4u@gmail.com</p>
                            </div>
                            <div class="item mb-20">
                                <p class=" font-w-700 mb-0">Address: </p>
                                <p class="mb-0"><i class="fas fa-map-marker-alt base-color"> </i>Dhaka, Bangladesh</p>
                            </div>
                            <div class="item">
                                <p class="font-w-700 mb-0">Skype: </p>
                                <p class="mb-0"> <i class="fab fab fa-skype base-color"> </i>nirjon.hasan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Footer-->
        <footer class="pt-30 pb-30 bg-light">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <p class="text-center mb-0">© 2022 Shahriar S. Nirjon , Are Right All Resereved.</p>
                    </div>
                </div>
            </div>
        </footer>

        <!--social-media-->
        <div class="social-footer">
            <ul class="list-inline">
                <li><a href="#"><i class="fab fa-facebook-f "></i></a></li>
                <li><a href="#"><i class="fab fa-twitter "></i></a></li>
                <li><a href="#"><i class="fab fa-instagram "></i></a></li>
                <li><a href="#"><i class="fab fa-dribbble "></i></a></li>
                <li><a href="#"><i class="fab fa-behance"></i></a></li>
            </ul>
        </div>
    </div>
    <!--Main End-->

    <!--loading -->
    <div class="loading">
        <div class="circle"></div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('frontend_asset/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend_asset/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend_asset/assets/js/bootstrap.min.js') }}"></script>

    <!-- JS Plugins  -->
    <script src="{{ asset('frontend_asset/assets/js/jquery.animatedheadline.min.js') }}"></script>
    <script src="{{ asset('frontend_asset/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend_asset/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend_asset/assets/js/ajax-contact.js') }}"></script>
    <script src="{{ asset('frontend_asset/assets/js/main.js') }}"></script>

</body>
</html>
