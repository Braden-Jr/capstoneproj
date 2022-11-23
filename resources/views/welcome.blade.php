@extends('master')
@section('contents')
    <div class="loading-loader"></div>

    <div id="page">

        <aside id="clr-hero">
            <div class="flexslider">
                <ul class="slides">
                   
                    <li style="background-image: url(https://outdoorgearlab-mvnab3pwrvp3t0.stackpathdns.com/photos/25/86/380116_31983_XL.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">
                                            <h1 class="head-1">Men's</h1>
                                            <h2 class="head-2">Shoes</h2>
                                            <h2 class="head-3">Collection</h2>
                                            <p class="category"><span>New trending shoes</span></p>
                                            <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li
                        style="background-image: url(https://media.istockphoto.com/id/1164989573/photo/woman-wearing-yellow-heels.jpg?s=612x612&w=0&k=20&c=NsCBMRzCTUvYjwB0LzJnvJGV3IsLjjpppB53XNINW0k=">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">
                                            <h1 class="head-1">Huge</h1>
                                            <h2 class="head-2">Sale</h2>
                                            <h2 class="head-3"><strong class="font-weight-bold">50%</strong> Off</h2>
                                            <p class="category"><span>Big sale sandals</span></p>
                                            <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li
                        style="background-image: url(https://media.kohlsimg.com/is/image/kohls/2022-114625-nav1-m">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">
                                            <h1 class="head-1">New</h1>
                                            <h2 class="head-2">Arrival</h2>
                                            <h2 class="head-3">up to <strong class="font-weight-bold">30%</strong> off</h2>
                                            <p class="category"><span>New stylish shoes for men</span></p>
                                            <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="production-product">
            <div class="container-fluid">
                <div class="col-sm-8 offset-sm-2 text-center head-heading">
                    <h2>FEATURED</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 text-center" id="featured-images">
                        <div class="featured">
                            <a href="#" class="featured-img"
                                style="background-image: url(https://pyxis.nymag.com/v1/imgs/a1f/2e8/5dd798dda29b32734aef09765ce9d0e02a-7----.rsquare.w600.jpg"></a>
                            <div class="desc">
                                <h2><a href="#">NIKE</a></h2>
                            </div>
                        </div>
                    </div>
                    
                        <div class="col-lg-4 text-center" id="featured-images">
                            <div class="featured">
                                <a href="#" class="featured-img"
                                    style="background-image: url(https://editorialist.com/wp-content/uploads/2022/06/1-Womens-Gucci-Tennis-1977-sneaker.jpg"></a>
                                <div class="desc">
                                    <h2 id="women"><a href="#">GUCCI</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center" id="featured-images">
                            <div class="featured">
                                <a href="#" class="featured-img"
                                    style="background-image: url(https://assets.adidas.com/images/w_600,f_auto,q_auto/a8eb3fa09d7a4698a41cab9e010ca55c_9366/X9000L3_Shoes_Black_FV4399_01_standard.jpg"></a>
                                <div class="desc">
                                    <h2 id="women"><a href="#">ADIDAS</a></h2>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="production-product">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center head-heading">
                        <h2>Best Sellers</h2>
                    </div>
                </div>
                <div class="row row-pb-md">
                    @foreach ($data as $datas)
                        <div class="col-lg-3 mb-4 text-center">
                            <div class="product-entry border">
                                <a href="#" class="prod-img">
                                    <img src="{{ $datas->Images }}" class="img-fluid" alt="">
                                </a>
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
                <div style="
					display: flex;
					justify-content: center; ">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
    <div class="production-product">
        <div class="container-fluid">
            <div class="col-sm-8 offset-sm-2 text-center head-heading">
                <h2>COLLECTIONS</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 text-center" id="featured-images">
                    <div class="featured">
                        <a href="#" class="featured-img"
                            style="background-image: url(https://media.dunelondon.com/image/upload/v1661936451/core/plp-header/DL_AW22_MENS_SCHEMER__BROWN_700x1000.png"></a>
                        <div class="desc">
                            <h2><a href="#">Shop Men's Collection</a></h2>
                        </div>
                    </div>
                </div>
                
                    <div class="col-lg-6 text-center" id="featured-images">
                        <div class="featured">
                            <a href="#" class="featured-img"
                                style="background-image: url(https://www.shoe-tease.com/wp-content/uploads/2019/12/Black-Womens-Waterproof-Combat-Boots-Cougar-Delson.jpg"></a>
                            <div class="desc">
                                <h2 id="women"><a href="#">Shop Women's Collection</a></h2>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fa-solid fa-arrow-up"></i></a>
    </div>
@endsection
