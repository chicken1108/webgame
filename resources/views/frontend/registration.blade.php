@extends('layouts.main')
@section('title', 'Đăng ký tài khoản')
@section('main')

<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Đăng Ký Tài Khoản</h3>
	</div>
	<div class="panel-body">
		<div class="col-md-4">
			<form action="" method="POST" role="form">
		
				<div class="form-group">
					<label for="">Tài khoản</label>
					<input type="text" class="form-control" name="username" placeholder="Input field" value="{{old('username')}}">
					@if($errors->has('username'))
						<div class="help-block">
							{!!$errors->first('username')!!}
						</div>
					@endif
				</div>
			 	<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control" name="email" placeholder="Input field">
					@if($errors->has('email'))
						<div class="help-block">
							{!!$errors->first('email')!!}
						</div>
					@endif
				</div>
			
				<div class="form-group">
					<label for="">Mật khẩu</label>
					<input type="password" class="form-control" name="password" placeholder="Input field">
					@if($errors->has('password'))
						<div class="help-block">
							{!!$errors->first('password')!!}
						</div>
					@endif
				</div>
				<div class="form-group">
					<label for="">Nhập lại Mật khẩu</label>
					<input type="password" class="form-control" name="confirm_password" placeholder="Input field">
					@if($errors->has('confirm_password'))
						<div class="help-block">
							{!!$errors->first('confirm_password')!!}
						</div>
					@endif
				</div>
				
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>


@stop()