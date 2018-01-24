@extends('admin.master')
@section('content')
<style type="text/css">
	.icon_detail{ position:relative; top:-40px; left:-20px }
	
</style>
		<div id="page-wrapper">
			<form action="" method="POST" enctype="multipart/form-data">
	         {{csrf_field()}}
			<div class="graphs">
				<h3 class="blank1">Sửa Sản Phẩm</h3> 				
				<div class="col-md-8">
					<div class="xs tabls">
						<div class="panel panel-primary" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
							<div class="col-lg-7" style="padding-bottom:120px">	                        
	                        	<div class="form-group">
	                                <label>Danh mục : </label>
	                                <select name="category" class="form-control">
	                                	<option selected="">--- Chọn Loại Danh Mục Sản Phẩm --</option>
	                                	@foreach($category as $cat)
	                                		@if($product->cat_id ==  $cat->id)           
								                    <option value="{{$cat->id}}" selected="true">
								                    	{{$cat->name}}
								                    </option>
							                    @else
								                    <option value="{{$cat->id}}">
								                    	{{$cat->name}}
								                    </option>
							                    @endif
	                                	@endforeach  
	                                </select>
	                            </div>
	                            <div class="form-group">
	                                <label>Tên Sản Phẩm : </label>
	                                <input class="form-control" name="name"  value="{{old('name',isset($product) ? $product['name'] : null)}}" />
	                                <p style="color: red">{{ $errors->first('name') }}</p>
	                            </div>
	                            <div class="form-group">
	                                <label>giá: </label>
	                                <input type="number" class="form-control" name="price"  value="{{old('price',isset($product) ? $product['price'] : null)}}" />
	                                <p style="color: red">{{ $errors->first('price') }}</p>
	                            </div>
	                            <div class="form-group">
	                                <label>Sale: </label>
	                                <input class="form-control" name="sale"  value="{{old('sale',isset($product) ? $product['sale'] : null)}}" />
	                                <p style="color: red">{{ $errors->first('sale') }}</p>
	                            </div>
	                            <div class="form-group">
	                                <label>Số Lượng : </label>
	                                <input class="form-control" name="qty"  value="{{old('qty',isset($product) ? $product['quanlity'] : null)}}" />
	                                <p style="color: red">{{ $errors->first('qty') }}</p>
	                            </div>
	                            <div class="form-group" > 
					              <label>Hình Ảnh Hiện Tại</label>           
					              <img width="100%" src="{{url('upload/images/product/')}}/{{$product->image}}" class="image">
					          </div>
	                            <div class="form-group">
					              <input type="file" name="image">
					              <input type="hidden" name="img_curr" value="{{$product->image}}">
					          </div>
	                            <div class="form-group">
	                                <label>stock : </label>
	                                <input class="form-control" name="stock"  value="{{old('stock',isset($product) ? $product['stock'] : null)}}" />
	                                <p style="color: red">{{ $errors->first('stock') }}</p>
	                            </div>

	                            <div class="form-group">
	                                <label>Mô tả : </label>
	                                <textarea class="form-control" name="description"  value="" >{{old('description',isset($product) ? $product['description'] : null)}}</textarea> 
	                                <script type="text/javascript">ckeditor('description')</script>
	                            </div>
	                            <div class="form-group">
	                                <label>Nội Dung: </label>
	                                <textarea class="form-control" name="content"  value="" >{{old('txtname',isset($product) ? $product['content'] : null)}}</textarea> 
	                                <script type="text/javascript">ckeditor('content')</script>
	                            </div>
	                            <div class="form-group">
	                                <label>Trạng Thái : </label>
	                                <input class="form-control" name="status"  value="{{old('txtname',isset($product) ? $product['status'] : null)}}" />
	                                <p style="color: red">{{ $errors->first('status') }}</p>
	                            </div>  
	                            <button type="submit" class="btn btn-primary">Sửa Sản Phẩm</button>
	                            <button type="reset" class="btn btn-default">Làm Lại</button>
	                        <form>
	               			</div>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-4">
					@foreach ($imagesproduct as $item) 
						<img width="200px" style="margin: 10px" src="{{url('upload/images/product/detail/')}}/{{$item->images}}" >
						<a href="" id="{{$item->id}}" class="btn btn-danger btn_circle icon_detail" onclick=""><i class="fa fa-times"></i></a>
					@endforeach
					
				</div>
			</div>
			 <form>
		</div>
@endsection

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<script type="text/javascript">
	$(document).ready(function(){
		$.get("")
	}
</script> -->