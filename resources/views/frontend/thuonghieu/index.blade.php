@extends('frontend.layout.app')
@section('title')
Trang chủ
@endsection
@section('content')
@include('frontend.includes.menu')
<div class="container-fluid">
	<!-- thêm sản phẩm - btn -->
	<div class="btn btn-default pull-right" style="margin: 15px 25px 15px 0px;"><a href="{{ route('thuonghieu.them') }}">Thêm thương hiệu</a></div>

  <table class="table table-bordered" style="margin: 20px 0px">
    <thead>
      <tr>
        <th>Tên Thương Hiệu</th>
        <th>Hình Ảnh</th>
        <th>Thuộc loại</th>
        <th>Sửa</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      @foreach($thuonghieu as $th)
      <tr>
        <td>{{ $th->ten }}</td>
        <td><img src="<?php echo asset("image/nuochoa_nu/$th->hinhanh") ?>" alt="{{$th->hinhanh}}" style="width:60px"></td>
        <td>{{ $th->loaisanpham->ten }}</td>
        <td><a href="{{ route('thuonghieu.sua',$th->id) }}">Sửa</a></td>
        <td><a href="{{ route('thuonghieu.xoa',$th->id) }}">Xóa</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection