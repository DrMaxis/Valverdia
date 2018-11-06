

<!--/-/-/-/-/-/-/-/-/
    Begin Best Seller Products 
-/-/-/-/-/-/-/-/-/-/-->
<div class="best-seller-products pb-100">
        <div class="container">
            <div class="row">
                <!--/-/-/-/-/-/-/-/-/
                    Begin Section Title 
                -/-/-/-/-/-/-/-/-/-/-->
                <div class="col-xs-12">
                    <div class="section-title text-center mb-40">
                        <h3 class="section-info">RELATED PRODUCTS</h3>
                    </div>
                </div>
                <!--/-/-/-/-/-/-/-/-/
                    End Section Title 
                -/-/-/-/-/-/-/-/-/-/-->
            </div>
            <!--/-/-/-/-/-/-/-/-/
               End Row 
            -/-/-/-/-/-/-/-/-/-/-->
            <div class="row">
                <!--/-/-/-/-/-/-/-/-/
                    Begin Best Seller Product Activation 
                -/-/-/-/-/-/-/-/-/-/-->
                <div class="best-seller new-products owl-carousel">
                    <!--/-/-/-/-/-/-/-/-/
                        Begin Single Product 
                    -/-/-/-/-/-/-/-/-/-/-->
                    @foreach($popular as $item)
                    <div class="single-product">
                        <!--/-/-/-/-/-/-/-/-/
                            Begin Product Image 
                        -/-/-/-/-/-/-/-/-/-/-->
                        <div class="pro-img">
                            <a href="#">
                                <img class="primary-img" src="{{productImage($product->image)}}" alt="single-product">
                                <img class="secondary-img" src="img/new-products/5_1.jpg" alt="single-product">
                            </a>
                            <div class="quick-view">
                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                            </div>
                            <span class="sticker-new">new</span>
                        </div>
                        <!--/-/-/-/-/-/-/-/-/
                            End Product Image 
                        -/-/-/-/-/-/-/-/-/-/-->

                        <!--/-/-/-/-/-/-/-/-/
                            Begin Product Content 
                        -/-/-/-/-/-/-/-/-/-/-->
                        <div class="pro-content text-center">
                            <h4><a href="{{route('single-product', $item->slug)}}">{{$item->name}}</a></h4>
                            <p class="price"><span>{{$item->convertToUSD()}}</span></p>
                            <div class="action-links2">
                                <a data-toggle="tooltip" title="Add to Cart" href="cart.html">add to cart</a>
                            </div>
                        </div>
                        <!--/-/-/-/-/-/-/-/-/
                            End Product Content 
                        -/-/-/-/-/-/-/-/-/-/-->
                    </div>
                    <!--/-/-/-/-/-/-/-/-/
                        End Single Product 
                    -/-/-/-/-/-/-/-/-/-/-->
                    @endforeach
                </div>
            </div>
            <!--/-/-/-/-/-/-/-/-/
               End  Row 
            -/-/-/-/-/-/-/-/-/-/-->
        </div>
        <!--/-/-/-/-/-/-/-/-/
            End Container 
        -/-/-/-/-/-/-/-/-/-/-->
    </div>
    <!--/-/-/-/-/-/-/-/-/
        End Best Seller Products 
    -/-/-/-/-/-/-/-/-/-/-->