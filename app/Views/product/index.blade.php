@extends('layouts.backend')
@section('content')
@section('title','Danh Sach San Pham')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Danh muc</h3>
	</div>
	<div class="panel-body">
		<a href="{{route('backend.product-add')}}" class="btn btn-success">Thêm Mới</a>
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Hình ảnh</th>
				<th>Ten</th>
				<th>Danh Muc</th>
				<th>Giá</th>
				<th>Giá Sale</th>
				<th>Trang Thai</th>
				<th>Ngay Tao</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($pro as $p)
			<tr>
				<td>{{$p->id}}</td>
				<td>
					<img src="{{url('/uploads')}}/{{$p->image}}" alt="" width="50">
				</td>
				<td>{{$p->name}}</td>
				<td>{{$p->cat->name}}</td>
				
				<td>{{$p->price}}</td>
				<td>{{$p->price_sale}}</td>
				<td>{{$p->status}}</td>
				<td>{{$p->created_at}}</td>
				
				<td>
					<a href="{{route('backend.product-edit',['id'=>$p->id])}}" class="btn btn-xs btn-success">
						<i class="fa fa-edit"></i> 
					</a>

					<a href="{{route('backend.product-delete',['id'=>$p->id])}}" class="btn  btn-xs btn-danger" onclick="return confirm('bạn có chắc không ?')">
						<i class="fa fa-trash"></i>
					</a>
					
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{$pro->links()}}
</div>
@stop()










