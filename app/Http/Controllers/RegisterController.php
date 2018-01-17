<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\MessageBag;  

class RegisterController extends Controller
{
    public function index()
    {
         return view('auth.register');
    }

    public function store(Request $request)
    {
        $this-> validate($request,
            [
                'username'=>'required',
                'email'=>'required|email',
                'password'=>'required|min:8',
            ],
            [
                'username.required' =>' Bạn Chưa Nhập Tên',
                'email.required' =>' Bạn Chưa email',
                'email.email' =>' Email Không Đúng Định Dạng',
                'password.required' =>' Bạn Chưa Mật Khẩu',
                'password.min' =>' Mật Khẩu Ít Nhất Là 8 Ký Tự'
            ]);


        $user = User::where('email',$request->email)->first();

        // Check username available

        if(isset($user)){
            $errors = new MessageBag(['email' => 'Email đã tồn tại']);
            return redirect()->back()->withInput()->withErrors($errors);
        }

        $users = new User();
        $users->name = $request->username;
        $users->email = $request->email;
        $users->password =bcrypt($request->password);
        $users->level = 1;       
        $users->save();
        return redirect('admin/login')->with('success','Bạn đã thêm thành công');
    }

   
}
