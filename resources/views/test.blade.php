<!DOCTYPE html>
<html lang="en" class="app">
<head>  
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
        <meta name="description" content="JJ International - Delivering Quality and Style around the globe." />
        <meta name="keywords" content="International Shipping, Wholesale, Drop Shipping, Furniture, Patio, Modern, Free Shipping" />
        
        
    
    <!--/-/-/-/-/-/-/-/-/
    
        START STYLE DEPENDANTS 
        
    -/-/-/-/-/-/-/-/-/-->
    
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono|Space+Mono|VT323" rel="stylesheet">
    
    <!--/-/-/-/-/-/-/-/-/ 
        Favicon 
    -/-/-/-/-/-/-/-/-/-->
    <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.png">
    <!--/-/-/-/-/-/-/-/-/ 
        Mobile Menu 
    -/-/-/-/-/-/-/-/-/-->
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <!--/-/-/-/-/-/-/-/-/
         Animations 
    -/-/-/-/-/-/-/-/-/-->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!--/-/-/-/-/-/-/-/-/
         Slider css 
    -/-/-/-/-/-/-/-/-/-->
    <link rel="stylesheet" href="{{asset('css/nivo-slider.css')}}">
    <!--/-/-/-/-/-/-/-/-/
         Owl Carousel 
    -/-/-/-/-/-/-/-/-/-->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!--/-/-/-/-/-/-/-/-/
         Price Slider -
    -/-/-/-/-/-/-/-/-/-->
    <link rel="stylesheet" href="{{asset('css/jqui.css')}}">
    <!--/-/-/-/-/-/-/-/-/
         FA 
    -/-/-/-/-/-/-/-/-/-->
    <link rel="stylesheet" href="{{asset('css/fa.css')}}">
    <!--/-/-/-/-/-/-/-/-/
         Icon Pack 
    -/-/-/-/-/-/-/-/-/-->
    <link rel="stylesheet" href="{{asset('css/p7icon.css')}}">
    <!--/-/-/-/-/-/-/-/-/
         BootStrap  
    -/-/-/-/-/-/-/-/-/-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!--/-/-/-/-/-/-/-/-/ 
        Base-UI
    -/-/-/-/-/-/-/-/-/-->
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <!--/-/-/-/-/-/-/-/-/ 
        Default-UI  
    -/-/-/-/-/-/-/-/-/-->
    <link rel="stylesheet" href="{{asset('css/default.css')}}">
    <!--/-/-/-/-/-/-/-/-/ 
        Main
    -/-/-/-/-/-/-/-/-/-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!--/-/-/-/-/-/-/-/-/
         Responsive 
    -/-/-/-/-/-/-/-/-/-->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    
    
    <script src="https://js.stripe.com/v3/"></script>
    
    
    <svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <filter id="glitch">
          <feColorMatrix in="SourceGraphic" type="matrix" values="1   0   0   0   0
                    0   0   0   0   0
                    0   0   0   0   0
                    0   0   0   1   0 " result="red"></feColorMatrix>
          <feColorMatrix in="SourceGraphic" type="matrix" values="0   0   0   0   0
                    0   1   0   0   0
                    0   0   0   0   0
                    0   0   0   1   0 " result="green"></feColorMatrix>
          <feColorMatrix in="SourceGraphic" type="matrix" values="0   0   0   0   0
                    0   0   0   0   0
                    0   0   1   0   0
                    0   0   0   1   0 " result="blue"></feColorMatrix>
          <feOffset in="red" result="red" dx="0.699957">
            <animate attributeName="dx" attributeType="XML" values="0; -3; 1; 0; 2; -1; 0;" dur="2s" repeatCount="indefinite"></animate>
          </feOffset>
          <feOffset in="green" result="green" dx="1.28007">
            <animate attributeName="dx" attributeType="XML" values="0; 2; -1; 1; 0; 1; 0;" dur="2.5s" repeatCount="indefinite"></animate>
          </feOffset>
          <feOffset in="blue" result="blue" dx="0.199742">
            <animate attributeName="dx" attributeType="XML" values="0; 1; 2; -4; 2; 6; 0;" dur="2s" repeatCount="indefinite"></animate>
          </feOffset>
          
          <feBlend in="red" in2="green" mode="screen" result="blend"></feBlend>
          <feBlend in="blend" in2="blue" mode="screen" result="blend"></feBlend>
        <feGaussianBlur in="blend" stdDeviation="1.57331">
          <animate attributeName="stdDeviation" attributeType="XML" values="0; 2; 1; 0.3; 2; 1; 0.5 ;3; 0" dur="5s" repeatCount="indefinite"></animate>
        </feGaussianBlur>
        </filter>
      </svg>
    
      <style>

          
          @-webkit-keyframes fade {
      0% {
        opacity: 1;
      }
    
      94% {
        opacity: 1;
      }
    
      95% {
        opacity: 0;
      }
    
      96% {
        opacity: 1;
      }
    
      97% {
        opacity: 0;
      }
    
      99% {
        opacity: 1;
      }
    
      100% {
        opacity: 0;
      }
    }
    
    
          </style>
    
     <!--

    slider
  -->

  <style>
        .slider {
      margin: 0 auto;
      max-width: 940px;
    }
    
    .slide_viewer {
      height: 362px;
      overflow: hidden;
      position: relative;
    }
    
    .slide_group {
      height: 100%;
      position: relative;
      width: 100%;
    }
    
    .slide {
      display: none;
      height: 100%;
      position: absolute;
      width: 100%;
    }
    
    .slide:first-child {
      display: block;
    }
    
    .slide:nth-of-type(1) {
      background: #D7A151;
    }
    
    .slide:nth-of-type(2) {
      background: #F4E4CD;
    }
    
    .slide:nth-of-type(3) {
      background: #C75534;
    }
    
    .slide:nth-of-type(4) {
      background: #D1D1D4;
    }
    
    .slide_buttons {
      left: 0;
      position: absolute;
      right: 0;
      text-align: center;
    }
    
    a.slide_btn {
      color: #474544;
      font-size: 42px;
      margin: 0 0.175em;
      -webkit-transition: all 0.4s ease-in-out;
      -moz-transition: all 0.4s ease-in-out;
      -ms-transition: all 0.4s ease-in-out;
      -o-transition: all 0.4s ease-in-out;
      transition: all 0.4s ease-in-out;
    }
    
    .slide_btn.active, .slide_btn:hover {
      color: #428CC6;
      cursor: pointer;
    }
    
    .directional_nav {
      height: 340px;
      margin: 0 auto;
      max-width: 940px;
      position: relative;
      top: -340px;
    }
    
    .previous_btn {
      bottom: 0;
      left: 100px;
      margin: auto;
      position: absolute;
      top: 0;
    }
    
    .next_btn {
      bottom: 0;
      margin: auto;
      position: absolute;
      right: 100px;
      top: 0;
    }
    
    .previous_btn, .next_btn {
      cursor: pointer;
      height: 65px;
      opacity: 0.5;
      -webkit-transition: opacity 0.4s ease-in-out;
      -moz-transition: opacity 0.4s ease-in-out;
      -ms-transition: opacity 0.4s ease-in-out;
      -o-transition: opacity 0.4s ease-in-out;
      transition: opacity 0.4s ease-in-out;
      width: 65px;
    }
    
    .previous_btn:hover, .next_btn:hover {
      opacity: 1;
    }
    
    @media only screen and (max-width: 767px) {
      .previous_btn {
        left: 50px;
      }
      .next_btn {
        right: 50px;
      }
    }
    </style>
    
    <!--/-/-/-/-/-/-/-/-/ 
    
        END STYLE DEPENDANTS 
        
    -/-/-/-/-/-/-/-/-/-->
            
    
    
    
    
    
    
    
        
    <title>{{config('app.name', 'Valverdia')}}</title>
    

 

