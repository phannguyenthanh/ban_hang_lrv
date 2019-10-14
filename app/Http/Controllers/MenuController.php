<?php

namespace App\Http\Controllers;



use App\Menu;

use Illuminate\Http\Request;

// use App\Http\Requests;

class MenuController extends Controller
{
    public function getlist(){

    	$menu = Menu::orderBy('id','DESC')->get();

    	return view('admin.menu.list',['menu'=>$menu]);

    }

    public function getadd(){

       	// $menu = Menu::find()

    	return view('admin.menu.add');

    }
    public function postadd(Request $request){

       	// $menu = Menu::find();
       	
       	$this->validate($request,[
            'name'=>'required|min:3|unique:Menu,name',
            // 'checkbox'=>'required'

        ],[

            'name.required'=>'Chưa nhập tên',
            'name.unique'=>'Tên đã tồn tại',
            'name.min'=>'Tên phải  dài hơn 3 kí tự ',
            // 'checkbox.required'=>'Chưa phân quyền '

        ]);
        $menu = new Menu;

        $menu->name = $request->name;

        // $menu->display = $request->checkbox;

        $menu->save();

        return redirect('admin/menu/add')->with('thanhcong','Thêm thành công');



    	// return view('admin.menu.add');

    }

    public function getedit($ID){

        $menu = Menu::find($ID);

    	return view('admin.menu.edit',['menu'=>$menu]);

    }
    public function postedit(Request $request , $ID){

        $menu = Menu::find($ID);

        $this->validate($request,[

           'name' =>'required|min:3',

           // 'display' => 'required' 

        ],[

            'name.required' => 'Bạn chưa nhập tên',

            'name.min' => 'Tên phải dài hơn 3 kí tự',


        ]);

        $menu->name = $request->name;

        $menu->save();
   

        return redirect('admin/menu/edit/'.$ID)->with('thanhcong','Sửa thành công');

    	

    }
    public function getremove($ID){

         $menu = Menu::find($ID);

         $menu->delete();

    	return redirect('admin/menu/list');

    }
}
