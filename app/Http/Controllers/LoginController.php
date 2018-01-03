<?php
/**
 * Created by PhpStorm.
 * User: OS
 * Date: 12/29/2017
 * Time: 1:30 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;


class LoginController extends Controller
{
    public function getLogin(){
        return view('login');
    }

    public function postLogin(Request $request)
    {
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'username' => 'required|max:7',
            ]);
        }
    }
}