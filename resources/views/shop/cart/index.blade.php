@extends('shop.layout.main')

@section('content')
    <div class="wrap-breadcrumb">
        <div class="clearfix container">
            <div class="row main-header">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                    <ol class="breadcrumb breadcrumb-arrows">
                        <li><a href="/" target="_self">Trang chủ</a></li>
                        <li class="active"><span>Giỏ hàng</span></li>

                    </ol>
                </div>
            </div>
        </div>

    </div>
    <section id="content" class="clearfix container">
        <div class="row">
            <div id="cart" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- Begin empty cart -->

                <div class="row" >
                    <div id="layout-page" class="col-md-12 col-sm-12 col-xs-12">
			<span class="header-page clearfix">
				<h1 style="margin: 0">Giỏ hàng</h1>
			</span>
            @if(count($listProducts))
                            <table>
                                <thead>
                                <tr>
                                    <th class="image">&nbsp;</th>
                                    <th class="item">Tên sản phẩm</th>
                                    <th class="qty">Số lượng</th>
                                    <th class="price">Giá tiền</th>
                                    <th class="remove">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($listProducts as $item)
                                <tr>
                                    <td class="image">
                                        <div class="product_image">
                                            <a href="">
                                                <img style=" max-width: 150px;" src="{{ asset($item->options->image) }}" alt="{{ $item->name }}" />

                                            </a>
                                        </div>
                                    </td>
                                    <td class="item">
                                        <a href="#">
                                            <strong>{{ $item->name }}</strong>

                                        </a>
                                    </td>
                                    <td class="qty">
                                        <input type="number" size="4" name="updates[]" min="1" id="updates_1012006173" value="{{ $item->qty }}" onfocus="this.select();" class="tc item-quantity" />
                                        <a href="{{route('shop.removeProductOnCart',['rowId' => $item->rowId])}}" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o" style="padding-left: 5px"></i></a>
                                        <br>
                                        <button data-id = "{{$item->rowId}}" type="button" class="btn btn-link btnUpdateQty" style="margin-top: 5px;padding-right: 24px;">Cập nhật</button>
                                    </td>
                                    <td class="price">{{ number_format( $item->qty * $item->price, 0,",",".") }} đ</td>

                                </tr>
                                @endforeach
                                <tr class="summary">
                                    <td class="image">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td class="text-center"><b>Tổng cộng:</b></td>
                                    <td class="price">
								<span class="total">
									<strong>{{$totalPrice}} đ</strong>
								</span>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="row">

                                <div class="col-md-6 col-sm-6 col-xs-12 cart-buttons inner-right inner-left" style="padding-left: 200px;">
                                    <div class="buttons clearfix">
                                        <a href="{{ route('shop.cancelCart') }}" style="margin-bottom: 15px"><button type="submit" id="update-cart" class="button-default" name=""  value="" >Hủy đơn hàng</button></a>
                                        <a href="{{ route('shop.order') }}" ><button type="submit" id="checkout" class="button-default" name="checkout" value="" >Đặt hàng</button></a>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12  col-xs-12 continue-shop">

                                    <a  href="/">
                                        <i class="fa fa-reply"></i> Tiếp tục mua hàng</a>
                                </div>

                            </div>

                    </div>
                </div>
            @else

                    <div style="padding: 9px 453px 2px;">
                    <img style="width: 200px;" src="/frontend/theme.hstatic.net/1000177652/1000229231/14/icon.png" alt="">
                    </div>
                    <h3 class="text-center">Hiện không có sản phẩm trong giỏ hàng</h3>
                    <a href="/">
                    <button type="button" class="btn btn-block btn-primary" style="margin-left: 339px;">Mua hàng ngay</button>
                    </a>
            @endif



                <!-- End cart -->

            </div>

        </div>
    </section>

@endsection

@section('my_js')
    <script type="text/javascript">
        $(document).ready(function() {

            // đính kèm token vào mỗi request ajax
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // suAbidEneUPjfI5mHvWdFbSQ1PsM4OYSm73vF7kZ
                }
            });

            $('.btnUpdateQty').click(function () {
                var soluong=$(this).closest('.qty').find('.item-quantity').val();
                var id = $(this).attr('data-id');

                window.location.href = '/cap-nha-so-luong-gio-hang/'+ id +'/' + soluong;

            });
        });
    </script>
@endsection
