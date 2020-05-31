@extends('layouts.main')
@section('title', 'BKAPSHOP - Shop game bản quyền')
@section('main')
<div id="carousel-id" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    @if($banners->count()) 
    <?php $n = 0; ?>
    @foreach($banners as $bn1)
        <li data-target="#carousel-id" data-slide-to="{{$n}}" class="@if($n==0) active @endif"></li>
    <?php $n++; ?>
    @endforeach @endif
    </ol>
    <div class="carousel-inner">
         @if($banners->count()) 
        <?php $i = 0; ?>
         @foreach($banners as $bn)
        <div class="item @if($i==0) active @endif">
            <img src="{{url('uploads/banner')}}/{{$bn->image}}" alt="First slide" width="100%" height="500px">
        </div>
        <?php $i++; ?>
        @endforeach @endif
    </div>
    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>

    
<div class="mt-33 row">
@foreach($products as $pro)
    <div class="item col-md-4 col-sm-6 colxs-12">
        <div class="showcase-img">
            <a href="{{route('product',['slug'=>$pro->slug])}}">            
                <img src="{{url('uploads/')}}/{{$pro->image}}" class="img-responsive center-block" alt="img">
            </a>
        </div>
        <div class="showcase-info">
            <a href="{{route('product',['slug'=>$pro->slug])}}" class="product-name">{{$pro->name}}</a>
            <div>
                    @if($pro->price_sale)
                <p>
                    <s class="white mt-10">{{number_format($pro->price,0,'',',')}} VNĐ</s>
                     <b class="white mt-10">{{number_format($pro->price_sale,0,'',',')}} VNĐ</b>
                </p>
                @else
                     <p><b class="white mt-10">{{number_format($pro->price,0,'',',')}} VNĐ</b></p>
                @endif
            </div>
            @php $remaining = $code->where('product_id', $pro->id) @endphp
            <p class="product-name">Kho hàng: {{count($remaining)}}</p>
            @if(count($remaining)>0)
            <a href="{{route('add-cart',['id'=>$pro->id])}}" class="btn btn-success">Mua ngay</a>
            @else
             <a class="btn btn-danger">Hết hàng</a>
            @endif
            <a href="{{route('product',['slug'=>$pro->slug])}}" class="btn btn-primary">Xem chi tiết</a>
        </div>
    </div>
@endforeach

</div>
<div align="center">
    {!! $products->links(); !!}
</div>
@stop()
