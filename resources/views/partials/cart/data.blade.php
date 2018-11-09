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
                                    
                                @if (Cart::count() > 0) @foreach (Cart::content() as $item)
                                <td class="product-thumbnail">
                                    <a href="{{ route('single-product', $item->model->slug) }}"><img src="{{productImage($item->model->image)}}" alt="cart-image" /></a>
                                </td>
                                <td class="product-name"><a href="{{ route('single-product', $item->model->slug) }}">{{$item->model->name}}</a></td>
                                <td class="product-price"><span class="amount">{{convertToUSD($item->model->price)}}</span></td>
                                <td>
                                    <select class="product-quantity" data-id="{{$item->rowId}}">
                                                @for ($i = 1; $i < 5 + 1; $i++)
                                                <option {{ $item->qty == $i ? 'selected' : ''}}>{{$i}}</option>
                                                @endfor
                                            </select>
                                </td>
                                <td class="product-subtotal">{{convertToUSD($item->subtotal)}}</td>
                                <td>
                                    <form class="product-remove" action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                        @csrf {{ method_field('DELETE') }}

                                        <button type="submit">Remove</button>
                                    </form>

                                </td>
                            </tr>

                            @endforeach @else

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
                            @if ( ! session()->has('coupon'))
                    <div class="col-md-8 col-sm-7 col-xs-12">
                        <div class="coupon-holder">
                            <form action="{{ route('add-coupon') }}" method="POST">
                                @csrf
                                <label for="coupon-input" class="image-replace coupon">{{ __('Coupon Code') }}</label>
                                <input class="w-30 has-p has-b" type="text" name="coupon_code" placeholder="Coupon Code" id="coupon-input">
                                <button type="submit" class="button button-plain">Apply</button>
                            </form>
                        </div>
                       
                    </div>
                    @endif
                    <div class="col-md-8 col-sm-7 col-xs-12 clear">
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
                                        <th>Subtotal</th>
                                        <td><span class="amount">{{convertToUSD(Cart::subtotal())}}</span>
                                        </td>
                                    </tr>


                                    @if (session()->has('coupon'))
                                    <tr class="cart-coupon">
                                        <th>Coupon: {{session()->get('coupon')['name']}}</th>
                                        <td><span class="amount">--({{convertToUSD(session()->get('coupon')['discount'] )}})</span>
                                            <form action="{{route('remove-coupon')}}" method="POST">
                                                @csrf {{ method_field('delete') }}

                                                <button type="submit" style="display:inline;">Remove</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <br>
                                    @endif

                                    <tr class="cart-subtotal bb">
                                        @if(session()->has('coupon'))
                                            <th>New Subtotal</th>
                                            <td><span class="amount">{{convertToUSD($newSubtotal)}}</span>
                                            </td>
                                            
                                            
                                        </tr>
                                        
                                                @endif

                                    <tr class="cart-subtotal">
                                        <th>Tax(6.9%)</th>
                                        <td><span class="amount">{{convertToUSD($newTax)}}</span></td>
                                    </tr>



                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                            <strong><span class="amount">{{convertToUSD($newTotal)}}</span></strong>
                                        </td>
                                    </tr>
                                   

                                </tbody>
                            </table>

                            <!-- end have-code-container -->

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