</head>
<body class="">
  <section class="vbox">
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
                            <ul class="primary-menu-list text-center">
                                <li><a href="{{route('home')}}">Home</a>
    
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
                                                <li><a href="{{route('products')}}">Polyphasic Colored Tubes</a></li>
    
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
                                                <li><a href="{{route('products')}}">Saber Light</a></li>
                                                <li><a href="{{route('products')}}">FLEX LED</a></li>
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
                            </ul>
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
                            
    
                            <li>
                                <a href="{{route('cart')}}">
    
                                    <i class="pe-7s-shopbag"></i>
                                    
    
                                    <span>shopbag</span>
                                    
                                    
                                </a>
    
                                <ul class="ht-dropdown main-cart-box">
                                    <li>
                                        <!--/-/-/-/-/-/-/-/-/ 
                                                Begin Cart Box 
                                                -/-/-/-/-/-/-/-/-/-->
                                      
                                        <div class="single-cart-box">
                                            <div class="cart-img">
                                                <a href="shopbag"><img src="img/menu/1.jpg" alt="cart-image"></a>
                                            </div>
                                            <div class="cart-content">
                                                <h6><a href="shopbag">shopbag</a></h6>
                                                <span>shopbag</span>
                                            </div>
                                            <i class="pe-7s-close"></i>
                                        </div>
                                        <!--/-/-/-/-/-/-/-/-/ 
                                                End Cart Box 
                                                -/-/-/-/-/-/-/-/-/-->
                                        
                                        <div class="cart-footer fix">
                                            <h5>total :<span class="f-right">$698.00</span></h5>
                                            <div class="cart-actions">
                                                <a class="checkout" href="checkout.html">Checkout</a>
                                            </div>
                                        </div>
                                        <!--/-/-/-/-/-/-/-/-/ 
                                                 End Cart Footer Inner
                                                -/-/-/-/-/-/-/-/-/-->
                                    </li>
                                </ul>
                            </li>
                           
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
    <section>
      <section class="hbox stretch">
  
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder-lg w-f-md" id="bjax-target">
                  <a href="#" class="pull-right text-muted m-t-lg" data-toggle="class:fa-spin" ><i class="icon-refresh i-lg  inline" id="refresh"></i></a>
                  <h2 class="font-thin m-b">Discover <span class="musicbar animate inline m-l-sm" style="width:20px;height:20px">
                    <span class="bar1 a1 bg-primary lter"></span>
                    <span class="bar2 a2 bg-info lt"></span>
                    <span class="bar3 a3 bg-success"></span>
                    <span class="bar4 a4 bg-warning dk"></span>
                    <span class="bar5 a5 bg-danger dker"></span>
                  </span></h2>
                  <div class="row row-sm">
                   
