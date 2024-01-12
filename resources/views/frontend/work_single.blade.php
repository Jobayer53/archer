<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title> Personal Portfolio</title>

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

    </div>



    <!--main-->
    <div class="main">
        <!-- Works -->
        <section id="works" class="section work-single">
            <div class="container-fluid">
                <div class="row mb-50">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="mb-0">Photography</h2>
                            <p class="text-muted mb-0">Description & images of project .</p>
                        </div>
                    </div>
                </div>
                <!--works-items -->
                <div class="row">
                    <div class="col-lg-5">
                        <div class="image">
                            <img src="{{ asset('frontend_asset/assets/img/works/7.jpg') }}" alt="">

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="details">
                            <div class="g-listes">
                                <ul class="liste">
                                    <li>
                                        <span>Client:</span>
                                        <a href="#">Epamto.com</a>
                                    </li>
                                    <li>
                                        <span>Date:</span> 08-03-2021</li>
                                    <li>
                                        <span>URL:</span>
                                        <a href="#"> www.website.com</a>
                                    </li>
                                </ul>
                                <ul class="liste">
                                    <li>
                                        <span>Categorie:</span> Graphic Design.</li>
                                    <li>
                                        <span>Technologies:</span> Photoshop,figma</li>
                                    <li>
                                        <span>tags:</span>Design,mockup</li>
                                </ul>
                            </div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                                </p>
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
                        <p class="text-dark text-center mb-0">© 2022 Shahriar S. Nirjon , Are Right All Resereved.</p>
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
