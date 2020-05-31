@extends('layouts.main')

@section('main')
<div class="container">
    <div class="row">


        @foreach($product as $pro)
        <div class="item col-md-4 col-sm-6 colxs-12">
            <div class="showcase-img">
                <div class="overlay"></div>
                <img src="{{url('uploads/')}}/{{$pro->image}}" class="img-responsive center-block" alt="img">
                <a href="https://www.facebook.com/"></a>
            </div>
            <div class="showcase-info">
                <a href="{{route('product',['slug'=>$pro->slug])}}" class="product-name">{{$pro->name}}</a>
                    @if($pro->price_sale)
                    <s class="white mt-10">{{number_format($pro->price,0,'',',')}} VNĐ</s>
                    <b class="white mt-10">{{number_format($pro->price_sale,0,'',',')}} VNĐ</b>

                    @else
                    <b class="white mt-10">{{number_format($pro->price,0,'',',')}} VNĐ</b>
                    @endif
                    <br>
                    <a href="{{route('add-cart',['id'=>$pro->id])}}" class="btn btn-success">Thêm Vào Giỏ</a>
                    <a href="{{route('product',['slug'=>$pro->slug])}}" class="btn btn-primary">Xem Chi Tiết</a>
                </div>
            </div>
            @endforeach
            <div class="col-sm-12" align="center">{{$product->links()}}</div>
        </div>
    </div>


@stop()