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
                            <div class="col-xl-12">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </section>
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

