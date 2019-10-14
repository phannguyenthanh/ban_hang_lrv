<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function getlist(){

    	$user= User::orderBy('id','DESC')->get();

    	$url_table = 'user';

    	return view('admin.user.list',['table'=>$user,'url_table'=>$url_table]);

    }
     public function getadd(){

     	// $user = user::orderBy('id','DESC')->get();

     	// $type_of_user = TypeOfuser::orderBy('id','DESC')->get();

     	$url_table = 'user';

    	return view('admin.user.add',['url_table'=>$url_table]);

    }

    public function postadd(Request $request){

    	$this->validate($request,[
    		'name'=>'required|min:3|unique:users,name',
    		'last_name'=>'required',
    		'email'=>'required|unique:users,email',
    		'password'=>'required|min:4',
    		'pass'=>'required|same:password',
    		'birthday'=>'required',
    		'sex'=>'required',
    		'phone'=>'required',
    		'address'=>'required',
    		'admin'=>'required',
    		
    		
    	

    	],[

    		'name.required'=>'Chưa nhập tên',
    		'name.min'=>'Tên quá ngắn',
    		'name.unique'=>'Tên đã tồn tại',
    		'email.unique'=>'Email đã tồn tại',
    		'last_name.required'=>'Chưa nhập họ',
    		'password.required'=>'Chưa nhập mật khẩu',
    		'password.min'=>'Mật khẩu quá ngắn',
    		'pass.same'=>'Nhập lại mật khẩu chưa chính xác',
    		'birthday.required'=>'Chưa nhạp ngày sinh',
    		'sex.required'=>'chưa nhạp giới tính',
    		'address.required'=>'Chưa nhập địa chỉ',
    		'admin.required'=>'Chưa phân quyền',
    		'phone.required'=>'Chưa phân số điện thoại',
    		



    	]);

    	$user = new User;

    	$user->name = $request->name;
    	$user->last_name = $request->last_name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->birthday = $request->birthday;
    	$user->sex = $request->sex;
    	$user->address = $request->address;
    	$user->admin = $request->admin;
    	$user->phone = $request->phone;
    	

    	

    	

   

    	// $user->quantity = $request->quantity;   

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


    		 	while(file_exists('upload/user/'.$name_imager)){
    		 		$name_imager = uniqid()."-".$file->getClientOriginalName();
    		 	}
    		 	$file->move("upload/user",$name_imager);

    			
    		}
    		else{

    			return redirect('admin/user/add')->with('loi','Chỉ đc chon file ảnh');
    		}
    		
    	}
    	else
    	{
    		$name_imager='0';
    	}
    	$user->avatar = $name_imager;

    	$user->save();

    	return redirect('admin/user/add')->with('thanhcong','Thêm thành công');



    }

    public function getedit($ID){

    	$user = User::find($ID);

    	return view('admin.user.edit',['user'=>$user]);
    }
      public function postedit(Request $request , $id){



    	    	if ($request->password != null) {
 				$this->validate($request,[
    		'name'=>'required|min:3',
    		'last_name'=>'required',
    		// 'email'=>'required|unique:users,email',
    		'password'=>'required|min:4',
    		'pass'=>'required|same:password',
    		'birthday'=>'required',
    		'sex'=>'required',
    		'phone'=>'required',
    		'address'=>'required',
    		'admin'=>'required',
    		
    		
    	

    	],[

    		'name.required'=>'Chưa nhập tên',
    		'name.min'=>'Tên quá ngắn',
    		
    		
    		'last_name.required'=>'Chưa nhập họ',
    		'password.required'=>'Chưa nhập mật khẩu',
    		'password.min'=>'Mật khẩu quá ngắn',
    		'pass.same'=>'Nhập lại mật khẩu chưa chính xác',
    		'birthday.required'=>'Chưa nhạp ngày sinh',
    		'sex.required'=>'chưa nhạp giới tính',
    		'address.required'=>'Chưa nhập địa chỉ',
    		'admin.required'=>'Chưa phân quyền',
    		'phone.required'=>'Chưa phân số điện thoại',
    		



    	]);
    	    	}
    	    	else{

			$this->validate($request,[
    		'name'=>'required|min:3',
    		'last_name'=>'required',
    		// 'email'=>'required|unique:users,email',
    		
    		'birthday'=>'required',
    		'sex'=>'required',
    		'phone'=>'required',
    		'address'=>'required',
    		'admin'=>'required',
    		
    		
    	

    	],[

    		'name.required'=>'Chưa nhập tên',
    		'name.min'=>'Tên quá ngắn',
    		
    	
    		'last_name.required'=>'Chưa nhập họ',
    		'birthday.required'=>'Chưa nhạp ngày sinh',
    		'sex.required'=>'chưa nhạp giới tính',
    		'address.required'=>'Chưa nhập địa chỉ',
    		'admin.required'=>'Chưa phân quyền',
    		'phone.required'=>'Chưa phân số điện thoại',
    		



    	]);


    	    	}


    	$user = User::find($id);

    	$user->name = $request->name;
    	$user->last_name = $request->last_name;
    	
    	if ($request->password!= null) {
    			$user->password = bcrypt($request->password);
    	}

    
    	$user->birthday = $request->birthday;
    	$user->sex = $request->sex;
    	$user->address = $request->address;
    	$user->admin = $request->admin;
    	$user->phone = $request->phone;
    	

    	

    	

   

    	// $user->quantity = $request->quantity;   
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
    		 	
    		 	unlink('upload/user/'.$user->avatar);
    		 	while(file_exists('upload/user/'.$name_imager)){
    		 		$name_imager = uniqid()."-".$file->getClientOriginalName();
    		 	}

    		 	

    		 	$file->move("upload/user",$name_imager);
    		 	
    			$user->avatar = $name_imager;

    			$user->save();

    			return redirect('admin/user/edit/'.$id)->with('thanhcong','Thêm thành công');

    		}
    		else{

    			return redirect('admin/user/edit/'.$id)->with('loi','Chỉ đc chon file ảnh');

    		}
    		
    	}
    	

    	$user->save();


    	return redirect('admin/user/edit/'.$id)->with('thanhcong','Thêm thành công');
    }

    public function getremove($id){

    	$user = User::find($id);

    	$user->delete();

    	while(file_exists('upload/user/'.$user->avatar)){
    		
		unlink('upload/user/'.$user->avatar);

    	// $name_imager = uniqid()."-".$file->getClientOriginalName();}

    	}

    	return redirect('admin/user/list');

    }
}
