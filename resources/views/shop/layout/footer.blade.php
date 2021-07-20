<footer id="footer">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-md-3 col-xs-12 clear-sm">
                    <div class="widget-wrapper animated">

                        <h3 class="title title_left">Giới thiệu</h3>

                        <div class="inner about_us">

                            <p class="message">{{$setting -> summary}}</p>

                            <ul class="list-unstyled">

                                <li>
                                    <i class="fa fa-home"></i>{{ $setting -> address }}
                                </li>


                                <li>
                                    <i class="fa fa-envelope-o"></i> <a href=frontend/"mailto:Suport@oxywatch.vn">{{ $setting -> email }}</a>
                                </li>


                                <li>
                                    <i class="fa fa-phone"></i>{{ $setting -> hotline }}
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-2 col-xs-12 clear-sm">
                    <div class="widget-wrapper animated">

                        <h3 class="title title_left">Liên kết</h3>

                        <div class="inner">

                            <ul class="list-unstyled list-styled">

                                <li>
                                    <a href="/">Trang chủ</a>
                                </li>

                                @if(!empty($categories))
                                    @foreach($categories as $category)
                                        @if($category->parent_id == 0)
                                            <li class="">
                                                <a href="{{ route('shop.listProduct',['slug' => $category->slug]) }}" title="" class="">
                                                    <span>{{ $category->name }}</span>
                                                </a>
                                        @endif
                                    @endforeach
                                @endif
                                <li>
                                    <a href="{{route('shop.contact')}}">Liên hệ</a>
                                </li>
                                <li>
                                    <a href="{{route('shop.listArticle')}}">Tin tức</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-3 col-xs-12 clear-sm">
                    <div class="widget-wrapper animated">


                        <h3 class="title title_left">Đăng kí nhận tin</h3>

                        <div class="inner">


                            <form accept-charset='UTF-8' action='/account/contact' class='contact-form' method='post'>
                                <input name='form_type' type='hidden' value='customer'>
                                <input name='utf8' type='hidden' value='✓'>

                                <div class="group-input">
                                    <input type="hidden" id="contact_tags" name="contact[tags]" value="khách hàng tiềm năng, bản tin" />
                                    <input type="email" required="required" name="contact[email]" id="contact_email" />
                                    <span class="bar"></span>
                                    <label>Nhập email của bạn</label>
                                    <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                                </div>





                            </form>


                            <div class="caption">Hãy nhập email của bạn vào đây để nhận tin!</div>

                        </div>

                    </div>
                </div>


                <div class="col-sm-6 col-md-4 col-xs-12 clear-sm">
                    <div class="widget-wrapper animated">

                        <h3 class="title title_left">Kết nối với chúng tôi</h3>
                        <div id="widget-social" class="social-icons">
                            <ul class="list-inline">

                                <li>
                                    <a target="_blank" href="/" class="social-wrapper facebook">
        <span class="social-icon">
          <i class="fa fa-facebook"></i>
        </span>
                                    </a>
                                </li>


                                <li>
                                    <a target="_blank" href="/" class="social-wrapper twitter">
        <span class="social-icon">
          <i class="fa fa-twitter"></i>
        </span>
                                    </a>
                                </li>


                                <li>
                                    <a target="_blank" href="/" class="social-wrapper pinterest">
        <span class="social-icon">
          <i class="fa fa-pinterest"></i>
        </span>
                                    </a>
                                </li>


                                <li>
                                    <a target="_blank" href="/" class="social-wrapper google">
        <span class="social-icon">
          <i class="fa fa-google-plus"></i>
        </span>
                                    </a>
                                </li>


                                <li>
                                    <a target="_blank" href="/" class="social-wrapper youtube">
        <span class="social-icon">
          <i class="fa fa-youtube"></i>
        </span>
                                    </a>
                                </li>


                                <li>
                                    <a target="_blank" href="/" class="social-wrapper instagram">
        <span class="social-icon">
          <i class="fa fa-instagram"></i>
        </span>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container copyright">
            <p>Copyright &copy; 2017 OxyWatch. <a target='_blank' href=frontend/'https://www.haravan.com'>Powered by Haravan</a>.</p>

        </div>
    </div>
