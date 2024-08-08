<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title> Project Details</title>

    {{-- <!-- CSS Plugins --> --}}
    <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/all.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/elegant-font-icons.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/jquery.animatedheadline.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/magnific-popup.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/owl.carousel.css') }}"> --}}

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/favicon-16x16.png') }}">

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- main CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_asset/assets/css/main.css') }}">

</head>

<body class="dark" data-spy="scroll" data-target="#scrollspy" data-offset="1">
{{--
    <!--menu toggle-->
    <div class="menu-toggle" id="menuToggle">
        <span></span>
    </div> --}}

    <!--header-left-->
    {{-- <div class="header-left" id="scrollspy">
        <!--logo-->
        <div class="logo bg-base-color">
            <a href="{{ route('index') }}" class="text-white mb-0">M</a>
        </div>

        <!--menu-->
        <div class="main-menu" id="js-menu">
           <div class="cross bg-base-color">
                <span><i class="fas fa-times text-white"></i></span>
           </div>
            <nav class="menu">
                <ul class="menu-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index')}}">About </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index')}}">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('index')}}">Works</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index')}}">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index')}}">Contact</a>
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
        <!-- Works -->
        <section id="works" class="section work-single">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                      <a class="text-white name" href="{{ route('index') }}"> <h4 class="">Home</h4></a>
                    </div>
                    <div class="col-lg-2    ">
                      <p class="name mt-2 text-white">{{ $about->phone }}
                        <span class="float-right slash text-secondary">/</span>
                      </p>
                    </div>


                    <div class="col-lg-2    ">
                      <p class="name mt-2 text-white">{{ $about->email }}</p>
                    </div>
                </div>
                <div class="row mb-50 single-title">
                    <div class="col-lg-6">
                        <div class="">
                            <h1 class="mb-0 title-text">{{ $works->title }}</h1>
                            {{-- <p class="text-muted mb-0">Description & images of project .</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 item ">
                                <h5>Client</h5>
                                <p class="text-muted">{{ $works->client }}</p>
                            </div>
                            <div class="col-lg-6  item ">
                                <h5>URL</h5>
                                <p class="text-muted">{{ $works->url }}</p>
                            </div>
                            <div class="col-lg-6 mt-5rem  item">
                                <h5>Date</h5>
                                <p class="text-muted">{{ $works->date }}</p>
                            </div>

                            <div class="col-lg-6 mt-5rem item">
                                <h5>Categorie</h5>
                                <p class="text-muted">{{ $works->categorie }}</p>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- <!--works-items -->
                <div class="row">
                    <div class="col-lg-5">
                        <div class="image">
                            <img src="{{ asset('uploads/work') }}/{{ $works->image }}" alt="">

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="details">
                            <div class="g-listes">
                                <ul class="liste">
                                    <li>
                                        <span>Client:</span>
                                        <a href="#">{{ $works->client }}</a>
                                    </li>
                                    <li>
                                        <span>Date:</span>{{ $works->date }}</li>
                                    <li>
                                        <span>URL:</span>
                                        <a href="#"> {{ $works->url }}</a>
                                    </li>
                                </ul>
                                <ul class="liste">
                                    <li>
                                        <span>Categorie:</span>{{ $works->categorie }} </li>
                                    <li>
                                        <span>Technologies:</span>{{ $works->technologie }} </li>
                                    <li>
                                        <span>tags:</span>{{ $works->tags }}</li>
                                </ul>
                            </div>
                            <div class="description">
                                <p> {{ $works->description }} </p>

                            </div>
                        </div>
                    </div>

                </div> --}}
            </div>
        </section>
        <img  class=" work-image " src="{{ asset('uploads/work') }}/{{ $works->image }}" alt="">
        <div class="container-fluid">
            <div class="container mb-90 pt-30">
                <p class=" text-center mb-0">{{ $works->description  }}</p>
            </div>
        </div>
        <!--Footer-->
        <footer class="pt-30 pb-30 bg-light">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <p class="text-dark text-center mb-0">© 2022 Are Right All Resereved.</p>
                    </div>
                </div>
            </div>
        </footer>

        <!--social-media-->
        <div class="social-footer">
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
