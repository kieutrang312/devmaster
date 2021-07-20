@extends('shop.layout.main')

@section('content')

    <style>
    </style>
    <div class="wrap-breadcrumb">
        <div class="clearfix container">
            <div class="row main-header">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                    <ol class="breadcrumb breadcrumb-arrows">
                        <li><a href="/" target="_self">Trang chủ</a></li>
                        <li>
                            @foreach($categories as $cate)
                                @if($product->category_id === $cate->id)
                                    <a href="" target="_self">{{ $cate->name }}</a>
                                @endif
                            @endforeach

                        </li>
                        <li class="active"><span> {{$product->name}}</span></li>

                    </ol>
                </div>
            </div>
        </div>

    </div>
    <section id="content" class="clearfix container">
        <div class="row">
            <div id="product" class="content-pages" data-sticky_parent>
                <div class="col-md-3 col-sm-12 col-xs-12  leftsidebar-col" data-sticky_column>
                    <div class="group_sidebar">

                        <div class="list-group navbar-inner ">


                            <div class="mega-left-title btn-navbar title-hidden-sm">
                                <h3 class="sb-title">Danh mục </h3>
                            </div>

                            <ul class="nav navs sidebar menu" id='cssmenu'>




                                <li class="item  first">
                                    <a href="/collections/onsale">
                                        <span>Sản phẩm khuyến mãi</span>
                                    </a>
                                </li>





                                <li class="item  ">
                                    <a href="/collections/hot-products">
                                        <span>Sản phẩm nổi bật</span>
                                    </a>
                                </li>





                                <li class="item  last">
                                    <a href="/collections/all">
                                        <span>Tất cả sản phẩm</span>
                                    </a>
                                </li>


                            </ul>

                        </div>

                        <!-- Banner quảng cáo -->
                        <div class="list-group_l banner-left hidden-sm hidden-xs">


                        </div>
                    </div>


                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" data-sticky_column>
                    <div id="wrapper-detail" class="product-page">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div id="surround">



                                    <a class="slide-prev slide-nav" href="javascript:">
                                        <i class="fa fa-arrow-circle-o-left fa-2"></i>
                                    </a>
                                    <a class="slide-next slide-nav" href="javascript:">
                                        <i class="fa fa-arrow-circle-o-right fa-2"></i>
                                    </a>

                                    <img class="product-image-feature"
                                         src="{{ asset($product->image) }}"
                                         alt="ĐỒNG HỒ NAM TEVISE 1952 CHẠY CƠ CỰC CHẤT">

                                    <div id="sliderproduct" class="">
                                        <ul class="slides">

                                            <li class="product-thumb">
                                                <a href="javascript:"
                                                   data-image="{{ asset($product->image) }}"
                                                   data-zoom-image="{{ asset($product->image) }}"
                                                   src="{{ asset($product->image) }}">
                                                    <img alt=" "
                                                         data-image="{{ asset($product->image) }}"
                                                         src="{{ asset($product->image) }}">
                                                </a></li>

                                            <li class="product-thumb">
                                                <a href="javascript:"
                                                   data-image="{{ asset($product->image) }}"
                                                   data-zoom-image="{{ asset($product->image) }}"
                                                   src="{{ asset($product->image) }}">
                                                    <img alt=" "
                                                         data-image="{{ asset($product->image) }}"
                                                         src="{{ asset($product->image) }}">
                                                </a></li>

                                            <li class="product-thumb">
                                                <a href="javascript:"
                                                   data-image="./product.hstatic.net/1000177652/product/8_b315af57d3ff4e058cf18a7c6d3c06f6_master.jpg"
                                                   data-zoom-image="./product.hstatic.net/1000177652/product/8_b315af57d3ff4e058cf18a7c6d3c06f6_master.jpg"
                                                   src="./product.hstatic.net/1000177652/product/8_b315af57d3ff4e058cf18a7c6d3c06f6_master.jpg">
                                                    <img alt="ĐỒNG HỒ NAM TEVISE 1952 CHẠY CƠ CỰC CHẤT"
                                                         data-image="./product.hstatic.net/1000177652/product/8_b315af57d3ff4e058cf18a7c6d3c06f6_master.jpg"
                                                         src="./product.hstatic.net/1000177652/product/8_b315af57d3ff4e058cf18a7c6d3c06f6_small.jpg">
                                                </a></li>

                                            <li class="product-thumb">
                                                <a href="javascript:"
                                                   data-image="./product.hstatic.net/1000177652/product/9_master.jpg"
                                                   data-zoom-image="./product.hstatic.net/1000177652/product/9_master.jpg"
                                                   src="./product.hstatic.net/1000177652/product/9_master.jpg">
                                                    <img alt="ĐỒNG HỒ NAM TEVISE 1952 CHẠY CƠ CỰC CHẤT"
                                                         data-image="./product.hstatic.net/1000177652/product/9_master.jpg"
                                                         src="./product.hstatic.net/1000177652/product/9_small.jpg">
                                                </a></li>

                                        </ul>
                                    </div>





                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="product-title">
                                    <h1>{{$product->name}}</h1>

                                    <span id="pro_sku"></span>

                                </div>
                                <div class="product-price" id="price-preview">

                                    <span>{{ number_format($product->sale, 0,",",".") }} đ </span><del>{{ number_format($product->price, 0,",",".") }} đ </del>


                                </div>


                                    <div class="select clearfix" style="display:none">
                                        <select id="product-select" name="id" style="display:none">

                                            <option value="1012006173">Default Title - 800,000₫</option>

                                        </select>
                                    </div>

                                    <div class="select-wrapper ">
                                        <label>Số lượng</label>
                                        <input id="quantity" type="number" name="quantity" min="1" value="1"
                                               class="tc item-quantity" /> <br>

                                         @if ($product->stock > 0)
                                                Còn hàng
                                            @else
                                                Hết hàng
                                            @endif</button>
                                    </div>


                                    <div class="row">
{{--                                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">--}}
{{--                                            <button id=""--}}
{{--                                                    class="btn-detail btn-color-add btn-min-width btn-mgt"--}}
{{--                                                    name="add"><a>--}}
{{--                                                Thêm vào giỏ </a>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}

                                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                            <a href="{{ route('shop.addToCart', ['id' => $product->id]) }}">
                                            <button id=""
                                                    class="btn-detail btn-color-buy btn-min-width btn-mgt">
                                                    Thêm giỏ hàng
                                            </button>
                                            </a>
                                    </div>


                                <div class="pt20">
                                    <!-- Begin tags -->

                                    <div class="tag-wrapper">
                                        <label>
                                            Tags:
                                        </label>
                                        <ul class="tags">

                                            <li class="active">
                                                <a href="/collections/all/phu-kien-nam">phụ kiện nam</a>
                                            </li>

                                            <li class="active">
                                                <a href="/collections/all/thoi-trang-nam">thời trang nam</a>
                                            </li>

                                            <li class="active">
                                                <a href="/collections/all/dong-ho-co">đồng hồ cơ</a>
                                            </li>

                                            <li class="active">
                                                <a href="/collections/all/dong-ho">đồng hồ</a>
                                            </li>

                                            <li class="active">
                                                <a href="/collections/all/tevise">tevise</a>
                                            </li>

                                        </ul>
                                    </div>


                                    <!-- End tags -->
                                </div>


                                <div class="pt20">
                                    <!-- Begin social icons -->
                                    <div class="addthis_toolbox addthis_default_style ">

                                        <div class="info-socials-article clearfix">
                                            <div class="box-like-socials-article">
                                                <div class="fb-send"
                                                     data-href="/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat">
                                                </div>
                                            </div>
                                            <div class="box-like-socials-article">
                                                <div class="fb-like"
                                                     data-href="/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat"
                                                     data-layout="button_count" data-action="like">
                                                </div>
                                            </div>
                                            <div class="box-like-socials-article">
                                                <div class="fb-share-button"
                                                     data-href="/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat"
                                                     data-layout="button_count">
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- End social icons -->
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">
                                <div role="tabpanel" class="product-comment">
                                    <!-- Nav tabs -->
                                    <ul class="nav visible-lg visible-md" role="tablist">
                                        <li role="presentation" class="active"><a data-spy="scroll"
                                                                                  data-target="#mota" href="#mota" aria-controls="mota"
                                                                                  role="tab">Mô tả sản phẩm</a></li>

                                    </ul>
                                    <!-- Tab panes -->

                                    <div id="mota">

                                        <div class="title-bl visible-xs visible-sm">
                                            <h2>Mô tả</h2>
                                        </div>

                                        <div class="product-description-wrapper">

                                            <table
                                                   >
                                                <tbody>
                                                <tr style=""
                                                    data-mce-style="">

																		<span style=""
                                                                              data-mce-style="font-size: 15px;">
																			 {!! $product->description !!}</span></td>
                                                </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    <div id="binhluan">
                                        <div class="title-bl">
                                            <h2>Bình luận</h2>
                                        </div>
                                        <div class="product-comment-fb">
                                            <div id="fb-root"></div>
                                            <div class="fb-comments"
                                                 data-href="http://happylive.vn/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat"
                                                 data-numposts="5" width="100%" data-colorscheme="light">
                                            </div>
                                            <!-- script comment fb -->
                                            <script type="text/javascript">
                                                (function (d, s, id) {
                                                    var js, fjs = d.getElementsByTagName(s)[0];
                                                    if (d.getElementById(id)) return;
                                                    js = d.createElement(s);
                                                    js.id = id;
                                                    js.src = "./connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
                                                    fjs.parentNode.insertBefore(js, fjs);
                                                }(document, 'script', 'facebook-jssdk'));
                                            </script>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12  list-like">
                        <div id="like">
                            <div class="title-like">
                                <h2>Sản phẩm khác</h2>
                            </div>

                            <div class="row product-list ">
                                <div class="content-product-list">
                                    @foreach($relatedProducts as $item)
                                    <div class="col-md-3 col-sm-6 col-xs-12 pro-loop">

                                        <div class="product-block product-resize">
                                            <div class="product-img image-resize view view-third">


                                                <a href="{{ route('shop.detailProduct',['slug' => $item->slug]) }}"
                                                   title="">
                                                    <img class="first-image has-img"
                                                         alt=""
                                                         src="{{ asset($item->image) }}" />

                                                    <img class="second-image"
                                                         src="{{ asset($item->image) }}"
                                                         alt=" " />

                                                </a>
                                                <div class="actionss">
                                                    <div class="btn-cart-products">
                                                        <a href="javascript:void(0);"
                                                           onclick="add_item_show_modalCart(1012030836)">
                                                            <i class="fa fa-shopping-bag"
                                                               aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                    <div class="view-details">
                                                        <a href="/collections/dong-ho-chong-nuoc/products/dong-ho-nam-skmei-kim-xanh-duong"
                                                           class="view-detail">
                                                            <span><i class="fa fa-clone"> </i></span>
                                                        </a>
                                                    </div>
                                                    <div class="btn-quickview-products">
                                                        <a href="javascript:void(0);" class="quickview"
                                                           data-handle="/products/dong-ho-nam-skmei-kim-xanh-duong"><i
                                                                class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="product-detail clearfix">


                                                <!-- sử dụng pull-left -->
                                                <h3 class="pro-name"><a
                                                        href="/collections/dong-ho-chong-nuoc/products/dong-ho-nam-skmei-kim-xanh-duong"
                                                        title="ĐỒNG HỒ NAM SKMEI KIM XANH DƯƠNG">{{$item->name}} </a></h3>
                                                <div class="pro-prices">
                                                    <p class="pro-price">{{ number_format($item->sale, 0,",",".") }} đ</p>
                                                    <p class="pro-price-del text-left"><del
                                                            class="compare-price">{{ number_format($item->price, 0,",",".") }} đ</del></p>


                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                    @endforeach
                                </div>
                            </div>




                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection
