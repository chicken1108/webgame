@extends('layouts.backend')
@section('title','Thêm mới Banner')

@section('content')
<div class="row">
	<form action="" method="POST" role="form" enctype="multipart/form-data">
		<div class="col-md-9">
			<div class="form-group">
				<label for="">Tên sản phẩm</label>
				<input type="text" class="form-control" name="name" placeholder="Input field" id="name">
			</div>
			<div class="form-group">
				<label for="">Đường link</label>
				<input type="text" class="form-control" name="link" placeholder="Input field" id="slug">
			</div>
			<div class="form-group">
				<label for="">Nội dung</label>
				<textarea name="content" id="desc" class="form-control" rows="3" ></textarea>
			</div>

		</div>
		<div class="col-md-3">

			<div class="form-group">
				<label for="">Sắp Xếp</label>
				<input type="text" class="form-control" name="ordering" placeholder="Input field" >
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