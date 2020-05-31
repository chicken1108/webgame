@extends('layouts.main')

@section('title', 'Thanh toán')
@section('main')

<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Tiến hành thanh toán</h3>
    </div>
    <div class="panel-body">
        <form action="{{route('checkout')}}" method="POST">

            <label for="">Số tiền của bạn: <span>{{number_format(Auth::user()->money,0,'','.')}} vnđ</span></label>
            <br>
            <label for="">Số tiền cần thanh toán:  {{number_format($cart->tongtien(),0,'','.')}} vnđ</label>
            <br>
            <label for="">Nội dung thanh toán: </label>
            <br>
            @foreach($cart->items as $item)
            {{$item['name']}} - Số lượng: {{$item['quantity']}}
            <br>  
            @endforeach
            <hr>
            <label for="">Tình trạng:  </label>
             @if(Auth::user()->money - $cart->tongtien()>0)
             Có thể thanh toán!
             <br>
             <br>
             <button type="submit" class="btn btn-primary">Xác nhận</button>
             @else
             Tài khoản của bạn không đủ tiền, vui lòng <a href="{{route('payment')}}" class="btn btn alert-danger">Nạp thêm</a>
             @endif
         <input type="hidden" name="_token" value="{{csrf_token()}}">
     </form>
 </div>
</div>
</div>            
@stop()