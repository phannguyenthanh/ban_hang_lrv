<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;

use App\Category;



class CategoryController extends Controller
{
    public function getlist(){

    	$category = Category::orderBy('id','DESC')->get();

    	return view('admin.category.list',['category'=>$category]);

    }
     public function getadd(){

     	$menu = Menu::orderBy('id','DESC')->get();

    	return view('admin.category.add',['menu'=>$menu]);

    }

    public function postadd(Request $request){

    	$this->validate($request,[
    		'name'=>'required|min:3|unique:category,name',
    		'menu'=>'required',

    	],[

    		'name.required'=>'Chưa nhập tên',
    		'menu.required'=>'Chưa nhập menu',
    		'name.min'=>'Tên quá ngắn',
    		'name.unique'=>'Tên đã tồn tại',

    	]);

    	$category = new Category;

    	$category->name = $request->name;

    	$category->menu_id = $request->menu;

    	$category->save();

    	return redirect('admin/category/add')->with('thanhcong','Thêm thành công');

    }

    public function getedit($id){

    	$category = Category::find($id);

    	$menu = Menu::orderBy('id','DESC')->get();

    	return view('admin.category.edit',['category'=>$category,'menu'=>$menu]);
    }
      public function postedit(Request $request , $id){

    $this->validate($request,[
    		'name'=>'required|min:3|unique:category,name',
    		'menu'=>'required',

    	],[

    		'name.required'=>'Chưa nhập tên',
    		'menu.required'=>'Chưa nhập menu',
    		'name.min'=>'Tên quá ngắn',
    		'name.unique'=>'Tên đã tồn tại',


    	]);

    	$category = Category::find($id);

    	$category->name = $request->name;

    	$category->menu_id = $request->menu;

    	$category->save();

    	return redirect('admin/category/edit/'.$id)->with('thanhcong','SỬa thành công');;
    }

    public function getremove($id){

    	$category = Category::find($id);

    	$category->delete();

    	return redirect('admin/category/list');

    }

}
