<!--/-/-/-/-/-/-/-/-/
Begin Checkoutarea  
-/-/-/-/-/-/-/-/-/-/-/-->
<div class="checkout-area pt-30">
    <div class="container">
        <div class="row">
            <form action="{{route('checkout-send')}}" method="POST" id="payment-form">
                @csrf
                <div class="col-lg-6 col-md-6">
                    <div class="checkbox-form pb-50">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkout-form-list mb-30">
                                    <label>Name <span class="required">*</span></label>
                                    <input type="text" placeholder="Name" id="name" name="name" value="{{ old('name') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list mb-30">
                                    <label>Name On Card <span class="required">*</span></label>
                                    <input type="text" placeholder="Name on Card" id="name_on_card" name="name_on_card" value="{{old('name_on_card')}}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list mb-30">
                                    <label>Email Address <span class="required">*</span></label> @if(auth()->user())

                                    <input type="email" placeholder="Email" id="email" name="email" value="{{ auth()->user()->email }}" readonly>                                    @else
                                    <input type="email" placeholder="Email" id="email" name="email" value="{{ old('email')}}" required>                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list mb-30">
                                    <label>Phone<span class="required">*</span></label>
                                    <input type="text" placeholder="Phone" id="phone" name="phone" value="{{ old('phone') }}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list mb-30">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" placeholder="Street address" id="address" name="address" value="{{old('address')}}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list mb-30">
                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list mb-30">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" placeholder="Town / City" id="city" name="city" value="{{ old('city') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list mb-30">
                                    <label>State / County <span class="required">*</span></label>
                                    <input type="text" placeholder="State" id="state" name="state" value="{{ old('state') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list mb-30">
                                    <label>Postcode / Zip <span class="required">*</span></label>
                                    <input type="text" placeholder="Postcode / Zip" id="zip" name="zip" value="{{ old('zip') }}" required>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="scrollable">
                                    @foreach(Cart::content() as $item)
                                    <tr class="cart_item ">
                                        <td class="product-name">
                                            {{$item->name}} <strong class="product-quantity">{{$item->qty}}</strong>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount">{{convertToUSD($item->subtotal)}}</span>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    @if (session()->has('coupon'))
                                    <tr class="cart-coupon">
                                        <th>Coupon: {{session()->get('coupon')['name']}}</th>
                                        <td><span class="amount">--({{convertToUSD(session()->get('coupon')['discount'] )}})</span>
                                        </td>
                                    </tr>
                                    <br> @endif

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
                                        <th>Order Total</th>
                                        <td><strong><span class="amount">{{convertToUSD($newTotal)}}</span></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">




                                <div class="form-row">
                                    <label for="card-element">
                                                    Credit or debit card
                                                  </label>
                                    <div id="card-element">
                                        <!-- A Stripe Element will be inserted here. -->
                                    </div>

                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>
                                </div>

                                <div class="order-button-payment">
                                    <button id="complete-order" type="submit">Submit Payment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


            <div class="col-md-12">
                <div class="checkout-form-list create-acc mb-30">
                    <input id="cbox" type="checkbox" />
                    <label>Create an account?</label>
                </div>
                <div id="cbox_info" class="checkout-form-list create-accounts mb-25">
                    <p class="mb-10">Create an account by entering the information below. If you are a returning customer please login at
                        the top of the page.</p>
                    <label>Account password  <span class="required">*</span></label>
                    <input type="password" placeholder="password" />
                </div>
            </div>
        </div>
    </div>
</div>
<!--/-/-/-/-/-/-/-/-/
    End Checkoutarea  
    -/-/-/-/-/-/-/-/-/-/-/-->