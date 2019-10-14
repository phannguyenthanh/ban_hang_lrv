<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use DB,Cart;

use App\Slider;

use App\Menu;

use App\News;

use App\Letters;

use App\User;

use App\Category;

use App\Products;

use App\TypeOfNews;

use App\CartDetail;

class PageController extends Controller
{
    

    		function __construct(){

                if (Auth::check()) {

                    view()->share('user',Auth::user());
                }

    			$slider = Slider::all();

    			view()->share('slider',$slider);

    			$menu = Menu::all();

    			view()->share('menu',$menu);

    			$typeofnews = TypeOfNews::all();

    			view()->share('typeofnews',$typeofnews);

    			$category = Category::all();

    			view()->share('category',$category);

    			$products = Products::all();

    			view()->share('products',$products);

    		}

    public function gethome(){

    	$products_view_0_6 = Products::orderBy('views','DESC')->skip(0)->take(6)->get();

    	$products_price_0_1 = Products::orderBy('price','DESC')->skip(0)->take(1)->get();

    	$products_news_0_1 = News::orderBy('created_at','DESC')->skip(0)->take(1)->get()->shift();

    	$products_news_1_1 = News::orderBy('created_at','DESC')->skip(1)->take(1)->get()->shift();

    	$products_news_2_1 = News::orderBy('created_at','DESC')->skip(2)->take(1)->get()->shift();



    	// $category_tree = $this->menu->category_tree;

    	// dd($menu);
    	// die();
    	$products_Highlights_0_6 = Products::orderBy('created_at','DESC')->skip(0)->take(6)->get();
    	// $products_Highlights_7_6 = Products::orderBy('created_at','DESC')->skip(7)->take(6)->get();
    	// $products_Highlights_12_6 = Products::orderBy('created_at','DESC')->skip(12)->take(6)->get();

    	return view('wep.home',
    		['title'=>'home',
    		'products_view_0_6'=>$products_view_0_6,
    		'products_price_0_1'=>$products_price_0_1,
    		'products_news_0_1'=>$products_news_0_1,
    		'products_news_1_1'=>$products_news_1_1,
    		'products_news_2_1'=>$products_news_2_1
    		
    		

    	]);

    }
    public function getcategory($id){

    		$category_id = Category::find($id);

    		$products_cate_1 = Products::where('category_id',$id)->orderbydesc('created_at')->paginate(9);

    		// dd($products_cate);
    		$products_new_0_3 = products::orderBy('created_at','DESC')->skip(0)->take(3)->get();

    		$products_view_0_3 = Products::orderBy('views','DESC')->skip(0)->take(3)->get();

    	return view('wep.products',
    		[
    			'title'=>$category_id->name,
    			'products_cate_1'=>$products_cate_1,
    			'products_view_0_3'=>$products_view_0_3,
    			'products_new_0_3'=>$products_new_0_3

    		]);

    }

    public function getcategoryall(){

    	$products_view_0_3 = Products::orderBy('views','DESC')->skip(0)->take(3)->get();

    	// dd($products_view_0_3);
    	$products_new_0_3 = products::orderBy('created_at','DESC')->skip(0)->take(3)->get();

    	$products_cate_1 = Products::paginate(9);

    	return view('wep.products',[

    		'title'=>"Tất cả sản phẩm",
    		'products_cate_1'=>$products_cate_1,
    		'products_view_0_3'=>$products_view_0_3,
    		'products_new_0_3'=>$products_new_0_3

    	]);

    }

    public function getprodetail($id){

        $product_once = Products::find($id);

        $category_of_pro = $product_once->category_id;

        $products_cate_0_6 = Products::where('category_id',$category_of_pro)->orderbydesc('created_at')->skip(0)->take(6)->get();

        // dd($products_cate_0_6);

        return view('wep.pro_detail',[

            'title'=>'Chi tiết sản phẩm',

            'product_once' =>$product_once,
            'products_cate_0_6'=>$products_cate_0_6

        ]);

    }
    public function getcart($id){

        $products_buy = DB::table('products')->where('id',$id)->first();

        Cart::add(array('id'=>$id,'name'=>$products_buy->name,'qty'=>1,'price'=>$products_buy->price,'options'=>array('img'=>$products_buy->imager)));
        
        $contentt = Cart::content();


        
        return redirect()->route('shopping');

    }
    public function postcart(Request $req , $id ){

       
        // echo $demo0;
        if (isset($req->demo0)){
            if ($req->demo0==0) {
               $qty = 1 ;
            }
            else{

                 $qty = $req->demo0;
            }

        }
        $products_buy = DB::table('products')->where('id',$id)->first();

        Cart::add(array('id'=>$id,'name'=>$products_buy->name,'qty'=>$qty,'price'=>$products_buy->price,'options'=>array('img'=>$products_buy->imager)));
        $contentt = Cart::content();


        
        return redirect()->route('shopping');
 
    }
    public function postshopping(){

        $contentt = Cart::content();
        // var_dump($contentt);
        // die();
        return view('wep.cart',[
              'title'=>'Giỏ hàng',
              'contentt'=>$contentt

        ]);

    }
    public function remove_cart_pro($id){

        Cart::remove($id);

        return redirect('shopping')->with('thanhcong','Xóa thành công');

    }
    // public function upload_cart_pro(){

    //     if (Request::ajax()){

    //         echo 'oke';
    //     }

