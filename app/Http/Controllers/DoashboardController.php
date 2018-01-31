<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Orderdetail;

class DoashboardController extends Controller
{
  
    public function index()
    {
        $earnInDay = Orderdetail::join('order','orderdetail.order_id','order.id')->where('shippeddate',date('y-m-d'))->sum('total');
        return view('admin.dashboard',['earnInDay'=>$earnInDay]);
    }

    
    public function create()
    {
       
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
