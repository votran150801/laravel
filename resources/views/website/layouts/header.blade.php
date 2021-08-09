<header class="header">
    <!--Topbar-->
    <div class="header-topbar">
        <div class="header-topbar-inner">
            <!--Topbar Left-->
            <div class="topbar-left hidden-sm-down">
                <div class="phone"><i class="fa fa-phone left" aria-hidden="true"></i>Customer Support : <b>+039 269 8440</b></div>
            </div>
            <!--End Topbar Left-->

            <!--Topbar Right-->
            <div class="topbar-right">
                <ul class="list-none">
                    @if(Auth::user())
                    <li>
                        <a href="{{route('login')}}"><i class="fa fa-lock left" aria-hidden="true"></i><span class="hidden-sm-down">Logout</span></a>
                    </li>
                    @else
                    <li>
                        <a href="{{route('login')}}"><i class="fa fa-lock left" aria-hidden="true"></i><span class="hidden-sm-down">Login</span></a>
                    </li>
                    <li>
                        <a href="{{route('signup')}}"><i class="fa fa-lock left" aria-hidden="true"></i><span class="hidden-sm-down">signup</span></a>
                    </li>
                    @endif
                    <li class="dropdown-nav">
                        @auth
                        <a href="login-register.html">
                            <i class="fa fa-user left" aria-hidden="true"></i>
                            <span class="hidden-sm-down">
                                {{Auth::user()->name}}
                                (@if(Auth::user()->role == 1)
                                <span class="text-danger"> Admin</span>
                                @elseif(Auth::user()->role == 2)
                                <span class="text-warning"> Quản trị</span>
                                @else
                                <span class="text-success"> Khách hàng</span>
                                @endif)
                            </span>
                            <i class="fa fa-angle-down right" aria-hidden="true"></i>
                        </a>
                        @endauth
                        <!--Dropdown-->
                        <div class="dropdown-menu">
                            @auth
                            <ul>
                                @if(Auth::user()->role == 1)
                                <li><a href="{{route('admin.layouts.main')}}">Trang quản trị</a></li>
                                <li><a href="login-register.html">My Account</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                @elseif(Auth::user()->role == 2)
                                <li><a href="login-register.html">My Account</a></li>
                                <li><a href="#">Oder History</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                @else
                                <li><a href="login-register.html">My Account</a></li>
                                <li><a href="#">Oder History</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                @endif
                            </ul>
                            <span class="divider"></span>
                            <ul>
                                <li><a href="login-register.html"><i class="fa fa-user left" aria-hidden="true"></i>Create an Account</a></li>
                            </ul>
                            @endauth
                        </div>
                        <!--End Dropdown-->
                    </li>
                    <li class="dropdown-nav">
                        <a href="#">USD<i class="fa fa-angle-down right" aria-hidden="true"></i></a>
                        <!--Dropdown-->
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="#">USD</a></li>
                                <li><a href="#">EUR</a></li>
                                <li><a href="#">GBP</a></li>
                                <li><a href="#">AUD</a></li>
                            </ul>
                        </div>
                        <!--End Dropdown-->
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- End Topbar Right -->
        </div>
    </div>
    <!--End Topbart-->

    <!-- Header Container -->
    <div id="header-sticky" class="header-main">
        <div class="header-main-inner">
            <!-- Logo -->
            <div class="logo">
                <a href="/">
                    <img src="{{asset('website/img/logo_plane.png')}}" alt="Philos" />
                </a>
            </div>
            <!-- End Logo -->


            <!-- Right Sidebar Nav -->
            <div class="header-rightside-nav">
                <!-- Login-Register Link -->

                <!-- End Login-Register Link -->

                <!-- Sidebar Icon -->
                <div class="sidebar-icon-nav">
                    <ul class="list-none-ib">
                        <!-- Search-->
                        <li><a id="search-overlay-menu-btn"><i aria-hidden="true" class="fa fa-search"></i></a></li>

                        <!-- Whishlist-->
                        <li><a class="js_whishlist-btn"><i aria-hidden="true" class="fa fa-heart"></i><span class="countTip">10</span></a></li>

                        <!-- Cart-->
                        <li><a id="sidebar_toggle_btn">
                                <div class="cart-icon">
                                    <i aria-hidden="true" class="fa fa-shopping-bag"></i>
                                </div>

                                <div class="cart-title">
                                    <span class="cart-count">2</span>
                                    /
                                    <span class="cart-price strong">$698.00</span>
                                </div>
                            </a></li>
                    </ul>
                </div>
                <!-- End Sidebar Icon -->
            </div>
            <!-- End Right Sidebar Nav -->


            <!-- Navigation Menu -->
            <nav class="navigation-menu">
                <ul>
                    <li>
                        <a href="{{route('website.home')}}">Home</a>

                    </li>
                    <li class="dropdown-nav">
                        <a href="">Sản phẩm</a>
                        <!-- Drodown Menu ------->
                        <div class="dropdown-menu">
                            <ul>
                                @foreach($brand as $b)
                                <li>
                                    <a href="{{route('website.sanpham', ['id' => $b->id])}}">{{$b-> name}}</a>
                                    <!-- Drodown Menu ------->

                                    <!-- End Drodown Menu -->
                                </li>

                                @endforeach
                            </ul>
                        </div>
                        <!-- End Drodown Menu -->
                    </li>
                    <li>
                        <a href="shop_grid.html">Giới thiệu</a>
                        <!-- Drodown Menu ------->
                    </li>
                    <li>
                        <a href="shop_grid.html">Liên Hệ</a>
                        <!-- Drodown Menu ------->
                    </li>

                </ul>
            </nav>
            <!-- End Navigation Menu -->

        </div>
    </div>
    <!-- End Header Container -->
</header>