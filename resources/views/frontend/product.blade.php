@extends('layouts.main')
@section('title', $product->name)
@section('style')
<style>
	.product-content a, p, span, h1, h2, h3, h4, ul, li{
		color: white;
	}

	.product-content img{
		max-width: 1050px;
	}
</style>
@stop
@section('main')
<section class="character aged war hidden-xs facts" id="character facts">
	<h2 class="has-line-center headline text-center">Category: {!!$category->name!!}</h2>
	<div class="container text-center">
		<div class="char-item col-sm-12">
			<div class="col-md-7 col-sm-12">
				<div class= "box">
					<div class="content">
						<div class="char-img">
							<img src="{{url('uploads/')}}/{{$product->image}}" class="img-responsive center-block" alt="img">
						</div>
					</div>

					<div class='corners top'></div>
					<div class='corners bottom'></div>
				</div>
			</div>
			<div class="weapon col-md-5 col-sm-12">
				<div class= "box">
					<div class="content">
						<div class="power">
							<div class="skill">
								<h5 class="has-line-center text-center product-name">{{$product->name}}</h5>
								<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
								<input type="hidden" id="product_id" value="{{$product->id}}">
								@if($product->price_sale)
								<h4><s class="white mt-10">{{number_format($product->price,0,'',',')}} VNĐ</s></h4>
								<h3><b class="white mt-10">{{number_format($product->price_sale,0,'',',')}} VNĐ</b></h3>

								@else
								<h3><b class="white mt-10">{{number_format($product->price,0,'',',')}} VNĐ</b></h3>
								@endif
								@php $remaining = $code->where('product_id', $product->id) @endphp
								<p class="product-name">Kho hàng: {{count($remaining)}}</p>
							</div>
							@if(count($remaining)>0)
							<a href="{{route('add-cart',['id'=>$product->id])}}" class="btn btn-success">Mua ngay</a>
							<a href="#add-cart" id="add-to-cart" class="btn btn-info">Thêm vào giỏ</a>
							@else
							<a class="btn btn-danger">Hết hàng</a>
							@endif
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="col-12 text-left product-content" style="margin-top: 30px;">
			{!! $product->content !!}
		</div>
	</div>           
</section>

    	<h3><p class="has-line-center headline text-center">Sản phẩm liên quan</p></h3>
@foreach($otherProduct as $pro)

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
            <a href="{{route('add-cart',['id'=>$product->id])}}" id="add-to-cart" class="btn btn-success">Mua ngay</a>
            <a href="{{route('product',['slug'=>$pro->slug])}}" class="btn btn-primary">Xem Chi Tiết</a>
        </div>
    </div>
@endforeach

@stop

@section('script')
<script>
    $('#add-to-cart').click(function(event) {
        var id = $('#product_id').val();
       $.get('../ajax-add-cart/'+id, function(data) {
       		$("#cart").load(" #cart > *");
       		alert('Thêm giỏ hàng thành công!');
       });
        
    });
</script>
@stop