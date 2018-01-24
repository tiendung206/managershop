<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Category;
use App\Order;
use App\Http\Requests\ProductRequest;
use Input;
use Illuminate\Http\UploadedFile;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $order = new Order();
    
        $data = Order::first();
         return view('admin.order.list',['data'=>$data]);
       
    }
    public function create()
    {
        
        $product = DB::table('product')->get();
        return view('admin.order.create',['product'=>$product]);
    }
    public function store(ProductRequest $request)
    {

        $order = new Product();
        $product->name = $request->txtname;
        $product->cat_id = $request->category;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->sale = $request->sale;
        // $product->salefrom = date_add('1998-01-02') ;
        // $product->saleto = date_add('1998-01-02') ;
        $product->quanlity = $request->qty;
        $product->status = $request->status;
        $product->stock = $request->stock;
        $product->content = $request->content;
        $product->image =  $file_name ;

        $product->save();
        $product_id= $product->id;
        // detail image
        
        if ($request->hasFile('images_product')) 
        {
            
           foreach ($request->file('images_product') as $file) 
            {
               $images_product = new Productimage();
               if(isset($file))
               {
                    $images_product->images=$file->getClientOriginalName();
                    $images_product->product_id=$product_id;
                    $file->move('upload/images/product/detail/',$images_product->images);
                    $images_product->save();
               }            
           }
        }        
        return redirect('product/list')->with('success','Bạn Đã Thêm Thành Công ! ');
    }
    public function edit($id)
    {
        $category=Category::All();
        $product=Product::find($id);
        $imagesproduct=Product::find($id)->productimages;
        return view('admin.product.edit',['product'=>$product,'category'=>$category,'imagesproduct'=>$imagesproduct]);
    }
    public function update(Request $request, $id)
    {
       $this-> validate($request,
            [
                'name'=>'required'
            ],
            [
                'name.required' =>' Bạn Chưa Nhập Tên'
            ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->cat_id = $request->category;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->sale = $request->sale;
        $product->quanlity = $request->qty;
        $product->status = $request->status;
        $product->stock = $request->stock;
        $product->image =  '7559.jfif' ;
        $product->content = $request->content; 
        $product->save();
        return redirect('product/list')->with('success','Bạn đã Sửa thành công');
    }
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete($id);
        return redirect('product/list')->with('success','Bạn đã Xóa thành công');
    }
   
}

