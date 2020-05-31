<div class="container">
	<div class="row">
		<h3>Thông tin khách hàng</h3>
		<p>Email: {{Auth::user()->email}}</p>
		<table class="table list-table-wp">
			<thead>
				<tr>
					<td><span class="thead-text">Tên SP</span></td>
					<td><span class="thead-text">Số lượng</span></td>
					<td><span class="thead-text">Giá</span></td>
					<td><span class="thead-text">Thành tiền</span></td>
					<td><span class="thead-text">Mã code</span></td>
				</tr>
				<tr>
			</thead>
			<tbody>
				@foreach($content as $ct)
				<tr>
					<td>{{$ct['name']}}</td>
					<td>{{$ct['quantity']}}</d>
					<td>@if($ct['price']>0) {{$ct['price']}} @else {{$ct['price_sale']}} @endif</td>
					<td> @if($ct['price']>0)
						<span>{{number_format($ct['price']*$ct['quantity'],0,',','.')}} vnđ</span>
						@else
						<span>{{number_format($ct['price_sale']*$ct['quantity'],0,',','.')}} vnđ</span>
						@endif
					</td>
				@endforeach
					<td>
						@foreach($code as $key => $value)
						@foreach($value as $item)
						<span class="tbody-text">{{$item['code']}}</h3></span>
						<br>
						@endforeach
						<hr>
						@endforeach
					</td>
				</tr>
				
			<tr><h3>Tổng thanh toán: {{number_format($total,0,',','.')}} vnđ </h3> </tr>
		</tbody>
	</table>
	</div>
</div>
