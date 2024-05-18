@extends('home.base')

@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{asset('home/images/background/5.jpg')}})">
        <div class="auto-container">
            <h2>{{$pageName}}</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>{{$pageName}}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Services One -->
    <section class="services-one" style="background-image:url({{asset('home/images/background/pattern-2.png')}})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">Featured Services</div>
                <h2 class="sec-title_heading">What we do that stands out!</h2>
                <div class="sec-title_text">
                    Those who are willing to challenge the status Quo must be willing to learn<br/>
                    and Earn.
                </div>
            </div>
            <div class="row clearfix">

                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_one-icon flaticon-website"></div>
                        <h5 class="service-block_one-heading">AI-Driven Investment Strategies</h5>
                        <div class="service-block_one-text">
                            {{$siteName}} harnesses the power of artificial intelligence to provide advanced investment
                            strategies for cryptocurrencies.
                        </div>
                        <div class="service-block_one-overlay" style="background-image:url({{asset('home/images/resource/rpa.jpeg')}})">
                            <div class="service-block_one-overlay-inner">
                                <div class="upper-box">
                                    <div class="service-block_one-icon-two flaticon-website"></div>
                                    <h5 class="service-block_one-heading-two"><a href="#">AI-Driven Investment Strategies</a></h5>
                                </div>
                                <div class="service-block_one-text-two">
                                    Our AI algorithms analyze market data, historical trends, and real-time indicators
                                    to deliver optimized investment returns, helping clients earn better and seamlessly.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_one-icon flaticon-market"></div>
                        <h5 class="service-block_one-heading">Efficient Mining Solutions</h5>
                        <div class="service-block_one-text">
                            {{$siteName}} offers efficient mining solutions powered by AI technology by
                            constantly monitoring and analyzing factors such as energy consumption, mining
                            difficulty.
                        </div>
                        <div class="service-block_one-overlay" style="background-image:url({{asset('home/images/resource/rpa.jpeg')}})">
                            <div class="service-block_one-overlay-inner">
                                <div class="upper-box">
                                    <div class="service-block_one-icon-two flaticon-market"></div>
                                    <h5 class="service-block_one-heading-two"><a href="#">Efficient Mining Solutions</a></h5>
                                </div>
                                <div class="service-block_one-text-two">
                                    We optimize our mining inputs and increase mining outputs with higher revenue.
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                


                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_one-icon flaticon-business-intelligence"></div>
                        <h5 class="service-block_one-heading">Security Solutions</h5>
                        <div class="service-block_one-text">
                            Understanding the importance of security in the cryptocurrency space, {{$siteName}} provides
                            robust security solutions to protect clients' digital assets.
                        </div>
                        <div class="service-block_one-overlay" style="background-image:url({{asset('home/images/resource/rpa.jpeg')}})">
                            <div class="service-block_one-overlay-inner">
                                <div class="upper-box">
                                    <div class="service-block_one-icon-two flaticon-business-intelligence"></div>
                                    <h5 class="service-block_one-heading-two"><a href="#">Security Solutions</a></h5>
                                </div>
                                <div class="service-block_one-text-two">
                                    We employ industry-leading practices and cutting-edge technologies to safeguard
                                    against cyber threats, ensuring the safety and integrity of clients' investments.
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_one-icon flaticon-shuttle"></div>
                        <h5 class="service-block_one-heading">Investment Policy</h5>
                        <div class="service-block_one-text">
                            Investments in our Starter Plan minimum is limited to once. This means, you will need to increase
                            your investment capital if you desire to keep investing the Starter Plan.
                        </div>
                        <div class="service-block_one-overlay" style="background-image:url({{asset('home/images/resource/rpa.jpeg')}})">
                            <div class="service-block_one-overlay-inner">
                                <div class="upper-box">
                                    <div class="service-block_one-icon-two flaticon-shuttle"></div>
                                    <h5 class="service-block_one-heading-two"><a href="#">Investment Policy</a></h5>
                                </div>
                                <div class="service-block_one-text-two">
                                    Investments in our Starter Plan minimum is limited to once. This means, you will need to increase
                                    your investment capital if you desire to keep investing the Starter Plan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </section>
    <!-- End Services One -->




@endsection
