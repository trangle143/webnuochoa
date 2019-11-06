@extends('frontend.layout.app')
@section('title')
Them thuong hieu
@endsection
@section('content')
@include('frontend.includes.menu')
	<div id="home-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 slider-left"></div>
            <div class="col-md-8 header-top-right ">
            	<div class="formthem row">
            		<form action="{{ url('thuonghieu/sua',$thuonghieu->id) }}" method="POST">

					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Thêm thương hiệu</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					        </button>
					      </div>
					      <div class="modal-body">
					      	@csrf
					        <div class="form-group">
							  <label for="usr">Tên thương hiệu:</label>
							  <input type="text" class="form-control" name="ten" value="{{ $thuonghieu->ten }}" placeholder="Nhập tên thương hiệu">
							</div>
							<div class="form-group">
							  <label for="sel1">Chọn loại nước hoa:</label>
							  <select class="form-control" name="loai_id">
							    <option value="{{$thuonghieu->loai_id}}">{{$thuonghieu->loaisanpham->ten}} ( loại đang sử dụng )</option>
							    <option value="1">Nước hoa nữ</option>
							    <option value="2">Nước hoa nam</option>
							    <option value="3">Nước hoa em bé</option>
							    <option value="4">Nước hoa mini</option>
							    <option value="5">Nước hoa Unisex</option>
							  </select>
							</div>
							<div class="form-group">
							  <label for="usr">Hình thương hiệu(ko bắt buộc)</label>
							  <input type="file" name="hinhanh">
							</div>
					      </div>
					      <div class="modal-footer">
					        <button type="submit" class="btn btn-primary">Save</button>
					        <button type="button" class="btn btn-danger" data-dismiss="modal"><a href="{{ route('index') }}">Trở về trang chủ</a></button>
					      </div>
					    </div>
					  </div>
            		</form>
            	</div>
            </div>
        </div>
    </div>
</div>	
<div class="container-fluid">
	
</div>
@endsection