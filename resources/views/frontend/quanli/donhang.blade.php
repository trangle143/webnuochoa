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
					<th><strong>Id</strong></th>
					<th><strong>Tên</strong></th>
					<th><strong>Giới tính</strong></th>
					<th><strong>Địa chỉ</strong></th>
					<th><strong>Sđt</strong></th>
					<th><strong>Ghi chú</strong></th>
					<th><strong>Tình trạng</strong></th>
					<th><strong>Chi tiết</strong></th>
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
					<td><strong><u><a href="{{ url('quanli/chitiet',$dh->id) }}">Xem chi tiết</a></u></strong></td>
				</tr>
				@endforeach
				@endforeach
			</table>
				<div>
					<button type="button" class="pull-right btn btn-info"><a  href="{{ route('index') }}" >Quay về trang chủ</a></button>
				</div>
		</div>
	</div>
</div>		

@stop
