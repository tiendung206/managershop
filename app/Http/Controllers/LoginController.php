<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class LoginController extends Controller

{
     public function login(Request $request)
    {
       print_r(DB::table('user')->get());
        if($request ->isMethod('POST')){
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:4',
            'pass' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        }
       
        
        $username = $request->input('username');
        $pass = $request ->input('pass'); 
        }
        return view('login');
    }

  
}


?>