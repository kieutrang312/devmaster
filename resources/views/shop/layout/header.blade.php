<header class="header bkg visible-lg">
    <div class="container clearfix">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 logo">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-7 col-xs-7">
                        <!-- LOGO -->

                        <h1>
                            <a href=frontend/"">
                               <img src="{{asset($setting->image)}}" alt="{{$setting->company}}" class="img-responsive logoimg"/>
                            </a>
                        </h1>

                        <h1 style="display:none">
                            <a href="frontend">Happylive</a>
                        </h1>


                    </div>
                    <div class="hidden-lg hidden-md col-sm-5 col-xs-5 mobile-icons" >
                        <div>
                            <a href=frontend/"#" title="Xem giỏ hàng" class="mobile-cart"><span>5</span></a>
                            <a href=frontend/"#" id="mobile-toggle"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
                <aside class="top-info">
                    <div class="cart-info hidden-xs">
                        <a class="cart-link" href=frontend/"/cart">
		<span class="icon-cart">
		</span>
                            <div class="cart-number">
                                5
                            </div>
                        </a>
                        <div class="cart-view clearfix" style="display: none;">
                            <table id="clone-item-cart" class="table-clone-cart">
                                <tr class="item_2 hidden">
                                    <td class="img"><a href=frontend/"" title=""><img src="" alt="" /></a></td>
                                    <td>
                                        <a class="pro-title-view" href=frontend/"" title=""></a>
                                        <span class="variant"></span>
                                        <span class="pro-quantity-view"></span>
                                        <span class="pro-price-view"></span>
                                        <span class="remove_link remove-cart">
					</span>
                                    </td>
                                </tr>
                            </table>
                            <table id="cart-view">


                                <tr>
                                    <td class="img">
                                        <a href="frontend/products/dong-ho-nam-skmei-kim-xanh-duong">
                                            <img src="frontend/product.hstatic.net/1000177652/product/1_e0ed7c0240734782a8268793dce0b9b8_small.jpg " alt="ĐỒNG HỒ NAM SKMEI KIM XANH DƯƠNG" />
                                        </a>
                                    </td>
                                    <td>
                                        <a class="pro-title-view" href=frontend/"/products/dong-ho-nam-skmei-kim-xanh-duong" title="ĐỒNG HỒ NAM SKMEI KIM XANH DƯƠNG">ĐỒNG HỒ NAM SKMEI KIM XANH DƯƠNG</a>
                                        <span class="variant">

					</span>
                                        <span class="pro-quantity-view">2</span>
                                        <span class="pro-price-view">499,000₫</span>
                                        <span class="remove_link remove-cart">
						<a href=frontend/'javascript:void(0);' onclick='deleteCart(1012030836)' ><i class='fa fa-times'></i></a>
					</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="img">
                                        <a href="frontend/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat">
                                            <img src="frontend/product.hstatic.net/1000177652/product/7_0590d26379fb4da3ba8d9b57564ee6b0_small.jpg " alt="ĐỒNG HỒ NAM TEVISE 1952 CHẠY CƠ CỰC CHẤT" />
                                        </a>
                                    </td>
                                    <td>
                                        <a class="pro-title-view" href=frontend/"/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat" title="ĐỒNG HỒ NAM TEVISE 1952 CHẠY CƠ CỰC CHẤT">ĐỒNG HỒ NAM TEVISE 1952 CHẠY CƠ CỰC CHẤT</a>
                                        <span class="variant">

					</span>
                                        <span class="pro-quantity-view">3</span>
                                        <span class="pro-price-view">800,000₫</span>
                                        <span class="remove_link remove-cart">
						<a href=frontend/'javascript:void(0);' onclick='deleteCart(1012006173)' ><i class='fa fa-times'></i></a>
					</span>
                                    </td>
                                </tr>


                            </table>
                            <span class="line"></span>
                            <table class="table-total">
                                <tr>
                                    <td class="text-left">TỔNG TIỀN:</td>
                                    <td class="text-right" id="total-view-cart">3,398,000₫</td>
                                </tr>
                                <tr>
                                    <td><a href="frontend/cart" class="linktocart">Xem giỏ hàng</a></td>
                                    <td><a href="frontend/checkout" class="linktocheckout">Thanh toán</a></td>
                                </tr>
                            </table>
                        </div>

                    </div>

                    <div class="navholder">
                        <nav id="subnav">
                            <ul>

                                <li>
                                    <a href=frontend/"#"><i class="fa fa-phone" aria-hidden="true"></i> {{ $setting -> hotline }}</a>
                                </li>




                                <li><a class="reg" href="{{route('shop.cart')}}" title="giỏ hàng">Giỏ hàng</a></li>
                                <li><a class="log" href="frontend/account/login" title="Đăng nhập">Đăng nhập</a></li>

                            </ul>
                        </nav>
                        <p style="text-align: center">Khẳng định thương hiệu Việt</p>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</header>
