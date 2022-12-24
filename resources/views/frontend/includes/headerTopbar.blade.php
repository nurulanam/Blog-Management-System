<div id="header-topbar" class="header-topbar topbar-transparent">
    <div class="container">
        <div class="header-topbar-border">
            <div class="row d-flex align-items-center">
                <div class="col-lg-8">
                    <div class="header-topbar-layout1">
                        <div class="header-top-left">
                            <ul>
                                <li><i class="fas fa-phone-volume"></i>Call : + (123) 6418 8990 </li>
                                @guest
                                    <li><i class="far fa-user"></i><a href="{{ route('login') }}" class="mr-2">Login</a><a href="{{ route('register') }}" class="mr-2">Register</a></li>
                                @endguest
                                @auth
                                <li><i class="far fa-user"></i><a href="{{ url('/dashboard') }}" class="mr-2">Dashboard</a></li>
                                @endauth

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-end">
                    <div class="header-topbar-layout1">
                        <div class="header-top-right">
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
