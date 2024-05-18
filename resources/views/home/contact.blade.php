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

    <!-- Business One -->
    <section class="business-one style-five" style="background-image:url({{'home/images/background/pattern-39.png'}})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="left-box">
                        <div class="sec-title_title">Get in touch</div>
                        <h2 class="sec-title_heading">We are Connected All Time <br> to Help You earn!</h2>
                    </div>
                    <div class="right-box">
                        <div class="sec-title_text">

                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <!-- Branches Column -->
                <div class="branches-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Business One Counter -->
                        <div class="business-one_counter-box">
                            <div class="business-one_counter"><span class="odometer" data-count="12"></span><sup>+</sup></div>
                            <div class="business-one_experiance">Branches</div>
                        </div>
                        <div class="map">
                            <img src="{{'home/images/background/map.png'}}" alt="" />
                            <div class="dots-outer">
                                <span class="dott"></span>
                                <span class="dott two"></span>
                                <span class="dott three"></span>
                                <span class="dott four"></span>
                                <span class="dott five"></span>
                                <span class="dott six"></span>
                                <span class="dott seven"></span>
                                <span class="dott eight"></span>
                                <span class="dott nine"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h3 class="business-one_title">Book an appionment</h3>

                        <!-- Default Form -->
                        <div class="default-form">
                            <form method="get" action="#">
                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Full Name *</label>
                                        <input type="text" name="username" placeholder="Jhon Doe" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Male Address *</label>
                                        <input type="text" name="email" placeholder="email@example.com" required="">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Type your message*</label>
                                        <textarea class="" name="message" placeholder="Message..."></textarea>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn send-btn">
                                            Send your message
                                            <span class="icon fa-solid fa-plus fa-fw"></span>
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <!-- End Default Form -->

                    </div>
                </div>
            </div>

            <!-- Business One Lower Section -->
            <div class="business-one_lower-section text-center" style="margin-top: 10rem;">
                <h6>Main Details:</h6>
                <div class="row clearfix">
                    <!-- Branch Column -->
                    <div class="branch-column col-lg-4 col-md-6 col-sm-12 mx-auto">
                        <div class="branch-column_inner">
                            <div class="branch-name"> (Head Office)</div>
                            <ul class="branch-info_list">
                                <li>{!! $web->address !!}</li>
                                <li><a href="tel:{{$web->phone}}">{{$web->phone}}</a> </li>
                                <li><a href="mailto:{{$web->email}}">{{$web->email}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Business One -->

    <!-- Map One -->
    <section class="map-one">
        <div class="map-outer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
        </div>
    </section>
    <!-- End Map One -->

@endsection
