@extends('layouts.backend')
@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Danh sách tài khoản</h3>
		</div>
		<div class="panel-body">
			<a href="{{route('backend.user-add')}}" class="btn btn-sm btn-primary">Thêm Mới</a>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>username</th>
						<th>Email</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				@foreach($users as $u)
					<tr>
						<td>{{$u->id}}</td>
						<td>{{$u->username}}</td>
						<td>{{$u->email}}</td>
						<td>
							
							<a href="{{route('backend.user-edit',['id'=>$u->id])}}" class="label label-success"><i class="fa fa-edit"></i></a>
						@if(Auth::user()->id != $u->id)
							<a href="{{route('backend.user-delete',['id'=>$u->id])}}" class="label label-danger"><i class="fa fa-fa fa-trash"></i></a>
						@endif
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			<!-- Hiển thị phân trang -->
			{{$users->links()}}
		</div>
	</div>
@stop()