<!--/-/-/-/-/-/-/-/-/
    Begin Hero Slider
-/-/-/-/-/-/-/-/-/-/-->





<div class="slider-area ">
    <!--/-/-/-/-/-/-/-/-/ 
           Begin  Main Slider Area 
            -/-/-/-/-/-/-/-/-/-->
    <div class="slider-wrapper theme-default" style="max-height:500px;" >


    
 <!--  {{--       <div class="container">
            <div class="mainContainer">

                <div class="container2">
<img class="showcase-img" src="{{asset('storage/assets/imgs/colorswitcher/rgb-4.png')}}">
                </div>
            </div>

            <div class="container pb-100">
                
                <!-- Main Slider Area Start --/>
                <div class="vidSelection">


                    <div class="video-thumbs">

                        <div class="vidImage red">
                            

                        </div>
                        <div class="vidImage blue">
                            

                        </div>
                        <div class="vidImage green">
                            

                        </div>
                        <div class="vidImage orange">
                            

                        </div>
                        <div class="vidImage purple">
                            

                        </div>
                        <div class="vidImage rgb">
                            

                        </div>
                        <div class="vidImage rgb">
                            

                        </div>
                        <div class="vidImage rgb">
                            

                        </div>
                        <div class="vidImage rgb">
                            

                        </div>
                        <div class="vidImage rgb">
                            

                        </div>

                    </div>
                </div>
            </div>

        </div> --}}
 -->



        <div class="container">
                <div class="slider">
                <div class="slide_viewer">
                  <div class="slide_group" style="left: -2.56999%;">
                    <div class="slide" style="display: block; left: 0px;">
                    </div>
                    <div class="slide" style="display: none; left: 0px;">
                    </div>
                    <div class="slide" style="display: none; left: 0px;">
                    </div>
                    <div class="slide" style="display: none; left: 0px;">
                    </div>
                  </div>
                </div>
              </div><!-- End // .slider -->
              
              <div class="slide_buttons">
              <a class="slide_btn">•</a><a class="slide_btn">•</a><a class="slide_btn">•</a><a class="slide_btn">•</a></div>
              
              <div class="directional_nav">
                <div class="previous_btn" title="Previous">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                    <g>
                      <g>
                        <path fill="#474544" d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118
                          c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z"></path>
                        <path fill="#474544" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z"></path>
                      </g>
                    </g>
                  </svg>
                </div>
                <div class="next_btn" title="Next">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                    <g>
                      <g>
                        <path fill="#474544" d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288	c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z"></path>
                        <path fill="#474544" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z"></path>
                      </g>
                    </g>
                  </svg>
                </div>
              </div><!-- End // .directional_nav -->
                  
                  
                  </div>


    </div>
    <!--/-/-/-/-/-/-/-/-/ 
            End Main Slider Area 
            -/-/-/-/-/-/-/-/-/-->

            

