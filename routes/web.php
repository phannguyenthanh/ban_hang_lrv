<?php
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Menu;

Route::get('/', function () {
	return redirect(route('homepage'));
});
Route::get('admin/login','LoginController@getlogin');
// Route::post('admin/login',"Auth\LoginController@Login");
Route::post('admin/login', "LoginController@postlogin");

Route::get('admin/logout','LoginController@getlogout');

Route::group(['prefix'=>'admin','middleware'=>'adminlogin'],function(){

	
	Route::group(['prefix'=>'menu'],function(){

		Route::get('list','MenuController@getlist');

		Route::get('add','MenuController@getadd');

		Route::post('add','MenuController@postadd');

		Route::get('edit/{ID}','MenuController@getedit');

		Route::post('edit/{ID}','MenuController@postedit');

		Route::get('remove/{ID}','MenuController@getremove');

	});
	Route::group(['prefix'=>'category'],function(){

		Route::get('list','CategoryController@getlist');

		Route::get('add','CategoryController@getadd');

		Route::post('add','CategoryController@postadd');

		Route::get('edit/{ID}','CategoryController@getedit');

		Route::post('edit/{ID}','CategoryController@postedit');

		Route::get('remove/{ID}','CategoryController@getremove');

	});
	Route::group(['prefix'=>'products'],function(){

		Route::get('list','ProductController@getlist');

		Route::get('add','ProductController@getadd');

		Route::post('add','ProductController@postadd');

		Route::get('edit/{ID}','ProductController@getedit');

		Route::post('edit/{ID}','ProductController@postedit');

		Route::get('remove/{ID}','ProductController@getremove');

	});

		Route::group(['prefix'=>'type_of_news'],function(){

		Route::get('list','TypeOfNewsController@getlist');

		Route::get('add','TypeOfNewsController@getadd');

		Route::post('add','TypeOfNewsController@postadd');

		Route::get('edit/{ID}','TypeOfNewsController@getedit');

		Route::post('edit/{ID}','TypeOfNewsController@postedit');

		Route::get('remove/{ID}','TypeOfNewsController@getremove');

	});
		
		Route::group(['prefix'=>'news'],function(){

		Route::get('list','NewsController@getlist');

		Route::get('add','NewsController@getadd');

		Route::post('add','NewsController@postadd');

		Route::get('edit/{ID}','NewsController@getedit');

		Route::post('edit/{ID}','NewsController@postedit');

		Route::get('remove/{ID}','NewsController@getremove');

	});
	Route::group(['prefix'=>'slider'],function(){

		Route::get('list','SliderController@getlist');

		Route::get('add','SliderController@getadd');

		Route::post('add','SliderController@postadd');

		Route::get('edit/{ID}','SliderController@getedit');

		Route::post('edit/{ID}','SliderController@postedit');

		Route::get('remove/{ID}','SliderController@getremove');

	});
		Route::group(['prefix'=>'user'],function(){

		Route::get('list','UserController@getlist');

		Route::get('add','UserController@getadd');

		Route::post('add','UserController@postadd');

		Route::get('edit/{ID}','UserController@getedit');

		Route::post('edit/{ID}','UserController@postedit');

		Route::get('remove/{ID}','UserController@getremove');

	});
		Route::group(['prefix'=>'letters'],function(){

		Route::get('list','LettersController@getlist');

		Route::get('remove/{ID}','LettersController@getremove');

	});
	Route::group(['prefix'=>'cart_detail'],function(){

		Route::get('list','CartDetailController@getlist');

		Route::get('remove/{ID}','CartDetailController@getremove');

	});


});

Route::get('home','PageController@gethome')->name('homepage');
Route::get('category/{id}','PageController@getcategory');
Route::get('category.html','PageController@getcategoryall');
Route::get('products/detail/{id}','PageController@getprodetail');
Route::post('cart/{id}','PageController@postcart');
Route::get('cart/{id}','PageController@getcart');
Route::get('shopping','PageController@postshopping')->name('shopping');
Route::get('remove/cartproduc/{id}','PageController@remove_cart_pro');
Route::post('cart_cart/{id}','PageController@postcart_cart');
Route::post('addcustomer','PageController@postaddcustomer');
Route::get('login','PageController@getlogin');
Route::post('login','PageController@postlogin');
Route::post('register','PageController@postregister');
Route::get('logout','PageController@getlout');
Route::post('register','PageController@postregister');
Route::post('seach','PageController@postseach');
Route::get('typrofnews/{id}','PageController@gettyprofnews');
Route::get('news/detail/{id}','PageController@getnewsdetail');
Route::get('introduce','PageController@getintroduce');
Route::get('support','PageController@getsupport');
Route::post('support','PageController@postsupport');


