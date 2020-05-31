@extends('layouts.backend')
@section('title','Danh sách Đơn Hàng')
@section('content')

<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"></h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>STT</th>
						<td><span class="thead-text"><b>Tên SP</b></span></td>            
						<td><span class="thead-text"><b>Số lượng</b></span></td>
						<td><span class="thead-text"><b>Tổng giá</b></span></td>
						<td><span class="thead-text"><b>Mã code</b></span></td>
						<td><span class="thead-text"><b>Ngày giao dịch</b></span></td>
					</tr>
				</thead>
				<tbody>
					@php $n = 0;
					@endphp
					@foreach($products_sold as $ps)
		              <tr>
		                <td><span class="tbody-text">{{$n+=1}}</h3></span></td>

		                <td>
		                  <?php $product = json_decode($ps->product); ?>
		                  @foreach($product as $item)           
		                      <span class="tbody-text">{{$item}}</h3></span>
		                       <hr>       
		                  @endforeach
		                </td>

		                 <td>
		                  <?php $quantity = json_decode($ps->quantity); 
		                    ?>
		                  @foreach($quantity as $item)           
		                      <span class="tbody-text">{{$item}}</h3></span>
		                       <hr>       
		                  @endforeach
		                </td>
		                <td><span class="tbody-text">{{number_format($ps->total,0,'','.')}} vnđ</h3></span></td>

		                 <td>
		              <?php $code = json_decode($ps->code); ?>
		                  @foreach($code as $key => $value)
		                    @foreach($value as $item)
		                    <span class="tbody-text">{{$item->code}}</h3></span>
		                    <br>
		                    @endforeach
		                      <hr>
		                  @endforeach
		                </td>
		                  
		                   <td><span class="tbody-text">{{$ps->created_at}}</h3></span></td>
		              </tr>
            	  @endforeach
				</tbody>
			</table>
			{{$products_sold->links()}}
		</div>
	</div>

@stop()