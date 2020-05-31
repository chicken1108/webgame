@extends('layouts.main')
@section('title', 'Đăng nhập')
@section('main')

<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Đăng nhập hệ thống</h3>
    </div>
    <div class="panel-body">
        <form action="" method="POST" role="form">        
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Input field" name="email">
            </div>
           
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control" placeholder="Input field" name="password">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" value="1">
                        Nhớ mật khẩu
                    </label>
                </div>
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button type="submit" class="btn btn-success">Đăng nhập</button>
        </form>
    </div>
</div>
@stop