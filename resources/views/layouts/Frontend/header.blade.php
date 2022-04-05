<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-mid d-none d-md-block">
                <div class="container">
                    {{--                    <div class="row d-flex align-items-center">
                                            <!-- Logo -->

                                            <div class="col-xl-9 col-lg-9 col-md-9">
                                                <div class="header-banner f-right ">
                                                    <img src="{{asset('logo/logo.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>--}}
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="{{route('frontend.home')}}"><img src="{{asset('logo/logo_small.jpeg')}}" alt=""></a>

                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{route('frontend.home')}}">Home</a></li>
                                        <li><a href="{{route('frontend.pricing')}}">Pricing</a></li>
                                        <li><a href="{{route('frontend.newshub')}}">News Hub</a></li>
                                        <li><a href="{{route('frontend.blog')}}">Blogs</a></li>
                                        <li><a href="{{route('frontend.contact')}}">Contact</a></li>
                                        <li><a href="{{route('login')}}">Login</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <i class="fas fa-search special-tag"></i>
                                <div class="search-box">
                                    <form action="#">
                                        <input type="text" placeholder="Search">

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
