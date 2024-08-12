<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title>Jobayer Shikder</title>

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/elegant-font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/jquery.animatedheadline.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/owl.carousel.css') }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/favicon-16x16.png') }}">
    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- main CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/main.css') }}">
<style>
    .left  {
        transform: translateX(-15%);
        transition: transform 1s ease-in-out, opacity 1s ease-in-out;
    }

    .right {
        transform: translateX(15%);
        transition: transform 1s ease-in-out, opacity 1s ease-in-out;

    }

    .animation3 {
        opacity: 0;
        transform: translateY(50%);
        transition: transform 1s ease-in-out, opacity 1s ease-in-out;

    }
    .animation5 {
        opacity: 0;
        transform: translateY(50%);
        transition: transform 1s ease-in-out, opacity 1s ease-in-out;

    }
    .animation3.visible, .animation5.visible {
    opacity: 1;
    transform: translateY(0);
    }

    .animation , .animation2, .animation4 {
        opacity: 0;
        transition: transform 1.5s ease-in-out, opacity 1.5s ease-in-out;
    }
    .animation.visible, .animation2.visible , .animation3.visible , .animation4.visible, .animation5.visible {
        opacity: 1;
    }

    .animation.visible .left, .animation2.visible .left , .animation4.visible .left {
        transform: translateX(0);
    }

    .animation.visible .right, .animation2.visible .right ,.animation4.visible .right {
        transform: translateX(0);
    }

