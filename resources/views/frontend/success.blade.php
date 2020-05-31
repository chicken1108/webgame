@extends('layouts.main')
@section('title', 'Thanh toán thành công!')
@section('main')

<div class="container">
    <div class="row">
        <div class="col-11" style="background-color: #b2bec3; height: 430px;">
            <div class="content text-center" style=" padding: 20px 20px 20px 40px;">
                <h3>THANH TOÁN THÀNH CÔNG</h3>
                <p>Bạn có thể xem mã code trong lịch sử giao dịch hoặc thư điện tử của bạn!</p>
                <p>Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi!</p>
                Quay về <a href="{{route('home')}}" class="btn btn-primary">Trang chủ</a>
            </div>
        </div>
    </div>
</div>

@stop()