<nav class="navbar-main navbar navbar-default cl-pri">
    <!-- MENU MAIN -->
    <div class="container nav-wrapper check_nav">
        <div class="row">
            <div class="navbar-header">
                <div class="mobile-menu-icon-wrapper">
                    <div class="menu-logo">

                        <h1 class="logo logo-mobile">
                            <a href=frontend/"http://happylive.vn">
                                <img src="frontend/theme.hstatic.net/1000177652/1000229231/14/logo.png?v=90" alt="Happylive" class="img-responsive logoimg"/>
                            </a>
                        </h1>

                        <div class="nav-login">
                            <a href="frontend/account" class="cart " title="Tài khoản">
                                <svg class="icon icon-user" viewBox="0 0 32 32">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href=frontend/"#icon-user">
                                    </use>
                                </svg>
                            </a>
                        </div>
                        <div class="menu-btn click-menu-mobile "><a href="frontend/menu-mobile" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span></a>
                        </div>

                        <div id="cart-targets" class="cart">
                            <a href="frontend/cart" class="cart " title="Giỏ hàng">
                                            <span >

                                                <svg class="shopping-cart">
                                                    <use xmlns:xlink="./www.w3.org/1999/xlink" xlink:href=frontend/"#icon-add-cart" />
                                                </svg>
                                            </span>
                                <span id="cart-count" class="cart-number">0</span>
                            </a>
                        </div>
                    </div>
                    <div class="search-bar-top">
                        <div class="search-input-top">
                            <form  action="/search">
                                <input type="hidden" name="type" value="product" />
                                <input type="text" name="q" placeholder="Tìm kiếm sản phẩm ..." />
                                <button type="submit" class="icon-search" >
                                    <svg class="icon-search_white">
                                        <use xmlns:xlink="./www.w3.org/1999/xlink" xlink:href=frontend/"#icon-search_white" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav clearfix">


                    <li>
                        <a href="/" class=" current" title="Trang chủ">
                            <span>Trang chủ</span>
                        </a>
                    </li>


                    @if(!empty($categories))
                        @foreach($categories as $category)
                            @if($category->parent_id == 0)
                        <li class="">
                        <a href="{{ route('shop.listProduct',['slug' => $category->slug]) }}" title="" class="">
                            <span>{{ $category->name }}</span>
                        </a>

                            <ul class="dropdown-menu" role="menu">
                                @foreach($categories as $key => $child)
                                    @if($child->parent_id != 0 && $child->parent_id == $category->id )
                                <li>
                                    <a href="{{ route('shop.listProduct',['slug' => $child->slug]) }}" title="">{{$child->name }}</a>

                                </li>
                                    @endif
                                @endforeach
                            </ul>

                        </li>
                            @endif
                        @endforeach
                    @endif

                    <li>
                        <a href="{{route('shop.contact')}}" class="" title="Liên hệ">
                            <span>Liên hệ</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('shop.listArticle')}}" class="" title="Tin tức">
                            <span>Tin tức</span>
                        </a>
                    </li>
                </ul>

            </div>
            <div  class="hidden-xs pull-right right-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="col-md-12">

                        <div class="search-bar">

                            <div class="">
                                <form  action="/search">
                                    <input type="hidden" name="type" value="product" />
                                    <input type="text" name="q" placeholder="Tìm kiếm..."  autocomplete="off" />
                                </form>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- End container  -->
    <script>

        $(window).resize(function () {
            $('li.dropdown li.active').parents('.dropdown').addClass('active');
            if ($('.right-menu').width() + $('#navbar').width() > $('.check_nav.nav-wrapper').width() - 40) {
                $('.nav-wrapper').addClass('responsive-menu');
            }
            else {
                $('.nav-wrapper').removeClass('responsive-menu');
            }
        })

        $(document).on("click", ".mobile-menu-icon .dropdown-menu ,.drop-control .dropdown-menu, .drop-control .input-dropdown", function (e) {
            e.stopPropagation();
        });
    </script>
    <script>
        $(function () {
            $('nav#menu-mobile').mmenu();
        });
        $(document).ready(function () {
            flagg = true;
            if (flagg) {
                $('.click-menu-mobile a').click(function () {
                    $('#menu-mobile').removeClass('hidden');
                    flagg = false;
                })
            }
        })



    </script>
</nav>



<script>
    jQuery(document).ready(function(){
        if ( $('.slides li').size() > 0 ) {
            $(".hrv-banner-container .slides").owlCarousel({
                singleItem: true,
                autoPlay : 5000,
                items : 1,
                itemsDesktop : [1199,1],
                itemsDesktopSmall : [980,1],
                itemsTablet: [768,1],
                itemsMobile : [479,1],
                slideSpeed : 500,
                paginationSpeed : 500,
                rewindSpeed : 500,
                addClassActive: true,
                navigation : true,
                stopOnHover : true,
                pagination : false,
                scrollPerPage:true,
                afterMove: nextslide,
                afterInit: nextslide,
            });
            function nextslide() {
                $(".hrv-banner-container .owl-item .hrv-banner-caption").css('display','none');
                $(".hrv-banner-container .owl-item .hrv-banner-caption").removeClass('hrv-caption')
                $(".hrv-banner-container .owl-item.active .hrv-banner-caption").css('display','block');

                var heading = $('.hrv-banner-container .owl-item.active .hrv-banner-caption').clone().removeClass();
                $('.hrv-banner-container .owl-item.active .hrv-banner-caption').remove();
                $('.hrv-banner-container .owl-item.active>li').append(heading);
                $('.hrv-banner-container .owl-item.active>li>div').addClass('hrv-banner-caption hrv-caption');
            }

        }
    })

</script>
