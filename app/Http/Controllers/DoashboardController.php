<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class DoashboardController extends Controller
{
  
    public function index()
    {
        $order=Order::get()->all();
        return view('admin.dashboard',compact($order));
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
