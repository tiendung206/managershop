<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class IndexController extends Controller
{
     public function indexproduct()
    {
        $indexproduct=Product::get();
        return view ('fontend.layout.home',['indexproduct'=>$indexproduct]);
    }
    
}