    // }
    public function postcart_cart(Request $req,$id){

          Cart::update($id, $req->demo011);


        
        return redirect()->route('shopping')->with('thanhcong','Cập nhật thành công');

    }
    public function postaddcustomer(Request $request){

        $this->validate($request,
            [
                'name'=>'required|min:3',
                'email'=>'required',
                'address'=>'required',
                'phone'=>'required'


            ],[
                'name.required'=>'Chưa nhập Tên',
                'name.min'=>'Tên quá ngắn',
                'address.required'=>'Chưa nhập nhập địa chỉ',
                'phone.required'=>'Chưa nhập nhập Số điện thoại'

            ]);


        $content = Cart::content();

        // dd($content);

        // die();

        

        foreach ($content as  $value) {

            $cart = new CartDetail;
            $cart->customer_ID = 0;
            $cart->products_ID = $request->name;
            $cart->name = $request->name;
            $cart->phone = $request->phone;
            $cart->email = $request->email;
            $cart->address = $request->address;
            $cart->products_ID = $value->id;
            $cart->quality = $value->qty;
            $cart->price = $value->price;
            $cart->save();
            Cart::remove($value->rowId);
            // echo $request->email;
            // echo $request->address;
            // echo $request->qty;
           
           
        }

        return redirect('shopping')->with('thanhcong','Bạn đã đặt hàng thành công');

    }

    public function getlogin(){

        return view('wep.login',[

            'title'=>'Đăng nhập|Đăng kí'
        ]);

    }
    public function postlogin(Request $request){

        $this->validate( $request,
            [
                'email'=>'required',
                'password'=>'required|min:3'


            ],
            [
                'email.required'=>'Bạn chưa nhạp Email',
                'password.required'=>'Bạn chưa nhạp mật khẩu',
                'password.min'=>'Bạn chưa nhạp mật khẩu quá ngắn'
            ]

        );

        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            return redirect('home');
        }
        else{

            return redirect('login')->with('loi','Tài khoản hoặc mật khẩu ko chính xác');

        }

        // return redirect('login');

    }
    public function getlout(){

       Auth::logout();

        return redirect('home');

    }
       public function postregister(Request $request){

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
            // 'admin'=>'required',
            
            
        

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
            // 'admin.required'=>'Chưa phân quyền',
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
        $user->admin = 0;
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

         if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {

            return redirect('home');
        }
        else{

            return redirect('login')->with('loi','Tài khoản hoặc mật khẩu ko chính xác');

        }

        return redirect('home');

    }
    public function postseach(Request $request){

        $seachpro = Products::where('name','like',"%$request->seach%")->orderbydesc('created_at')->paginate(9);
     
        return view('wep.seach',[
            'title'=>'Tìm kiếm',
            'seachpro'=>$seachpro
        ]);

    }
    public function gettyprofnews($id){
            

        $latestpost = News::orderBy('created_at','DESC')->skip(0)->take(4)->get();

        $news_host = News::orderBy('views','DESC')->skip(0)->take(3)->get();

        if ($id!='all') {

        $posttype = TypeOfNews::where('id',$id)->get()->shift();

        $newsbytype = News::where('news_type_id',"$id")->orderbydesc('created_at')->paginate(8);

        return view('wep.news',[
            'titlepost'=> 'Tin tức|'.$posttype->name,
            'title'=>'Tin Tức',
            'newsbytype'=> $newsbytype,
            'latestpost'=> $latestpost,
            'news_host'=> $news_host
        ]);
        }



        else{
       
       $newsbytype = News::orderBy('created_at','DESC')->paginate(8);

        return view('wep.news',[
            'titlepost'=> 'Tin tức|tất cả',
            'title'=>'Tin Tức',
            'newsbytype'=> $newsbytype,
            'latestpost'=> $latestpost,
            'news_host'=> $news_host
        ]);
       
        }



    }
    public function getnewsdetail($id){

        $news_detail = News::where('id',$id)->get()->shift();

        $latestpost = News::orderBy('created_at','DESC')->skip(0)->take(4)->get();

        $news_host = News::orderBy('views','DESC')->skip(0)->take(3)->get();

        return view('wep.news_detail',[
            'title'=>'Chi Tiết',
            'news_host'=> $news_host,
             'latestpost'=> $latestpost,
             'news_detail'=>$news_detail
        ]);
    }
    public function getintroduce(){

        return view('wep.introduce',[

            'title'=>'Giới thiệu'

        ]);
    }
    public function getsupport(){

         return view('wep.support',[

            'title'=>'HỖ TRỢ'

        ]);

    }
    public function postsupport(Request $request){

    $this->validate($request,
            [
                'name'=>'required|min:3',
                'email'=>'required',
                'address'=>'required',
                'phone'=>'required',
                'content'=>'required'


            ],[
                'name.required'=>'Chưa nhập Tên',
                'name.min'=>'Tên quá ngắn',
                'address.required'=>'Chưa nhập nhập địa chỉ',
                'phone.required'=>'Chưa nhập nhập Số điện thoại',
                'content.required'=>'Chưa nhập nhập nội dung'

            ]);
    $letters = new Letters;

    $letters->name = $request->name;

    $letters->users_id = 0;

    $letters->email = $request->email;

    $letters->address = $request->address;

    $letters->phone = $request->phone;

    $letters->content = $request->content;

    $letters->save();

    return redirect('support')->with('thanhcong','Gủi thành công');

    }

}

    