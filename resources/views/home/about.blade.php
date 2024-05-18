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

    <!-- About One -->
    <section class="about-one style-two">
        <div class="auto-container">
            <div class="about-one-inner_container" style="background-image:url({{asset('home/images/background/pattern-1.png')}})">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="about-one_content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="about-one_content-inner">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="sec-title_title">About us</div>
                                <h2 class="sec-title_heading">We help to get Solutions!</h2>
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
                                <br/>
                                Moreover, our AI-powered trading systems revolutionize the way our clients approach the
                                market. By leveraging real-time analysis, historical patterns, and indicators, our
                                trading algorithms execute trades with precision and accuracy, enabling our clients
                                to capitalize on market opportunities and enhance their trading performance.
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

                    <div class="about-one_image-column col-lg-12 col-md-12 col-sm-12">
                        <div class="about-one_image">
                            <img src="{{asset('/')}}" alt=""/>
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

    <!-- Feature One -->
    <section class="feature-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="left-box">
                        <div class="sec-title_title">Higher yield on Investment</div>
                        <h2 class="sec-title_heading">We remain the first <br> to introduce AI into <br/> Cryptocurrency
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
                            <img src="{{asset('home/images/resource/feature-2.jpg')}}" alt="" />
                            <div class="feature-block_one-content">
                                <span class="feature-block_one-icon flaticon-business-and-finance"></span>
                                <h5 class="feature-block_one-heading">AI-Powered Trading  <br> Algorithms</h5>
                                <div class="feature-block_one-text">
                                    We utilize AI to ensure higher trading return with more accuracy based on the
                                    proficient GPT-4 model.
                                </div>
                            </div>
                            <!-- Feature block Overlay -->
                            <div class="feature-block_one-overlay">
                                <div class="feature-block_one-overlay-inner">
                                    <!-- Upper Box -->
                                    <div class="upper-box d-flex justify-content-between align-items-center">
                                        <div class="title-box">
                                            <span class="icon flaticon-business-and-finance"></span>
                                            <h5><a href="#">AI-Powered Trading <br> Algorithms</a></h5>
                                        </div>
                                        <div class="small-image">
                                            <img src="{{asset('home/images/resource/feature-2-1.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <!-- Lower Box -->
                                    <div class="lower-box">
                                        <div class="feature-block_one-text-two">
                                            Our cutting-edge systems leverage real-time market data, historical patterns,
                                            and indicators to execute trades with precision and accuracy. Stay ahead of
                                            market trends and capitalize on opportunities for increased profitability.
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


@endsection