</div>
<!--/-/-/-/-/-/-/-/-/
    End Hero Slider
-/-/-/-/-/-/-/-/-/-/-->



<!-- New Products Banner Start -->
<div class="new-products-banner pb-100">
    <div class="container">
        <div class="row">
            <!-- Single Banner Start -->
            <div class="col-sm-4 unired">
                <div class="single-banner zoom mb-30" style="background:red; width:370px; height:400px" >
                    <img src="#"  alt="product-banner">
                    <div class="banner-desc">
                        <a href="categorie-page.html">Decorative Accessories</a>
                        <p>25 products</p>
                    </div>
                </div>
            </div>
            <!-- Single Banner End -->
            <!-- Single Banner Start -->
            <div class="col-sm-8 uniblue">
                <div class="single-banner zoom mb-30" style="background:blue; width:770px; height:400px">
                    <img src="#" alt="product-banner">
                    <div class="banner-desc">
                        <a href="categorie-page.html">Chairs & Recliners</a>
                        <p>25 products</p>
                    </div>
                </div>
            </div>
            <!-- Single Banner End -->
            <!-- Single Banner Start -->
            <div class="col-sm-8 unigreen">
                <div class="single-banner zoom" style="background:green; width:770px; height:400px">
                    <img src="#" alt="product-banner">
                    <div class="banner-desc">
                        <a href="categorie-page.html">Sofas & Loveseats</a>
                        <p>25 products</p>
                    </div>
                </div>
            </div>
            <!-- Single Banner End -->
            <!-- Single Banner Start -->
            <div class="col-sm-4 unigold">
                <div class="single-banner zoom"style="background:gold; width:370px; height:400px">
                    <img src="#"  alt="product-banner">
                    <div class="banner-desc">
                        <a href="categorie-page.html">Window Treatments</a>
                        <p>25 products</p>
                    </div>
                </div>
            </div>
            <!-- Single Banner End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- New Products Banner End -->




<!--/-/-/-/-/-/-/-/-/
    Begin New & Featured Products
