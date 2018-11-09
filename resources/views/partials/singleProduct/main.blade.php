<!--/-/-/-/-/-/-/-/-/
Begin Product ShowCase 
-/-/-/-/-/-/-/-/-/-/-/-->
<div class="main-product-thumbnail pb-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
            <div class="main-img">
                <img  src="{{productImage($product->image)}}"  class="active" alt="product-image" id="primaryImg" />
            </div>
                <div class="product-imgs mt-20">


                        <div class="product-finger chosen">

                                <img src="{{productImage($product->image)}}" alt="product-image" />
                            </div>
                    @if($product->images) @foreach(json_decode($product->images, true) as $image)
                    <div class="product-finger">

                        <img src="{{productImage($image)}}" alt="product-image" />
                    </div>
                     @endforeach 
                     @endif
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
                        <form action="{{ route('add-to-cart') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="hidden" name="name" value="{{$product->name}}">
                                <input type="hidden" name="price" value="{{$product->price}}">
                                 <button type="submit" class="button button-plain">Add to Cart</button>
                             </form>
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