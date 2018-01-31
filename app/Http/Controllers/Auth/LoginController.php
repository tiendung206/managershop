<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Validator;
class LoginController extends Controller
{

    use AuthenticatesUsers;


    public function getLogin()
    {
        return view('auth.login');
    }
    public function postLogin(LoginRequest $request)
    {

        $login = [
            'email' => $request->email, 
            'password' => $request->password,
            'level' => 1

        ];  
        if (Auth::attempt($login)) 
        {
            return redirect('dashboard');
        }
        else
        {
            return redirect()->back()->with('err','Đăng Nhập Không Thành Công');
        }
        
    }
    public function getLogout(){
        Auth::logout();
        return redirect('/');
    }
    
}
