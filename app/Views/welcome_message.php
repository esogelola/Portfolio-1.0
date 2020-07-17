<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Thomson-Minimal Portfolio Temaplate</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

<style>
    @import url("https://fonts.googleapis.com/css?family=Lato:400,600,700|Work+Sans:400,700,800");

    html {
        overflow-x: hidden;
    }

    body {
        font-family: "Lato", sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 16px;
        font-weight: 400;
        letter-spacing: 0.166667px;
        line-height: 1.7em;
        color: #818385;
    }

    p {
        color: #818385;
    }

    h1,
    .h1,
    h2,
    .h2,
    h3,
    .h3,
    h4,
    .h4,
    h5,
    .h5,
    h6,
    .h6 {
        font-family: "Work Sans", sans-serif;
        color: #000;
        font-weight: 600;
    }

    h1,
    .h1 {
        font-size: 45px;
        text-transform: none;
    }

    h2,
    .h2 {
        font-size: 42px;
        line-height: 52px;
    }

    h3,
    .h3 {
        font-size: 24px;
        line-height: 34px;
    }

    h4,
    .h4 {
        font-size: 20px;
        line-height: 30px;
    }

    h5,
    .h5 {
        font-size: 16px;
        line-height: 26px;
    }

    h6,
    .h6 {
        font-size: 14px;
    }

    .text-sm {
        font-size: 14px;
    }

    .section {
        padding: 120px 0px;
    }

    .section-sm {
        padding: 60px 0px;
    }

    .btn {
        padding: 18px 38px;
        border: 2px solid transparent;
        text-transform: uppercase;
        border-radius: 0px;
        font-size: 14px;
        line-height: 14px;
        font-weight: 600;
        box-shadow: #999999 0px 0px 0px 0px;
    }

    .btn:focus {
        outline: 0px;
        border: 0px;
        box-shadow: none;
    }

    .btn-main {
        background: #f44336;
        color: #fff;
    }

    .btn-main:hover {
        color: #fff !important;
        background: #000;
    }

    .btn-black {
        background: #000;
        color: #fff;
    }

    .btn-black:hover {
        background: #f44336;
        color: #fff;
    }

    .btn-white {
        background: #fff;
        color: #000;
        border-color: #fff;
    }

    .btn-white:hover {
        background: transparent;
        color: #fff;
    }

    a {
        color: #000;
        transition: all .25s ease;
    }

    a:hover {
        color: #f44336;
        text-decoration: none;
        outline: none;
    }

    .bg-primary {
        background: #f44336 !important;
    }

    .bg-secondary {
        background: #f7f7f7 !important;
    }

    .bg-extra {
        background: #e8eefb !important;
    }

    .text-color {
        color: #f44336;
    }

    .page-title h1 {
        position: relative;
        padding-bottom: 30px;
    }

    .page-title h1:after {
        position: absolute;
        content: "";
        left: 50%;
        bottom: 0px;
        width: 40px;
        height: 2px;
        margin-left: -25px;
        background: #f44336;
    }

    @media (max-width: 575px) {

        h2,
        .h2 {
            font-size: 32px;
            line-height: 43px;
        }
    }

    @media (max-width: 400px) {

        h2,
        .h2 {
            font-size: 32px;
            line-height: 43px;
        }
    }

    .cd-headline.clip span {
        padding: 0px;
    }

    .banner .cd-headline {
        font-size: 56px;
        line-height: 70px;
    }

    .banner-3 {
        position: relative;
    }

    .main-nav .header-top-socials a {
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 14px;
        padding: 20px 6px;
    }

    .navbar-nav .nav-link {
        padding: 20px 15px !important;
        text-transform: uppercase;
        font-size: 14px;
        letter-spacing: 1px;
        font-weight: 700;
    }

    ul.dropdown-menu {
        background: #151515;
        border-radius: 0px;
        margin: 0px;
        padding: 0px;
    }

    ul.dropdown-menu>li>a,
    .navbar ul ul ul.dropdown-menu li .nav-link {
        font-size: 12px;
        line-height: 22px;
        display: block;
        position: relative;
        z-index: 1;
        padding-left: 15px;
        transition: all .3s ease-in-out;
        padding-top: 10px;
        padding-bottom: 10px;
        border-bottom: 1px solid #27243e;
        color: #fff;
        text-transform: uppercase;
    }

    ul.dropdown-menu>li>a:hover,
    .navbar ul ul ul.dropdown-menu li .nav-link:hover {
        color: #f44336;
    }

    .dropdown-item:focus,
    .dropdown-item:hover {
        color: #fff;
        text-decoration: none;
        background-color: transparent;
    }

    .dropdown-menu {
        border-radius: 0;
        -moz-border-radius: 0;
        -webkit-border-radius: 0;
        -o-border-radius: 0;
        -ms-border-radius: 0;
        padding: 0;
        border: 0;
        display: block;
        opacity: 0;
        visibility: hidden;
        min-width: 210px;
        transform: scaleY(0);
        -webkit-transform: scaleY(0);
        -moz-transform: scaleY(0);
        -ms-transform: scaleY(0);
        -o-transform: scaleY(0);
        transform-origin: center top 0;
        -webkit-transform-origin: center top 0;
        -moz-transform-origin: center top 0;
        -ms-transform-origin: center top 0;
        -o-transform-origin: center top 0;
        transition: all .3s ease-in-out 0s;
        -webkit-transition: all .3s ease-in-out 0s;
        -moz-transition: all .3s ease-in-out 0s;
        -ms-transition: all .3s ease-in-out 0s;
        -o-transition: all .3s ease-in-out 0s;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        -moz-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        -ms-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        -o-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
    }

    .dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        -webkit-transform: scaleY(1);
        -moz-transform: scaleY(1);
        -ms-transform: scaleY(1);
        -o-transform: scaleY(1);
    }

    @media (max-width: 575px) {
        .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .banner .cd-headline {
            font-size: 32px;
            line-height: 42px;
        }

        .btn-group,
        .btn-group-vertical {
            display: block;
        }

        .btn-group>.btn {
            padding: 20px;
        }
    }

    @media (max-width: 400px) {
        .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .banner .cd-headline {
            font-size: 32px;
            line-height: 42px;
        }

        .btn-group,
        .btn-group-vertical {
            display: block;
        }

        .btn-group>.btn {
            padding: 20px;
        }
    }

    @media (max-width: 767px) {
        .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .banner .cd-headline {
            font-size: 32px;
            line-height: 42px;
        }

        .btn-group,
        .btn-group-vertical {
            display: block;
        }

        .btn-group>.btn {
            padding: 20px;
        }
    }

    @media (max-width: 991px) {
        .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .banner .cd-headline {
            font-size: 32px;
            line-height: 42px;
        }

        .btn-group,
        .btn-group-vertical {
            display: block;
        }

        .btn-group>.btn {
            padding: 20px;
        }
    }

    .portfolio {
        padding-bottom: 100px;
    }

    .portfolio .btn:focus,
    .portfolio .btn:hover,
    .portfolio .btn.focus.active {
        box-shadow: none !important;
        outline: 0 !important;
    }

    .portfolio .btn-group .btn {
        border-radius: 0px !important;
        padding-left: 0px;
        font-weight: 700;
    }

    .portfolio .btn-group .btn:hover {
        color: #f44336;
    }

    .portfolio .btn-group:not(:first-child)>.btn,
    .portfolio .btn-group>.btn:not(:first-child) {
        border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
    }

    .portfolio .btn.active {
        color: #f44336;
    }

    .inner-box {
        position: relative;
    }

    .inner-box .image {
        position: relative;
        overflow: hidden;
    }

    .inner-box .image img {
        position: relative;
        width: 100%;
        display: block;
        transition: all 0.3s;
    }

    .inner-box .image .overlay-box {
        position: absolute;
        left: 0px;
        bottom: 0px;
        right: 0px;
        top: 0px;
        z-index: 2;
        opacity: 0;
        display: block;
        transition: all .6s ease;
        overflow: hidden;
    }

    .inner-box .image .overlay-box:before {
        position: absolute;
        content: '';
        left: -450px;
        top: 0px;
        width: 100%;
        height: 100%;
        display: block;
        opacity: 0;
        transition: all 0.4s;
        background-color: rgba(47, 50, 56, 0.8);
    }

    .inner-box:hover .image img {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }

    .inner-box:hover .image .overlay-box:before {
        opacity: 1;
        left: 0px;
    }

    .inner-box:hover .image .overlay-box {
        opacity: 1;
    }

    .inner-box:hover .image .overlay-box .overlay-content h5 {
        -webkit-transform: translateX(0px);
        transform: translateX(0px);
    }

    .inner-box:hover .image .overlay-box .overlay-content p {
        -webkit-transform: translateX(0px);
        transform: translateX(0px);
    }

    .inner-box .image .overlay-box .overlay-inner {
        position: absolute;
        left: 0px;
        bottom: 30px;
        z-index: 1;
        padding: 10px 40px;
    }

    .inner-box .image .overlay-box .overlay-inner .overlay-content i {
        font-size: 28px;
    }

    .inner-box .image h3 {
        color: #fff;
    }

    .overlay-content h5 {
        text-transform: capitalize;
        background: rgba(255, 255, 255, 0.9);
        padding: 0px 8px;
        margin-bottom: 0px;
        -webkit-transform: translateX(-150px);
        transform: translateX(-150px);
        transition: all 0.3s;
    }

    .overlay-content p {
        font-size: 14px;
        margin-bottom: 0px;
        padding: 0px 8px;
        margin-top: 2px;
        text-transform: capitalize;
        background: rgba(255, 255, 255, 0.9);
        color: #2f3238;
        -webkit-transform: translateX(-150px);
        transform: translateX(-150px);
        transition: all 0.5s;
    }

    .portfolio-image {
        width: 60px;
        height: 60px;
        display: inline-block;
        text-align: center;
        background: #000;
        color: #fff;
        padding-top: 16px;
        position: absolute;
        top: 40%;
        font-size: 22px;
        margin-left: -28px;
        left: 50%;
    }

    .info a {
        margin-right: 10px;
    }

    .service-home {
        position: relative;
    }

    .service-item i {
        font-size: 35px;
        float: left;
        width: 65px;
        height: 120px;
    }

    .testimonial-content {
        text-align: center;
        padding: 25px;
        position: relative;
    }

    .testimonial-content i {
        font-size: 60px;
    }

    .testimonial-content p {
        margin-top: 30px;
        margin-bottom: 25px;
    }

    .about-info h3 {
        margin-top: 15px;
    }

    .progress-bar-content {
        margin-bottom: 25px;
    }

    .progress-bar-content .progress-title {
        text-transform: capitalize;
        font-size: 14px;
        color: #000;
        font-weight: 600;
    }

    .progress-bar-content .progress-label {
        margin-bottom: 15px;
    }

    .progress-bar-content .progress-bar {
        background: #000;
    }

    .progress-bar-content .progress-bar-units {
        color: #000;
    }

    .about-list {
        line-height: 40px;
    }

    .about-list li {
        text-transform: capitalize;
        color: #000;
    }

    .progress {
        width: 100%;
        overflow: visible;
        position: relative;
        margin: 0 0 35px 0;
        border-radius: 0px;
        height: 7px;
        background-color: #f7f8f9;
    }

    .progress-bar {
        position: absolute;
        width: 0;
        top: 0;
        left: 0;
        height: 100%;
        background: #e1a34c;
        border-radius: 0px;
        transition: all 3s ease-in-out;
    }

    @media (max-width: 575px) {
        .cta {
            padding-bottom: 0px;
        }
    }

    @media (max-width: 400px) {
        .cta {
            padding-bottom: 0px;
        }
    }

    @media (max-width: 767px) {
        .cta {
            padding-bottom: 0px;
        }
    }

    #map {
        height: 300px;
        margin: 75px 0px;
    }

    .form-control {
        border-radius: 0px;
        height: 45px;
        border-color: #e8eefb;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #f44336;
    }

    textarea.form-control {
        height: auto;
    }

    .text-black {
        color: #000;
    }

    .contact-title h2 {
        position: relative;
        padding-bottom: 30px;
    }

    .contact-title h2:after {
        position: absolute;
        content: "";
        left: 50%;
        bottom: 0px;
        width: 40px;
        height: 2px;
        margin-left: -25px;
        background: #f44336;
    }

    .letter-spacing {
        letter-spacing: 1px;
    }

    .post .image-content {
        position: relative;
    }

    .post .image-content img {
        width: 100%;
    }

    .post .author img {
        width: 40px;
        height: 40px;
        border-radius: 100%;
    }

    .post .post-content {
        margin-top: 30px;
    }

    .post .post-content h4 {
        margin-top: 10px;
        transition: all .35s ease;
    }

    .post .post-content a:hover h4 {
        color: #f44336;
    }

    .pagination {
        margin-top: 70px;
    }

    .pagination li a {
        background: #f6f6f6;
        font-size: 14px;
        font-weight: 600;
        display: inline-block;
        padding: 9px 18px;
        color: #666666;
        transition: .3s;
    }

    .pagination li a:hover {
        background: #f44336;
        color: #fff;
    }

    .pagination li.active a {
        background: #f44336;
        color: #fff;
    }

    .sidebar-widget .widget {
        padding-left: 20px;
    }

    .sidebar-widget .widget-title {
        text-transform: capitalize;
        position: relative;
        padding-bottom: 20px;
    }

    .sidebar-widget .widget-title:after {
        position: absolute;
        content: "";
        left: 0px;
        bottom: 0px;
        width: 30px;
        height: 2px;
        background: #000;
    }

    .sidebar-widget .follow a {
        margin-right: 10px;
    }

    .sidebar-widget .tags a {
        text-transform: capitalize;
        font-size: 15px;
        padding: 2px 13px;
        display: inline-block;
        margin-bottom: 8px;
        background: #dedede;
    }

    .sidebar-widget .category ul {
        line-height: 40px;
    }

    .sidebar-widget .category ul li {
        font-size: 15px;
        text-transform: capitalize;
    }

    .post-body span {
        font-size: 13px;
        letter-spacing: 1px;
    }

    .single-post {
        margin-bottom: 70px;
    }

    .share ul li a {
        margin-right: 20px;
    }

    .mb-45 {
        margin-bottom: 45px;
    }

    .comments-text p {
        font-size: 14px;
        margin-bottom: 10px;
        line-height: 26px;
    }

    @media (max-width: 575px) {
        .media {
            display: block;
        }

        .media img {
            margin-bottom: 10px;
        }
    }

    @media (max-width: 400px) {
        .media {
            display: block;
        }

        .media img {
            margin-bottom: 10px;
        }
    }

    @media (max-width: 767px) {
        .media {
            display: block;
        }

        .media img {
            margin-bottom: 10px;
        }
    }

    .footer {
        padding: 60px 0px;
        background: #000;
    }

    .footer-widget a {
        color: rgba(255, 255, 255, 0.5);
        text-transform: capitalize;
    }

    .footer-widget a:hover {
        color: #f44336;
    }
