@extends('master')
@section('contents')
    <div class="loading-loader"></div>

    <div id="page">

        <div class="breadcrumbs-two">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumbs-img"
                            style="background-image: url(https://boutique.humbleandrich.com/wp-content/uploads/2019/01/Adidas-Womens-UltraBoost-X-Running-Shoe-2.jpg);">
                            <h2 class="">Women's</h2>
                        </div>
                        <div class="menu text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="ftrd-featured">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <div class="featured">
                            <div class="featured-img featured-img-2"
                                style="background-image: url(https://images.unsplash.com/photo-1531310197839-ccf54634509e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=465&q=80);">
                                <h2>Casuals</h2>
                            </div>
                            <p id="span-text">The all-time favourites for the season.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="featured">
                            <div class="featured-img featured-img-2"
                                style="background-image: url(https://images.unsplash.com/photo-1543163521-1bf539c55dd2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80);">
                                <h2>Dress</h2>
                            </div>
                            <p id="span-text">A standout pieces made from premium materials, designed with elegance in mind.</p>

                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="featured">
                            <div class="featured-img featured-img-2"
                                style="background-image: url(https://i.pinimg.com/originals/dc/0d/32/dc0d32b62a547f542cc999cfeffe6b3a.jpg);">
                                <h2>Sports</h2>
                            </div>
                            <p id="span-text">Improve your leg strength with a good quality shoe.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="production-product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-xl-3">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="side border mb-1">
                                    <h3>Brand</h3>
                                    <ul>
                                        <li><a href="#">Adidas</a></li>
                                        <li><a href="#">Nike</a></li>
                                        <li><a href="#">Gucci</a></li>
                                        <li><a href="#">Converse</a></li>
                                        <li><a href="#">Puma</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="side border mb-1">
                                    <h3>Size/Width</h3>
                                    <div class="block-26 mb-2">
                                        <h4>Size</h4>
                                        <ul>
                                            <li><a href="#">7</a></li>
                                            <li><a href="#">7.5</a></li>
                                            <li><a href="#">8</a></li>
                                            <li><a href="#">8.5</a></li>
                                            <li><a href="#">9</a></li>
                                            <li><a href="#">9.5</a></li>
                                            <li><a href="#">10</a></li>
                                            <li><a href="#">10.5</a></li>
                                            <li><a href="#">11</a></li>
                                            <li><a href="#">11.5</a></li>
                                            <li><a href="#">12</a></li>
                                            <li><a href="#">12.5</a></li>
                                            <li><a href="#">13</a></li>
                                            <li><a href="#">13.5</a></li>
                                            <li><a href="#">14</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-xl-9">
                        <div class="row row-pb-md">
							@foreach ($data as $datas)
							<div class="col-lg-4 mb-4 text-center">
                                <div class="product-entry border">
                                    <a href="#" class="prod-img">
                                        <img src="{{ $datas->Images }}" class="img-fluid" alt="">
                                    </a>
                                    <div class="desc">
                                        <h2><a href="#">{{ $datas->Product_Name }}</a></h2>
                                        <span class="price">{{ $datas->Price }}</span>
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
                </div>
				<div style="display: flex;justify-content: center; ">{{ $data->links() }}</div>
            </div>
        </div>
    </div>
    </div>




    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fa-solid fa-arrow-up"></i></a>
    </div>
@endsection
