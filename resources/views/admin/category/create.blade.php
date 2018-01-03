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
	                                <input class="form-control" name="txtname" placeholder="Nhập Tên Danh Mục" />
	                                @if($errors->has('txtname'))
									   		 <p style="color: red"> {{$errors->first('txtname')}} </p>
									@endif
	                            </div>
	                            
	                            <button type="submit" class="btn btn-primary">Thêm Danh Mục</button>
	                            <button type="reset" class="btn btn-default">Reset</button>
	                        <form>
                    </div>

						</div>
						
					</div>
				</div>
			</div>
		</div>
@endsection