@extends('shop.layout.master')
@section('content')
<div class="col-xs-12 col-md-9 ">
    <ul class="breadcrumb" style="margin-top:20px">
        <li><a href="{{ route('homePage') }}">Home</a></li>
        <li class="active">Giỏ Hàng</li>
    </ul>
    <div class="row">
        <form>
            <table class="table table-bordered .table-responsive text-center">
                <tr class="active">
                    <td width="11.111%">Ảnh mô tả</td>
                    <td width="22.222%">Tên sản phẩm</td>
                    <td width="22.222%">Số lượng</td>
                    <td width="16.6665%">Đơn giá</td>
                    <td width="16.6665%">Thành tiền</td>
                    <td width="11.112%">Xóa</td>
                </tr>
                <tr>
                    <td><img class="img-responsive" src="images/sp1.jpg"></td>
                    <td>Galaxy S6 Edge (Quốc tế) hàng Like new 32GB</td>
                    <td>
                        <div class="form-group">
                            <input class="form-control" type="number">
                        </div>
                    </td>
                    <td><span class="price">6.590.000 đ</span></td>
                    <td><span class="price">6.590.000 đ</span></td>
                    <td><a href="#">Xóa</a></td>
                </tr>
                <tr>
                    <td><img class="img-responsive" src="images/sp2.jpg"></td>
                    <td>Galaxy S6 Edge (Quốc tế) hàng Like new 32GB</td>
                    <td>
                        <div class="form-group">
                            <input class="form-control" type="number">
                        </div>
                    </td>
                    <td><span class="price">6.590.000 đ</span></td>
                    <td><span class="price">6.590.000 đ</span></td>
                    <td><a href="#">Xóa</a></td>
                </tr>
            </table>
            <div class="row" id="total-price">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    Tổng thanh toán: <span class="total-price">50.000.000 đ</span>

                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <a href="{{ route('homePage') }}" class="btn btn-primary">Mua tiếp</a>
                    <a href="#" class="btn btn-primary">Thanh toán</a>
                    <a href="#" class="btn btn-primary">Xóa giỏ hàng</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
