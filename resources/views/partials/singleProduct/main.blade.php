

<!--/-/-/-/-/-/-/-/-/
Begin Product ShowCase 
-/-/-/-/-/-/-/-/-/-/-/-->
<div class="main-product-thumbnail pb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <img id="big-img" src="img/new-products/1_1.jpg" data-zoom-image="img/new-products/1_1.jpg" alt="product-image" />

                    <div id="small-img" class="mt-20">

                        <div class="thumb-menu owl-carousel">
                            <a href="#" data-image="img/new-products/1_2.jpg" data-zoom-image="img/new-products/1_2.jpg">
                                <img src="img/new-products/1_2.jpg" alt="product-image" />
                            </a>

                            <a href="#" data-image="img/new-products/2_1.jpg" data-zoom-image="img/new-products/2_1.jpg">
                                <img src="img/new-products/2_1.jpg" alt="product-image" />
                            </a>

                            <a href="#" data-image="img/new-products/2_2.jpg" data-zoom-image="img/new-products/2_2.jpg">
                                <img src="img/new-products/2_2.jpg" alt="product-image" />
                            </a>

                            <a href="#" data-image="img/new-products/3_1.jpg" data-zoom-image="img/new-products/3_1.jpg">
                                <img src="img/new-products/3_1.jpg" alt="product-image" />
                            </a>

                            <a href="#" data-image="img/new-products/2_1.jpg" data-zoom-image="img/new-products/2_1.jpg">
                                <img src="img/new-products/2_1.jpg" alt="product-image" />
                            </a>
                        </div>
                    </div>
                </div>
                <!--/-/-/-/-/-/-/-/-/ 
                    Begin Mini-Description 
                -/-/-/-/-/-/-/-/-/-/-->
                <div class="col-sm-7">
                    <div class="thubnail-desc fix">
                        <h2 class="product-header">{{$product->name}}</h2>
                        <!--/-/-/-/-/-/-/-/-/ 
                            Begin Ratings 
                         -/-/-/-/-/-/-/-/-/-/-->
                        <div class="rating-summary fix mtb-20">
                            <div class="rating f-left mr-10">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="rating-feedback f-left">
                                <a href="#">0 reviews</a> /
                                <a href="#">Write a review</a>
                            </div>
                        </div>
                        <!--/-/-/-/-/-/-/-/-/ 
                            End  Ratings 
                        -/-/-/-/-/-/-/-/-/-/-->
                        <!--/-/-/-/-/-/-/-/-/
                             End Product Price  
                            -/-/-/-/-/-/-/-/-/-/-->
                        <div class="pro-price mb-20">
                           <ul class="pro-price-list">
                               <li class="price">{{$product->convertToUSD()}}</li>
                               <li class="tax">TBA</li>
                           </ul>
                        </div>
                        <!--/-/-/-/-/-/-/-/-/ 
                            End Product Price 
                        -/-/-/-/-/-/-/-/-/-/-->
                        <!--/-/-/-/-/-/-/-/-/ 
                            Begin  Product Price Description 
                        -/-/-/-/-/-/-/-/-/-/-->
                        <div class="product-price-desc">
                            <ul class="pro-desc-list">
                                <li>Product Code: <span>SAMI</span></li>
                                <li>Reward Points: <span>1000</span></li>
                                <li>Availability: <span>in Stock</span></li>
                            </ul>
                        </div>
                        <!--/-/-/-/-/-/-/-/-/ 
                            End Product Price Description 
                        -/-/-/-/-/-/-/-/-/-/-->
                        <!--/-/-/-/-/-/-/-/-/ 
                            Begin Product Box Quantity 
                        -/-/-/-/-/-/-/-/-/-/-->
                        <div class="box-quantity mtb-20">
                            <div class="quantity-item">
                                <label>Qty: </label>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="0">
                                </div>
                            </div>
                        </div>
                        <!--/-/-/-/-/-/-/-/-/ 
                            End Product Box Quantity 
                        -/-/-/-/-/-/-/-/-/-/-->
                        <!--/-/-/-/-/-/-/-/-/ 
                            Begin Product Button Actions 
                        -/-/-/-/-/-/-/-/-/-/-->
                        <div class="product-button-actions">
                           <button class="add-to-cart">add to cart</button>
                           <a href="wish-list.html" data-toggle="tooltip" title="Add to Wishlist" class="same-btn mr-15"><i class="pe-7s-like"></i></a>
                           <button data-toggle="tooltip" title="Compare this Product" class="same-btn"><i class="pe-7s-repeat"></i></button>
                        </div>
                        <!--/-/-/-/-/-/-/-/-/ 
                            End Product Button Actions 
                        -/-/-/-/-/-/-/-/-/-/-->
                        <!--/-/-/-/-/-/-/-/-/ 
                            Begin Social Media Links 
                        -/-/-/-/-/-/-/-/-/-/-->
                        <div class="social-shared">
                            <ul>
                                <li class="f-book">
                                    <a href="#">
                                        <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span>
                                        <span>like</span>
                                        <span>1</span>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                                        <span>tweet</span>
                                    </a>
                                </li>
                                <li class="pinterest">
                                    <a href="#">
                                        <span><i class="fa fa-google" aria-hidden="true"></i></span>
                                        <span>plus</span>
                                    </a>
                                </li>
                                <!--/-/-/-/-/-/-/-/-/ 
                                    Begin Social Media Link Dropdown 
                                -/-/-/-/-/-/-/-/-/-/-->
                                <li class="share-post">
                                    <a href="#">
                                        <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                                        <span>share</span>
                                    </a>
                                    <ul class="sharable-dropdown">
                                        <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i>facebook</a></li>
                                        <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i>twitter</a></li>
                                        <li><a href="#"><i class="fa fa-print" aria-hidden="true"></i>print</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>email</a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i>pinterest</a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i>google+</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i>more(99)</a></li>
                                    </ul>
                                </li>
                                <!--/-/-/-/-/-/-/-/-/ 
                                    End Social Media Link Dropdown
                                -/-/-/-/-/-/-/-/-/-/-->
                            </ul>
                        </div>
                        <!--/-/-/-/-/-/-/-/-/ 
                            End  Social Media Links
                        -/-/-/-/-/-/-/-/-/-/-->
                    </div>
                </div>
                <!--/-/-/-/-/-/-/-/-/ 
                    End Product Description
                -/-/-/-/-/-/-/-/-/-/-->
            </div>
            <!--/-/-/-/-/-/-/-/-/ 
                End Row 
            -/-/-/-/-/-/-/-/-/-/-->
        </div>
        <!--/-/-/-/-/-/-/-/-/ 
            End Container 
        -/-/-/-/-/-/-/-/-/-/-->
    </div>
    <!--/-/-/-/-/-/-/-/-/ 
        End Product ShowCase
    -/-/-/-/-/-/-/-/-/-/-->