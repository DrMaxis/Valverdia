
<!--/-/-/-/-/-/-/-/-/
    Begin Page Products  
-/-/-/-/-/-/-/-/-/-/-/-->
<div class="col-md-9 col-md-push-3">
        <!-- Sidebar Right Top Content Start -->
        <div class="sidebar-desc-content">
            <p>Example of category description text</p><hr>
        </div>
        <!-- Sidebar Right Top Content Start -->
        <!-- Best Seller Product Start -->
        <div class="best-seller">
            <div class="row mt-20">
                <div class="col-md-3 col-sm-4 pull-left">
                    <div class="grid-list-view">
                        <ul class="list-inline">
                            <li class="active"><a data-toggle="tab" href="#grid-view" aria-expanded="true"><i class="zmdi zmdi-view-dashboard"></i><i class="pe-7s-keypad"></i></a></li>
                            <li class=""><a data-toggle="tab" href="#list-view" aria-expanded="false"><i class="zmdi zmdi-view-list"></i><i class="pe-7s-menu"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-content categorie-list ">
                        <div id="list-view" class="tab-pane fade">
                            <div class="row">
                                    @if(count($products) > 0)
    
    
                                    @foreach($products as $product)
                                <!-- Main Single Product Start -->
                                <div class="main-single-product fix">
                                    <div class="col-sm-4">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="{{route('single-product', $product->slug)}}">
                                                    <img class="primary-img" src="#" alt="single-product">
                                                </a>
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                                </div>
                                            </div>
                                            <!-- Product Image End -->
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="col-sm-8">
                                        <!-- Product Content Start -->
                                        <div class="thubnail-desc fix">
                                            <h4 class="product-header"><a href="{{route('single-product', $product->slug)}}">{{$product->name}}</a></h4>
                                            <!-- Product Price Start -->
                                            <div class="pro-price mb-15">
                                                <ul class="pro-price-list">
                                                    <li class="price">{{$product->convertToUSD()}}</li>
                                                    <li class="mtb-50">
                                                        <p>{{$product->description}}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Product Price End -->
                                            <!-- Product Button Actions Start -->
                                            <div class="product-button-actions">
                                                <button class="add-to-cart" data-toggle="tooltip" title="" data-original-title="Add to Cart">add to cart</button>
                                                <a href="wish-list.html" data-toggle="tooltip" title="" class="same-btn mr-15" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                <button data-toggle="tooltip" title="" class="same-btn" data-original-title="Compare this Product"><i class="pe-7s-repeat"></i></button>
                                            </div>
                                            <!-- Product Button Actions End -->
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                            <!-- Row End -->
                            <div class="row mt-40 mb-70">
                                <div class="col-sm-6">
                                    <ul class="blog-pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <!-- End of .blog-pagination -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="pro-list-details text-right">
                                        <p class="mr-15 mt-10">Showing 1 to 8 of 8 (1 Pages)</p>
                                    </div>
                                    <!-- Pro List Details End -->
                                </div>
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- #list-view End -->
                        <div id="grid-view" class="tab-pane fade mt-40 active in">
                            <div class="row">

                                @if(count($products) > 0)
                                @foreach($products as $product)

                                <div class="col-md-4 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{route('single-product', $product->slug)}}">
                                                <img class="primary-img" src="img/new-products/1_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/new-products/1_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view">
                                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                            </div>
                                            
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content text-center">
                                            <h4><a href="{{route('single-product', $product->slug)}}">{{$product->name}}</a></h4>
                                            <p class="price"><span>{{$product->convertToUSD()}}</span></p>
                                            <div class="action-links2">
                                                <a data-toggle="tooltip" title="" href="cart.html" data-original-title="Add to Cart">add to cart</a>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                @endforeach
                                @endif

                              
                            </div>
                            <!-- Row End -->
                           
                            
                        </div>
                        <!-- #Grid-view End -->
                    </div>
                    <!-- .Tab Content End -->
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Best Seller Product End -->
    </div>

    <!--/-/-/-/-/-/-/-/-/
    End Page Products  
-/-/-/-/-/-/-/-/-/-/-/-->