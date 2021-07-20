    @extends('shop.layout.main')

    @section('content')
        <!-- Begin slider -->
        <div class="slider-default bannerslider">
            <div class="hrv-banner-container">
                <div class="hrvslider">
                    <ul class="slides">
                        @foreach($sildeBanners as $key => $slideBanner)
                            <li>
                                <a href="" class="hrv-url">
                                    <img class="img-responsive" src="{{ asset($slideBanner->image) }}"
                                         alt="Thời trang nam" />
                                </a>
                                <div id="hrv-banner-caption{{$key + 1}}" class="hrv-caption hrv-banner-caption">
                                    <div class="container">
                                        <div class="hrv-caption-inner">
                                            <div class="hrv-banner-content slider-{{$key + 1}}">
                                                <h2 class="hrv-title1">{{ $slideBanner->title }}</h2>
                                                <h3 class="hrv-title2">{{ $slideBanner->description }}</h3>
                                                <a href="/collections/dong-ho-nam-rolex" class="hrv-url">Xem
                                                    ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
        <!-- End slider -->
        <section id="content" class="clearfix container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- Content-->
                    <div class="main-content">
                        <!-- Sản phẩm trang chủ -->
                        @foreach($data as $item)
                        <div class="product-list clearfix" >
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <aside class="styled_header  use_icon ">
                                        <h3>{{ $item['category']->name }}</h3>
                                        <span class="icon"><img src="frontend/theme.hstatic.net/1000177652/1000229231/14/icon_featured.png?v=90" alt=""></span>
                                    </aside>
                                </div>
                            </div>
                            <!--Product loop-->
                            <div class="row content-product-list products-resize">
                                @foreach($item['products'] as $product)
                                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">
                                    <div class="product-block product-resize">
                                        <div class="product-img image-resize view view-third">


                                            <a href="{{ route('shop.detailProduct',['slug' => $product->slug]) }}" title="{{$product->slug}}">
                                                <img class="first-image has-img" alt=" {{$product->name}} " src="{{ asset($product->image) }}"  />

                                                <img  class ="second-image" src="{{ asset($product->image) }}"  alt=" " />

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href=frontend/"javascript:void(0);" onclick="add_item_show_modalCart(1012006083)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="" class="view-detail" >
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href=frontend/"javascript:void(0);" class="quickview" data-handle="/products/dong-ho-nam-tevise-mat-trang-chay-co-cuc-chat"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">
                                            <!-- sử dụng pull-left -->
                                            <h3 class="pro-name"><a href="" title="">{{$product->name}}</a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">{{ number_format($product->sale, 0,",",".") }} đ </p>
                                                <p class="pro-price-del text-left"><del class="compare-price">{{ number_format($product->price, 0,",",".") }} đ</del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12  pull-center center">
                                    <a class="btn btn-readmore" href="{{ route('shop.listProduct',['slug' => $item['category']->slug]) }}" role="button">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <!--Product loop-->
                        @endforeach


                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="animation fade-in home-banner-1">
                                    <aside class="banner-home-1" >

                                        <div class="divcontent"><span class="ad_banner_1">Miễn phí vận chuyển<strong class="ad_banner_2" >Với tất cả đơn hàng trên 500k thành phố Hà Nội</strong></span>
                                            <span class="ad_banner_desc" >Miễn phí 2 ngày vận chuyển với đơn hàng trên 500k trừ trực tiếp khi thanh toán</span>
                                        </div>
                                        <div class="divstyle" style="border-color:;"></div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                               <div class="banner-bottom">
                            <div class="row">
                                @foreach($bottomBanners as $key => $bottomBanner)
                                <div class="col-xs-12 col-sm-6 home-category-item-2">
                                    <div class="block-home-category">
                                        <a href="{{ route('shop.listProduct',['slug' => $bottomBanner->url]) }}">
                                            <img class="b-lazy b-loaded" src="{{ asset($bottomBanner->image) }}"  alt="">
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <!-- end Content-->
                </div>
            </div>
{{--            6. latest news area--}}
{{--            -------------------------*/--}}
            <style>

                .latest-news-area img{
                    width:100%;
                }
                .latest-news-row{
                    margin-top:50px;
                }
                .latest-news-row h2.center-title a{
                    color:#3a3d42;
                    transition: all 0.3s ease 0s;
                }
                .latest-news-row h2.center-title a:hover{
                    color:#FF4F4F;
                }
                .latest-news-carousel-wrapper{}
                .latest-news-carousel{}
                .latest-news-post{}
                .single-latest-post{
                    margin-bottom:15px;
                    transition: all 0.3s ease 0s;
                }
                .single-latest-post a {
                    display: block;
                    overflow: hidden;
                }

                .single-latest-post h2 {}

                .single-latest-post h2 a {
                    color: #000;
                    font-size: 15px;
                    line-height: 20px;
                    text-transform: capitalize;
                    transition: all 0.3s ease 0s;
                    margin: 10px 0 10px;
                }

                .single-latest-post h2 a:hover {
                    color: #FF4F4F;
                }

                .single-latest-post img {
                    transition: all 0.3s ease 0s;
                    overflow: hidden;
                }

                .single-latest-post:hover img {
                    transform: scale(1.3) rotate(5deg);
                    -webkit-transform: scale(1.3) rotate(5deg);
                    -moz-transform: scale(1.3) rotate(5deg);
                    -ms-transform: scale(1.3) rotate(5deg);
                    -o-transform: scale(1.3) rotate(5deg);
                }

                .single-latest-post p {
                    margin: 0 0 9px;
                    color: #6d6d6d;
                    font-size: 12px;
                    line-height: 15px;
                }

                .read-more {
                    text-align: right;
                }

                .read-more a {
                    color: #000;
                    font-size: 12px;
                    line-height: 15px;
                    padding: 10px 0 0;
                }

                .read-more i {
                    padding-left: 6px;
                }

                .read-more a:hover {
                    color: #FF4F4F;
                }

                .latest-post-info {
                    border-bottom: 2px solid #b0b1b3;
                    border-top: 1px solid #b0b1b3;
                    display: block;
                    overflow: hidden;
                    padding: 7px 0;
                    font-size: 13px;
                }

                .latest-post-info i {
                    padding-right: 6px;
                    position: relative;
                    font-size: 14px;
                    top: 0px;
                }
                .owl-item {
                    display: inline-block;

                }
            </style>
            <aside class="styled_header use_icon ">
                <h3>Tin tức</h3>
                <span class="icon"><img src="frontend/theme.hstatic.net/1000177652/1000229231/14/icon_featured.png?v=90" alt=""></span>
            </aside>
            <section class="latest-news-area">
                <div class="container">
                    <div class="row">
                        @foreach($articles as $key => $article )
                        <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">
                            <div class="owl-item" style="width: 280px;">
                                <div class="item">
                                    <div class="latest-news-post">
                                        <div class="single-latest-post">
                                            <a href="{{route('shop.detailArticle', ['slug' => $article->slug]) }}"><img src="{{ asset($article->image) }}" style="max-height: 180px" alt=""></a>
                                            <h2><a href="{{route('shop.detailArticle', ['slug' => $article->slug]) }}">{!!  str_limit($article->title, $limit = 70, $end = '...') !!}</a></h2>
                                            <div class="latest-post-info">
                                                <i class="fa fa-calendar"></i><span>{{$article->created_at}}</span>
                                                <p>{!!  str_limit($article->summary, $limit = 100, $end = '...') !!}</p>
                                            </div>
                                            <div class="read-more">
                                                <a href="{{route('shop.detailArticle', ['slug' => $article->slug]) }}">Chi tiết <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </section>

    @endsection
