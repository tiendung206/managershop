<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Category;
use App\Order;
use App\Orderdetail;
use App\Customer;
use Input;


class OrderController extends Controller
{
    public function index()
    {
       
        $orderdetail = Orderdetail::all();
       
        return view('admin.order.list',['orderdetail'=>$orderdetail]);
    }
    public function create()
    {
        
       
    }
    public function store(Request $request)
    {

        
    }
    public function edit($id)
    {
       
    }
    public function update(Request $request, $id)
    {
      
    }
    public function destroy($id)
    {
       
    }
   
}

