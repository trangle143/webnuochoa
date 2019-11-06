@extends('frontend.layout.app')
@section('title')
Trang chủ
@endsection
@section('content')
@include('frontend.includes.menu')

<link rel="stylesheet" href="{{ asset('build.css') }}">
<div class="container-fluid bgcolor">
<div class="container" style="margin: 30px 0px; margin-top: 100px; margin-left: 190px">
	<div class="card">
		<div class="card-body">
		<div class="card-title"><h1>ĐƠN HÀNG CỦA KHÁCH</h1></div>
		<div class="card-content">
			<table class="table table-bordered">
				<tr>
					<th>Id</th>
					<th>Tên</th>
					<th>Giới tính</th>
					<th>Địa chỉ</th>
					<th>Sđt</th>
					<th>Ghi chú</th>
					<th>Tình trạng</th>
					<th>Chi tiết</th>
				</tr>

				@foreach($khach as $k)
				@foreach($k->donhang as $dh)
				<tr>
					<td>{{ $k->id }}</td>
					<td>{{ $k->ten }}</td>
					<td>{{ $k->gioitinh}}</td>
					<td>{{ $k->diachi }}</td>
					<td>{{ $k->sdt }}</td>
					<td>{{ $k->ghichu }}</td>
					@if( $dh->tinhtrang == 1 )
					<td>Mới</td>
					@elseif ( $dh->tinhtrang == 2 )
					<td>Đang gởi</td>
					@else 
					<td>Hoàn thành</td>
					@endif
					<td><a href="{{ url('quanli/chitiet',$dh->id) }}">Xem chi tiết</a></td>
				</tr>
				@endforeach
				@endforeach
			</table>
				<div>
					<button type="button" class="pull-right btn btn-danger"><a  href="{{ route('index') }}" >Quay về trang chủ</a></button>
				</div>
		</div>
	</div>
</div>		

@stop
