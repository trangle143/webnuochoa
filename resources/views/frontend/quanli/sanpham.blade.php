@extends('frontend.layout.app')
@section('title')
Trang chủ
@endsection
@section('content')
@include('frontend.includes.menu')
<div class="container-fluid">
	<!-- thêm sản phẩm - btn -->
	<div class="btn btn-default pull-right" style="margin: 15px 25px 15px 0px;"><a href="{{ route('sanpham.them') }}">Thêm sản phẩm</a></div>

  <table class="table table-bordered" style="margin: 20px 0px">
    <thead>
      <tr>
        <th>Tên sản phẩm</th>
        <th>Thương hiệu</th>
        <th>Mô tả</th>
        <th>Tổng tiền</th>
        <th>Giá khuyến mãi</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Ngày tạo</th>
        <th>Sửa</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      @foreach($sanpham as $sp)
      <tr>
        <td>{{ $sp->ten }}</td>
        <td>{{ $sp->thuonghieu->ten }}</td>
        <td>{{ Str::limit($sp->mota, $limit = 15, $end = '...') }}</td>
        <td>{{ $sp->price }}</td>
        <td>{{ $sp->giakhuyenmai }}</td>
        <td><img style="width: 100px; height: 45px" src="<?php echo asset("image/nuochoa_nu/$sp->hinhanh") ?>" alt="{{$sp->hinhanh}}"></td>
        <td>{{ $sp->soluong }}</td>
        <td>{{ $sp->ngaytao }}</td>
        <td><a href="{{ url('sanpham/sua',$sp->id) }}">Sửa</a></td>
        <td><a href="{{ route('sanpham.xoa',$sp->id) }}">Xóa</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection