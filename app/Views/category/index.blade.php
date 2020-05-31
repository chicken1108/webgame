@extends('layouts.backend')
@section('content')
@section('title','Danh Sach Danh Muc')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Danh muc</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" class="form-inline" role="form">
		
			<div class="form-group">
				<input type="email" class="form-control" id="" placeholder="Tim Kiem">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Loc</button>
			<a href="{{route('backend.category-add')}}" class="btn btn-success">Them Moi</a>
		</form>
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Ten</th>
				<th>Trang Thai</th>
				<th>Ngay Tao</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($cats as $c)
			<tr>
				<td>{{$c->id}}</td>
				<td>{{$c->name}}</td>
				<td>{{$c->status}}</td>
				<td>{{$c->created_at}}</td>
				
				<td>
					<a href="{{route('backend.category-edit',['id'=>$c->id])}}" class="label label-success"><i class="fa fa-edit"></i></a>
					<a href="{{route('backend.category-delete',['id'=>$c->id])}}" class="label label-danger" onclick="return confirm('Ban co chac chan khong')"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>

		<input type="hidden" name="_token" value="{{csrf_token()}}">
	</table>
	{{$cats->links()}}
</div>
@stop()