</style>
<style>
    @keyframes lightFade {
        0% {
            color: #000000;
        }
        50% {
            color: #ffffff;
        }
        100% {
            color: #000000;
        }
    }

    .loading {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: #000000;
        z-index: 99999;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .loader-text {
        font-size: 2em;
        font-family: Arial, sans-serif;
        font-weight: 100;
        color: #000000;
        letter-spacing:0.5em;
        position: relative;

    }

    .loader-text span {
        animation: lightFade 1s linear infinite;
        display: inline-block;
    }

    .loader-text span:nth-child(1) {
        animation-delay: 0s;
    }

    .loader-text span:nth-child(2) {
        animation-delay: 0.1s;
    }

    .loader-text span:nth-child(3) {
        animation-delay: 0.2s;
    }

    .loader-text span:nth-child(4) {
        animation-delay: 0.3s;
    }

    .loader-text span:nth-child(5) {
        animation-delay: 0.4s;
    }

    .loader-text span:nth-child(6) {
        animation-delay: 0.5s;
    }

    .loader-text span:nth-child(7) {
        animation-delay: 0.6s;
    }


</style>
</head>

<body class="dark" data-spy="scroll" data-target="#scrollspy" data-offset="1">

    <div class="loading">
        <div class="loader-text">
            <span>L</span><span>O</span><span>A</span><span>D</span><span>I</span><span>N</span><span>G</span>
        </div>
    </div>

    <!--menu toggle-->
    {{-- <div class="menu-toggle" id="menuToggle">
        <span></span>
    </div> --}}

    <!--header-left-->
    {{-- <div class="header-left" id="scrollspy">
        <!--logo-->
        <div class="logo bg-base-color">
            <a href="{{ route('index') }}" class="mb-0">J</a>
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

    </div> --}}



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
                                    {{-- <a href="#about" class="btn-custom">
                                        <span><i class="fas fa-user"></i></span>
                                        <span> More About Me</span>
                                    </a> --}}
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

                            {{-- <div class="item">
                                <p class="font-w-700  mb-0">Location</p>
                                <p class="mb-0"> {{ $banner->first()->location }}</p>
                            </div> --}}
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
                        <p class="text-muted mb-0"> Informations about me.</p>
                        </div>
                    </div>
                </div>
                <!--Hero & info-->
                <div class="row mb-50 animation ">
                    <div class="col-lg-5 box left">
                        <div class="hero">
                            <img src="{{ asset('uploads/about')}}/{{ $about->first()->image }}" alt="">
                        </div>
                    </div>

                     <div class="col-lg-7 d-flex align-items-center box ">
                        <div class="details right">
                            <h5>{{ $about->first()->title }}</h5>
                            <p class="mb-25 right">
                                {{ $about->first()->short_title }}
                            </p>

                            <!--about info-->
                            <ul class="info mb-5 list-inline">
                                <li class="right"><span>Name :</span> {{ $about->first()->name }}</li>
                                <li class="right"><span>Phone :</span>  {{ $about->first()->phone }}</li>
                                <li class="right"><span>Date of birth :</span> {{ $about->first()->birth_date }}</li>
                                <li class="right"><span>Email :</span><a href="mailto:{{ $about->first()->email  }}"> {{ $about->first()->email }}</a></li>
                                <li class="right"><span>Nationality :</span>  {{ $about->first()->nationality }}</li>
                                <li class="right"><span>Address :</span>  {{ $about->first()->address }}</li>
                                <li class="right"><span>Work Status :</span>  {{ $about->first()->work_status }}</li>
                                <li class="right"><span>Freelancer :</span>  {{ $about->first()->freelancer }}</li>
                            </ul>

                            <a href="{{ route('download.cv') }}" class="btn-custom right">
                                <span><i class="fas fa-cloud-download-alt"></i></span>
                                <span>Downland My CV</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!--Features-->
                {{-- <div class="row features mb-20">
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
                </div> --}}

                <!-- Timeline-->
                <div class="row animation2 " style="margin-top:120px">
                    <div class="col-lg-6 box left">
                        <h5 class="mb-30">My Education</h5>
                        <div class="timeline ">

                            <!--item 1-->
                            @foreach ($educations as $education )
                            <div class="item">
                                <div class="content">
                                    <h6 class="mb-0">{{ $education->title }}
                                        <span class="text-muted"> </span> </h6>
                                    <small class="text-muted">{{ $education->year }}</small>
                                    <p class="pt-15 mb-0">{{ $education->description }} </p>

                                </div>
                            </div>
                            @endforeach
                            <!--item 1-->


                        </div>
                    </div>
                    <div class="col-lg-6  box right">
                         <!--Timeline-->
                         <h5 class="mb-30">My Expericence</h5>
                         <div class="timeline  ">

                             <!--item 1-->
                            @foreach ($experiences as $experience )
                            <div class="item">
                             <div class="content">
                                 <h6 class="mb-0">{{ $experience->title }}
                                     <span class="text-muted">  </span></h6>
                                 <small class="text-muted">{{ $experience->year }}</small>
                                 <p class="pt-15 mb-0">{{ $experience->description }}</p>
                             </div>
                         </div>
                            @endforeach
                             <!--item 1-->

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

                    @foreach ($services as $data )
                    <!-- item -->
                    <div class="col-sm-6 col-lg-4 animation3">
                            <div class="item ">
                                <div class="circle">
                                <h2>{{ $data->serial }}</h2>
                                </div>
                                <div class="content ">
                                    <h5 class="mt-15 mb-10">{{ $data->title }}</h5>
                                    <p class="mb-0">
                                       {{ $data->description }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    <!-- item -->
                    @endforeach

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
                    @foreach ($works as  $data )
                        <div class="col-lg-4 col-md-6 animation3">
                            <!--item -->
                            <div class="item">
                            {{-- <a href="{{ route('work.detail', $data->id) }}"> --}}
                                    <div class="image">
                                        <img src="{{ asset('uploads/work')}}/{{ $data->image }}" alt="">
                                        {{-- <div class="overly"> --}}
                                            {{--  <a href="{{ asset('uploads/work')}}/{{ $data->image }}" class="view-work"> View Work</a> --}}
                                        {{-- </div> --}}
                                    </div>
                                {{-- </a> --}}

                                <div class="details d-flex align-items-center">
                                    <a href="{{ route('work.detail', $data->id) }}" class="work-title">
                                        <p class="mb-0">{{ $data->title }}</p>

                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!--more works-->
                    <div class="col-lg-12">
                        <div class="more-posts animation5">
                            for more works Visit
                            <a href="#">our Portfolio.</a>
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
                            @foreach ($clients as $data )


                            <!--item 1-->
                            <div class="item d-flex align-items-center ">
                                <div class="image">
                                    @if ($data->image == null)
                                        <img src="{{ Avatar::create($data->name)->toBase64() }}" alt="">
                                    @else
                                    <img src="{{ asset('uploads/client') }}/{{ $data->image }}" alt="">
                                    @endif

                                </div>
                                <div class="content">
                                    <span class="icon_quotations_alt2 mb-0 icon"></span>
                                    <p class="text-muted mb-30 mt-30"> {{  $data->comment }}</p>

                                    <p class="author mb-0 ">
                                        <span class="font-w-700">{{ $data->name }}</span>
                                          <span class="dot"></span>{{ $data->profession }}</p>
                                </div>
                            </div>
                            <!--item 1-->
                            @endforeach
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
                                    <a href="{{ route('blog.detail') }}" >what's the different between Graphic and web design</a>
                                </h5>
                                <p class=" mb-25">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, soluta rerum molestias optio distinctio blanditiis
                                        cupiditate...
                                </p>
                                <a href="{{ route('blog.detail') }}" class="btn-custom">
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
        <section class="section contact " id="contact">
            <div class="container-fluid">
                <div class="row mb-50">
                    <div class="col-md-6 ">
                        <div class="section-title contact-title">
                            <h2 class="mb-0">Contact Me</h2>
                            <p class="text-muted mb-0">Feel Free To Contact Me Any Time </p>
                        </div>
                    </div>
                </div>
                <div class="row animation4">
                    <div class="col-lg-6 text-center left contact-left">
                        <div class="contact-details">

                            <h3 class=" text-muted"><span class="title-custom">Cumilla</span>,Bangladesh</h3>

                            <p class="mb-0 mt-20"><i class="mr-3 fas fa-phone title-custom"></i>+880 1740 737 837</p>
                            <p class="mb-0 mt-20"><i class="mr-3 fas fa-envelope title-custom"></i>mdjobayer.h53@gmail.com</p>
                        </div>
                        {{-- <h5 >Let's talk about everything!</h5>
                        <p class=" mb-30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Lorem
                            ipsum dolor sit amet, consectetuer adipiscing elit.
                             Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p> --}}
                        {{-- <div class="contact-info">
                            <div class="item mb-20">
                                <p class="font-w-700 mb-0">Phone: </P>
                                <p class="mb-0"><i class="fas fa-phone base-color"></i>+880 1740 737 837</p>
                            </div>
                            <div class="item mb-20">
                                <p class="font-w-700 mb-0">Email: </p>
                                <p class="mb-0"><i class="fas fa-envelope base-color"> </i> </p>
                            </div>
                            <div class="item mb-20">
                                <p class=" font-w-700 mb-0">Address: </p>
                                <p class="mb-0"><i class="fas fa-map-marker-alt base-color"> </i>Dhaka, Bangladesh</p>
                            </div>
                            <div class="item">
                                <p class="font-w-700 mb-0">Skype: </p>
                                <p class="mb-0"> <i class="fab fab fa-skype base-color"> </i></p>
                            </div>
                        </div> --}}
                    </div>
                    <!--Contact -info -->
                    <div class="col-lg-6 right">
                        @if (session('success'))
                            <div class=" success-text alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact') }}" method="POST" id="main_contact_form" class="form contact_form ">
                            @csrf

                            <div class="form-group">
                                <input type="text" name="name" id="name" class=" form-control-custom   @if ($errors->has('name'))
                                    border-red
                            @endif " placeholder="Name" >

                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class=" form-control-custom  @if ($errors->has('email'))
                                    border-red
                            @endif " placeholder="Email" >
                            </div>

                            <div class="form-group">
                                <input type="text" name="subject" id="subject" class=" form-control-custom" placeholder="Subject" >
                            </div>

                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="5" class=" form-control-custom  @if ($errors->has('message'))
                                    border-red
                            @endif " placeholder="Message" ></textarea>
                            </div>

                            <button id="submit"  type="submit" name="submit" class="btn-custom">
                                <span><i class="fas fa-paper-plane"></i></span>
                                <span> Send Message</span>
                            </button>

                        </form>

                    </div>
                </div>
            </div>
        </section>

        <!--Footer-->
        <footer class="pt-30 pb-30 bg-light">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <p class="text-center mb-0">© 2022   All Right Are Resereved.</p>
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
    {{-- <div class="loading">
        <div class="circle"></div>
    </div> --}}

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('frontend_asset/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend_asset/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend_asset/assets/js/bootstrap.min.js') }}"></script>

    <!-- JS Plugins  -->
    <script src="{{ asset('frontend_asset/assets/js/jquery.animatedheadline.min.js') }}"></script>
    <script src="{{ asset('frontend_asset/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend_asset/assets/js/owl.carousel.min.js') }}"></script>
    {{-- <script src="{{ asset('frontend_asset/assets/js/ajax-contact.js') }}"></script> --}}
    <script src="{{ asset('frontend_asset/assets/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            let success = $('.success-text').text();
          if(success !== ''){
            window.scrollTo(0,document.body.scrollHeight);
          }


        });
        document.addEventListener('DOMContentLoaded', function() {
            // Pass Laravel validation error existence to JavaScript
            var hasErrors = @json($errors->any());

            if (hasErrors) {
                window.scrollTo(0,document.body.scrollHeight);
            }
        });

    </script>
    <script>
    document.addEventListener('scroll', function() {
        const container = document.querySelector('.animation');
        const containerPosition = container.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.5;

        if (containerPosition < screenPosition) {
            container.classList.add('visible');
        } else {
            container.classList.remove('visible');
        }
    });
    document.addEventListener('scroll', function() {
        const container = document.querySelector('.animation2');
        const containerPosition = container.getBoundingClientRect().top;
        const screenPosition = window.innerHeight ;

        if (containerPosition < screenPosition) {
            container.classList.add('visible');
        }else {
            container.classList.remove('visible');
        }
    });
    document.addEventListener('scroll', function() {
    const items = document.querySelectorAll('.animation3');
    const screenPosition = window.innerHeight ;

    items.forEach(item => {
        const itemPosition = item.getBoundingClientRect().top;

        if (itemPosition < screenPosition) {
            item.classList.add('visible');
        } else {
            item.classList.remove('visible');
        }
    });
});
    document.addEventListener('scroll', function() {
        const container = document.querySelector('.animation4');
        const containerPosition = container.getBoundingClientRect().top;
        const screenPosition = window.innerHeight;

        if (containerPosition < screenPosition) {
            container.classList.add('visible');
        }
        else {
            container.classList.remove('visible');
        }
    });
    document.addEventListener('scroll', function() {
        const container = document.querySelector('.animation5');
        const containerPosition = container.getBoundingClientRect().top;
        const screenPosition = window.innerHeight ;

        if (containerPosition < screenPosition) {
            container.classList.add('visible');
        } else {
            container.classList.remove('visible');
        }
    });

    </script>
     {{-- <script>
   window.addEventListener('load', () => {
    setTimeout(() => {
        document.querySelector('.loading').style.animation = 'fadeOut 1s forwards';
    }, 1000);

    setTimeout(() => {
        document.querySelector('.loading').remove();
    }, 2000);
});


    </script> --}}
</body>
</html>
