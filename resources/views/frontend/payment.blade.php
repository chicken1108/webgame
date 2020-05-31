@extends('layouts.main')
@section('title', 'Thanh toán')
@section('main')

<div class="container">
    <div class="row">
        <div class="col-11" style="background-color: #b2bec3; height: 430px;">
            <div class="content" style=" padding: 20px 20px 20px 40px;">
                <h3>NẠP TIỀN VÀO TÀI KHOẢN</h3>
                <p>Chọn hình thức thanh toán</p>
                <div class="dropdown">
                    <div class="btn btn-default dropdown-toggle" id="menu1" data-toggle="dropdown">
                        <img src="{{url('/')}}/uploads/vnpay-logo.jpg" width="100" height="100" alt="">
                        Thanh toán qua Vnpay
                    </div>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                     <div style="width: 500px; padding: 20px;">
                        <form action="{{route('create.payment')}}" method="POST">
                            <label for="">Nhập số tiền(vnđ):</label>
                            <input type="text" name="amount" class="form-control">
                            <br>
                            <input align="center" type="submit" value="Nạp tiền" class="btn btn-danger">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </form>
                    </div>
                </ul>
            </div>
            </div>
        </div>
    </div>
</div>


@stop()