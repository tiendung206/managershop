@extends('admin.master')
@section('content')
		<div id="page-wrapper">
				<div class="graphs">

					<div class="row">
						<div class="col-md-10"><h3 class="blank1">Danh Mục Sản Phẩm</h3> </div>
						<div class="col-md-2 social_icons-left"><h4 ><a class="alert alert-primary" href="{{url('category/create')}}">Thêm Danh Mục</a></h4></div>
					</div>


					 <div class="xs tabls">
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
											<th>Tên</th>
											<th>Xóa</th>
											<th>Sửa</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											$stt=1;
										 ?>
										@foreach($category as $cat)
											<tr>
												<td>{{$stt++}}</td>
												<td>{{$cat->name}}</td>
												<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="delete/{{$cat->id}}" onclick="xacnhanxoa()"> Delete</a></td>
                                				<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="edit/{{$cat->id}}">Edit</a></td>
											</tr>
										@endforeach
									</tbody>
								</table>
							{{ $category->links() }}
							</div>

						</div>
						
					</div>
				</div>
			</div>
		</div>
@endsection