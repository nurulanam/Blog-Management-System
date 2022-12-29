<!doctype html>
<html class="no-js" lang="">
<head>
 @include('frontend.includes.head')
</head>

<body class="sticky-header">
    <!--[if IE]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->
    <!-- Preloader Start Here -->
    {{-- <div id="preloader"></div> --}}
    <!-- Preloader End Here -->
    <!-- Back To Top Start Here -->
    <a href="#main-wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- Back To Top End Here -->
    <div id="main-wrapper" class="fh-main-wrapper">

        <!--=====================================-->
        <!--=         Header Menu Start       	=-->
        <!--=====================================-->
        <header class="header">
            @include('frontend.includes.headerTopbar')
            <div id="rt-sticky-placeholder"></div>
            @include('frontend.includes.headerMenu')
        </header>
        <!--=====================================-->
        <!--=        Slider Area Start      	=-->
        <!--=====================================-->
        @yield('banner')
        




        <div class="box-layout-wrap">
            <div class="box-layout-content">
                <!--=====================================-->
                <!--=            Post Start          	=-->
                <!--=====================================-->
                <section class="post-wrap-layout1">
                    <div class="container">
                        <div class="row gutters-40">
                            <div class="col-xl-9">
                                @yield('content')
                            </div>
                            <div class="col-xl-3 sidebar-widget">
                                @include('frontend.includes.sidebar')
                            </div>
                        </div>
                    </div>
                </section>
                {{-- <section class="post-video-slider margin-bottom-40">
                    <div class="container">
                        <div class="heading-layout2">
                            <h2 class="heading-title">Watch Videos Now</h2>
                        </div>
                        <div class="rc-carousel nav-control-layout1" data-loop="true" data-items="30" data-margin="15" data-autoplay="true" data-autoplay-timeout="4000" data-smart-speed="1000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="4" data-r-extra-large-nav="true" data-r-extra-large-dots="false">
                            <div class="post-grid-layout4">
                                <div class="item-img">
                                    <img src="{{ asset('frontend') }}/media/post/post20.jpg" alt="post">
                                </div>
                                <div class="popup-video">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                                <div class="item-content">
                                    <div class="item-tag bg-amaranth">Racing</div>
                                    <h3 class="item-title"><a href="#">Happy aunday software ExpandIn this week edition</a></h3>
                                </div>
                            </div>
                            <div class="post-grid-layout4">
                                <div class="item-img">
                                    <img src="{{ asset('frontend') }}/media/post/post21.jpg" alt="post">
                                </div>
                                <div class="popup-video">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                                <div class="item-content">
                                    <div class="item-tag bg-dodger-blue">Animation</div>
                                    <h3 class="item-title"><a href="#">Happy aunday software ExpandIn this week edition</a></h3>
                                </div>
                            </div>
                            <div class="post-grid-layout4">
                                <div class="item-img">
                                    <img src="{{ asset('frontend') }}/media/post/post22.jpg" alt="post">
                                </div>
                                <div class="popup-video">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                                <div class="item-content">
                                    <div class="item-tag bg-green">Action</div>
                                    <h3 class="item-title"><a href="#">Happy aunday software ExpandIn this week edition</a></h3>
                                </div>
                            </div>
                            <div class="post-grid-layout4">
                                <div class="item-img">
                                    <img src="{{ asset('frontend') }}/media/post/post23.jpg" alt="post">
                                </div>
                                <div class="popup-video">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                                <div class="item-content">
                                    <div class="item-tag bg-blueviolet">Football </div>
                                    <h3 class="item-title"><a href="#">Happy aunday software ExpandIn this week edition</a></h3>
                                </div>
                            </div>
                            <div class="post-grid-layout4">
                                <div class="item-img">
                                    <img src="{{ asset('frontend') }}/media/post/post21.jpg" alt="post">
                                </div>
                                <div class="popup-video">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                                <div class="item-content">
                                    <div class="item-tag bg-blueviolet">Football </div>
                                    <h3 class="item-title"><a href="#">Happy aunday software ExpandIn this week edition</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="post-wrap-layout2">
                    <div class="container">
                        <div class="row gutters-40">
                            <div class="col-xl-9">
                                <div class="heading-layout1">
                                    <h2 class="heading-title">Most Exiting Games</h2>
                                    <div class="heading-icon">
                                        <a href="#" class="active"><i class="flaticon-left-arrow-1"></i></a>
                                        <a href="#"><i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                                <div class="row gutters-20">
                                    <div class="col-md-6">
                                        <div class="post-list-layout3 post-grid-layout5">
                                            <div class="item-img">
                                                <img src="{{ asset('frontend') }}/media/post/post24.jpg" alt="Post">
                                            </div>
                                            <div class="item-content">
                                                <div class="item-tag bg-green">Action</div>
                                                <div class="post-meta">
                                                    <ul>
                                                        <li><i class="flaticon-clock"></i> 27 June, 2019</li>
                                                        <li class="item-author"><i class="flaticon-user bg-blueviolet"></i><span>By</span><a href="#">Mark Willy</a></li>
                                                    </ul>
                                                </div>
                                                <h3 class="item-title"><a href="#"> Gaeme icrowave is too small to fit the Happy Sunday Expand.</a></h3>
                                                <p>Stay focused and remember we design stay focused area aaend remember we design the best wordPrss he ones closest to you tha best.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="post-list-layout2 post-list-layout4">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="{{ asset('frontend') }}/media/post/post7.jpg" alt="Post">
                                                </div>
                                                <div class="media-body">
                                                    <div class="post-date"><i class="flaticon-clock"></i> 27 June, 2019</div>
                                                    <h4 class="post-title"><a href="single-post1.html">Just then head struck time game ara now mored.</a></h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="{{ asset('frontend') }}/media/post/post8.jpg" alt="Post">
                                                </div>
                                                <div class="media-body">
                                                    <div class="post-date"><i class="flaticon-clock"></i> 25 June, 2019</div>
                                                    <h4 class="post-title"><a href="single-post1.html">Just then head struck time game ara now mored.</a></h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="{{ asset('frontend') }}/media/post/post9.jpg" alt="Post">
                                                </div>
                                                <div class="media-body">
                                                    <div class="post-date"><i class="flaticon-clock"></i> 27 June, 2019</div>
                                                    <h4 class="post-title"><a href="single-post1.html">Just then head struck time game ara now mored.</a></h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="{{ asset('frontend') }}/media/post/post10.jpg" alt="Post">
                                                </div>
                                                <div class="media-body">
                                                    <div class="post-date"><i class="flaticon-clock"></i> 25 June, 2019</div>
                                                    <h4 class="post-title"><a href="single-post1.html">Just then head struck time game ara now mored.</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="heading-layout1">
                                    <h2 class="heading-title">Popular Posts</h2>
                                    <div class="heading-icon">
                                        <a href="#" class="active"><i class="flaticon-left-arrow-1"></i></a>
                                        <a href="#"><i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                                <div class="post-grid-layout3 post-grid-layout6">
                                    <div class="post-img">
                                        <img src="{{ asset('frontend') }}/media/post/post25.jpg" alt="Games">
                                    </div>
                                    <div class="post-content">
                                        <div class="post-date"><i class="flaticon-clock"></i> 27 June, 2019</div>
                                        <h3 class="post-title"><a href="single-post1.html">George Boateng eepingr tays Paul masterstroke</a></h3>
                                    </div>
                                </div>
                                <div class="post-grid-layout3 post-grid-layout6">
                                    <div class="post-img">
                                        <img src="{{ asset('frontend') }}/media/post/post26.jpg" alt="Games">
                                    </div>
                                    <div class="post-content">
                                        <div class="post-date"><i class="flaticon-clock"></i> 27 June, 2019</div>
                                        <h3 class="post-title"><a href="single-post1.html">George Boateng eepingr tays Paul masterstroke</a></h3>
                                    </div>
                                </div>
                                <div class="post-grid-layout3 post-grid-layout6">
                                    <div class="post-img">
                                        <img src="{{ asset('frontend') }}/media/post/post27.jpg" alt="Games">
                                    </div>
                                    <div class="post-content">
                                        <div class="post-date"><i class="flaticon-clock"></i> 27 June, 2019</div>
                                        <h3 class="post-title"><a href="single-post1.html">George Boateng eepingr tays Paul masterstroke</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
            </div>
        </div>
        <!--=====================================-->
        <!--=            Social Start           =-->
        <!--=====================================-->
        @include('frontend.includes.footerGallery')
        <!--=====================================-->
        <!--=            Footer Start           =-->
        <!--=====================================-->
        @include('frontend.includes.footer')
        <!--=====================================-->
        <!--=            Sidebar Start          =-->
        <!--=====================================-->
        @include('frontend.includes.sidebarNavMenu')

        <!--=====================================-->
        <!--=      Header Search Start          =-->
        <!--=====================================-->
        @include('frontend.includes.headerSearch')

    </div>
    @include('frontend.includes.js')

</body>

</html>

