<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TypeOfNews;

use App\News;

class NewsController extends Controller
{
      public function getlist(){

    	$news= News::orderBy('id','DESC')->get();

    	$url_table = 'news';

    	return view('admin.news.list',['table'=>$news,'url_table'=>$url_table]);

    }
     public function getadd(){

     	// $news = News::orderBy('id','DESC')->get();

     	$type_of_news = TypeOfNews::orderBy('id','DESC')->get();

     	$url_table = 'news';

    	return view('admin.news.add',['url_table'=>$url_table,'type_of_news'=>$type_of_news]);

    }

    public function postadd(Request $request){

    	// $file = $request->file('imager');

    	// $name = $file->getClientOriginalName();

    	// var_dump($file) ;

    	// var_dump($name);

    	// die();


    	$this->validate($request,[
    		'name'=>'required|min:3|unique:category,name',
    		'news_type_id'=>'required',
    		// 'imager'=>'required',
    		// 'price'=>'required',
    		// 'old'=>'required',
    		// 'height'=>'required',
    		// 'width'=>'required',
    		// 'charac'=>'required',
    		'brief'=>'required',
    		'content'=>'required',
    		// 'quantity'=>'required',

    	],[

    		'name.required'=>'Chưa nhập tên',
    		
    		'name.min'=>'Tên quá ngắn',
    		'name.unique'=>'Tên đã tồn tại',
    		'news_type_id.required'=>'Chưa nhập loại sản phẩm',
    		'brief.required'=>'Chưa nhập tóm tắt',
    		'content.required'=>'Chưa nhập nội dung',
    		// 'quantity.required'=>'Chưa nhập số lương',



    	]);

    	$news = new News;

    	$news->name = $request->name;

    	$news->news_type_id = $request->news_type_id;

    	

    	$news->brief = $request->brief != null ? $request->brief : '0';

    	$news->content = $request->content != null ? $request->content : '0';

    	// $news->quantity = $request->quantity;   

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


    		 	while(file_exists('upload/news/'.$name_imager)){
    		 		$name_imager = uniqid()."-".$file->getClientOriginalName();
    		 	}
    		 	$file->move("upload/news",$name_imager);

    			
    		}
    		else{

    			return redirect('admin/news/add')->with('loi','Chỉ đc chon file ảnh');
    		}
    		
    	}
    	else
    	{
    		return redirect('admin/news/add')->with('loi','Chưa chọn file ảnh');
    	}
    	$news->imager = $name_imager;

    	$news->save();

    	return redirect('admin/news/add')->with('thanhcong','Thêm thành công');



    }

    public function getedit($ID){

    	$news = News::find($ID);

    	$news_type_id = TypeOfNews::orderBy('id','DESC')->get();

    	return view('admin.news.edit',['news_type_id'=>$news_type_id,'news'=>$news]);
    }
      public function postedit(Request $request , $id){



    	$this->validate($request,[
    		'name'=>'required|min:3|unique:category,name',
    		'news_type_id'=>'required',
  
    		'brief'=>'required',
    		'content'=>'required',
    		// 'quantity'=>'required',

    	],[

    		'name.required'=>'Chưa nhập tên',
    		
    		'name.min'=>'Tên quá ngắn',
    		'name.unique'=>'Tên đã tồn tại',
    		'news_type_id.required'=>'Chưa nhập loại sản phẩm',
    		'brief.required'=>'Chưa nhập tóm tắt',
    		'content.required'=>'Chưa nhập nội dung',
    		// 'quantity.required'=>'Chưa nhập số lương',



    	]);

    	$news = News::find($id);

    	$news->name = $request->name;

    	$news->news_type_id = $request->news_type_id;

    	

    	$news->brief = $request->brief != null ? $request->brief : '0';

    	$news->content = $request->content != null ? $request->content : '0';  

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
    		 	

    		 	while(file_exists('upload/news/'.$name_imager)){
    		 		$name_imager = uniqid()."-".$file->getClientOriginalName();
    		 	}

    		 	unlink('upload/news/'.$news->imager);

    		 	$file->move("upload/news",$name_imager);
    		 	
    			$news->imager = $name_imager;

    			$news->save();

    			return redirect('admin/news/edit/'.$id)->with('thanhcong','Thêm thành công');

    		}
    		else{

    			return redirect('admin/news/edit/'.$id)->with('loi','Chỉ đc chon file ảnh');

    		}
    		
    	}
    	
    	

    	$news->save();

    	return redirect('admin/news/edit/'.$id)->with('thanhcong','Thêm thành công');
    }

    public function getremove($id){

    	$news = News::find($id);

    	$news->delete();

    	while(file_exists('upload/news/'.$news->imager)){
    		
		unlink('upload/news/'.$news->imager);

    	// $name_imager = uniqid()."-".$file->getClientOriginalName();}

    	}

    	return redirect('admin/news/list');

    }
}
