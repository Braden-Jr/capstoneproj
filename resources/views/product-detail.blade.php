@extends('master')
@section('contents')
    <div class="loading-loader"></div>
    <div id="page">
        <div class="production-product">
            <div class="container">
                <div class="row row-pb-lg product-detail-wrap">
                    <div class="col-sm-8">
                        <img src="{{ $data->Images }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-sm-4">
                        <div class="product-desc">
                            <h3>{{ $data->Product_Name }}</h3>
                            <p class="price">
                                <span>₱ {{ $data->Price }}.00</span>
                            </p>
                            <p>{{ $data->Description }}</p>
                            <div class="size-wrap">
                                <div class="block-26 mb-2">
                                    <h4>Size</h4>
                                    <ul>
                                        <li><a href="#">{{ $data->Size_1 }}</a></li>
                                        <li><a href="#">{{ $data->Size_2 }}</a></li>
                                        <li><a href="#">{{ $data->Size_3 }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                        <i class="icon-minus2"></i>
                                    </button>
                                </span>
                                <input type="text" id="quantity" name="quantity" class="form-control input-number"
                                    value="1" min="1" max="100">
                                <span class="input-group-btn ml-1">
                                    <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                        <i class="icon-plus2"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <p class="addtocart"><a href="cart.html" class="btn btn-primary btn-addtocart"><i
                                                class="icon-shopping-cart"></i> Add to Cart</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>


    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fa-solid fa-arrow-up"></i></a>
    </div>


    <script>
        $(document).ready(function() {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

            });

            $('.quantity-left-minus').click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>
@endsection
