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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }
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
            return redirect()->back();
        }
        
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('login');
    }
    
}
