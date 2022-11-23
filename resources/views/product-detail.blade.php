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
                            <form method="POST" action="/addcart">
                                @csrf
                                <h3>{{ $data->Product_Name }}</h3>
                                <p class="price">
                                    <span> ₱{{ $data->Price }}.00</span>
                                </p>
                                <p>{{ $data->Description }} </p>
                                <div class="size-wrap">
                                    <div class="block-26 mb-2">
                                        <h4>Size</h4>
                                        <input name="userid" value={{ session('user_id') }} hidden>
                                        <input name="itemid" value={{ $data->id }} hidden>

                                        <input name="price" value={{ $data->Price }} hidden>
                                        <div style="display:flex">

                                            <input type="radio" class="btn-check radio" value="{{ $data->Size_1 }}"
                                                name="orderedsize" id="option1" autocomplete="off" hidden>
                                            <label class="btn btn-secondary radio"
                                                for="option1">{{ $data->Size_1 }}</label>

                                            <input type="radio" class="btn-check radio" value="{{ $data->Size_2 }}"
                                                name="orderedsize" id="option2" autocomplete="off" hidden>
                                            <label class="btn btn-secondary radio"
                                                for="option2">{{ $data->Size_2 }}</label>

                                            <input type="radio" class="btn-check radio " value="{{ $data->Size_3 }}"
                                                name="orderedsize" id="option3" autocomplete="off" hidden>
                                            <label class="btn btn-secondary radio"
                                                for="option3">{{ $data->Size_3 }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn" data-type="minus"
                                            data-field="">
                                            <i class="icon-minus2">–</i>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number"
                                        value="1" min="1" max="100">
                                    <span class="input-group-btn ml-1">
                                        <button type="button" class="quantity-right-plus btn" data-type="plus"
                                            data-field="">
                                            <i class="icon-plus2">＋</i>
                                        </button>
                                    </span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Add to Cart.
                                        </button>
                                </div>
                            </form>
                        </div>
                        @if (session('cartstatus'))
                                        <div class="alert alert-success">
                                            {{ session('cartstatus') }}
                        </div>
                        @endif
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