</style>


</head>

<body>

    <!-- Navigation Start -->
    <!-- Header Start -->

    <nav class="navbar navbar-expand-lg  main-nav " id="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="http://demo.themefisher.com/thomson/images/portfolio/logo.jpg" alt="" class="img-fluid">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="ti-align-justify"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item  active"><a class="nav-link" href="index.html">Home</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">About</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="about.html">About Me</a></li>
                            <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Portfolio</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item" href="portfolio-1.html">Portfolio Masonary</a></li>
                            <li><a class="dropdown-item" href="portfolio-2.html">Portfolio lightbox</a></li>
                            <li><a class="dropdown-item" href="portfolio-3.html">Portfolio 2 column</a></li>
                            <li><a class="dropdown-item" href="portfolio-single.html">Portfolio Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown05">
                            <li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                            <li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

                            <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Close -->


    <!-- Navigation ENd -->

    <!-- Banner Start -->
    <section class="section banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h2 class="cd-headline clip is-full-width mb-4 ">
                        I provide <br>
                        <span class="cd-words-wrapper text-color">
                            <b class="is-visible">Design solutions. </b>
                            <b>Creative Ideas.</b>
                            <b>Professional Content.</b>
                        </span>
                    </h2>
                    <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain <br>was
                        born and
                        I will give you a complete account of the system</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner End -->

    <!-- POrtfolio start -->
    <section class="portfolio ">
        <div class="container">
            <div class="row mb-5">
                <div class="col-10">
                    <div class="btn-group btn-group-toggle " data-toggle="buttons">
                        <label class="btn active ">
                            <input type="radio" name="shuffle-filter" value="all" checked="checked" />All Projects
                        </label>
                        <label class="btn">
                            <input type="radio" name="shuffle-filter" value="design" />UI/UX Design
                        </label>
                        <label class="btn">
                            <input type="radio" name="shuffle-filter" value="branding" />branding
                        </label>
                        <label class="btn">
                            <input type="radio" name="shuffle-filter" value="illustration" />Web Development
                        </label>
                        <label class="btn">
                            <input type="radio" name="shuffle-filter" value="photo" />Photography
                        </label>
                    </div>
                </div>
            </div>

            <div class="row shuffle-wrapper portfolio-gallery">
                <div class="col-lg-4 col-6 mb-4 shuffle-item"
                    data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
                    <div class="position-relative inner-box">
                        <div class="image position-relative ">
                            <img src="http://demo.themefisher.com/thomson/images/portfolio/1.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <a class="overlay-content" href="portfolio-single.html">
                                        <h5 class="mb-0">Painting</h5>
                                        <p>Design</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
                    <div class="position-relative inner-box">
                        <div class="image position-relative ">
                            <img src="http://demo.themefisher.com/thomson/images/portfolio/4.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <a class="overlay-content" href="portfolio-single.html">
                                        <h5 class="mb-0">Web app</h5>
                                        <p>Development</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
                    <div class="position-relative inner-box">
                        <div class="image position-relative ">
                            <img src="http://demo.themefisher.com/thomson/images/portfolio/3.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <a class="overlay-content" href="portfolio-single.html">
                                        <h5 class="mb-0">Business </h5>
                                        <p>marketing</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;branding&quot;]">
                    <div class="position-relative inner-box">
                        <div class="image position-relative ">
                            <img src="http://demo.themefisher.com/thomson/images/portfolio/5.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <a class="overlay-content" href="portfolio-single.html">
                                        <h5 class="mb-0">Portfolio</h5>
                                        <p>Design</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
                    <div class="position-relative inner-box">
                        <div class="image position-relative ">
                            <img src="http://demo.themefisher.com/thomson/images/portfolio/6.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <a class="overlay-content" href="portfolio-single.html">
                                        <h5 class="mb-0 ">Modern web</h5>
                                        <p>Seo</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;photo&quot;]">
                    <div class="position-relative inner-box">
                        <div class="image position-relative ">
                            <img src="http://demo.themefisher.com/thomson/images/portfolio/7.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <a class="overlay-content" href="portfolio-single.html">
                                        <h5 class="mb-0">Agency web</h5>
                                        <p>Design</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio End -->

    <!-- Service start -->
    <section class="section service-home border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="mb-2 ">Core Services.</h2>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, totam ipsa
                        quia hic
                        odit a sit laboriosam voluptatem in, blanditiis.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="service-item mb-5" data-aos="fade-left">
                        <i class="ti-layout"></i>
                        <h4 class="my-3">Web Development</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, earum.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item mb-5" data-aos="fade-left" data-aos-delay="450">
                        <i class="ti-announcement"></i>
                        <h4 class="my-3">Digital Marketing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, earum.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item mb-5 mb-lg-0" data-aos="fade-left" data-aos-delay="750">
                        <i class="ti-layers"></i>
                        <h4 class="my-3">Graphics Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, earum.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item" data-aos="fade-left" data-aos-delay="750">
                        <i class="ti-anchor"></i>
                        <h4 class="my-3">Branding Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, earum.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item mb-5" data-aos="fade-left" data-aos-delay="950">
                        <i class="ti-video-camera"></i>
                        <h4 class="my-3">Video Marketing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, earum.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item mb-5 mb-lg-0" data-aos="fade-left" data-aos-delay="1050">
                        <i class="ti-android"></i>
                        <h4 class="my-3">App Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, earum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service end -->

    <!-- Footer start -->
    <section class="footer">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6">
                    <p class="mb-0">Copyrights © 2019. Designed & Developed by <a href="themefisher.com"
                            class="text-white">Page rendered in {elapsed_time} seconds. Environment: <?= ENVIRONMENT ?></a></p>
                            
                </div>
                <div class="col-lg-6">
                    <div class="widget footer-widget text-lg-right mt-5 mt-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"
                                    target="_blank"><i class="ti-facebook mr-3"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="https://twitter.com/themefisher" target="_blank"><i
                                        class="ti-twitter mr-3"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="https://github.com/themefisher/" target="_blank"><i
                                        class="ti-github mr-3"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"
                                    target="_blank"><i class="ti-pinterest mr-3"></i></a></li>
                            <li class="list-inline-item"><a href="https://dribbble.com/themefisher/" target="_blank"><i
                                        class="ti-dribbble mr-3"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer End -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Shuffle/5.2.3/shuffle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://raw.githubusercontent.com/creativelive/appear/master/dist/appear.min.js"></script>
    <script src="https://inorganik.github.io/countUp.js/dist/countUp.min.js"></script>

    <!-- Main Script -->
    <script>
    (function($) {
        'use strict';
        AOS.init();

        // ----------------------- 
        // Progress Bar--------------------
        // 
        // 

        $(window).on('load', function() {

            $('.progress-bar').each(function() {
                var width = $(this).data('percent');
                $(this).css({
                    'transition': 'width 3s'
                });
                $(this).appear(function() {
                    console.log('hello');
                    $(this).css('width', width + '%');
                    $(this).find('.count').countTo({
                        from: 0,
                        to: width,
                        speed: 3000,
                        refreshInterval: 50
                    });
                });
            });
        });

        $('.owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            dots: false,
            autoplayTimeout: 8000
        });

        // Shuffle js filter and masonry
        var Shuffle = window.Shuffle;
        var jQuery = window.jQuery;

        var myShuffle = new Shuffle(document.querySelector('.shuffle-wrapper'), {
            itemSelector: '.shuffle-item',
            buffer: 1
        });

        jQuery('input[name="shuffle-filter"]').on('change', function(evt) {
            var input = evt.currentTarget;
            if (input.checked) {
                myShuffle.filter(input.value);
            }
        });

        $('.portfolio-gallery').each(function() {
            $(this).find('.popup-gallery').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });


    })(jQuery);
    </script>
</body>

</html>