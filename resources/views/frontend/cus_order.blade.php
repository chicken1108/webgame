@extends('layouts.main')
@section('main')
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Lịch sử đơn hàng</h3>
    </div>
    <div class="panel-body">
    @if(Auth::check() && Auth::user()->group == 'customer')
       <table class="table table-hover">
           <thead>
               <tr>
                   <th>STT</th>
                   <th>Ngày đặt</th>
                   <th>Trạng thái</th>
                   <th></th>
               </tr>
           </thead>
           <tbody>
            @php
            $n=0;
            @endphp
            @if(Auth::user()->order_history)
            @foreach(Auth::user()->order_history as $order)
               <tr>
                   <td>{{$n+=1}}</td>
                   <td>{{$order->created_at}}</td>
                   <td>
                    @if($order->status == 1)
                       <span class="label label-success">Đã duyệt</span>
                    @else
                       <span class="label label-danger">Chờ duyệt</span>
                    @endif
                   </td>
                   <td>
                       <a href="{{route('order_detail',['id'=>$order->id])}}" class="label label-success">Chi tiết</a>
                   </td>
               </tr>
            @endforeach
            @endif
           </tbody>
       </table>
    @else
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            khách hàng chưa đăng nhập vui lòng <a href="{{route('login')}}" class="label label-success">Đăng nhập</a>
        </div>
    @endif
    </div>
</div>            
@stop()