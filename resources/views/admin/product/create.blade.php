@extends('admin.master')
@section('content')
		<div id="page-wrapper">
			<div class="graphs">
				<h3 class="blank1">Thêm Sản Phẩm</h3> 
				<form action="{{url('product/create')}}" method="POST" enctype="multipart/form-data">
					<div class="col-md-8">
						<div class="xs tabls">
							<div class="panel panel-primary" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
								<div class="col-lg-7" style="padding-bottom:120px">
		                       
		                        	{{csrf_field()}}
		                        	<div class="form-group">
		                                <label>Danh mục : </label>
		                                <select name="category" class="form-control">
		                                	<option selected="">--- Chọn Loại Danh Mục Sản Phẩm --</option>
		                                	@foreach($category as $cat)
		                                		<option value="{{$cat->id}}">-- {{ $cat->name}}</option>
		                                	@endforeach  
		                                </select>
		                            </div>
		                            <div class="form-group">
		                                <label>Tên Sản Phẩm : </label>
		                                <input class="form-control" name="txtname"  value="" />
		                                <p style="color: red">{{ $errors->first('txtname') }}</p>
		                            </div>
		                            <div class="form-group">
		                                <label>giá: </label>
		                                <input type="number" class="form-control" name="price"  value="" />
		                                <p style="color: red">{{ $errors->first('price') }}</p>
		                            </div>
		                            <div class="form-group">
		                                <label>Sale: </label>
		                                <input class="form-control" name="sale"  value="" />
		                                <p style="color: red">{{ $errors->first('sale') }}</p>
		                            </div>
		                            <div class="form-group">
	                                	<div class=" col-md-6">
		                                	<label>KM từ ngày :</label>
		                                	<input type="date" class="form-control" name="saleto">
		                                </div>
		                                <div class=" col-md-6">
		                                    <label>KM đến ngày : </label>
		                                	<input type="date" class="form-control" name="salefrom">
		                                </div>	
		                                	                                
		                            </div>
		                            <div class="form-group">
		                                <label>Số Lượng : </label>
		                                <input class="form-control" name="qty"  value="" />
		                                <p style="color: red">{{ $errors->first('qty') }}</p>
		                            </div>
		                            <div class="form-group">
		                                <label>Image: </label>
		                               	<input type="file" name="image">
		                            </div>
		                            <div class="form-group">
		                                <label>stock : </label>
		                                <input class="form-control" name="stock"  value="" />
		                                <p style="color: red">{{ $errors->first('stock') }}</p>
		                            </div>

		                            <div class="form-group">
		                                <label>Mô tả : </label>
		                                <textarea class="form-control" name="description"  value="" ></textarea> 
		                                <script type="text/javascript">ckeditor('description')</script>
		                            </div>
		                            <div class="form-group">
		                                <label>Nội Dung: </label>
		                                <textarea class="form-control" name="content"  value="" ></textarea> 
		                                <script type="text/javascript">ckeditor('content')</script>
		                            </div>
		                            <div class="form-group">
		                                <label>Trạng Thái : </label>
		                                <input class="form-control" name="status"  value="" />
		                                <p style="color: red">{{ $errors->first('status') }}</p>
		                            </div>  

		                            <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
		                            <button type="reset" class="btn btn-default">Làm Lại</button>
		                       
		               			</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
			                @for($i=1;$i<=10;$i++)
			                    <label>Chọn Hình {{$i}} Cho Sản Phẩm</label>                
			                    <input type="file" name="images_product[]">
			                @endfor
			            </div>
					</div>
				<form>	
			</div>
		</div>
@endsection