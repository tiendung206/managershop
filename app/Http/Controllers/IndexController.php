<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class IndexController extends Controller
{
     public function indexproduct()
    {
    	$banner=DB::table('banner')->get();
        $indexproduct=Product::get();
        return view ('fontend.layout.home',['indexproduct'=>$indexproduct,'banner'=>$banner]);
    }
    
}
