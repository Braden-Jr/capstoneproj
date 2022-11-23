@extends('master')
@section('contents')
    <div class="loading-loader"></div>

    <div id="page">

        <aside id="clr-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/2bcc7b3fc0164b349f5aaed201048fe1_9366/Fluidflow_2.0_Shoes_Blue_GW4012_01_standard.jpg);">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li
                        style="background-image: url(https://www.chanel.com/images//t_one///q_auto:good,f_auto,fl_lossy,dpr_1.2/w_620/loafers-black-patent-calfskin-metal-patent-calfskin-metal-packshot-artistique-vue1-g39697x5682894305-9516401819678.jpg);">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li
                        style="background-image: url(https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_1500,h_1500/global/376807/03/sv01/fnd/PHL/fmt/png/Deviate-NITRO-);">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="introduction-intro">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="intro">The journey begins with the perfect pair.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="production-product">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <div class="featured">
                            <a href="#" class="featured-img"
                                style="background-image: url('https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/2bcc7b3fc0164b349f5aaed201048fe1_9366/Fluidflow_2.0_Shoes_Blue_GW4012_01_standard.jpg');"></a>
                            <div class="desc">
                                <h2><a href="#">Shop Men's Collection</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="featured">
                            <a href="#" class="featured-img"
                                style="background-image: url(https://media.gucci.com/style/HEXEAF2DC_Center_0_0_2400x2400/1656519346/707703_KSP20_8461_001_100_0000_Light-Gucci-Lovelight-crystal-ballet-flat-with-Horsebit.jpg);"></a>
                            <div class="desc">
                                <h2><a href="#">Shop Women's Collection</a></h2>
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

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fa-solid fa-arrow-up"></i></a>
    </div>
@endsection
