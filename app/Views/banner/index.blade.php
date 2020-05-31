@extends('layouts.backend')
@section('title','Danh sách banner')
@section('content')
<div class="panel panel-default">
	<!-- Default panel contents -->
	
	<div class="panel-body">
		<a href="{{route('backend.banner-create')}}" class="btn btn-sm btn-primary">Them moi</a>
	</div>

	<!-- Table -->
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Ảnh</th>
				<th>Tên</th>
				<th>Trạng thái</th>
				<th></th>
			</tr>
			
		</thead>
		<tbody>
		@foreach($banners as $bn)
			<tr>
				<td>{{$bn->id}}</td>
				<td>
					<img src="{{url('/uploads/banner')}}/{{$bn->image}}" alt="" width="60">
				</td>
				<td>{{$bn->name}}</td>
				<td>{{$bn->status}}</td>
				<td>
					<a href="{{route('backend.banner-edit',['id'=>$bn->id])}}" class="label label-success"><i class="fa fa-edit"></i></a>
					<a href="{{route('backend.banner-delete',['id'=>$bn->id])}}" class="label label-danger" onclick="return confirm('Ban co muon xoa khong?')"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>

	{{$banners->links()}}
</div>

@stop()