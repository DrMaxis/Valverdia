<div class="products-section my-orders container">
    <div class="sidebar">
         <ul>
          <li><a href="{{ route('dashboard') }}">My Account</a></li>
          <li class="active"><a href="{{ route('orders') }}">My Orders</a></li>
        </ul>
    </div> <!-- end sidebar -->
    <div class="my-profile">
        <div class="products-header">
            <h1 class="stylish-heading">Order ID: {{ $order->id }}</h1>
        </div>
         <div>
            <div class="order-container">
                <div class="order-header">
                    <div class="order-header-items">
                        <div>
                            <div class="uppercase font-bold">Order Placed</div>
                            <div>{{ presentDate($order->created_at) }}</div>
                        </div>
                        <div>
                            <div class="uppercase font-bold">Order ID</div>
                            <div>{{ $order->id }}</div>
                        </div><div>
                            <div class="uppercase font-bold">Total(- ${{$order->billing_discount}} from {{$order->billing_discount_code}})</div>
                            <div>{{ convertToUSD($order->billing_total) }}</div>
                        </div>
                    </div>
                    
                </div>
                <div class="order-products">
                    <table class="table" style="width:50%">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $order->user->name }}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{ $order->billing_address }}</td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>{{ $order->billing_city }}</td>
                            </tr>
                            <tr>
                                <td>Subtotal</td>
                                <td>{{ convertToUSD($order->billing_subtotal) }}</td>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <td>{{ convertToUSD($order->billing_tax) }}</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>{{ convertToUSD($order->billing_total) }}</td>
                            </tr>
                        </tbody>
                    </table>
                 </div>
            </div> <!-- end order-container -->
             <div class="order-container">
                <div class="order-header">
                    <div class="order-header-items">
                        <div>
                            Order Items
                        </div>
                     </div>
                </div>
                <div class="order-products">
                    @foreach ($products as $product)
                        <div class="order-product-item">
                            <div><img src="{{productImage($product->image)}}" alt="Product Image"></div>
                            <div>
                                <div>
                                    <a href="{{ route('single-product', $product->slug) }}">{{ $product->name }}</a>
                                </div>
                                <div>{{ convertToUSD($product->price) }}</div>
                                <div>Quantity: {{ $product->pivot->quantity }}</div>
                            </div>
                        </div>
                    @endforeach
                 </div>
            </div> <!-- end order-container -->
        </div>
         <div class="spacer"></div>
    </div>
</div>
