
<!--/-/-/-/-/-/-/-/-/
    Begin Page Products  
-/-/-/-/-/-/-/-/-/-/-/-->
<div class="col-md-9 col-md-push-3">
        <!-- Sidebar Right Top Content Start -->
        <div class="sidebar-desc-content">
            <p>{{$categoryName}}</p><hr>
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
                
                <div class="col-md-4 col-sm-5 pull-right">
                        <strong>Sort Price By: </strong>
                    <a href="{{ route('products', ['category'=> request()->category, 'sort' => 'low_high']) }}">Low to High</a> |
                    <a href="{{ route('products', ['category'=> request()->category, 'sort' => 'high_low']) }}">High to Low</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-content categorie-list ">
                        <div id="list-view" class="tab-pane fade">
                            <div class="row">
                                    
    
                                     
                                    @forelse($products as $product)
                                    
                                <!-- Main Single Product Start -->
                                <div class="main-single-product fix">
                                    <div class="col-sm-4">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="{{route('single-product', $product->slug)}}">
                                                    <img class="primary-img" src="{{productImage($product->image)}}" alt="single-product">
                                                </a>
                                                
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
                                                    <li class="price">{{convertToUSD($product->price)}}</li>
                                                    <li class="mtb-50">
                                                        <p>{!!$product->description!!}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Product Price End -->
                                            <!-- Product Button Actions Start -->
                                            
                                            <div class="product-button-actions">
                                                 @if($product->quantity == 0)  
                                                    <h2>Sold Out</h2>
                                                    @else
                                                    <form action="{{ route('add-to-cart') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$product->id}}">
                                                            <input type="hidden" name="name" value="{{$product->name}}">
                                                            <input type="hidden" name="price" value="{{$product->price}}">
                                                             <button type="submit" class="button button-plain">Add to Cart</button>
                                                         </form>
                                                         @endif
                                            </div>

                                        
                                            <!-- Product Button Actions End -->
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                </div>
                                
                                @empty
                                <div>Coming Soon!</div>
                                 
                                @endforelse
                               
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- #list-view End -->
                        <div id="grid-view" class="tab-pane fade mt-40 active in">
                            <div class="row">

                                
                                @forelse ($products as $product)
                                
                                <div class="col-md-4 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{route('single-product', $product->slug)}}">
                                                <img class="primary-img" src="{{productImage($product->image)}}" alt="single-product">
                                                <img class="secondary-img" src="img/new-products/1_2.jpg" alt="single-product">
                                            </a>
                                           
                                            
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content text-center">
                                            <h4><a href="{{route('single-product', $product->slug)}}">{{$product->name}}</a></h4>
                                            <p class="price"><span>{{convertToUSD($product->price)}}</span></p>
                                            @if($product->quantity == 0)  
                                                    @else
                                                    <form class="action-links2"action="{{ route('add-to-cart') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$product->id}}">
                                                            <input type="hidden" name="name" value="{{$product->name}}">
                                                            <input type="hidden" name="price" value="{{$product->price}}">
                                                            <button data-toggle="tooltip"  type="submit"data-original-title="Add to Cart">add to cart</button>
                                                         </form>
                                                         @endif
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                @empty
                                   <p>Coming Soon!</p>
                                
                                    
                                @endforelse
                                
                                
                                

                              
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