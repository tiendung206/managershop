@extends('admin.master')
@section('content')
		<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Thêm Danh Mục Sản Phẩm</h3> 
					<div class="xs tabls">
						<div class="panel panel-primary" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
							 <div class="col-lg-7" style="padding-bottom:120px">
	                        <form action="" method="POST">
	                        	{{csrf_field()}}
	                            <div class="form-group">
	                                <label>Name: </label>
	                                <input class="form-control" name="txtname"  value="{{ old('txtname',isset($category) ? $category['name'] : null) }}" />
	                                <p style="color: red">{{ $errors->first('txtname') }}</p>
	                            </div>
	                            
	                            <button type="submit" class="btn btn-primary">Sửa Danh Mục</button>
	                            <button type="reset" class="btn btn-default">Làm Lại</button>
	                        <form>
                    </div>

						</div>
						
					</div>
				</div>
			</div>
		</div>
@endsection