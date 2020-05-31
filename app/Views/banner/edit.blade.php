@extends('layouts.backend')
@section('title','Cập nhật Banner')

@section('content')
<div class="row">
	<form action="" method="POST" role="form" enctype="multipart/form-data">
		<div class="col-md-9">
			<div class="form-group">
				<label for="">Tên Banner</label>
				<input type="text" class="form-control" name="name" value="{{$model->name}}" placeholder="Input field" id="name">
			</div>
			<div class="form-group">
				<label for="">Đường link</label>
				<input type="text" class="form-control" name="link" value="{{$model->link}}" placeholder="Input field" id="slug">
			</div>
			<div class="form-group">
				<label for="">Nội dung</label>
				<textarea name="content" id="desc" class="form-control" rows="3" >{{$model->content}}</textarea>
			</div>

		</div>
		<div class="col-md-3">

			<div class="form-group">
				<label for="">Sắp Xếp</label>
				<input type="text" class="form-control" name="ordering" value="{{$model->ordering}}" placeholder="Input field" >
			</div>
			<div class="form-group">
				<label for="">Trạng thái</label>
				<select name="status" class="form-control">
					<option value="0" @if($model->status==0) selected @endif>Ẩn</option>
					<option value="1" @if($model->status==1) selected @endif>Hiện</option>
				</select>
			</div>
			<div class="form-group">
				<img src="{{url('/uploads/banner')}}/{{$model->image}}" alt="">
				<label for="">Hình ảnh</label>
				<input type="file" name="file" >
			</div>

			<button type="submit" class="btn btn-primary">Lưu lại</button>
		</div>
<input type="hidden" name="_token" value="{{csrf_token()}}">
	</form>
	
</div>


@stop()