@extends('layouts.main')

@section('title', 'Giỏ hàng')
@section('main')


<div class="text-center">
	<section class="character aged war hidden-xs facts" id="character facts">

		<div class="container text-center">
			<div class="char-item col-sm-12">

				<div class="weapon col-sm-12">
					<div class= "box">
						<div style=" border: 1px solid white;padding: 10px;border-radius: 5px;">
							<table class="table white mt-10">
								<thead class="text-center">
									<tr>
										<th>STT</th>
										<th>Ảnh</th>
										<th>Tên SP</th>
										<th>Số Lượng</th>
										<th>Giá</th>
										<th>Giá Sale</th>
										<th>Tổng</th>

										<th></th>
									</tr>

								</thead>
								<tbody>
									@if(count($cart->items))
										@foreach($cart->items as $item)
										@php
										$tt = $item['quantity']*$item['price'];
										$tts = $item['quantity']*$item['price_sale'];
										@endphp
									<tr>
										<td>{{$item['id']}}</td>
										<td>
											<img src="{{url('uploads/')}}/{{$item['image']}}" alt="" width="250px">
										</td>
										<td>{{$item['name']}}</td>
										<td>
											
											<form action="{{route('update-cart')}}">
								                   <input type="hidden" name="id" value="{{$item['id']}}">
								                   <div class="col-md-4">
								                   	<input type="text" name="quantity" value="{{$item['quantity']}}" class="form-control">
								                   </div>
								                   <div class="col-md-8">
								                   	<button type="submit" class="btn btn-success btn-sm pull-left">Cập nhật</button>
								                   </div>
								             </form>

										</td>
										@if($item['price_sale']== 0)
										<td><b>{{number_format($item['price'],0,'',',')}} VNĐ</b></td>
										<td><b>{{number_format($item['price_sale'],0,'',',')}} VNĐ</b></td>
										@else
										<td><s>{{number_format($item['price'],0,'',',')}} VNĐ</s></td>
										<td><b>{{number_format($item['price_sale'],0,'',',')}} VNĐ</b></td>
										@endif

										@if($item['price_sale']== 0)
										<td>{{number_format($tt)}} VNĐ</td>
										@else($item['price']> $item['price_sale'])
										<td>{{number_format($tts)}} VNĐ</td>
										@endif
										<td>
											<a href="" title=""><img src="" alt=""></a>
											<a href="{{route('remove-item',['id'=>$item['id']])}}" class="label label-danger" onclick="return confirm('Ban co chac khong?')">Xóa</a>
										</td>
									</tr>
									@endforeach
									@endif
								</tbody>
								@if($cart->tongtien()==0)
								<tfoot>
									<tr>
										<th colspan="10" style="text-align: center">
											<h5 class="text-center">
												<b class="white">Bạn chưa có sản phẩm nào trong giỏ hàng!.</b>
											</h5>
										</th>

									</tr>
								</tfoot>
								@else
								<tfoot>
									<tr>
										<th colspan="4" style="text-align: center">
											<h3><b class="white mt-10 text-center">Tổng Tiền: </b></h3>
										</th>
										
										<th colspan="4" rowspan="4"><h3 class="white mt-10">{{number_format($cart->tongtien(),0,'',',')}} VNĐ</h3></th>

									</tr>
								</tfoot>
								@endif

							</table>
							<div style="text-align: center">
								<a href="{{route('home')}}" class="btn btn-primary" >Continue Shopping</a>
								@if($cart->tongtien()>0)
								<a href="{{route('clear-cart')}}" class="btn btn-danger" >Clear Cart</a>
								<a href="{{route('checkout')}}" class="btn btn-success" >Check Out</a>
								@endif
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>           
	</section>
</div>



@stop