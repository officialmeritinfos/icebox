<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{$pageName}} - {{$siteName}}</title>
    <meta name="author" content="{{$siteName}}">
    <meta name="description" content="{{$siteName}} | The best investment strategies to build your fortune">
    <meta name="keywords" content="business, corporate, cryptocurrency, investment, finance, network, passive, income, earn">
    <!-- Stylesheets -->
    <link href="{{asset('home/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:wght@400;700&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('home/images/'.$web->logo)}}" type="image/x-icon">
    <link rel="icon" href="{{asset('home/images/'.$web->logo)}}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <style>
        .pricing-content{position:relative;}
        .pricing_design{
            position: relative;
            margin: 0px 15px;
        }
        .pricing_design .single-pricing{
            background:#554c86;
            padding: 60px 40px;
            border-radius:30px;
            box-shadow: 0 10px 40px -10px rgba(0,64,128,.2);
            position: relative;
            z-index: 1;
        }
        .pricing_design .single-pricing:before{
            content: "";
            background-color: #fff;
            width: 100%;
            height: 100%;
            border-radius: 18px 18px 190px 18px;
            border: 1px solid #eee;
            position: absolute;
            bottom: 0;
            right: 0;
            z-index: -1;
        }
        .price-head{}
        .price-head h2 {
            margin-bottom: 20px;
            font-size: 26px;
            font-weight: 600;
        }
        .price-head h1 {
            font-weight: 600;
            margin-top: 30px;
            margin-bottom: 5px;
        }
        .price-head span{}

        .single-pricing ul{list-style:none;margin-top: 30px;}
        .single-pricing ul li {
            line-height: 36px;
        }
        .single-pricing ul li i {
            background: #554c86;
            color: #fff;
            width: 20px;
            height: 20px;
            border-radius: 30px;
            font-size: 11px;
            text-align: center;
            line-height: 20px;
            margin-right: 6px;
        }
        .pricing-price{}

        .price_btn {
            background: #554c86;
            padding: 10px 30px;
            color: #fff;
            display: inline-block;
            margin-top: 20px;
            border-radius: 2px;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }
        .price_btn:hover{background:#0aa1d6;}
        a{
            text-decoration:none;
        }

        .text-center {
            text-align: center!important;
        }

    </style>
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <!--<div class="preloader"></div>-->
    <!-- End Preloader -->

    <!-- Main Header -->
    <header class="main-header">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
                    <!-- Logo Box -->
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('home/images/'.$web->logo)}}" alt=""
                                 title="" style="width:100px;">
                        </a>
                    </div>

                    <!-- Upper Right -->
                    <div class="upper-right d-flex align-items-center flex-wrap">
                        <!-- Info Box -->
                        <div class="upper-column info-box">
                            <div class="icon-box flaticon-phone-call"></div>
                            Requesting a Call:
                            <strong><a href="tel:{{$web->phone}}">{{$web->phone}}</a></strong>
                        </div>
                        <!-- Info Box -->
                        <div class="upper-column info-box">
                            <div class="icon-box flaticon-clock"></div>
                            Sunday - Friday:
                            <strong>9am - 8pm</strong>
                        </div>
                        <!-- Info Box -->
                        <div class="upper-column info-box">
                            <div class="icon-box flaticon-pin"></div>
                            {!!  $web->address !!}
                        </div>
                        <!-- Info Box -->
                        <div class="upper-column info-box">

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Header Lower -->
        <div class="header-lower">

            <div class="auto-container">
                <div class="inner-container">

                    <div class="nav-outer d-flex justify-content-between align-items-center flex-wrap">

                        <!-- Main Menu -->
                        <nav class="main-menu show navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('about')}}">About Us</a></li>
                                    <li class="dropdown"><a href="#">Page</a>
                                        <ul>
                                            <li><a href="{{url('service')}}">Services</a></li>
                                            <li><a href="{{url('plans')}}">Packages</a></li>
                                            <li><a href="{{url('faqs')}}">FAQs</a></li>
                                            <li><a href="{{url('terms')}}">Terms and Conditions</a></li>
                                            <li><a href="{{url('privacy')}}">Privacy Policy</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Account</a>
                                        <ul>
                                            <li><a href="{{route('login')}}">Login</a></li>
                                            <li><a href="{{route('register')}}">Register</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                </ul>
                            </div>

                        </nav>
                        <!-- Main Menu End-->

                        <div class="outer-box d-flex align-items-center">


                            <!-- Button Box -->
                            <div class="button-box">
                                <a class="btn-style-one theme-btn btn-item" href="{{route('register')}}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Get Started <i class="fa-solid fa-arrow-right fa-fw"></i></span>
                                        <span class="text-two">Get Started <i class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>

                    </div>

                </div>

            </div>
        </div>
        <!-- End Header Lower -->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{url('/')}}" title="">
                            <img src="{{asset('home/images/'.$web->logo)}}" alt="" title="" style="width:100px;">
                        </a>
                    </div>

                    <!-- Right Col -->
                    <div class="right-box d-flex align-items-center flex-wrap">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                        <!-- Main Menu End-->

                        <div class="outer-box d-flex align-items-center">

                            <!-- Button Box -->
                            <div class="button-box">
                                <a class="btn-style-one theme-btn btn-item" href="{{route('register')}}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Get Started <i class="fa-solid fa-arrow-right fa-fw"></i></span>
                                        <span class="text-two">Get Started <i class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    </div>
                                </a>
                            </div>

                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fas fa-window-close fa-fw"></span></div>
            <nav class="menu-box">
                <div class="nav-logo">
                    <a href="{{url('/')}}">
                        <img src="{{asset('home/images/'.$web->logo)}}" alt="" title="" style="width:100px;">
                    </a>
                </div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    @yield('content')

    <!-- Footer -->
    <footer class="main-footer" style="background-image:url({{asset('home/images/background/pattern-6.png')}})">
        <div class="auto-container">
            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="row clearfix justify-content-evenly">

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-12 col-md-12 col-sm-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="{{url('/')}}">
                                            <img src="{{asset('home/images/'.$web->logo)}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        {{$siteName}} is a trailblazing company that leverages the power of AI to provide
                                        unparalleled cryptocurrency investment, mining, and trading solutions.
                                    </div>
                                    <a href="{{url('about')}}" class="theme-btn about-btn">About us</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-12 col-md-12 col-sm-12">
                                <div class="footer-widget contact-widget">
                                    <h4>Official info:</h4>
                                    <ul class="contact-list">
                                        <li><span class="icon fa fa-map"></span>
                                            {!! $web->address !!}
                                        </li>
                                        <li><span class="icon fa fa-envelope"></span>
                                            {{$web->email}}
                                        </li>
                                    </ul>
                                    <div class="timing">
                                        <strong>Open Hours: </strong>
                                        Mon - Sunday: 8 am - 9 pm.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="footer-bottom">
                <div class="copyright">2007 - {{date('Y')}} &copy; All rights reserved by <a href="{{url('/')}}">{{$siteName}}</a></div>
            </div>

        </div>
    </footer>
    <!-- Footer -->

    <!-- Search Popup -->
    <div class="search-popup">
        <div class="color-layer"></div>
        <button class="close-search"><span class="fas fa-times fa-fw"></span></button>
        <form method="post" action="https://html.themexriver.com/intime/intime/blog">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="flaticon-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Search Popup -->

</div>
<!-- End PageWrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-long-arrow-up fa-fw"></span></div>

<script src="{{asset('home/js/jquery.js')}}"></script>
<script src="{{asset('home/js/appear.js')}}"></script>
<script src="{{asset('home/js/owl.js')}}"></script>
<script src="{{asset('home/js/wow.js')}}"></script>
<script src="{{asset('home/js/odometer.js')}}"></script>
<script src="{{asset('home/js/mixitup.js')}}"></script>
<script src="{{asset('home/js/knob.js')}}"></script>
<script src="{{asset('home/js/popper.min.js')}}"></script>
<script src="{{asset('home/js/parallax-scroll.js')}}"></script>
<script src="{{asset('home/js/parallax.min.js')}}"></script>
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<script src="{{asset('home/js/parallax-scroll.js')}}"></script>
<script src="{{asset('home/js/tilt.jquery.min.js')}}"></script>
<script src="{{asset('home/js/magnific-popup.min.js')}}"></script>

<script src="{{asset('home/js/script.js')}}"></script>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{asset('home/js/respond.js')}}"></script><![endif]-->

<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element">
</div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- Google language End -->
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '5014cb7f85685d3fafa09e3361e9069ef651c73e';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</body>
</html>
