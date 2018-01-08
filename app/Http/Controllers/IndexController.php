<?php
namespace App\Http\Controllers;
Class IndexController extends Controller
{
    public function home(){
        return view('home');
    }
    
    public function login(){
        return view('login');
    }    
}

?>