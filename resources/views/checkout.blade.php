@extends('master')
@section('contents')
    @php
        use App\Models\Products;
		$subtotal = 0;
		$emptystring = "";
		$status = "";
    @endphp
    <script
        src="https://www.paypal.com/sdk/js?client-id=Ad1VsNYKCeDSgpTa9hIlYYiafJ8boXUlWGxQMQopETUucLVojHRlcHADBzL_H7tAtBesciJgqFttrBfT&currency=PHP">
    </script>
    <div class="loading-loader"></div>

    <div id="page">



        <div class="production-product">
            <div class="container">
                <div class="row row-pb-lg">
                    <div class="col-sm-10 offset-md-1">
                        <div class="process-wrap">
                            <div class="process text-center active">
                                <p><span>01</span></p>
                                <h3>Shopping Cart</h3>
                            </div>
                            <div class="process text-center active">
                                <p><span>02</span></p>
                                <h3>Checkout</h3>
                            </div>
                            <div class="process text-center">
                                <p><span>03</span></p>
                                <h3>Order Complete</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <form method="POST" action="/transaction" >
							@csrf
                            <h2>Billing Details</h2>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="fname">Address</label>
                                        <input type="text" name="address"id="address" class="form-control"
                                            placeholder="Enter Your Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="address2"id="address2" class="form-control"
                                            placeholder="Second Address">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="companyname">Town/City</label>
                                        <input type="text" name="towncity" id="towncity" class="form-control"
                                            placeholder="Town or City">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stateprovince">State/Province</label>
                                        <input type="text" name="state" id="state" class="form-control"
                                            placeholder="State Province">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lname">Zip/Postal Code</label>
                                        <input type="text" name="zippostalcode"id="zippostalcode" class="form-control"
                                            placeholder="Zip / Postal">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">E-mail Address</label>
                                        <input type="text" name="email"id="email" class="form-control"
                                            placeholder="State Province">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Phone">Phone Number</label>
                                        <input type="text" name="pnumber"id="pnumber" class="form-control" placeholder="">
                                    </div>
                                </div>

                            </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cart-detail">
                                    <h2>Cart Total</h2>
                                    <ul>
                                        <li>
                                            <span>Ordered Items:</span>
                                            <ul>
                                                @foreach ($data as $datas)
                                                    @php
                                                        $products = Products::where('id', $datas->item_id)->get();
                                                        $shippingfee = 50;
                                                        $subtotal +=  $datas->orderedprice;
                                                        $totalfee = $subtotal + $shippingfee;
														
                                                    @endphp
                                                    @foreach ($products as $product)
													@php
														$emptystring = $emptystring  . $product->Product_Name . ', ';
													@endphp
                                                        <li><span style="font-weight:bold">{{ $product->Product_Name }}</span>
															
                                                        </li>
                                                        <span></span>
                                                    @endforeach
                                                @endforeach
                                            </ul>
                                        </li>
										<input type="text" name="products" value="{{ $emptystring }}" hidden>
										<input type="text" name="user_id" value="{{ session('user_id') }}" hidden>
										<input type="text" name="totalprice" value="{{ $totalfee }}" hidden>
                                        <li><span>Subtotal</span> <span>₱{{ $subtotal }}.00</span> </li>
                                        <li><span>Shipping</span> <span>₱{{ $shippingfee }}.00</span></li>
                                        <li><span>Order Total</span> <span style="font-weight:bold">₱{{ $totalfee }}.00</span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-12">
                                <div class="cart-detail">
                                    <h2>Payment Method</h2>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="radio">
                                                <label><input type="radio" value="Cash on Delivery" name="modeofpayment"
                                                        onchange="getValue(this)"> Cash on Delivery</label> <br>
														<label><input type="radio" value="Paypal" name="modeofpayment"
															onchange="getValue(this)"> Paypal</label>
													<div id="paypal-button-container" style="display:none"></div>
													<input type="text" id="status"name="status" hidden>
													
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox" value=""> I have read and accept the
                                                    terms and conditions</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <input type="submit" class="btn btn-primary" value="Place an order.	">
                            </div>
                        </div>
					</form>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fa-solid fa-arrow-up"></i></a>
    </div>
    <script>

        function getValue(x) {
            if (x.value == 'Cash on Delivery') {
                document.getElementById("paypal-button-container").style.display =
                    'none'; // you need a identifier for changes
					document.getElementById("status").value = "Pending";
            } else {
                document.getElementById("paypal-button-container").style.display =
                    'block'; // you need a identifier for changes
					document.getElementById("status").value = "Paid";
            }
        }
        paypal.Buttons({
            // Sets up the transaction when a payment button is clicked
            createOrder: (data, actions) => {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: {{ $totalfee }}// Can also reference a variable or function
                        }
                    }]
                });
            },
            // Finalize the transaction after payer approval
            onApprove: (data, actions) => {
                return actions.order.capture().then(function(orderData) {
                    // Successful capture! For dev/demo purposes:
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    const transaction = orderData.purchase_units[0].payments.captures[0];
                    if (transaction.status == "COMPLETED") {
						//save to database
                    }
                });
            }
        }).render('#paypal-button-container');
    </script>
@endsection
