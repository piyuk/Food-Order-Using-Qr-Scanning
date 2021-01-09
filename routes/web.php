<?php
use Illuminate\Support\Facades\Route;

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
Route::post('qrLogin','ScanController@checkUser');
Route::post('/num','ScanController@num')->name('num'); 
Route::get('/qrLogin','ScanController@indexoption2');
Route::resource('scan','ScanController');
Route::get('/number','ScanController@number');
Route::get('/menu','IndexController@index');
Route::get('/list-item','IndexController@shop');
Route::get('/cat/{id}','IndexController@listByCat')->name('cats');
Route::get('/item-details/{id}','IndexController@detail');
Route::get('/order','OrdersController@order')->name('order'); 
Route::post('/addToCart','CartController@addToCart')->name('addToCart'); 
Route::get('/cart/deleteItem/{id}','CartController@deleteItem');
Route::get('/cart/update-quantity/{id}/{quantity}','CartController@updateQuantity');
Route::resource('checkout','CheckOutController');
Route::get('/code','CheckOutController@code');
Route::post('/apply-coupon','CouponController@applycoupon');
Route::resource('thankyou','ThankController');

Route::get('/login_admin','AdminController@index'); 
Route::post('/register_admin','AdminController@register'); 
Route::post('/admin_login','AdminController@login');
Route::get('/logout','AdminController@logout');

Route::group(['middleware'=>'admin'],function (){
Route::resource('/foodtype','FoodtypeController');
Route::resource('item','ItemController');
Route::resource('coupon','CouponController');
Route::get('delete-coupon/{id}','CouponController@destroy');
Route::resource('admin','AdminDetailsController');
Route::resource('orderdata','OrderDetailsController');
Route::delete('item/{id}', ['as'=>'items.destroy','uses'=>'ItemController@destroy']);
Route::get('/delivered','OrderDetailsController@delivered');
Route::get('/cancelled','OrderDetailsController@cancelled');
Route::get('/qr_show','ScanController@show');
Route::get('/del_data_show/{id}','OrderDetailsController@del_ord_show');
Route::get('/invoice/{id}','OrderDetailsController@invoice');
});

Route::get('/login_page','UsersController@index');
Route::post('/register_user','UsersController@register');
Route::post('/user_login','UsersController@login');
Route::get('/logout_user','UsersController@logout');









