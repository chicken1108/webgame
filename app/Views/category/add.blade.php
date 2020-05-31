@extends('layouts.backend')
@section('content')

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Them moi danh muc</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST"  role="form">
		
			<div class="form-group">
				<label for="">Ten Danh Muc</label>
				<input type="text" class="form-control" name="name" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Danh Muc Cha</label>
				<select name="parent" class="form-control" required="required">
					<option value="0">Chon Danh Muc Cha</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Trang Thai</label>
				<div class="radio">
					<label>
						<input type="radio" name="status" id="inputStatus" value="1" checked>Hoat Dong
					</label>
					<label>
						<input type="radio" name="status" id="inputStatus" value="0" checked>Khong Hoat Dong
					</label>
				</div>
				
			</div>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
@stop()