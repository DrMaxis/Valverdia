<!--/-/-/-/-/-/-/-/-/
     Begin Cart Data 
-/-/-/-/-/-/-/-/-/-/-/-->
<div class="cart-main-area pb-100">
        <div class="container">
           <!--/-/-/-/-/-/-/-/-/ 
             Begin Section Title
             -/-/-/-/-/-/-/-/-/-/-/-->
            <div class="section-title mb-50">
                <h2>
                    Shopping Cart
                </h2>
            </div>
            <!--/-/-/-/-/-/-/-/-/ 
                 End Section Title 
                -/-/-/-/-/-/-/-/-/-/-/-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!--/-/-/-/-/-/-/-/-/ 
                        Begin Form 
                    -/-/-/-/-/-/-/-/-/-/-/-->
                    <form action="#">
                        <!--/-/-/-/-/-/-/-/-/ 
                            Begin Table Content 
                        -/-/-/-/-/-/-/-/-/-/-/-->
                        
                        <div class="table-content table-responsive mb-50">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                            @if (Cart::count() > 0)
                                            @foreach (Cart::content() as $item)
                                        <td class="product-thumbnail">
                                            <a href="{{ route('single-product', $item->model->slug) }}"><img src="img/new-products/2_2.jpg" alt="cart-image" /></a>
                                        </td>
                                        <td class="product-name"><a href="{{ route('single-product', $item->model->slug) }}">{{$item->model->name}}</a></td>
                                        <td class="product-price"><span class="amount">{{$item->model->price}}</span></td>
                                        <td class="product-quantity"><input type="number" value="1" /></td>
                                        <td class="product-subtotal">{{$item->model->price}}</td>
                                        <td>
                                            <form class="product-remove" action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                    
                                                    <button type="submit">Remove</button>
                                                </form>
                    
                                        </td>
                                    </tr>

                                    @endforeach

                                    @else

                                    <h3>No items in Cart!</h3>
                                    <div class="spacer"></div>
                                    <a href="{{ route('products') }}" class="button">Continue Shopping</a>
                                    <div class="spacer"></div>
                    
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!--/-/-/-/-/-/-/-/-/ 
                            Begin Table Content 
                        -/-/-/-/-/-/-/-/-/-/-/-->
                        <div class="row">
                           <!--/-/-/-/-/-/-/-/-/ 
                            Begin Cart Button 
                            -/-/-/-/-/-/-/-/-/-/-/-->
                            <div class="col-md-8 col-sm-7 col-xs-12">
                                <div class="buttons-cart">
                                    <input type="submit" value="Update Cart" />
                                    <a href="{{ route('products') }}">Continue Shopping</a>
                                </div>
                            </div>
                            <!--/-/-/-/-/-/-/-/-/ 
                                Begin Cart Button 
                                -/-/-/-/-/-/-/-/-/-/-/-->

                            <!--/-/-/-/-/-/-/-/-/ 
                                Begin Cart Totals 
                                -/-/-/-/-/-/-/-/-/-/-/-->
                            <div class="col-md-4 col-sm-5 col-xs-12">
                                <div class="cart_totals">
                                    <h2>Cart Totals</h2>
                                    <br />
                                    <table>
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Tax</th>
                                                <td><span class="amount">{{Cart::tax()}}</span></td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td>
                                                    <strong><span class="amount">{{Cart::total()}}</span></strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                        <a href="{{route('checkout')}}">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!--/-/-/-/-/-/-/-/-/ 
                                End Cart Totals 
                            -/-/-/-/-/-/-/-/-/-/-/-->
                        </div>

              
                        <!--/-/-/-/-/-/-/-/-/ 
                            End Row  
                        -/-/-/-/-/-/-/-/-/-/-/-->
                    </form>
                    <!--/-/-/-/-/-/-/-/-/ 
                        End Form 
                    -/-/-/-/-/-/-/-/-/-/-/-->
                </div>
            </div>
             <!--/-/-/-/-/-/-/-/-/ 
                End Row 
            -/-/-/-/-/-/-/-/-/-/-/-->
        </div>
    </div>
    <!--/-/-/-/-/-/-/-/-/ 
        End Cart Data 
    -/-/-/-/-/-/-/-/-/-/-/-->