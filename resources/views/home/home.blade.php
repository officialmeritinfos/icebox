@extends('home.base')
@section('content')


    <!-- Main Slider -->
    <section class="slider-one">
        <div class="single-item-carousel owl-carousel owl-theme">

            <!-- Slide -->
            <div class="slide">
                <div class="slider-one_image-layer" style="background-image:url({{asset('home/images/main-slider/aicloud.jpeg')}})"></div>
                <div class="slider-one_pattern-layer" style="background-image:url({{asset('home/images/main-slider/pattern-1.png')}})"></div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="slider-one-content d-flex justify-content-end">
                        <div class="slider-one_inner">
                            <div class="slider-one_title">COACHING, CONSULTING, INVESTING & GROWTH</div>
                            <h1 class="slider-one_heading">
                                Unlock Your  <br> Cryptocurrency Potential  <br> with {{$siteName}}.
                            </h1>
                            <div class="slider-one_text">
                                Discover a world of unlimited possibilities in the realm of cryptocurrencies with<br/>
                                {{$siteName}}. Our Artificial Intelligence system helps you earn bigger
                            </div>
                            <!-- Button Box -->
                            <div class="slider-one_button-box d-flex align-items-center flex-wrap">
                                <a class="btn-style-five theme-btn btn-item" href="{{route('login')}}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Login</span>
                                        <span class="text-two">Login</span>
                                    </div>
                                </a>
                                <a class="btn-style-three theme-btn btn-item" href="{{route('register')}}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Create Account</span>
                                        <span class="text-two">Create Account</span>
                                    </div>
                                </a>
                                <!-- About One Detail -->
                                <a class="slider-one_play lightbox-video" href="https://www.youtube.com/watch?v=z569rEDGU1s">
                                    <span class="fa-solid fa-play fa-fw"><i class="ripple"></i></span>
                                    Watch Video
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Slide -->
            <div class="slide">
                <div class="slider-one_image-layer" style="background-image:url({{asset('home/images/main-slider/ai2.jpeg')}})"></div>
                <div class="slider-one_pattern-layer" style="background-image:url({{asset('home/images/main-slider/pattern-1.png')}})"></div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="slider-one-content d-flex justify-content-end">
                        <div class="slider-one_inner">
                            <div class="slider-one_title">COACHING, CONSULTING, TRAINING & KEYNOTES</div>
                            <h1 class="slider-one_heading">
                                Artificial Intelligence Powered Excellence:  <br> Elevate Your Crypto  <br> Journey with {{$siteName}}.
                            </h1>
                            <div class="slider-one_text">
                                When you invest with {{$siteName}}, you are guaranteed of returns higher than anywhere
                                else
                            </div>
                            <!-- Button Box -->
                            <div class="slider-one_button-box d-flex align-items-center flex-wrap">
                                <a class="btn-style-five theme-btn btn-item" href="{{route('login')}}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Login</span>
                                        <span class="text-two">Login</span>
                                    </div>
                                </a>
                                <a class="btn-style-three theme-btn btn-item" href="{{route('register')}}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Create Account</span>
                                        <span class="text-two">Create Account</span>
                                    </div>
                                </a>
                                <!-- About One Detail -->
                                <a class="slider-one_play lightbox-video" href="https://www.youtube.com/watch?v=z569rEDGU1s">
                                    <span class="fa-solid fa-play fa-fw"><i class="ripple"></i></span>
                                    Watch Video
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Slide -->
            <div class="slide">
                <div class="slider-one_image-layer" style="background-image:url({{asset('home/images/main-slider/rpa.jpeg')}})"></div>
                <div class="slider-one_pattern-layer" style="background-image:url({{asset('home/images/main-slider/pattern-1.png')}})"></div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="slider-one-content d-flex justify-content-end">
                        <div class="slider-one_inner">
                            <div class="slider-one_title">COACHING, CONSULTING, TRAINING & KEYNOTES</div>
                            <h1 class="slider-one_heading">Crypto <br> Mining <br> with High Efficiency.</h1>
                            <div class="slider-one_text">
                                {{$siteName}} advanced algorithm makes it easy for you to earn with an automated
                                system.
                            </div>
                            <!-- Button Box -->
                            <div class="slider-one_button-box d-flex align-items-center flex-wrap">
                                <a class="btn-style-five theme-btn btn-item" href="{{route('login')}}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Login</span>
                                        <span class="text-two">Login</span>
                                    </div>
                                </a>
                                <a class="btn-style-three theme-btn btn-item" href="{{route('register')}}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Create Account</span>
                                        <span class="text-two">Create Account</span>
                                    </div>
                                </a>
                                <!-- About One Detail -->
                                <a class="slider-one_play lightbox-video" href="https://www.youtube.com/watch?v=z569rEDGU1s">
                                    <span class="fa-solid fa-play fa-fw"><i class="ripple"></i></span>
                                    Watch Video
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Main Slider -->

    <!-- Feature One -->
    <section class="feature-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="left-box">
                        <div class="sec-title_title">Higher yield on Investment</div>
                        <h2 class="sec-title_heading">We remain the first <br> to introduce Artificial Intelligence(AI) into <br/> Cryptocurrency
                            <br/>investments and mining.</h2>
                    </div>
                    <div class="right-box">
                        <div class="sec-title_text">
                            With {{$siteName}}, harness the potential of <br/>artificial intelligence to
                            elevate your cryptocurrency<br/>
                            investments, mining operations, and trading <br/>endeavors to new  <br/>heights.
                            Experience x10 of revenue earning in hours.
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature-carousel owl-carousel owl-theme">

                

                <!-- Feature Block One -->
                <div class="feature-block_one">
                    <div class="feature-block_one-inner">
                        <div class="feature-block_one-image">
                            <img src="{{asset('home/images/resource/feature-3.jpg')}}" alt="" />
                            <div class="feature-block_one-content">
                                <span class="feature-block_one-icon flaticon-business-intelligence"></span>
                                <h5 class="feature-block_one-heading">Advanced AI  <br> Investment Strategies</h5>
                                <div class="feature-block_one-text" style="font-size:13px;">
                                    With our Artificial intelligence, we analyze data in minutes.
                                </div>
                            </div>
                            <!-- Feature block Overlay -->
                            <div class="feature-block_one-overlay">
                                <div class="feature-block_one-overlay-inner">
                                    <!-- Upper Box -->
                                    <div class="upper-box d-flex justify-content-between align-items-center">
                                        <div class="title-box">
                                            <span class="icon flaticon-business-intelligence"></span>
                                            <h5><a href="#">Advanced AI <br> Investment Strategies</a></h5>
                                        </div>
                                        <div class="small-image">
                                            <img src="{{asset('home/images/resource/feature-3-1.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <!-- Lower Box -->
                                    <div class="lower-box">
                                        <div class="feature-block_one-text-two">
                                            We keep our investors ahead of the market and in turn yield better revenue
                                            for them.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block One -->
                <div class="feature-block_one">
                    <div class="feature-block_one-inner">
                        <div class="feature-block_one-image">
                            <img src="{{asset('home/images/resource/feature-1.jpg')}}" alt="" />
                            <div class="feature-block_one-content">
                                <span class="feature-block_one-icon flaticon-web-development"></span>
                                <h5 class="feature-block_one-heading">Efficient Mining <br> Operations</h5>
                                <div class="feature-block_one-text">
                                    {{$siteName}} optimizes mining operations by harnessing the power of AI and its
                                    high computation efficiency.
                                </div>
                            </div>
                            <!-- Feature block Overlay -->
                            <div class="feature-block_one-overlay">
                                <div class="feature-block_one-overlay-inner">
                                    <!-- Upper Box -->
                                    <div class="upper-box d-flex justify-content-between align-items-center">
                                        <div class="title-box">
                                            <span class="icon flaticon-web-development"></span>
                                            <h5><a href="#">Efficient Mining <br> Operations</a></h5>
                                        </div>
                                        <div class="small-image">
                                            <img src="{{asset('home/images/resource/feature-1-1.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <!-- Lower Box -->
                                    <div class="lower-box">
                                        <div class="feature-block_one-text-two">
                                            Through constant monitoring, we are able to know the output rate of our
                                            mining tools and know the best time to increase for higher return.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </section>
    <!-- End Feature One -->

    <!-- About One -->
    <section class="about-one">
        <div class="auto-container">
            <div class="about-one-inner_container" style="background-image:url({{asset('home/images/background/pattern-1.png')}})">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="about-one_content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="about-one_content-inner">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="sec-title_title">About us</div>
                                <h2 class="sec-title_heading">We help you earn Big</h2>
                            </div>
                            <div class="about-one_colored-text" style="color:green;">
                                {{$siteName}} is a U.S based investment company that allows investors - small and large scale to
                                seamlessly invest in crypto mining with guaranteed returns.
                            </div>
                            <div class="about-one_text">
                                Powered by advanced artificial intelligence (AI) algorithms, {{$siteName}} provides
                                cutting-edge solutions to help clients earn from the dynamic world of cryptocurrencies
                                with confidence and success.<br/>
                                With our AI-driven investment strategies, we analyze extensive market data, historical
                                trends, and real-time indicators to make informed investment decisions and optimize
                                portfolio performance.
                            </div>

                            <div class="row clearfix">

                                <!-- Counter Boxed -->
                                <div class="counter-boxed col-lg-6 col-md-6 col-sm-12">
                                    <div class="d-flex align-items-center">
                                        <div class="graph-outer">
                                            <input type="text" class="dial" data-fgColor="#c20b0b" data-bgColor="#ffffff"
                                                   data-width="110" data-height="110" data-linecap="normal"  value="98" data-thickness="0.10">
                                            <div class="inner-text count-box"><span class="count-text" data-stop="98"
                                                                                    data-speed="3500"></span>%</div>
                                        </div>
                                        <div class="sub-title">Current <br>Mining hashrate</div>
                                    </div>
                                </div>

                                <!-- Counter Boxed -->
                                <div class="counter-boxed col-lg-6 col-md-6 col-sm-12">
                                    <div class="d-flex align-items-center">
                                        <div class="graph-outer">
                                            <input type="text" class="dial" data-fgColor="#c20b0b"
                                                   data-bgColor="#ffffff" data-width="110" data-height="110"
                                                   data-linecap="normal"  value="99" data-thickness="0.10">
                                            <div class="inner-text count-box"><span class="count-text" data-stop="99" data-speed="3500"></span>%</div>
                                        </div>
                                        <div class="sub-title">Guaranteed <br> returns</div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="about-one_image-column col-lg-5 col-md-12 col-sm-12">
                        <div class="about-one_image-inner">
                            <div class="about-one_counter-box" data-parallax='{"y" : 80}'>
                                <div class="about-one_counter"><span class="odometer" data-count="12"></span><sup>+</sup></div>
                                <div class="about-one_experiance">Years of <br> success</div>
                            </div>
                            <div class="about-one_image">
                                <img src="{{asset('home/images/resource/rpa1.jpeg')}}" alt="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End About One -->

    <!-- Process One -->
    <section class="process-one">
        <div class="auto-container">
            <div class="process-one_inner-conatiner">
                <div class="four-item-carousel owl-carousel owl-theme">

                    <!-- Process Column -->
                    <div class="process-one_block">
                        <div class="process-one_block-inner">
                            <div class="process-one_image">
                                <img src="{{asset('home/images/resource/process-1.png')}}" alt="" />
                            </div>
                            <div class="process-one_year">2007</div>
                            <h5 class="process-one_heading">Founding Year</h5>
                            <div class="process-one_text">
                                {{$siteName}} is founded, envisioning a future where cryptocurrencies and AI intersect
                                to revolutionize the financial landscape.
                            </div>
                        </div>
                    </div>

                    <!-- Process Column -->
                    <div class="process-one_block">
                        <div class="process-one_block-inner">
                            <div class="process-one_image">
                                <img src="{{asset('home/images/resource/process-2.png')}}" alt="" />
                            </div>
                            <div class="process-one_year style-two">2008-2009</div>
                            <h5 class="process-one_heading">Research & Development</h5>
                            <div class="process-one_text">
                                The company focuses on research and development, exploring the potential of
                                cryptocurrencies and laying the foundation for AI-driven solutions.
                            </div>
                        </div>
                    </div>

                    <!-- Process Column -->
                    <div class="process-one_block">
                        <div class="process-one_block-inner">
                            <div class="process-one_image">
                                <img src="{{asset('home/images/resource/process-3.png')}}" alt="" />
                            </div>
                            <div class="process-one_year style-three">2010-2012</div>
                            <h5 class="process-one_heading">Crypto-launch and mining</h5>
                            <div class="process-one_text">
                                {{$siteName}} establishes itself as a trusted name in the cryptocurrency industry,
                                offering innovative investment strategies and attracting a growing client base.
                            </div>
                        </div>
                    </div>

                    <!-- Process Column -->
                    <div class="process-one_block">
                        <div class="process-one_block-inner">
                            <div class="process-one_image">
                                <img src="{{asset('home/images/resource/process-4.png')}}" alt="" />
                            </div>
                            <div class="process-one_year style-four">2013-2015</div>
                            <h5 class="process-one_heading">1st AI integration</h5>
                            <div class="process-one_text">
                                With advancements in AI technology, {{$siteName}} pioneers the integration of AI
                                algorithms into their investment strategies, providing clients with enhanced insights
                                and decision-making capabilities.
                            </div>
                        </div>
                    </div>

                    <!-- Process Column -->
                    <div class="process-one_block">
                        <div class="process-one_block-inner">
                            <div class="process-one_image">
                                <img src="{{asset('home/images/resource/process-1.png')}}" alt="" />
                            </div>
                            <div class="process-one_year">2016-2017</div>
                            <h5 class="process-one_heading">Expansion</h5>
                            <div class="process-one_text">
                                {{$siteName}} expands its operations to include cryptocurrency mining, leveraging AI to
                                optimize mining efficiency and increase profitability.
                            </div>
                        </div>
                    </div>

                    <!-- Process Column -->
                    <div class="process-one_block">
                        <div class="process-one_block-inner">
                            <div class="process-one_image">
                                <img src="{{asset('home/images/resource/process-2.png')}}" alt="" />
                            </div>
                            <div class="process-one_year style-two">2018-2019</div>
                            <h5 class="process-one_heading">Crypto-market boom</h5>
                            <div class="process-one_text">
                                The company experiences significant growth as the cryptocurrency market gains mainstream
                                attention. {{$siteName}} continues to refine its AI-powered investment and trading algorithms,
                                delivering consistent results and staying ahead of market trends.
                            </div>
                        </div>
                    </div>

                    <!-- Process Column -->
                    <div class="process-one_block">
                        <div class="process-one_block-inner">
                            <div class="process-one_image">
                                <img src="{{asset('home/images/resource/process-3.png')}}" alt="" />
                            </div>
                            <div class="process-one_year style-three">2021</div>
                            <h5 class="process-one_heading">Grand Milestone</h5>
                            <div class="process-one_text">
                                {{$siteName}} reaches a milestone, managing a diverse portfolio of clients and establishing
                                itself as a leader in AI-powered cryptocurrency solutions. The company's commitment to
                                innovation, expertise, and client success sets it apart in the industry.
                            </div>
                        </div>
                    </div>

                    <!-- Process Column -->
                    <div class="process-one_block">
                        <div class="process-one_block-inner">
                            <div class="process-one_image">
                                <img src="{{asset('home/images/resource/process-4.png')}}" alt="" />
                            </div>
                            <div class="process-one_year style-four">2022-2023</div>
                            <h5 class="process-one_heading">GPT-4 Model Integration</h5>
                            <div class="process-one_text">
                                {{$siteName}} continues to adapt to the evolving cryptocurrency landscape, embracing new
                                technologies and expanding its range of services. They stay at the forefront of AI
                                advancements, further optimizing their investment strategies, mining operations,
                                and trading algorithms.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Process One -->

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
                            Investments in our Starter Plan minimum is limited to only twice. This means, you will need to  upgrade to another package after reinvesting twice on the Starter package.
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

    <!-- Team Three -->
    <section class="team-three">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="left-box">
                        <div class="sec-title_title">Team</div>
                        <h2 class="sec-title_heading"></h2>
                    </div>
                    <div class="right-box">
                        <div class="sec-title_text"></div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">

                <!-- Team Block Two -->
                <div class="team-two_block col-lg-6 col-md-6 col-sm-12">
                    <div class="team-two_block-inner">
                        <div class="team-two_block-image">
                            <a href="#"><img src="{{asset('home/images/ceo.jpeg')}}" alt="" /></a>
                        </div>
                        <div class="team-two_block-content">
                            <div class="upper-box">
                                <h5 class="team-two_block-heading"><a href="#">Charles Bloomberg</a></h5>
                                <div class="team-two_block-designation">Founder & CEO</div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Team Block Two -->
                <div class="team-two_block col-lg-6 col-md-6 col-sm-12">
                    <div class="team-two_block-inner">
                        <div class="team-two_block-image">
                            <a href="#"><img src="{{asset('home/images/admin.jpeg')}}" alt="" /></a>
                        </div>
                        <div class="team-two_block-content">
                            <div class="upper-box">
                                <h5 class="team-two_block-heading"><a href="#">Michael Ellison</a></h5>
                                <div class="team-two_block-designation">Administrator</div>
                            </div>

                        </div>
                    </div>
                </div>



            </div>


        </div>
    </section>
    <!-- End Feature One -->

    <!-- Services One -->
    <section class="services-one" style="background-image:url({{asset('home/images/background/pattern-3.png')}})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">Awesome</div>
                <h2 class="sec-title_heading">Investment Packages</h2>
                <div class="sec-title_text">

                </div>
            </div>
            <div class="row clearfix text-center">
                @foreach($packages as $package)
                    <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp mb-5 mx-auto" data-wow-duration="1s"
                         data-wow-delay="0.1s" data-wow-offset="0"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="pricing_design">
                            <div class="single-pricing">
                                <div class="price-head">
                                    <h2>{{$package->name}}</h2>
                                    <h1>{{$package->Roi}}%</h1>
                                    <span>/{{$package->returnType}}</span>
                                </div>
                                <ul>
                                    <li><b>Minimum</b>  ${{number_format($package->minAmount,2)}}</li>
                                    <li><b>Maximum</b> @if($package->unlimited !=1)
                                            ${{number_format($package->maxAmount,2)}}
                                        @else
                                            Unlimited
                                        @endif
                                    </li>
                                    <li><b>{{$package->returnType}} returns</b> at {{$package->Roi}}%</li>
                                    <li><b>Referral bonus</b> {{$package->referral}}%</li>
                                    <li><b>Contract</b> {{$package->Duration}}</li>
                                    <li><b>Total</b> {{$package->Roi*$package->numberOfReturn}}%</li>
                                </ul>
                                <div class="pricing-price">

                                </div>
                                <a href="{{route('register')}}" class="price_btn">Start Investment</a>
                            </div>
                        </div>
                    </div><!--- END COL -->
                @endforeach


            </div>



        </div>
    </section>
    <!-- End Services One -->

    <!-- Progress One -->
    <section class="progress-one" style="background-image:url({{asset('home/images/background/pattern-3.png')}})">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Progress One -->
                <div class="progress-one_content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="progress-one_content-inner">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="sec-title_title">Annual Progression</div>
                            <h2 class="sec-title_heading">Productivity and efficiency equals success </h2>
                            <div class="sec-title_text">
                                We are heading for the Milestone of $1B payout by the end of 2024
                            </div>
                        </div>

                        <!-- Skills -->
                        <div class="default-skills">

                            <!-- Skill Item -->
                            <div class="default-skill-item">
                                <div class="default-skill-bar">
                                    <div class="default-bar-inner">
                                        <div class="default-bar progress-line" data-width="89">
                                            <div class="default-skill-percentage"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="default-count-box count-box">
                                    <span class="count-text" data-speed="2000" data-stop="89">0</span>%</div>
                                <div class="default-skill-title">Business growth <span>(2022)</span></div>
                            </div>

                            <!-- Skill Item -->
                            <div class="default-skill-item">
                                <div class="default-skill-bar">
                                    <div class="default-bar-inner">
                                        <div class="default-bar progress-line" data-width="90">
                                            <div class="default-skill-percentage"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="default-count-box count-box"><span class="count-text" data-speed="2000"
                                                                               data-stop="90">0</span>%</div>
                                <div class="default-skill-title">Investment growth <span>(2022)</span></div>
                            </div>

                            <!-- Skill Item -->
                            <div class="default-skill-item">
                                <div class="default-skill-bar">
                                    <div class="default-bar-inner">
                                        <div class="default-bar progress-line" data-width="100">
                                            <div class="default-skill-percentage"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="default-count-box count-box"><span class="count-text" data-speed="2000"
                                                                               data-stop="100">0</span>%</div>
                                <div class="default-skill-title">Financial growth <span>(2022)</span></div>
                            </div>

                        </div>

                        <div class="row clearfix">

                            <!-- Progress Info -->
                            <div class="progress-info col-lg-6 col-md-6 col-sm-12">
                                <div class="progress-info_inner">
                                    <div class="progress-info_title">
                                        <span class="progress-info_icon flaticon-shield"></span>
                                        <h6>Risk Free</h6>
                                    </div>
                                    <div class="progress-info_text">
                                        We offer a Risk free investment strategy fully insured.
                                    </div>
                                </div>
                            </div>

                            <!-- Progress Info -->
                            <div class="progress-info col-lg-6 col-md-6 col-sm-12">
                                <div class="progress-info_inner">
                                    <div class="progress-info_title">
                                        <span class="progress-info_icon flaticon-profit"></span>
                                        <h6>Business Growth</h6>
                                    </div>
                                    <div class="progress-info_text">
                                        Our exponential growth in 2022 was amazing and we are replicating even more in 2023
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Image Column -->
                <div class="progress-one_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="progress-one_image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img src="{{asset('home/images/resource/progress.png')}}" alt="" />
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Progress One -->




    <!-- Counter One -->
    <section class="counter-one" style="background-image:url({{asset('home/images/background/pattern-4.png')}})">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Counter One Block -->
                <div class="counter-one_block col-lg-4 col-md-6 col-sm-12">
                    <div class="counter-one_block-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="counter-one_counter"><span class="odometer" data-count="28"></span> K+</div>
                        <div class="counter-one_title">Active clients</div>
                        <div class="counter-one_text">Every week, over 1k+ new registrations are recieved.</div>
                    </div>
                </div>

                <!-- Counter One Block -->
                <div class="counter-one_block col-lg-4 col-md-6 col-sm-12">
                    <div class="counter-one_block-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="counter-one_counter"><span class="odometer" data-count="167"></span> M+</div>
                        <div class="counter-one_title">Investments Paid out</div>
                        <div class="counter-one_text">We are always processing payouts</div>
                    </div>
                </div>

                <!-- Counter One Block -->
                <div class="counter-one_block col-lg-4 col-md-6 col-sm-12">
                    <div class="counter-one_block-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="counter-one_counter"><span class="odometer" data-count="106"></span> +</div>
                        <div class="counter-one_title">Qualified Staff</div>
                        <div class="counter-one_text">Experts in Cryptocurrency</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Counter One -->

    <!-- Testimonial One -->
    <section class="testimonial-one">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Carousel Column -->
                <div class="testimonial-one_carousel-column col-lg-6 col-md-12 col-sm-12">
                    <div class="testimonial-one_carousel-inner">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="sec-title_title">Client’s testimonials</div>
                            <h2 class="sec-title_heading">We are Very Happy to Get <br> Our Client’s Reviews.</h2>
                        </div>
                        <div class="testimonial-one_review">Clients Reviews:</div>
                        <div class="single-item-carousel owl-carousel owl-theme">

                            <!-- Testimonial Block One -->
                            <div class="testimonial-block_one">
                                <div class="testimonial-block_one-inner">
                                    <div class="testimonial-block_one-text">
                                        “
                                        {{$siteName}} has completely transformed my cryptocurrency investments.
                                        Their AI-driven investment strategies have provided me with valuable insights and recommendations,
                                        resulting in significant returns on my portfolio. Their team's expertise and commitment
                                        to success are unmatched
                                        ”
                                    </div>

                                    <div class="author-box">
                                        <div class="box-inner">
											<span class="author-image">
												<img src="https://ui-avatars.com/api/?name=Alina l" alt="" />
											</span>
                                            <h5>Alina L</h5>
                                            <div class="designation">Investor</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Testimonial Block Three -->
                            <div class="testimonial-block_one">
                                <div class="testimonial-block_one-inner">
                                    <div class="testimonial-block_one-text">“
                                        I've been mining cryptocurrencies for years, but it wasn't until I started using
                                        {{$siteName}}' AI-powered mining solutions that I truly optimized my operations.
                                        Their advanced algorithms have increased my mining efficiency and profitability,
                                        giving me a competitive edge in the industry. I highly recommend their services
                                        to any serious miner
                                        ”
                                    </div>

                                    <div class="author-box">
                                        <div class="box-inner">
											<span class="author-image">
												<img src="https://ui-avatars.com/api/?name=Mandy S" alt="" />
											</span>
                                            <h5>Mandy S.</h5>
                                            <div class="designation">Investor</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Testimonial Block Three -->
                            <div class="testimonial-block_one">
                                <div class="testimonial-block_one-inner">
                                    <div class="testimonial-block_one-text">“
                                        Trading cryptocurrencies can be overwhelming, but {{$siteName}}' AI-powered trading
                                        systems have revolutionized my approach. Their algorithms make real-time market
                                        analysis and execute trades with precision. I've experienced remarkable results,
                                        and their support team has been there every step of the way.
                                        ”
                                    </div>

                                    <div class="author-box">
                                        <div class="box-inner">
											<span class="author-image">
												<img src="https://ui-avatars.com/api/?name=Michael B" alt="" />
											</span>
                                            <h5>Michael B</h5>
                                            <div class="designation">Investor</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="testimonial-one_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="testimonial-one_image-inner">
                        <div class="testimonial-one_image">
                            <img src="{{asset('home/images/resource/testimonial.png')}}" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Testimonial One -->

    <!-- News One -->
    <section class="news-one" style="background-image:url({{asset('home/images/background/pattern-4.png')}})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2 class="sec-title_heading text-uppercase">Recent Transactions</h2>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="sec-title_title" style="margin-bottom: 3rem;margin-top: 3rem;">Recent Deposits</div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                        <tr>
                            <th>Name</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($deposits as $deposit)
                            @inject('injected','App\Custom\Regular')
                            <tr>
                                <td>
                                    {{$injected->getInvestorUsername($deposit->user)}}
                                </td>
                                <td>${{number_format($deposit->amount,2)}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

                <div class="col-md-6">
                    <div class="sec-title_title" style="margin-bottom: 3rem;margin-top: 3rem;">Latest Withdrawals</div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                        <tr>
                            <th>Name</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($withdrawals as $withdrawal)
                            @inject('injected','App\Custom\Regular')
                            <tr>
                                <td>
                                    {{$injected->getInvestorUsername($withdrawal->user)}}
                                </td>
                                <td>${{number_format($withdrawal->fiatAmount,2)}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </section>
    <!-- End News One -->


    <!-- News One -->
    <section class="news-one" style="background-image:url({{asset('home/images/background/pattern-5.png')}})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">Our latest news</div>
                <h2 class="sec-title_heading"></h2>
            </div>
            <div class="two-item-carousel owl-carousel owl-theme">

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
                        <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                        <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                    </div>
                </div>


            </div>



        </div>
    </section>
    <!-- End News One -->

    <!-- CTA One -->
    <section class="cta-one">
        <div class="auto-container">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="left-box">
                    <h3 class="cta-one_heading">Looking for the Best Investment Firm?</h3>
                    <div class="cta-one_text">
                        As mining experts, we guarantee you a resourceful return on your investments
                    </div>
                </div>
                <div class="right-box">
                    <a class="cta-one_btn theme-btn" href="{{route('register')}}">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA One -->

@endsection