</footer>
<a href="frontend" class="scrollToTop show">
    <i class="fa fa-chevron-up"></i>
</a>

<!--Scroll to Top-->
<div  style="display:none" id="myCart" class="modal fade bs-example-modal-lg in" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false" style="display: block;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Bạn có 9 sản phẩm trong giỏ hàng.</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="hrv-close-modal"></span>
                </button>
            </div>
            <form action="/cart" method="post" id="cartform" style="display: block;">
                <div class="modal-body">
                    <table style="width:100%;" id="cart-table">
                        <tbody><tr>
                            <th></th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá tiền</th>
                            <th></th>
                        </tr>
                        <tr class="line-item original">
                            <td class="item-image"></td>
                            <td class="item-title">
                                <a></a>
                            </td>
                            <td class="item-quantity"></td>
                            <td class="item-price"></td>
                            <td class="item-delete text-center"></td>
                        </tr>
                        <tr class="line-item">
                            <td class="item-image"><img src="frontend/product.hstatic.net/1000177652/product/7_0590d26379fb4da3ba8d9b57564ee6b0_small.jpg"></td>
                            <td class="item-title">
                                <a href="frontend/products/dong-ho-nam-tevise-1952-chay-co-cuc-chat">ĐỒNG HỒ NAM TEVISE 1952 CHẠY CƠ CỰC CHẤT<br><span></span></a>
                            </td>
                            <td class="item-quantity"><input id="quantity1" name="updates[]" min="1" type="number" value="3" class=""></td>
                            <td class="item-price">2,400,000₫</td>
                            <td class="item-delete text-center"><a href=frontend/"javascript:void(0);" onclick="deleteCart(1012006173)"><i class="fa fa-times"></i></a></td>
                        </tr><tr class="line-item">
                            <td class="item-image"><img src="frontend/product.hstatic.net/1000177652/product/1_e0ed7c0240734782a8268793dce0b9b8_small.jpg"></td>
                            <td class="item-title">
                                <a href="frontend/products/dong-ho-nam-skmei-kim-xanh-duong">ĐỒNG HỒ NAM SKMEI KIM XANH DƯƠNG<br><span></span></a>
                            </td>
                            <td class="item-quantity"><input id="quantity1" name="updates[]" min="1" type="number" value="6" class=""></td>
                            <td class="item-price">2,994,000₫</td>
                            <td class="item-delete text-center"><a href=frontend/"javascript:void(0);" onclick="deleteCart(1012030836)"><i class="fa fa-times"></i></a></td>
                        </tr></tbody></table>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="modal-note">
                                <textarea placeholder="Viết ghi chú" id="note" name="note" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="total-price-modal">
                                Tổng cộng : <span class="item-total">5,394,000₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div class="col-lg-6">
                            <div class="comeback">
                                <a href="frontend/collections/all">
                                    <i class="fa fa-caret-left mr10"></i>Tiếp tục mua hàng
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 text-right">
                            <div class="buttons btn-modal-cart">
                                <button type="submit" class="button-default" id="checkout" name="checkout">
                                    Đặt hàng
                                    <i class="fa fa-caret-right"></i>
                                </button>
                            </div>

                            <div class="buttons btn-modal-cart">
                                <button type="submit" class="button-default" id="update-cart-modal" name="">
                                    <i class="fa fa-caret-left"></i>
                                    Cập nhật
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" class="hidden">
    <symbol id="icon-add-cart">
        <svg xmlns="http://www.w3.org/2000/svg"   xmlns:xlink="http://www.w3.org/1999/xlink"  x="0px" y="0px"
             viewBox="0 0 512 512" enable-background="new 0 0 512 512">
            <g >
                <g>
                    <polygon points="447.992,336 181.555,336 69.539,80 0.008,80 0.008,48 90.477,48 202.492,304 447.992,304 		"/>
                </g>
                <path d="M287.992,416c0,26.5-21.5,48-48,48s-48-21.5-48-48s21.5-48,48-48S287.992,389.5,287.992,416z"/>
                <path d="M447.992,416c0,26.5-21.5,48-48,48s-48-21.5-48-48s21.5-48,48-48S447.992,389.5,447.992,416z"/>
                <g>
                    <polygon points="499.18,144 511.992,112 160.008,112 172.805,144 		"/>
                    <polygon points="211.195,240 223.992,272 447.992,272 460.805,240 		"/>
                    <polygon points="486.398,176 185.602,176 198.398,208 473.586,208 		"/>
                </g>
            </g>
        </svg>
    </symbol>
    <symbol id="icon-list-switch">
        <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 194.828 194.828" style="enable-background:new 0 0 194.828 194.828;" xml:space="preserve">
			<g>
                <g>
                    <g>
                        <path d="M190.931,17.534H3.897C1.745,17.534,0,19.279,0,21.431v19.483c0,2.152,1.745,3.897,3.897,3.897h187.034
										 c2.152,0,3.897-1.745,3.897-3.897V21.431C194.828,19.279,193.083,17.534,190.931,17.534z M187.034,37.017H7.793v-11.69h179.241
										 V37.017z"/>
                        <path d="M190.931,64.293H3.897C1.745,64.293,0,66.038,0,68.19v31.172c0,2.152,1.745,3.897,3.897,3.897h187.034
										 c2.152,0,3.897-1.745,3.897-3.897V68.19C194.828,66.038,193.083,64.293,190.931,64.293z M187.034,95.466H7.793v-23.38h179.241
										 V95.466z"/>
                        <path d="M190.931,122.741H3.897c-2.152,0-3.897,1.745-3.897,3.897v46.759c0,2.152,1.745,3.897,3.897,3.897h187.034
										 c2.152,0,3.897-1.745,3.897-3.897v-46.759C194.828,124.486,193.083,122.741,190.931,122.741z M187.034,169.5H7.793v-38.966
										 h179.241V169.5z"/>
                    </g>
                </g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
		</svg>

    </symbol>
    <symbol id="icon-sort-by">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve">
			<g>
                <polygon points="85.877,154.014 85.877,428.309 131.706,428.309 131.706,154.014 180.497,221.213 217.584,194.27 108.792,44.46
												 0,194.27 37.087,221.213 	"/>
                <polygon points="404.13,335.988 404.13,61.691 358.301,61.691 358.301,335.99 309.503,268.787 272.416,295.73 381.216,445.54
												 490,295.715 452.913,268.802 	"/>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
		</svg>
    </symbol>
    <symbol id="icon-search_white" viewBox="0 0 1024 1024">
        <path class="path1" d="M1014.176 968.256l-264.32-260.128c69.184-75.264 111.68-174.688 111.68-284.128 0-234.080-192.8-423.872-430.688-423.872s-430.72 189.792-430.72 423.872c0 234.112 192.864 423.872 430.72 423.872 102.752 0 197.088-35.552 271.072-94.688l265.376 261.12c12.928 12.736 33.952 12.736 46.88 0 12.96-12.672 12.96-33.376 0-46.048zM430.848 782.688c-201.312 0-364.48-160.64-364.48-358.688 0-198.080 163.168-358.656 364.48-358.656 201.28 0 364.448 160.576 364.448 358.656 0.032 198.048-163.168 358.688-364.448 358.688z"></path>
    </symbol>
    <symbol id="icon-user" viewBox="0 0 1024 1024">
        <title>user</title>
        <path class="path1" d="M622.826 702.736c-22.11-3.518-22.614-64.314-22.614-64.314s64.968-64.316 79.128-150.802c38.090 0 61.618-91.946 23.522-124.296 1.59-34.054 48.96-267.324-190.862-267.324s-192.45 233.27-190.864 267.324c-38.094 32.35-14.57 124.296 23.522 124.296 14.158 86.486 79.128 150.802 79.128 150.802s-0.504 60.796-22.614 64.314c-71.22 11.332-337.172 128.634-337.172 257.264h896c0-128.63-265.952-245.932-337.174-257.264z"></path>
    </symbol>
</svg>
