<!-- My Account Page Start Here -->
<div class="my-account white-bg pb-100">
    <div class="container">
        <div class="account-dashboard">
            <div class="dashboard-upper-info">
                <div class="row no-gutters align-items-center">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="d-single-info">
                            <p class="user-name">Hello <span>{{auth()->user()->name}}</span></p>
                            <p>Not {{auth()->user()->name}} ? <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             Logout
                         </a></p>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-6">
                        <div class="d-single-info">
                            <p>You currently have<span> {{auth()->user()->orders->where('shipped', '=', '0')->count()}} Pending Order(s)</span></p>
                            <p>View them <a href= "{{route('orders')}}"> here </a></p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="d-single-info">
                            <p>Visit <a href="#"> FAQ </a> or email for support at: </p>
                            <p>support@example.com</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-6">
                        <div class="d-single-info text-center">
                            <a class="view-cart" href="{{route('cart')}}"><i class="fa fa-cart-plus" aria-hidden="true"></i>view cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <!-- Nav tabs -->
                    <ul class="nav flex-column dashboard-list" role="tablist">
                        <li class="active"><a data-toggle="tab" href="#dashboard">Dashboard</a></li>
                        <li><a data-toggle="tab" href="#orders">Orders</a></li>
                        <li><a data-toggle="tab" href="#account-details">Account details</a></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         Logout
                     </a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </div>
                <div class="col-lg-10 col-md-10">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard-content mt-all-40">
                        <div id="dashboard" class="tab-pane fade in active">
                            <h3>Dashboard </h3>
                            <p>From your account dashboard. you can easily check & view your <a href="#">recent orders</a>,
                                manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details.</a></p>
                        </div>
                        <div id="orders" class="tab-pane fade">
                            <h3>Orders</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($orders as $order)
                                            <td> {{ $order->id }}</td>
                                            <td>{{ presentDate($order->created_at) }}</td>
                                            @if($order->shipped == 1)
                                            <td class="success">Shipped</td>
                                            @else
                                            <td>Pending</td>
                                            @endif

                                            <td>{{convertToUSD($order->billing_total) }} </td>
                                            <td><a class="view"  href="{{ route('show-order', $order->id) }} " >view</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div id="account-details" class="tab-pane fade">
                            <h3>Account details </h3>
                            <div class="register-form login-form clearfix">
                                <form action="{{route('update-accountcred')}}" method="POST">
                                    @method('patch') 
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-lg-3 col-md-4 col-form-label">Name</label>
                                        <div class="col-lg-6 col-md-8">
                                            <input id="name" type="text" name="name" value="{{ old('name', auth()->user()->name) }}" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-lg-3 col-md-4 col-form-label">Email address</label>
                                        <div class="col-lg-6 col-md-8">
                                            <input class="form-control" id="email" type="email" name="email" value="{{ old('email', auth()->user()->email) }}" placeholder="Email"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="newpassword" class="col-lg-3 col-md-4 col-form-label">New password</label>
                                        <div class="col-lg-6 col-md-8">
                                            <input id="password" type="password" name="password" placeholder="Password">
                                            <div>Leave password blank to keep current password</div>
                                            <button class="btn show-btn" type="button">Show</button>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-lg-3 col-md-4 col-form-label">Confirm password</label>
                                        <div class="col-lg-6 col-md-8">
                                            <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password">
                                            <button class="btn show-btn" type="button">Show</button>
                                        </div>
                                    </div>
                                    <div class="register-box mt-40">
                                        <button type="submit" class="return-customer-btn f-right">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- My Account Page End Here -->