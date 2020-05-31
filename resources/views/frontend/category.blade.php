@extends('layouts.main')
@section('title', $category->name)
@section('main')


@foreach($products as $pro)
    <div class="item col-md-4 col-sm-6 colxs-12">
        <div class="showcase-img">
            <div class="overlay"></div>
            <img src="{{url('uploads/')}}/{{$pro->image}}" class="img-responsive center-block" alt="img">
            <a href="https://www.facebook.com/"></a>
        </div>
        <div class="showcase-info">
            <h5 class="white">{{$pro->name}}</h5>
                @if($pro->price_sale)
               <p>
                    <s class="white mt-10">{{number_format($pro->price,0,'',',')}} VNĐ</s>
                    <b class="white mt-10">{{number_format($pro->price_sale,0,'',',')}} VNĐ</b>
               </p>

                @else
                     <p><b class="white mt-10">{{number_format($pro->price,0,'',',')}} VNĐ</b></p>
                @endif
                 @php $remaining = $code->where('product_id', $pro->id) @endphp
                 <p class="product-name">Kho hàng: {{count($remaining)}}</p>
                 @if(count($remaining)>0)
                 <a href="{{route('add-cart',['id'=>$pro->id])}}" class="btn btn-success">Mua ngay</a>
                 @else
                 <a class="btn btn-danger">Hết hàng</a>
                 @endif
                <a href="{{route('product',['slug'=>$pro->slug])}}" class="btn btn-primary">Xem Chi Tiết</a>
        </div>
    </div>
@endforeach
            
    <div class="container" align="center">
    <p>{!!$products->links()!!}</p>
</div>


@stop()