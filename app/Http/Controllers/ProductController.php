<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;

use App\Category;



class ProductController extends Controller
{
    public function getlist(){

    	$products = Products::orderBy('id','DESC')->get();

    	$url_table = 'products';



    	return view('admin.products.list',['table'=>$products,'url_table'=>$url_table]);

    }
     public function getadd(){

     	$category = Category::orderBy('id','DESC')->get();

     	$url_table = 'products';

    	return view('admin.products.add',['table'=>$category,'url_table'=>$url_table]);

    }

    public function postadd(Request $request){

    	// $file = $request->file('imager');

    	// $name = $file->getClientOriginalName();

    	// var_dump($file) ;

    	// var_dump($name);

    	// die();


    	$this->validate($request,[
    		'name'=>'required|min:3|unique:category,name',
    		'category_id'=>'required',
    		// 'imager'=>'required',
    		'price'=>'required',
    		// 'old'=>'required',
    		// 'height'=>'required',
    		// 'width'=>'required',
    		// 'charac'=>'required',
    		// 'general'=>'required',
    		// 'content'=>'required',
    		'quantity'=>'required',

    	],[

    		'name.required'=>'Chưa nhập tên',
    		
    		'name.min'=>'Tên quá ngắn',
    		'name.unique'=>'Tên đã tồn tại',
    		'category_id.required'=>'Chưa nhập loại sản phẩm',
    		// 'imager.required'=>'Chưa nhập ảnh',
    		'price.required'=>'Chưa nhập giá',
    		// 'old.required'=>'Chưa nhập ',
    		// 'height.required'=>'Chưa nhập menu',
    		// 'width.required'=>'Chưa nhập menu',
    		// 'charac.required'=>'Chưa nhập menu',
    		// 'general.required'=>'Chưa nhập menu',
    		// 'content.required'=>'Chưa nhập menu',
    		'quantity.required'=>'Chưa nhập số lương',



    	]);

    	$product = new Products;

    	$product->name = $request->name;

    	$product->category_id = $request->category_id;

    	$product->price = $request->price;

    	$product->old = $request->old != null ? $request->old : '0';

    	$product->height = $request->height != null ? $request->height : '0';

    	$product->width =$request->width != null ? $request->width : '0';

    	$product->charac = $request->charac != null ? $request->charac : '0';

    	$product->general = $request->general != null ? $request->general : '0';

    	$product->content = $request->content != null ? $request->content : '0';

    	$product->quantity = $request->quantity;   

    	if ($request->hasFile('imager')) {

    		$file = $request->file('imager');

    		$last_file = $file->getClientOriginalExtension();

    		if(

    			$last_file == 'png'||
    			$last_file == 'jpg'||
    			$last_file == 'gif'||
    			$last_file == 'tiff'||
    			$last_file == 'jpeg'||
    			$last_file == 'bmp'


    		 ){
    		 	$name_imager = uniqid()."-".$file->getClientOriginalName();


    		 	while(file_exists('upload/product/'.$name_imager)){
    		 		$name_imager = uniqid()."-".$file->getClientOriginalName();
    		 	}
    		 	$file->move("upload/product",$name_imager);

    			
    		}
    		else{

    			return redirect('admin/products/add')->with('loi','Chỉ đc chon file ảnh');
    		}
    		
    	}
    	else
    	{
    		return redirect('admin/products/add')->with('loi','Chưa chọn file ảnh');
    	}
    	$product->imager = $name_imager;

    	$product->save();

    	return redirect('admin/products/add')->with('thanhcong','Thêm thành công');



    }

    public function getedit($ID){

    	$products = Products::find($ID);

    	$category = Category::orderBy('id','DESC')->get();

    	return view('admin.products.edit',['category'=>$category,'products'=>$products]);
    }
      public function postedit(Request $request , $id){



    	$this->validate($request,[
    		'name'=>'required|min:3|unique:category,name',
    		'category_id'=>'required',
    		// 'imager'=>'required',
    		'price'=>'required',
    		// 'old'=>'required',
    		// 'height'=>'required',
    		// 'width'=>'required',
    		// 'charac'=>'required',
    		// 'general'=>'required',
    		// 'content'=>'required',
    		'quantity'=>'required',

    	],[

    		'name.required'=>'Chưa nhập tên',
    		
    		'name.min'=>'Tên quá ngắn',
    		'name.unique'=>'Tên đã tồn tại',
    		'category_id.required'=>'Chưa nhập loại sản phẩm',
    		// 'imager.required'=>'Chưa nhập ảnh',
    		'price.required'=>'Chưa nhập giá',
    		// 'old.required'=>'Chưa nhập ',
    		// 'height.required'=>'Chưa nhập menu',
    		// 'width.required'=>'Chưa nhập menu',
    		// 'charac.required'=>'Chưa nhập menu',
    		// 'general.required'=>'Chưa nhập menu',
    		// 'content.required'=>'Chưa nhập menu',
    		'quantity.required'=>'Chưa nhập số lương',



    	]);

    	$product = Products::find($id);

    	$product->name = $request->name;

    	$product->category_id = $request->category_id;

    	$product->price = $request->price;

    	$product->old = $request->old != null ? $request->old : '0';

    	$product->height = $request->height != null ? $request->height : '0';

    	$product->width =$request->width != null ? $request->width : '0';

    	$product->charac = $request->charac != null ? $request->charac : '0';

    	$product->general = $request->general != null ? $request->general : '0';

    	$product->content = $request->content != null ? $request->content : '0';

    	$product->quantity = $request->quantity;   

    	if ($request->hasFile('imager')) {

    		$file = $request->file('imager');

    		$last_file = $file->getClientOriginalExtension();

    		if (

    			$last_file == 'png'||
    			$last_file == 'jpg'||
    			$last_file == 'gif'||
    			$last_file == 'tiff'||
    			$last_file == 'jpeg'||
    			$last_file == 'bmp'


    		 ) {
    		 	$name_imager = uniqid()."-".$file->getClientOriginalName();
    		 	

    		 	while(file_exists('upload/product/'.$name_imager)){
    		 		$name_imager = uniqid()."-".$file->getClientOriginalName();
    		 	}

    		 	unlink('upload/product/'.$product->imager);

    		 	$file->move("upload/product",$name_imager);
    		 	
    			$product->imager = $name_imager;

    			$product->save();

    			return redirect('admin/products/edit/'.$id)->with('thanhcong','Thêm thành công');

    		}
    		else{

    			return redirect('admin/products/edit/'.$id)->with('loi','Chỉ đc chon file ảnh');

    		}
    		
    	}
    	
    	

    	$product->save();

    	return redirect('admin/products/edit/'.$id)->with('thanhcong','Thêm thành công');
    }

    public function getremove($id){

    	$products = Products::find($id);

    	$products->delete();

    	while(file_exists('upload/products/'.$products->imager)){
    		
		unlink('upload/product/'.$products->imager);

    	$name_imager = uniqid()."-".$file->getClientOriginalName();}

    	

    	return redirect('admin/products/list');

    }

}
