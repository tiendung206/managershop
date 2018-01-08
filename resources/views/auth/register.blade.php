@extends('auth.layout')
@section('auth')
@section('title','Đăng Ký Thành Viên')
<div id="page-wrapper" class="sign-in-wrapper">
		<div class="graphs">
			<div class="sign-up">
				<div class="sign-in-form-top">
				<p><span>Đăng Ký</span> </p>
				</div>
				<p class="creating"></p>
				<div>
					<form action="{{url('admin/register')}}" method="post">
					{{csrf_field()}}
						<h5>Thông tin cá nhân</h5>
						<div class="sign-u">
							<div class="sign-up1"><h4>Họ Tên (*) :</h4>	</div>
							<div class="sign-up2"><input type="text" placeholder=" " name="username" /></div>
							<p style="color: red">{{ $errors->first('username') }}</p>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1"><h4>Email (*) :</h4></div>
							<div class="sign-up2"><input type="text" placeholder=" " name="email" />	</div>
							<p style="color: red">{{ $errors->first('email') }}</p>
							<div class="clearfix"> </div>
						</div>				
						<div class="sign-u">
							<div class="sign-up1"><h4>Mật khẩu (*) :</h4></div>
							<div class="sign-up2"><input type="password" placeholder=" " name="password" />	</div>

							<div class="clearfix"> </div>
							<p style="color: red">{{ $errors->first('password') }}</p>
						</div>
						<div class="sub_home">
							<div class="sub_home_left"><input type="submit" value="Đăng Ký	"></div>
							<div class="sub_home_right"><p>Trở lại <a href="index.html">Trang Chủ</a></p></div>
							<div class="clearfix"> </div>
						</div>
					</form>
				</div>
			</div>			
		</div>
	</div>
@endsection