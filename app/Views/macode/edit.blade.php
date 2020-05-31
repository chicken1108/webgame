@extends('layouts.backend')
@section('content')

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Chỉnh sửa mã code/key</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<form action="" method="POST" role="form" enctype="multipart/form-data">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Danh mục</label>
						<select name="product_id" class="form-control" >
							<option value="">Chọn Sản phẩm</option>
							@foreach($products as $pd)
							<option value="{{$pd->id}}" @if($pd->id==$editcode->product_id) selected @endif>{{$pd->name}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="">Mã code</label>
						<input type="text"  name="code" value="{{$editcode->code}}" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
					<input type="hidden" name="_token" value="{{csrf_token()}}">

			</form>
		</div>
	</div>
</div>
@stop()
