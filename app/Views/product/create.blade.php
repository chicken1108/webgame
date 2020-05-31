@extends('layouts.backend')
@section('title','Thêm mới sản phẩm')

@section('content')
<div class="row">
	<form action="" method="POST" role="form" enctype="multipart/form-data">
		<div class="col-md-9">
			<div class="form-group">
				<label for="">Tên sản phẩm</label>
				<input type="text" class="form-control" name="name" placeholder="Input field" id="name">
			</div>
			<div class="form-group">
				<label for="">Đường dẫn tĩnh</label>
				<input type="text" class="form-control" name="slug" placeholder="Input field" id="slug">
			</div>
			<div class="form-group">
				<label for="">Nội dung</label>
				<textarea name="content" id="desc" class="form-control" rows="3" ></textarea>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="">Danh mục</label>
				<select name="cat_id" id="inputCat_id" class="form-control" required>
					<option value="">Chọn danh mục</option>
				@foreach($cats as $cat)
					<option value="{{$cat->id}}">{{$cat->name}}</option>
				@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="">Giá</label>
				<input type="text" class="form-control" name="price" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Giá khuyến mãi</label>
				<input type="text" class="form-control" name="sale_price" placeholder="Input field" >
			</div>
			<div class="form-group">
				<label for="">Trạng thái</label>
				<select name="status" class="form-control">
					<option value="0">Ẩn</option>
					<option value="1">Hiện</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Hình ảnh</label>
				<input type="file" name="file" >
			</div>

			<button type="submit" class="btn btn-primary">Lưu lại</button>
		</div>
<input type="hidden" name="_token" value="{{csrf_token()}}">
	</form>
	
</div>


@stop()