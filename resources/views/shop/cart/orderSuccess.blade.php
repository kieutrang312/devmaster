@extends('shop.layout.main')

@section('content')

    <div class="content">

        <div class="wrap">
            <div class="sidebar">
                <div class="sidebar-content">
                    <div class="order-summary order-summary-is-collapsed">
                        <h2 class="visually-hidden">Thông tin đơn hàng</h2>
                        <div class="order-summary-sections">
                            <div class="order-summary-section order-summary-section-product-list" data-order-summary-section="line-items">
                                <table class="product-table">
                                    <thead>
                                    <tr>
                                        <th scope="col"><span class="visually-hidden">Hình ảnh</span></th>
                                        <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                        <th scope="col"><span class="visually-hidden">Số lượng</span></th>
                                        <th scope="col"><span class="visually-hidden">Giá</span></th>
                                    </tr>
                                    </thead>

                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="main-content">
                    <div >
                        <div class="section">
                            <div class="section-header os-header">

                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#000" stroke-width="2" class="hanging-icon checkmark"><path class="checkmark_circle" d="M25 49c13.255 0 24-10.745 24-24S38.255 1 25 1 1 11.745 1 25s10.745 24 24 24z"></path><path class="checkmark_check" d="M15 24.51l7.307 7.308L35.125 19"></path></svg>

                                <div class="os-header-heading">
                                    <h2 class="os-header-title">

                                        Đặt hàng thành công

                                    </h2>
                                    <span class="os-order-number">
														    Mã đơn hàng #100010
													    </span>

                                    <span class="os-description">
															    Cám ơn bạn đã mua hàng!
														    </span>

                                </div>
                            </div>
                        </div>

                        <div class="section thank-you-checkout-info">
                            <div class="section-content">
                                <div class="content-box">
                                    <div class="content-box-row content-box-row-padding content-box-row-no-border">
                                        <h2>Thông tin đơn hàng</h2>
                                    </div>
                                    <div class="content-box-row content-box-row-padding">
                                        <div class="section-content">
                                            <div class="section-content-column">

                                                <h3>Thông tin giao hàng</h3>
                                                <p>
                                                    sfsdf
                                                    <br />


                                                    dfdsfsfs
                                                    <br />



                                                    Thành phố Bà Rịa
                                                    <br />


                                                    Bà Rịa - Vũng Tàu
                                                    <br />


                                                    Vietnam
                                                    <br />


                                                    123131321
                                                    <br />

                                                </p>



                                                <h3>Phương thức thanh toán</h3>
                                                <p>

                                                    Thanh toán khi giao hàng (COD)

                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step-footer">

                            <a href="/" class="step-footer-continue-btn btn">
                                <span class="btn-content">Tiếp tục mua hàng</span>
                            </a>

                            <p class="step-footer-info">
                                <i class="icon icon-os-question"></i>
                                <span>


													    Cần hỗ trợ? <a href="mailto:happylivepro@gmail.com">Liên hệ chúng tôi</a>
												    </span>
                            </p>
                        </div>
                    </div>


                </div>
                <div class="main-footer">

                </div>
            </div>
        </div>

    </div>
@endsection
