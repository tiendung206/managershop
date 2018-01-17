<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\CategoryController;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category =  DB::table('category')->paginate(5);
        return view ('admin.category.list',['category'=>$category]);
    }
    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this-> validate($request,
            [
                'txtname'=>'required'
            ],
            [
                'txtname.required' =>' Bạn Chưa Nhập Tên'
            ]);
        $category = new Category();
        $category->name = $request->txtname;       
        $category->save();
        return redirect('category/list')->with('success','Bạn đã thêm thành công');
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $category=Category::find($id)->toArray();
        return view('admin.category.edit',['category'=>$category]);
    }

    public function update(Request $request, $id)
    {
        $this-> validate($request,
            [
                'txtname'=>'required'
            ],
            [
                'txtname.required' =>' Bạn Chưa Nhập Tên'
            ]);
        $category = Category::find($id);
        $category->name = $request->txtname;       
        $category->save();
        return redirect('category/list')->with('success','Bạn đã Sửa thành công');
    }
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete($id);
        return redirect('category/list')->with('success','Bạn đã Xóa thành công');
    }
}
