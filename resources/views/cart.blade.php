@extends('master')
@section('contents')

    @php
        use App\Models\Products;
    @endphp
    @if (Auth::check())
        <div class="loading-loader"></div>

        <div class="colorlib-product">
            <div class="container">
                <div class="row row-pb-lg">
                    <div class="col-md-10 offset-md-1">
                        <div class="process-wrap">
                            <div class="process text-center active">
                                <p><span>01</span></p>
                                <h3>Shopping Cart</h3>
                            </div>
                            <div class="process text-center">
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
                <div class="row row-pb-lg">
                    <div class="col-md-12">
                        <div class="product-name d-flex">
                            <div class="one-forth text-left px-4">
                                <span>Product Details</span>
                            </div>
                            <div class="one-eight text-center">
                                <span>Price</span>
                            </div>
                            <div class="one-eight text-center">
                                <span>Size</span>
                            </div>

                            <div class="one-eight text-center">
                                <span>Quantity</span>
                            </div>
                            <div class="one-eight text-center">
                                <span>Total</span>
                            </div>
                            <div class="one-eight text-center px-4">
                                <span>Remove</span>
                            </div>
                        </div>
                        <div class="one-eight text-center">
                            <div class="display-tc">
                                <a href="#" class="closed"></a>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="/checkout">
                        @csrf
                        @foreach ($data as $datas)
                            <div class="product-cart d-flex">
                                @php
                                    $products = Products::where('id', $datas->item_id)->get();
                                @endphp
                                @foreach ($products as $product)
                                    <div class="one-forth">

                                        <div class="product-img" style="background-image: url({{ $product->Images }});">
                                            <input type="checkbox" name="cart_checkbox[]" value="{{ $datas->id }}">
                                        </div>
                                        <div class="display-tc">
                                            <h3>{{ $product->Product_Name }}</h3>
                                        </div>
                                    </div>
                                    <div class="one-eight text-center">
                                        <div class="display-tc">
                                            <span class="price">{{ $product->Price }}</span>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <span class="price">{{ $datas->orderedsize }}</span>
                                    </div>
                                </div>

                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <span class="price">{{ $datas->orderedquantity }}</span>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <span class="price">{{ $datas->orderedprice }}</span>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <a href="#" class="closed"></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
        <div class="row row-pb-lg">
            <div class="col-md-12">
                <div class="total-wrap">
                    <div class="row">
                        <div class="col-sm-8">
                        </div>
                        <div class="col-sm-4 text-center">
                            <input type="submit" class="btn btn-primary" value="Proceed to Checkout.">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </form>


        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="fa-solid fa-arrow-up"></i></a>
        </div>
    @else
        <div class="col-sm-8 offset-sm-2 text-center head-heading head-heading-sm pending-login">
            <h2>Please click <a href="userLogin" style="text-decoration: underline">here</a> to login. </h2>
        </div>
    @endif
@endsection
