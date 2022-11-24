@extends('master')
@section('contents')
    <div class="loading-loader"></div>
    <div id="page">
        <div class="breadcrumbs-two">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumbs-img"
                            style="background-image: url(https://images.unsplash.com/photo-1595341888016-a392ef81b7de?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1179&q=80);">
                            <h2 class="changetowhite">Men's</h2>
                        </div>
                        <div class="menu text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="featured">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <div class="featured">
                            <div class="featured-img featured-img-2"
                                style="background-image: url(https://media1.popsugar-assets.com/files/thumbor/2phb9MDqnXumw_tT8X_P4V-iMOI/fit-in/2048xorig/filters:format_auto-!!-:strip_icc-!!-/2020/04/17/701/n/44446167/6afe9011a0983ec1_Converse_1/i/Converse-Chuck-Taylor-All-Star.jpg);">
                                <h2>Casuals</h2>
                            </div>
                            <p id="span-text">Bringing style to your everyday.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="featured">
                            <div class="featured-img featured-img-2"
                                style="background-image: url(https://cdn11.bigcommerce.com/s-pkla4xn3/images/stencil/1280x1280/products/30101/282103/luxury-Brand-Men-Classic-Pointed-Toe-Dress-Shoes-Mens-Slip-on-Patent-Leather-Black-Wedding-Shoes__49143.1571137845.jpg?c=2?imbypass=on);">
                                <h2>Work</h2>
                            </div>
                            <p id="span-text">The perfect combination of comfort, versatility and style.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="featured">
                            <div class="featured-img featured-img-2"
                                style="background-image: url(https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/5c7f0990-95c3-4f0a-86b7-73cacbd92ea5/lebron-xx-time-machine-basketball-shoes-ct1qVm.png);">
                                <h2>Sports</h2>
                            </div>
                            <p id="span-text">Add a little thrill in your moves.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="production-product">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center head-heading head-heading-sm">
                        <h2>View All Products</h2>
                    </div>
                </div>
                <div class="row row-pb-md">
                    @foreach ($data as $datas)
                        <div class="col-md-3 col-lg-3 mb-4 text-center">
                            <div class="product-entry border">
                                    <img src={{ $datas->Images }} class="img-fluid" alt="">
                                <div class="desc">
                                    <h2><a href="#">{{ $datas->Product_Name }}</a></h2>
                                    <span class="price">₱ {{ $datas->Price }}.00</span>
									<form action="product-detail">
										<input type="text" name="id" value="{{ $datas->id }}" hidden>
                                        <input type="submit" class="btn btn-primary" value="See Details">
									</form>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
            <div style="display: flex;justify-content: center; ">{{ $data->links() }}</div>
        </div>
    </div>

    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fa-solid fa-arrow-up"></i></a>
    </div>
@endsection
