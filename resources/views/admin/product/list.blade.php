@extends('admin.master')
@section('content')
		<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Sản Phẩm</h3> 
					 <div class="xs tabls">
					<h4 ><a class="alert alert-primary" href="{{url('product/create')}}">Thêm Sản Phẩm</a></h4>


                    @if(session('success'))
                     <div class="alert alert-success">
                          {{session('success')}}
                     </div>                       
                     @endif 
						<div class="panel panel-primary" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
							
							<div class="panel-body no-padding" style="display: block;">
								<table class="table table-striped  table-bordered" align="center">
									<thead>
										<tr class="success">
											<th>STT</th>
											<th>Danh mục sản phẩm</th>
											<th>Tên Sản Phẩm</th>
											<th>Miêu Tả</th>
											<th>Giá</th>
											<th>Sale</th>
											<th>Số lượng</th>
											<th>hình ảnh</th>
											<th>Nội dung</th>
											<th>Trạng thái</th>
											<th>Stock</th>
											<th>Xóa</th>
											<th>Sửa</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											$stt=1;
										 ?>
										@foreach($product as $pro)
											<tr>
												<td>{{$stt++}}</td>
												<td>{{$pro->name}}</td>
												<td>{{$pro->name}}</td>
												<td>{{$pro->description}}</td>
												<td>{{Number_format($pro->price)}}</td>
												<td>{{$pro->sale}}</td>
												<td>{{$pro->quanlity}}</td>
												<td>{{$pro->status}}</td>
												<td>{{$pro->stock}}</td>
												<td>{{$pro->image}}</td>
												<td>{{$pro->content}}</td>
												<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="delete/{{$pro->id}}" onclick="xacnhanxoa()"> Delete</a></td>
                                				<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="edit/{{$pro->id}}">Edit</a></td>
											</tr>
										@endforeach
									</tbody>
								</table>

							</div>

						</div>
						
					</div>
				</div>
			</div>
		</div>
@endsection