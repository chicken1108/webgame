@extends('layouts.backend')
@section('title','Thêm mới sản phẩm')

@section('content')
<div class="row">
	<form action="" method="POST" role="form" enctype="multipart/form-data">
		<div class="col-md-9">
			<div class="form-group">
				<label for="">Tên sản phẩm</label>
				<input type="text" class="form-control" name="name" value="{{$model->name}}" id="name" >
			</div>
			<div class="form-group">
				<label for="">Đường dẫn tĩnh</label>
				<input type="text" class="form-control" name="slug" value="{{$model->slug}}" id="slug">
			</div>
			<div class="form-group">
				<label for="">Nội dung</label>
				<textarea name="content" class="form-control" rows="3" >{{$model->content}}</textarea>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="">Danh mục</label>
				<select name="cat_id" id="inputCat_id" class="form-control" required>
					<option value="">Chọn danh mục</option>
				@foreach($cats as $cat)
				@php
					$selected = $cat->id == $model->cat_id ? 'selected': '';
				@endphp
					<option value="{{$cat->id}}" {{$selected}}>{{$cat->name}}</option>
				@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="">Giá</label>
				<input type="text" class="form-control" name="price" value="{{$model->price}}">
			</div>
			<div class="form-group">
				<label for="">Giá khuyến mãi</label>
				<input type="text" class="form-control" name="price_sale" value="{{$model->sale_price}}" >
			</div>
			<div class="form-group">
				<label for="">Trạng thái</label>
				<select name="status" class="form-control">
					<option value="0" @if($model->status == 0) selected @endif>Ẩn</option>
					<option value="1" @if($model->status == 1) selected @endif>Hiện</option>
				</select>
			</div>
			<div class="form-group">
				<label for="" >Hình ảnh</label>
				<input type="file" name="file" >
			</div>
			<div class="thumbnail">
				<img src="{{url('uploads')}}/{{$model->image}}" alt="">
			</div>
			<button type="submit" class="btn btn-primary">Lưu lại</button>
		</div>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	</form>
	
</div>


@stop()

@section('script')
<script>
    CKEDITOR.replace( 'content', {
            filebrowserBrowseUrl: '../../public/editor/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '../../public/editor/ckfinder/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl: '../../public/editor/ckfinder/ckfinder.html?type=Flash',
            filebrowserUploadUrl: '../../public/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '../../public/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl: '../../public/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        } );
</script>
@stop()