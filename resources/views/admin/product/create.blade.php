@extends('admin.master')
@section('content')
		<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Thêm Sản Phẩm</h3> 
					<div class="xs tabls">
						<div class="panel panel-primary" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
							 <div class="col-lg-7" style="padding-bottom:120px">
	                        <form action="" method="POST">
	                        	{{csrf_field()}}
	                            <div class="form-group">
	                                <label>Tên Sản Phẩm : </label>
	                                <input class="form-control" name="txtname"  value="" />
	                                <p style="color: red">{{ $errors->first('txtname') }}</p>
	                            </div>
	                            <div class="form-group">
	                                <label>Danh mục : </label>
	                                <input class="form-control" name="txtname"  value="" />
	                                <p style="color: red">{{ $errors->first('txtname') }}</p>
	                            </div>
	                            <div class="form-group">
	                                <label>Miêu tả : </label>
	                                <textarea class="form-control" name="description"  value="" ></textarea> 
	                                <script type="text/javascript">ckeditor('description')</script>
	                            </div>
	                            <div class="form-group">
	                                <label>giá: </label>
	                                <input class="form-control" name="txtname"  value="" />
	                                <p style="color: red">{{ $errors->first('txtname') }}</p>
	                            </div>
	                            <div class="form-group">
	                                <label>Sale: </label>
	                                <input class="form-control" name="txtname"  value="" />
	                                <p style="color: red">{{ $errors->first('txtname') }}</p>
	                            </div>
	                            <div class="form-group">
	                                <label>Số Lượng : </label>
	                                <input class="form-control" name="txtname"  value="" />
	                                <p style="color: red">{{ $errors->first('txtname') }}</p>
	                            </div>
	                            <div class="form-group">
	                                <label>Image: </label>
	                               	<input type="file" name="image">
	                            </div>
	                            <div class="form-group">
	                                <label>Nội Dung: </label>
	                                <textarea class="form-control" name="content"  value="" ></textarea> 
	                                <script type="text/javascript">ckeditor('content')</script>
	                            </div>
	                            <div class="form-group">
	                                <label>Trạng Thái : </label>
	                                <input class="form-control" name="txtname"  value="" />
	                                <p style="color: red">{{ $errors->first('txtname') }}</p>
	                            </div>
	                            
	                            
	                            <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
	                            <button type="reset" class="btn btn-default">Làm Lại</button>
	                        <form>
                    </div>

						</div>
						
					</div>
				</div>
			</div>
		</div>
@endsection