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
                                    <script type="text/javascript">
                                        var clicks = 0;
                                        function updateClickCount() {
                                            document.getElementById("clickCount").innerHTML = clicks;
                                            document.getElementById('holder').value = clicks;
                                        }
                                    </script>


                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn"
                                            onClick="clicks--;updateClickCount();" id="push">-</button>
                                    </span>
                                    <div id="clickCount" name="quantity" style="width:70% text-align:center" hidden></div>
                                    <input class="qholder" style="text-align: center" min="1" type="text"
                                        name="quantity" id="holder" value="1">
                                    <span class="input-group-btn ml-1">
                                        <button type="button"
                                            class="quantity-right-plus btn"onClick="clicks++;updateClickCount();"
                                            id="push">＋</button>
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

    <script></script>
@endsection