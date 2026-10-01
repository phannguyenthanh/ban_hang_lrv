<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;

class SliderController extends Controller
{
	public function getlist(){

		$slider= Slider::orderBy('id','DESC')->get();

		$url_table = 'slider';

		return view('admin.slider.list',['table'=>$slider,'url_table'=>$url_table]);

	}
	public function getadd(){

		$url_table = 'slider';

		return view('admin.slider.add',['url_table'=>$url_table]);

	}

	public function postadd(Request $request){



		$this->validate($request,[
			'name'=>'required|min:3|unique:category,name'

		],[

			'name.required'=>'Chưa nhập tên',

			'name.min'=>'Tên quá ngắn',
			'name.unique'=>'Tên đã tồn tại'

   



		]);

		$slider = new Slider;

		$slider->name = $request->name;
  

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


				while(file_exists('upload/slider/'.$name_imager)){
					$name_imager = uniqid()."-".$file->getClientOriginalName();
				}
				$file->move("upload/slider",$name_imager);


			}
			else{

				return redirect('admin/slider/add')->with('loi','Chỉ đc chon file ảnh');
			}

		}
		else
		{
			return redirect('admin/slider/add')->with('loi','Chưa chọn file ảnh');
		}
		$slider->imager = $name_imager;

		$slider->save();

		return redirect('admin/slider/add')->with('thanhcong','Thêm thành công');



	}

	public function getedit($ID){

		$slider = Slider::find($ID);

  

		return view('admin.slider.edit',['slider'=>$slider]);
	}
	public function postedit(Request $request , $id){


		$this->validate($request,[
			'name'=>'required|min:3|unique:category,name'

   

		],[

			'name.required'=>'Chưa nhập tên',

			'name.min'=>'Tên quá ngắn',
			'name.unique'=>'Tên đã tồn tại'

    		// 'quantity.required'=>'Chưa nhập số lương',



		]);


		$slider = Slider::find($id);

		$slider->name = $request->name;

		if ($request->hasFile('imager')) {

			$file = $request->file('imager');



			$last_file = $file->getClientOriginalExtension();

			if (

				$last_file == 'png'||
				$last_file == 'PNG'||
				$last_file == 'jpg'||
				$last_file == 'gif'||
				$last_file == 'tiff'||
				$last_file == 'jpeg'||
				$last_file == 'bmp'


			) {
				unlink('upload/slider/'.$slider->imager);

				$name_imager = uniqid()."-".$file->getClientOriginalName();
				
				
				while(file_exists('upload/slider/'.$name_imager)){

					$name_imager = uniqid()."-".$file->getClientOriginalName();
				}

				

				$file->move("upload/slider",$name_imager);

				$slider->imager = $name_imager;

				$slider->save();

				return redirect('admin/slider/edit/'.$id)->with('thanhcong','sửa thành công');

			}
			else{

				return redirect('admin/slider/edit/'.$id)->with('loi','Chỉ đc chon file ảnh');

			}

		}
	



		$slider->save();

		return redirect('admin/slider/edit/'.$id)->with('thanhcong','Thêm thành công');
	}

	public function getremove($id){

		$slider= Slider::find($id);

		$slider->delete();

		while(file_exists('upload/slider/'.$slider->imager)){

			unlink('upload/slider/'.$slider->imager);

			}



			return redirect('admin/slider/list');

		}
	}
