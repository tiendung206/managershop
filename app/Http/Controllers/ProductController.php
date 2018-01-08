<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Category;
use App\Http\Requests\ProductRequest;
use Input,File;
use App\Productimage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phantrang = Product::paginate(5);
        $product = Product::all();
        $data = Product::with('category')->get();
        return view('admin.product.list',['data'=>$data,'product'=>$product,'phantrang'=>$phantrang]);
    }
    public function create()
    {
        
        $category = DB::table('category')->get();
        return view('admin.product.create',['category'=>$category]);
    }
    public function store(ProductRequest $request)
    {


        $file_name ='';
        // lấy tên cua image
        $file_name = $request->file('image')->getClientOriginalName();
        // cop ảnh luu vao ht
        $image = $request->file('image')->move('upload/images/product/',$file_name);

        $product = new Product();
        $product->name = $request->txtname;
        $product->cat_id = $request->category;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->sale = $request->sale;
        $product->quanlity = $request->qty;
        $product->status = $request->status;
        $product->stock = $request->stock;
        $product->content = $request->content;
        $product->image =  $file_name ;
        $product->save();
        // detail image
        $product_id=$product->id;    

        return redirect('product/list')->with(['success','Bạn Đã Thêm Thành Công ! ']);
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
