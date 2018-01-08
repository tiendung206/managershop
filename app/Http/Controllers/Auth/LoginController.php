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

<<<<<<< HEAD
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
=======
    public function getLogin()
>>>>>>> 6b08a02b4925a8c081381c2b507a85289cd069d3
    {
        return view('auth.login');
    }
    public function postLogin(LoginRequest $request)
    {

        $login = [
            'email' => $request->email, 
            'password' => $request->password,
            'level' => 1
<<<<<<< HEAD
        ];  
        if (Auth::attempt($login) 
        {
            return redirect('/dashboard');
=======
        ];   
        if (Auth::attempt($login)) 
        {
            return redirect('dashboard');
>>>>>>> 6b08a02b4925a8c081381c2b507a85289cd069d3
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
