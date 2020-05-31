@extends('layouts.backend')
@section('content')

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Them moi San Pham</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<form action="" method="POST" role="form" enctype="multipart/form-data">
				<div class="col-md-9">
					<div class="form-group">
						<label for="">Ten San Pham</label>
						<input type="text" class="form-control" name="name" placeholder="Input field" id="name">
					</div>

					<div class="form-group">
						<label for="">Đường Dẫn Tĩnh</label>
						<input type="text" class="form-control" name="slug" id="slug" placeholder="Input field">
					</div>
					<div class="form-group">
						<label for="">Trạng Thái</label>
						<div class="radio">
							<label>
								<input type="radio" name="status" id="inputStatus" value="1" checked="checked">
								Kích Hoạt
							</label>
							<label>
								<input type="radio" name="status" id="inputStatus" value="0" checked="checked">
								Không Kích Hoạt
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="">Nội dung</label>
						<textarea name="content" id="input" class="form-control" rows="3"></textarea>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="">Danh Muc</label>
						<select name="cat_id" class="form-control" >
							<option value="">Chọn Danh Mục</option>

							@foreach($cats as $p)
							<option value="{{$p->id}}">{{$p->name}}</option>
							@endforeach

						</select>
					</div>

					<div class="form-group">
						<label for="">Giá</label>
						<input type="text" class="form-control" name="price" placeholder="Input field">
					</div>
					<div class="form-group">
						<label for="">Giá Sale</label>
						<input type="text" class="form-control" name="price_sale" placeholder="Input field">
					</div>
					<div class="form-group">
						<label for="">Hình Ảnh</label>
						<input type="file"  name="file" class="image-responsive">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
					<input type="hidden" name="_token" value="{{csrf_token()}}">

			</form>
		</div>
	</div>
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