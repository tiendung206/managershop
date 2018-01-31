@extends('admin.master')
@section('content')
		<div id="page-wrapper">
			<div class="graphs">
				<div class="row">
					<div class="col-md-10"><h3 class="blank1">Đơn hàng</h3> </div>
					<div class="col-md-2"> <h4 class="social_icons-left"><a class="alert alert-primary" href="{{url('order/create')}}">Thêm Đơn Hàng</a></h4></div>
				</div>
				
				<div class="xs tabls">
                @if(session('success'))
                    <div class="alert alert-success">
                          {{session('success')}}
                    </div>                       
                @endif
                  <!-- tim kiem -->
					<div class="panel panel-primary" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">							
						<div class="panel-body no-padding" style="display: block;">							
							<div class="col-md-12">&nbsp</div>
								
							<table class="table table-striped  table-bordered" align="center">
								<thead>
									<tr class="success">
										<th>STT</th>
										<th>Tên Khách Hàng</th>
										<th>Địa Chỉ</th>
										<th>Số Điện Thoại</th>
										<th>Email</th>
										<th>Tên Sản Phẩm</th>
										<th>Ngày Lập</th>	
										<th>Ngày Giao Hàng</th>	
										<th>Tình trạng</th>	
										<th>số lượng</th>
										<th>Tổng tiền</th>
										<th>Xóa</th>
									</tr>
								</thead>
								<tbody>										
									<?php $stt=1  ?>										 
									@foreach($orderdetail as $or)
										<tr>
											<td>{{$stt++}}</td>
											<td>{{$or->order->customer->name}}</td>
											<td>{{$or->order->customer->address}}</td>
											<td>{{$or->order->customer->phone}}</td>
											<td>{{$or->order->customer->email}}</td>
											<td>{{$or->product->name}}</td>												
											<td>{{$or->order->orderdate}}</td>
											<td>{{$or->order->shippeddate}}</td>	
											<td>
												@if($or->status==0)
													{{ 'Chưa Thanh Toán '}}
												@else
													{{' Đã Thanh Toán '}}
												@endif
											</td>
											<td>{{$or->order->total}}</td>
											<td>{{number_format(($or->order->total)*($or->product->price))}}</td>											
											
											<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="delete/{{$or->id}}" onclick="xacnhanxoa()"> Delete</a></td>
                            				
										</tr>
									@endforeach
								</tbody>
							</table>
							
						</div>

					</div>
					
				</div>
			</div>			
		</div>
@endsection