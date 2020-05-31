@extends('layouts.backend')

@section('title','Thêm mới danh mục')

@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm mới danh mục</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" role="form">
		
			<div class="form-group">
				<label for="">Tên danh mục</label>
				<input type="text" class="form-control" name="name" placeholder="Input field">
				@if($errors->has('name'))
					<div class="help-block">
						{!!$errors->first('name')!!}
					</div>
				@endif
			</div>
			<div class="form-group">
				<label for="">Danh mục cha</label>
				<select name="parent" class="form-control" required="required">
					<option value="0">Chọn danh mục cha</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="">Trạng thái</label>
				<div class="radio">
					<label>
						<input type="radio" name="status" value="0">
						Ẩn
					</label>
					<label>
						<input type="radio" name="status" value="0" checked>
						Hiện
					</label>
				</div>
			</div>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	
</div>
@stop()