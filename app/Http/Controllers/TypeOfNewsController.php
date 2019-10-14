<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TypeOfNews;

class TypeOfNewsController extends Controller
{
    public function getlist(){

    	$typeofnews = TypeOfNews::orderBy('id','DESC')->get();

    	return view('admin.type_of_news.list',['typeofnews'=>$typeofnews
]);

    }
     public function getadd(){


    	return view('admin.type_of_news.add');

    }

    public function postadd(Request $request){

    	$this->validate($request,[

    		'name'=>'required|min:3|unique:category,name',
   

    	],[

    		'name.required'=>'Chưa nhập tên',
    		'name.min'=>'Tên quá ngắn',
    		'name.unique'=>'Tên đã tồn tại',

    	]);

    	$typeofnews = new TypeOfNews;

    	$typeofnews->name = $request->name;

 

    	$typeofnews->save();

    	return redirect('admin/type_of_news/add')->with('thanhcong','Thêm thành công');

    }

    public function getedit($id){


    	$typeofnews = TypeOfNews::find($id);

    	// $menu = Menu::orderBy('id','DESC')->get();

    	return view('admin.type_of_news.edit',['typeofnews'=>$typeofnews]);
    }
      public function postedit(Request $request , $id){

    $this->validate($request,[
    		'name'=>'required|min:3|unique:category,name',
    		// 'menu'=>'required',

    	],[

    		'name.required'=>'Chưa nhập tên',
    		// 'menu.required'=>'Chưa nhập menu',
    		'name.min'=>'Tên quá ngắn',
    		'name.unique'=>'Tên đã tồn tại',


    	]);

    	$typeofnews = TypeOfNews::find($id);

    	$typeofnews->name = $request->name;

    	// $typeofnews->menu_id = $request->menu;

    	$typeofnews->save();

    	return redirect('admin/type_of_news/edit/'.$id)->with('thanhcong','SỬa thành công');;
    }

    public function getremove($id){

    	$typeofnews= TypeOfNews::find($id);

    	$typeofnews->delete();

    	return redirect('admin/type_of_news/list');

    }
}
