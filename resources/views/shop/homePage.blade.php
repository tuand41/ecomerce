@extends('shop.layout.master')
@section('content')
<!-- Phần center có thể bị thay đổi -->
<div class="col-xs-12 col-md-9 ">
    <div class="spbanchay">
        <h3>
            <li class="list-group-item list-group-item-info text-center">Sản phẩm mới</li>
        </h3>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{ $product->image }}" alt="..." width="100%">
                    <div class="caption ">
                        <h3> {{ $product->name }} </h3>
                        <p>Giá: {{ $product->price }} VNĐ</p>
                        <p>
                            <a href="#" class="btn btn-default" role="button">Chi Tiết</a>
                            <a href="#" class="btn btn-primary" role="button">Mua Ngay</a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach            
        </div>
    </div>
</div> <!-- /.col-xs-12.col-md-3.center -->
@endsection