-/-/-/-/-/-/-/-/-/-->
<div class="new-products-banner pb-100">
        <div class="container">
            <div class="row mb-100">
                <!--/-/-/-/-/-/-/-/-/ 
                    Begin Single Banner  
                -/-/-/-/-/-/-/-/-/-->
                <div class="col-sm-6">
                    <div class="single-banner" style="background:gold; width:570px; height:611px">
                        <a href="#"><img src="#"  alt="product-banner"></a>
                    </div>
                </div>
                <!--/-/-/-/-/-/-/-/-/ 
                    End Single Banner  
                -/-/-/-/-/-/-/-/-/-->

                <!--/-/-/-/-/-/-/-/-/ 
                    Begin Single Banner  
                -/-/-/-/-/-/-/-/-/-->
                <div class="col-sm-6">
                    <div class="single-banner">
                        <div class="banner-description">
                            <h3>Chandeliers & Pendants</h3>
                            <h5>Extra 10% off Select Lingting</h5>
                            <a href="categorie-page.html">shop now</a>
                        </div>
                    </div>
                </div>
                <!--/-/-/-/-/-/-/-/-/ 
                    End Single Banner 
                -/-/-/-/-/-/-/-/-/-->   
            </div>
            <!--/-/-/-/-/-/-/-/-/ 
                End Row 
            -/-/-/-/-/-/-/-/-/-->
            <div class="row">
                <!--/-/-/-/-/-/-/-/-/ 
                    Begin Single Banner 
                -/-/-/-/-/-/-/-/-/-->
                <div class="col-sm-6">
                    <div class="single-banner">
                        <div class="banner-description">
                            <h3>Home Decor</h3>
                            <h5>Sale 30% Off</h5>
                            <a href="categorie-page.html">shop now</a>
                        </div>
                    </div>
                </div>
                <!--/-/-/-/-/-/-/-/-/ 
                    End Single Banner 
                -/-/-/-/-/-/-/-/-/-->

                <!--/-/-/-/-/-/-/-/-/ 
                    Begin Single Banner 
                -/-/-/-/-/-/-/-/-/-->
                <div class="col-sm-6">
                    <div class="single-banner" style="background:gold; width:570px; height:611px" >
                        <a href="#"><img src="#" alt="product-banner"></a>
                    </div>
                </div>
                <!--/-/-/-/-/-/-/-/-/ 
                    End Single Banner 
                -/-/-/-/-/-/-/-/-/-->
            </div>
            <!--/-/-/-/-/-/-/-/-/ 
                End Row 
            -/-/-/-/-/-/-/-/-/-->

            <div class="row mb-100">
                <!--/-/-/-/-/-/-/-/-/ 
                    Begin Single Banner  
                -/-/-/-/-/-/-/-/-/-->
                <div class="col-sm-6">
                    <div class="single-banner" style="background:gold; width:570px; height:611px">
                        <a href="#"><img src="#" alt="product-banner"></a>
                    </div>
                </div>
                <!--/-/-/-/-/-/-/-/-/ 
                    End Single Banner  
                -/-/-/-/-/-/-/-/-/-->

                <!--/-/-/-/-/-/-/-/-/ 
                    Begin Single Banner  
                -/-/-/-/-/-/-/-/-/-->
                <div class="col-sm-6">
                    <div class="single-banner">
                        <div class="banner-description">
                            <h3>Chandeliers & Pendants</h3>
                            <h5>Extra 10% off Select Lingting</h5>
                            <a href="categorie-page.html">shop now</a>
                        </div>
                    </div>
                </div>
                <!--/-/-/-/-/-/-/-/-/ 
                    End Single Banner 
                -/-/-/-/-/-/-/-/-/-->   
            </div>
            <!--/-/-/-/-/-/-/-/-/ 
                End Row 
            -/-/-/-/-/-/-/-/-/-->
        </div>
        <!--/-/-/-/-/-/-/-/-/ 
            End Container 
        -/-/-/-/-/-/-/-/-/-->
    </div>
    <!--/-/-/-/-/-/-/-/-/ 
        End New Products Banner 
    -/-/-/-/-/-/-/-/-/-->
                    </div>
                    <!--/-/-/-/-/-/-/-/-/
    Begin Footer  
