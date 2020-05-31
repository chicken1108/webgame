@extends('layouts.backend')
@section('title','Lịch sử nạp tiền')
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
						<td><span class="thead-text"><b>Mã giao dịch</b></span></td>
						<td><span class="thead-text"><b>Nội dung</b></span></td>
						<td><span class="thead-text"><b>Số tiền</b></span></td>

						<td><span class="thead-text"><b>Hình thức</b></span></td>
						<td><span class="thead-text"><b>Ngày giao dịch</b></span></td>
					</tr>
				</thead>
				<tbody>
					@php $n = 0;
					@endphp
					@foreach($transactions as $value)
					<tr>
						<td>{{$n+=1}}</td>

						<td>{{$value->transaction_code}}</td>
						<td>{{$value->desc}}</td>
						<td>{{$value->amount}}</td>
						<td>{{$value->condition}}</td>
						<td>{{$value->created_at}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{$transactions->links()}}
		</div>
	</div>

@stop()