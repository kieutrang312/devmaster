@extends('shop.layout.main')
@section('content')
    <div class="content">

        <div class="wrap">
            <div class="sidebar">
                <div class="sidebar-content">
                    <div class="order-summary order-summary-is-collapsed">
                        <h2 class="visually-hidden">Thông tin đơn hàng</h2>
                        <div class="order-summary-sections">
                            <div class="order-summary-section order-summary-section-product-list"
                                 data-order-summary-section="line-items">
                                <table class="product-table">
                                    <thead>
                                    <tr>
                                        <th scope="col"><span class="visually-hidden">Hình ảnh</span></th>
                                        <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                        <th scope="col"><span class="visually-hidden">Số lượng</span></th>
                                        <th scope="col"><span class="visually-hidden">Giá</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($listProducts as $item)

                                    <tr class="product" >
                                        <td class="product-image">
                                            <div class="product-thumbnail">
                                                <div class="product-thumbnail-wrapper">
                                                    <img class="product-thumbnail-image"
                                                         alt=""
                                                         src="{{ asset($item->options->image) }}" />
                                                </div>
                                                <span class="product-thumbnail-quantity" aria-hidden="true">{{ $item->qty }}</span>
                                            </div>
                                        </td>
                                        <td class="product-description">
												<span class="product-description-name order-summary-emphasis">{{ $item->name }}</span>

                                        </td>
                                        <td class="product-quantity visually-hidden">4</td>
                                        <td class="product-price">
                                            <span style="font-size: 15px; color: #4b4b4b">{{ number_format($item->price, 0,",",".") }} đ</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="order-summary-section order-summary-section-discount"
                                 data-order-summary-section="discount">
                                <form id="form_discount_add" accept-charset="UTF-8" method="post">
                                    <input name="utf8" type="hidden" value="✓">
                                    <div class="fieldset">
                                        <div class="field  ">
                                            <div class="field-input-btn-wrapper">
                                                <div class="field-input-wrapper">
                                                    <label class="field-label" for="discount.code">Mã giảm giá</label>
                                                    <input placeholder="Mã giảm giá" class="field-input"
                                                           data-discount-field="true" autocomplete="off"
                                                           autocapitalize="off" spellcheck="false" size="30" type="text"
                                                           id="discount.code" name="discount.code" value="" />
                                                </div>
                                                <button type="submit"
                                                        class="field-input-btn btn btn-default btn-disabled">
                                                    <span class="btn-content">Sử dụng</span>
                                                    <i class="btn-spinner icon icon-button-spinner"></i>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="order-summary-section order-summary-section-total-lines"
                                 data-order-summary-section="payment-lines">
                                <table class="total-line-table">
                                    <thead>
                                    <tr>
                                        <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                        <th scope="col"><span class="visually-hidden">Giá</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="total-line total-line-subtotal">
                                        <td class="total-line-name">Tạm tính</td>
                                        <td class="total-line-price">
												<span class="order-summary-emphasis">
													{{$totalPrice}}₫
												</span>
                                        </td>
                                    </tr>

                                    <tr class="total-line total-line-shipping">
                                        <td class="total-line-name">Phí vận chuyển</td>
                                        <td class="total-line-price">
												<span class="order-summary-emphasis"
                                                      data-checkout-total-shipping-target="0">

													—

												</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot class="total-line-table-footer">
                                    <tr class="total-line">
                                        <td class="total-line-name payment-due-label">
                                            <span class="payment-due-label-total">Tổng cộng</span>
                                        </td>
                                        <td class="total-line-name payment-due">

                                            <span class="payment-due-price"
                                                  data-checkout-payment-due-target="669300000">
														{{$totalPrice}}
												</span>
                                            <span class="payment-due-currency">VND</span>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="main-header" style="padding-bottom: 10px">
                    <a class="step-footer-previous-link" href="{{route('shop.cart')}}">
                        <svg class="previous-link-icon icon-chevron icon" xmlns="http://www.w3.org/2000/svg"
                             width="6.7" height="11.3" viewBox="0 0 6.7 11.3">
                            <path d="M6.7 1.1l-1-1.1-4.6 4.6-1.1 1.1 1.1 1 4.6 4.6 1-1-4.6-4.6z"></path>
                        </svg>
                        Giỏ hàng
                    </a>



                </div>
                <div class="main-content">

                    <div class="step">
                        <div class="step-sections " step="1">


                            <div class="section">
                                <div class="section-header">
                                    <h2 class="section-title">Thông tin giao hàng</h2>
                                </div>
                                <div class="section-content section-customer-information no-mb">

                                    <input name="utf8" type="hidden" value="✓">
                                    <div class="inventory_location_data">

                                        <input name="customer_shipping_district" type="hidden" value="" />
                                        <input name="customer_shipping_ward" type="hidden" value="" />

                                    </div>

                                    <form action="{{route('shop.postOrder')}}" method="post">
                                        @csrf
                                        <div class="fieldset">
                                        <div class="field ">
                                            <div class="field-input-wrapper">
                                                <input placeholder="Họ và tên"  name="fullname" autocapitalize="off" spellcheck="false"
                                                       class="field-input" size="30" type="text"
                                                       id="billing_address_full_name" name="billing_address[full_name]"
                                                       value="" />
                                            </div>

                                        </div>


                                        <div class="field">
                                            <div class="field-input-wrapper">

                                                <input placeholder="Email" name="email" autocapitalize="off" spellcheck="false"
                                                       class="field-input" size="30" type="text"
                                                       id="billing_address_full_name" name="billing_address[full_name]"
                                                       value="" />
                                            </div>

                                        </div>
                                        <div class="field">
                                            <div class="field-input-wrapper">
                                                <input name="phone" placeholder="Số điện thoại" autocapitalize="off" spellcheck="false"
                                                       class="field-input" size="30" type="text"
                                                       id="billing_address_full_name" name="billing_address[full_name]"
                                                       value="" />
                                            </div>

                                        </div>

                                        <div class="field ">
                                            <div class="field-input-wrapper">
                                                <label for="dia_chi">Địa chỉ:</label>
                                                <textarea name="address" style="border: 1px solid #cccccc" name="" id="" cols="61" rows="4"></textarea>
                                            </div>
                                        </div>

                                            <div class="field ">
                                                <div class="field-input-wrapper">
                                                    <label for="dia_chi">Ghi chú:</label>
                                                    <textarea name="note" style="border: 1px solid #cccccc" name="" id="" cols="61" rows="8"></textarea>
                                                </div>
                                            </div>

                                    </div>

                                        <button type="submit" class="step-footer-continue-btn btn">
                                            <span class="btn-content">Xác nhận đặt mua</span>
                                            <i class="btn-spinner icon icon-button-spinner"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>


                        </div>







                    </div>

                </div>
                <div class="main-footer">

                </div>
            </div>
        </div>

    </div>


@endsection
