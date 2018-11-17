<!--/-/-/-/-/-/-/-/-/
    Begin Header  
-/-/-/-/-/-/-/-/-/-->

<header>
    <div class="container-fluid header-top-area">
        <div class="row">
            <!--/-/-/-/-/-/-/-/-/
                        Begin Logo 
                    -/-/-/-/-/-/-/-/-/-->

            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-5 full-col pl-0">
                <div class="logo">
                    <a href="{{route('front-page')}}"><img src="{{asset('storage/assets/imgs/logo.png')}}" alt="brand-image"></a>
                </div>
            </div>
            <!--/-/-/-/-/-/-/-/-/ 
                    End Logo
                    -/-/-/-/-/-/-/-/-/-->
            
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
                                        <form class="product-remove" action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                @csrf {{ method_field('DELETE') }}

                                                <button type="submit" style="display:inline;"><i class="pe-7s-close"></i></button>
                                            </form>
                                        
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
                        <li><i class="pe-7s-user"></i>
                            <ul class="ht-dropdown currrency">
                                <li>
                                    <h3>My Account</h3>
                                    <ul>
                                        <li><a href="{{route('dashboard')}}">My Account</a></li>
                                        @guest
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li><a href="{{route('register')}}">Sign Up</a></li>

                                        @else
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         Logout
                                     </a>
                                        </li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        @endguest
                                        
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
                    
                            {{menu('mobile-main', 'partials.menus.mobile-main')}}
                    
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