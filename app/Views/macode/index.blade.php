@extends('layouts.backend')
@section('content')
@section('title','Danh sách mã code/key')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Danh mục</h3>
	</div>
	<div class="panel-body">
		<a href="{{route('backend.code-add')}}" class="btn btn-success">Thêm Mới</a>
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Mã code/key</th>
				<th>Sản phẩm</th>
				<th>Ngày tạo</th>
				<th>Chức năng</th>
			</tr>
		</thead>
		<tbody>
			@foreach($list_code as $lc)
			<tr>
				<td>{{$lc->id}}</td>
				<td>{{$lc->code}}</td>
				<td>{{$lc->product->name}}</td>
				<td>{{$lc->created_at}}</td>
				
				<td>
					<a href="{{route('backend.code-edit',['id'=>$lc->id])}}" class="btn btn-xs btn-success">
						<i class="fa fa-edit"></i> 
					</a>

					<a href="{{route('backend.code-delete',['id'=>$lc->id])}}" class="btn  btn-xs btn-danger" onclick="return confirm('bạn có chắc không ?')">
						<i class="fa fa-trash"></i>
					</a>
					
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{$list_code->links()}}
</div>
@stop()










