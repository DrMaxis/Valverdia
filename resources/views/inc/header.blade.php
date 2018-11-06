<!--/-/-/-/-/-/-/-/-/
    Begin Header  
-/-/-/-/-/-/-/-/-/-->

<header>
    <div class="container-fluid header-top-area header-sticky">
        <div class="row">
            <!--/-/-/-/-/-/-/-/-/
                        Begin Logo 
                    -/-/-/-/-/-/-/-/-/-->

            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-5 full-col pl-0">
                <div class="logo">
                    <a href="{{route('home')}}"><img src="{{asset('storage/assets/imgs/logo.png')}}" alt="brand-image"></a>
                </div>
            </div>
            <!--/-/-/-/-/-/-/-/-/ 
                    End Logo
                    -/-/-/-/-/-/-/-/-/-->
            <div class="col-xs-12 visible-xs visible-control">
                <ul class="search-form mobile-form">
                    <li>
                        <form action="#">
                            <input type="text" class="search" name="search" placeholder="Search for products...">
                        </form>
                        <i class="pe-7s-search"></i>
                    </li>
                </ul>
            </div>
            <!--/-/-/-/-/-/-/-/-/ 
                   Begin Desktop Menu  
                    -/-/-/-/-/-/-/-/-/-->
            <div class="col-lg-7 col-md-7 col-sm-12  hidden-sm hidden-xs">
                <div class="primary-menu">
                    <nav>
                            {{menu('main', 'partials.menus.main')}}
                        
                    </nav>
                </div>
            </div>
            <!--/-/-/-/-/-/-/-/-/ 
                    End Primary-Menu  
                    -/-/-/-/-/-/-/-/-/-->

            <!--/-/-/-/-/-/-/-/-/ 
                    Begin Header All Shopping Selection 
                    -/-/-/-/-/-/-/-/-/-->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-7 full-col pr-0">
                <div class="main-selection">
                    <ul class="selection-list text-right">
                        <!--/-/-/-/-/-/-/-/-/ 
                                Begin Searcch Box  
                                -/-/-/-/-/-/-/-/-/-->
                        <li class="hidden-control"><i class="pe-7s-search"></i>
                            <ul class="search-form ht-dropdown">
                                <li>
                                    <form action="#">
                                        <input type="text" class="search" name="search" placeholder="Search for products...">
                                    </form>
                                    <i class="pe-7s-search"></i>
                                </li>
                            </ul>
                        </li>
                        <!--/-/-/-/-/-/-/-/-/ 
                                End Search Box 
                                -/-/-/-/-/-/-/-/-/-->
                        @if (Cart::count() > 0)

                        <li>
                            <a href="{{route('cart')}}">

                                <i class="pe-7s-shopbag"></i>
                                @if(Cart::instance('default')->count() > 0)

                                <span>{{ Cart::instance('default')->count() }}</span>
                                @endif
                                
                            </a>

                            <ul class="ht-dropdown main-cart-box">
                                <li>
                                    <!--/-/-/-/-/-/-/-/-/ 
                                            Begin Cart Box 
                                            -/-/-/-/-/-/-/-/-/-->
                                    @foreach (Cart::content() as $item)
                                    <div class="single-cart-box">
                                        <div class="cart-img">
                                            <a href="{{ route('single-product', $item->model->slug) }}"><img src="{{asset('storage/'.$item->model->image)}}" alt="cart-image"></a>
                                        </div>
                                        <div class="cart-content">
                                            <h6><a href="{{ route('single-product', $item->model->slug) }}">{{$item->model->name}}</a></h6>
                                            <span>{{$item->model->price}}</span>
                                        </div>
                                        <i class="pe-7s-close"></i>
                                    </div>
                                    <!--/-/-/-/-/-/-/-/-/ 
                                            End Cart Box 
                                            -/-/-/-/-/-/-/-/-/-->
                                    @endforeach
                                    <div class="cart-footer fix">
                                        <h5>total :<span class="f-right">{{convertToUSD($newTotal)}}</span></h5>
                                        <div class="cart-actions">
                                            <a class="checkout" href="{{route('checkout')}}">Checkout</a>
                                        </div>
                                    </div>
                                    <!--/-/-/-/-/-/-/-/-/ 
                                             End Cart Footer Inner
                                            -/-/-/-/-/-/-/-/-/-->
                                </li>
                            </ul>
                        </li>
                        @endif
                        <!--/-/-/-/-/-/-/-/-/ 
                               Begin  Dropdown Currency Selection 
                                -/-/-/-/-/-/-/-/-/-->
                        <li><i class="pe-7s-config"></i>
                            <ul class="ht-dropdown currrency">
                                <li>
                                    <h3>currency</h3>
                                    <ul class="mb-15">
                                        <li>€ euro</li>
                                        <li>£ pound sterling</li>
                                        <li>$ us dollar</li>
                                    </ul>
                                </li>
                                <li>
                                    <h3>language</h3>
                                    <ul class="mb-15">
                                        <li><img src="img/menu/2.png" alt="menu-icon">english</li>
                                        <li><img src="img/menu/1.png" alt="menu-icon">french</li>
                                    </ul>
                                </li>
                                <li>
                                    <h3>my account</h3>
                                    <ul>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="account.html">My Account</a></li>
                                        <li><a href="log-in.html">log in</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!--/-/-/-/-/-/-/-/-/ 
                                End Dropdown Currency Selection 
                                -/-/-/-/-/-/-/-/-/-->
                    </ul>
                </div>
            </div>
            <!--/-/-/-/-/-/-/-/-/ 
                    End Header All Shopping Selection 
                    -/-/-/-/-/-/-/-/-/-->

            <!--/-/-/-/-/-/-/-/-/ 
                   Begin Mobile Menu  
                    -/-/-/-/-/-/-/-/-/-->
            <div class="mobile-menu visible-sm visible-xs">
                <nav>
                    <ul>
                        <li><a href="index.html">home</a>

                        </li>
                        <li><a href="#">LED Tubes<i class="pe-7s-angle-down"></i></a>
                            <!--/-/-/-/-/-/-/-/-/ 
                                       Begin Mega Menu 
                                       -/-/-/-/-/-/-/-/-/-->
                            <ul class="ht-dropdown mega-menu">
                                <!--/-/-/-/-/-/-/-/-/ 
                                           Begin Sub Menu 
                                           -/-/-/-/-/-/-/-/-/-->
                                <li>
                                    <h3>RGB Lights</h3>
                                    <ul>
                                        <li><a href="categorie-page.html">Polyphasic Colored Tubes</a></li>

                                    </ul>
                                </li>
                                <!--/-/-/-/-/-/-/-/-/ 
                                           Begin Single Mega Sub Menu  
                                           -/-/-/-/-/-/-/-/-/-->

                                <!--/-/-/-/-/-/-/-/-/ 
                                          Begin Single Mega Sub Menu 
                                           -/-/-/-/-/-/-/-/-/-->
                                <li>
                                    <h3>Smart Lights</h3>
                                    <ul>
                                        <li><a href="categorie-page.html">Saber Light</a></li>
                                        <li><a href="categorie-page.html">FLEX LED</a></li>
                                    </ul>
                                </li>
                                <!--/-/-/-/-/-/-/-/-/ 
                                           Single Mega Sub Menu Begin 
                                           -/-/-/-/-/-/-/-/-/-->
                            </ul>
                            <!--/-/-/-/-/-/-/-/-/ 
                                       Mega Menu End 
                                       -/-/-/-/-/-/-/-/-/-->
                        </li>

                        <li><a href="about-us.html">about us</a></li>
                        <li><a href="about-us.html">about us</a></li>
                    </ul>
                </nav>
            </div>
            <!--/-/-/-/-/-/-/-/-/
                     End Mobile Menu  
                     -/-/-/-/-/-/-/-/-/-->
        </div>
    </div>
</header>
<!--/-/-/-/-/-/-/-/-/
         End Header 
        -/-/-/-/-/-/-/-/-/-->