-/-/-/-/-/-/-/-/-/-->
  <footer>   
        <!--/-/-/-/-/-/-/-/-/ 
            Start Footer Middle 
        -/-/-/-/-/-/-/-/-/-->
         <div class="footer-middle">
             <div class="container">
                 <div class="container-footer ptb-100">
                     <div class="row">
                         <!--/-/-/-/-/-/-/-/-/ 
                            Start Single Footer 
                        -/-/-/-/-/-/-/-/-/-->
                         <div class="single-footer col-md-3 col-sm-6">
                             <div class="footer-logo">
                                 <a href="#"><img class="img" src="img/logo/logo.png" alt="logo-img"></a>
                             </div>
                             <div class="footer-content">
                                 <p>We are a team of designers and developers that create high quality HTML, Magento, Prestashop, Opencart.</p>
                                 <h5 class="contact-info mtb-10">contact info:</h5>
                                 <ul class="footer-list first-content">
                                     <li><i class="pe-7s-map-marker"></i>Address will be here</li>
                                     <li><i class="pe-7s-mail"></i>your-email@example.com</li>
                                     <li><i class="pe-7s-call"></i>+00 123 45678</li>
                                 </ul>
                             </div>
                         </div>
                         <!--/-/-/-/-/-/-/-/-/ 
                            Start Single Footer 
                        -/-/-/-/-/-/-/-/-/-->

                         <!--/-/-/-/-/-/-/-/-/ 
                            Start Single Footer 
                        -/-/-/-/-/-/-/-/-/-->
                         <div class="single-footer col-md-3 col-sm-6">
                             <h4 class="footer-title">information</h4>
                             <div class="footer-content">
                                 <ul class="footer-list">
                                     <li><a href="#">about us</a></li>
                                     <li><a href="#">delivery information</a></li>
                                     <li><a href="#">privacy policy</a></li>
                                     <li><a href="#">terms & conditions</a></li>
                                     <li><a href="#">warranty</a></li>
                                     <li><a href="#">FAQ</a></li>
                                 </ul>
                             </div>
                         </div>
                         <!--/-/-/-/-/-/-/-/-/ 
                            Start Single Footer 
                         -/-/-/-/-/-/-/-/-/-->

                         <!--/-/-/-/-/-/-/-/-/ 
                            Start Single Footer 
                        -/-/-/-/-/-/-/-/-/-->
                         <div class="single-footer col-md-3 col-sm-6">
                             <h4 class="footer-title">extras</h4>
                             <div class="footer-content">
                                 <ul class="footer-list">
                                     <li><a href="#">brands</a></li>
                                     <li><a href="#">gift certificates</a></li>
                                     <li><a href="#">Affiliate</a></li>
                                     <li><a href="#">Specials</a></li>
                                     <li><a href="#">contact us</a></li>
                                     <li><a href="#">returns</a></li>
                                     <li><a href="#">Map</a></li>
                                 </ul>
                             </div>
                         </div>
                         <!--/-/-/-/-/-/-/-/-/ 
                            Start Single Footer 
                        -/-/-/-/-/-/-/-/-/-->

                         <!--/-/-/-/-/-/-/-/-/ 
                            Start Single Footer 
                        -/-/-/-/-/-/-/-/-/-->
                         <div class="single-footer col-md-3 col-sm-6">
                             <h4 class="footer-title">NEWSLETTER</h4>
                             <div class="footer-content subscribe-form">
                                 <p class="mb-25">Subscribe to our newsletter and get 10% off your first purchase</p>
                                 <div class="subscribe-box">
                                     <form action="#">
                                         <input type="text" name="subscribe_email" id="subscribe_email" placeholder="Enter you email address here...">
                                         <input type="submit" class="submit" value="subscribe">
                                     </form>
                                 </div>
                             </div>
                         </div>
                         <!--/-/-/-/-/-/-/-/-/ 
                            Start Single Footer 
                        -/-/-/-/-/-/-/-/-/-->
                     </div>
                     <!--/-/-/-/-/-/-/-/-/ 
                        End Row 
                    -/-/-/-/-/-/-/-/-/-->
                 </div>
                 <!--/-/-/-/-/-/-/-/-/ 
                    End Container Footer 
                -/-/-/-/-/-/-/-/-/-->
             </div>
             <!--/-/-/-/-/-/-/-/-/ 
                End Container 
            -/-/-/-/-/-/-/-/-/-->
         </div>
         <!--/-/-/-/-/-/-/-/-/ 
            End Footer Middle 
        -/-/-/-/-/-/-/-/-/-->


         <!--/-/-/-/-/-/-/-/-/ 
            Start Footer Bottom 
        -/-/-/-/-/-/-/-/-/-->
         <div class="footer-bottom">
             <div class="container">
                 <div class="container-footer ptb-30">
                     <div class="row">
                         <div class="col-sm-7">
                             <p class="text-left copyright-text">Copyright ©  <a target="_blank" href="#">JJ INTL</a> All Rights Reserved.</p>
                         </div>
                         <div class="col-sm-5">
                             <!--/-/-/-/-/-/-/-/-/ 
                                Start Footer Social List 
                            -/-/-/-/-/-/-/-/-/-->
                             <div class="socila-footer">
                                 <ul class="social-footer-list list-inline text-right">
                                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                     <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                     <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                     <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                     <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                 </ul>
                             </div>
                             <!--/-/-/-/-/-/-/-/-/ 
                                End Footer Social List 
                            -/-/-/-/-/-/-/-/-/-->
                         </div>
                     </div>
                     <!--/-/-/-/-/-/-/-/-/ 
                        End Row 
                    -/-/-/-/-/-/-/-/-/-->
                 </div>
                 <!--/-/-/-/-/-/-/-/-/ 
                    End Container Footer 
                -/-/-/-/-/-/-/-/-/-->
             </div>
              <!--/-/-/-/-/-/-/-/-/ 
                End Container 
            -/-/-/-/-/-/-/-/-/-->
         </div>
         <!--/-/-/-/-/-/-/-/-/ 
            End Footer Bottom 
        -/-/-/-/-/-/-/-/-/-->
     </footer>
     <!--/-/-/-/-/-/-/-/-/ 
        End Footer 
    -/-/-/-/-/-/-/-/-/-->
    
                </section>

              </section>
            </section>
            <!-- side content -->
            <aside class="aside-md bg-light dk" id="sidebar">
              <section class="vbox animated fadeInRight">
                <section class="w-f-md scrollable hover">

                  <h4 class="font-thin m-l-md m-t">Connected</h4>
                  <div class="text-center">
		

		<button type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal2">
			Right Sidebar Modal
		</button>
	</div>

	<!-- Modal -->
	<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel2">Right Sidebar</h4>
				</div>

				<div class="modal-body">
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</p>
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
    </div><!-- modal -->
    
    <!--/-/-/-/-/-/-/-/-/ 
                    Begin Header All Shopping Selection 
                    -/-/-/-/-/-/-/-/-/-->
                    
                    <div class="row">
                        <ul class="main-cart-box">
                            @foreach (Cart::content() as $item) 
                            <li>

                          
                                            
                                           
                                                <!--/-/-/-/-/-/-/-/-/ 
                                                        Begin Cart Box 
                                                        -/-/-/-/-/-/-/-/-/-->
                                                
                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href="{{ route('single-product', $item->model->slug) }}"><img src="img/menu/1.jpg" alt="cart-image"></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="{{ route('single-product', $item->model->slug) }}">{{$item->model->name}}</a></h6>
                                                        <span>{{$item->model->price}}</span>
                                                    </div>
                                                    
                                                </div>
                                                <!--/-/-/-/-/-/-/-/-/ 
                                                        End Cart Box 
                                                        -/-/-/-/-/-/-/-/-/-->

                                            </li>
                                            @endforeach
                                        </ul>  
                        </div>

                        <!--/-/-/-/-/-/-/-/-/ 
                                End Header All Shopping Selection 
                                -/-/-/-/-/-/-/-/-/-->
	
	
                </section>
                <footer class="footer footer-md bg-black">
                        <div class="cart-footer fix">
                                <h5>Total :<strong><span class="amount">{{Cart::total()}}</span></strong></h5>
                                <div class="cart-actions">
                                    <a class="checkout" href="checkout.html">Checkout</a>
                                </div>
                            </div>
                            <!--/-/-/-/-/-/-/-/-/ 
                                     End Cart Footer 
                                    -/-/-/-/-/-/-/-/-/-->
                </footer>
              </section>              
            </aside>
            <!-- / side content -->
          </section>
  
        </section>
      </section>
    </section>    
  </section>
 
  
 
 
    
 <!--/-/-/-/-/-/-/-/-/
    Begin JAVASCRIPT  
-/-/-/-/-/-/-/-/-/-->


<!--/-/-/-/-/-/-/-/-/ 
    jquery 1.12.4 
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/vendor/jquery.js')}}"></script>



<!--/-/-/-/-/-/-/-/-/ 
    Mobile Menu  
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Scroll to Top
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/jquery.scrollUp.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Owl Carousel
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    W0W 
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Price Slider
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/jquery-ui.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Elevated Zoom
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Slider
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/jquery.nivo.slider.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    BootStrap
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Extendable Plugins
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Main
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<!--/-/-/-/-/-/-/-/-/ 
    Wave
-/-/-/-/-/-/-/-/-/-->
<script type="text/javascript" src="{{asset('js/wave.js')}}"></script>

<script>
$(document).ready(function() {




    var imageWidth = 50;

$(".video-thumbs").width($(".vidImage").length*imageWidth);
  
});


</script>
</body>
</html>