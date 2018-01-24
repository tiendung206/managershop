@extends('admin.master')
@section('content')

		<div id="page-wrapper">
			<div class="graphs">
				<div class="row">
					<div class="col-md-10"><h3 class="blank1">Sản Phẩm</h3> </div>
					<div class="col-md-2"> <h4 class="social_icons-left"><a class="alert alert-primary" href="{{url('product/create')}}">Thêm Sản Phẩm</a></h4></div>
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
							<div class="row">
								<div class="col-md-6">
									<form action="{{url('product/list')}}" method="post">
										{{csrf_field()}}
										<div class="input-group">
										    <input type="text" class="form-control" name="seach" value="{{$seach}}">
										    <span class="input-group-btn">
								        		<button class="btn btn-default" type="submit">Tìm kiếm !</button>
								      		</span>
								    	</div><!-- /input-group -->
									</form>	
								</div><!-- /.col-lg-6 -->
							</div><!-- /.row -->
							<div class="col-md-12">&nbsp</div>
								{{ date(' H:i:s , d-m-Y')}}
							<table class="table table-striped  table-bordered" align="center">
								<thead>
									<tr class="success">
										<th>STT</th>
										<th>Danh mục</th>
										<th>Tên Sản Phẩm</th>
										<th>Mô Tả</th>
										<th>Giá</th>
										<th>Sale</th>
										<th>Sale Từ ngày</th>
										<th>Sale đến ngày</th>
										<th>Số lượng</th>											
										<th>Trạng thái</th>
										<th>Stock</th>
										<th>Hình ảnh</th>
										<th>Nội dung</th>										
										<th>Sửa</th>
										<th>Xóa</th>
									</tr>
									
								</thead>
								<tbody>										
									<?php $stt=1  ?>										 
									@foreach($data as $pro)
										<tr>
											<td>{{$stt++}}</td>
											<td>{{$pro->category->name}}</td>
											<td>{{$pro->name}}</td>
											<td>{{$pro->description}}</td>
											<td>{{Number_format($pro->price)}}</td>
											<td>{{$pro->sale}}</td>
											<td>{{$pro->salefrom}}</td>
											<td>{{$pro->saleto}}</td>
											<td>
												@if($pro->quanlity>0)
													{{$pro->quanlity}}
												@else
													{{ "hết hàng" }}
												@endif
												</td>
											<td>{{$pro->status}}</td>
											<td>{{$pro->stock}}</td>
											<td><img src="{{url('upload/images/product/')}}/{{$pro->image}}" width="50px" height="50px"></td>	
											<td>{{$pro->content}}</td>
											<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="edit/{{$pro->id}}">Edit</a></td>
											<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="delete/{{$pro->id}}" onclick="xacnhanxoa()"> Delete</a></td>
                            				
										</tr>
									@endforeach
								</tbody>
							</table>
							
							{{ $data->links() }}
						</div>

					</div>
					
				</div>
			</div>			
		</div>
@endsection