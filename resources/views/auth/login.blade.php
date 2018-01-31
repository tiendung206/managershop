@extends('auth.layout')
@section('auth')
@section('title','Đăng Nhập')
	<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<p><span>Đăng Nhập</span> <a href="index.html">Quản Trị</a></p>
						</div>
						
						<div class="signin">							
							<form method="post" action="{{url('admin/login')}}">
								{{csrf_field()}}
							@if(session('err'))
			                     <div class="alert alert-danger">
			                        	{{session('err')}}
			                     </div>                       
	                    	@endif 
							<div class="log-input">
								<div class="log-input-left">
								   <input type="text" name="email" class="user" placeholder="Nhập Email" />
								   <p style="color: red">{{ $errors->first('email') }}</p>
								</div>								
								<div class="clearfix"> </div>
							</div>
							<div class="log-input">
								<div class="log-input-left">
								   <input type="password" name="password" class="lock" placeholder="Nhập Mật Khẩu"/>
								   <p style="color: red">{{ $errors->first('password') }}</p>
								</div>								
								<div class="clearfix"> </div>
							</div>
							<div class="signin-rit">
								<span class="checkbox1">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">Ghi mật khẩu ?</label>
								</span>
								<p><a href="#">Quên Mật Khẩu</a> </p>
								<div class="clearfix"> </div>
							</div>
							<input type="submit" value="Đăng Nhập">
						</form>	 
						</div>
						<div class="new_people">
							<h4>Chưa Là Thành Viên</h4><p></p>
							<a href="{{url('admin/register')}}">Đăng Ký Ngay!</a>
						</div>
					</div>
				</div>
			</div>
@endsection