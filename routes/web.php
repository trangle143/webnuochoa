<?php

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

Route::get('/', 'TrangchuController@index')->name('index');

Route::get('test', function(){
	return view('test');
});
 // Route::get('admin/dangnhap','UserController@getdangnhapAdmin');
 // Route::post('admin/dangnhap','UserController@postdangnhapAdmin');




Route::get('sanpham', 'SanphamController@index');

Route::get('show/{id}', 'SanphamController@show')->name('show.loai');

Route::get('thuonghieu', 'ThuonghieuController@index')->name('thuonghieu');
Route::get('show/thuonghieu/{id}' ,'ThuonghieuController@sanpham')->name('show.thuonghieu');
Route::get('thuonghieu/them', 'ThuonghieuController@getThem')->name('thuonghieu.them');
Route::post('thuonghieu/them', 'ThuonghieuController@postThem');
Route::get('thuonghieu/sua/{id}', 'ThuonghieuController@getSua')->name('thuonghieu.sua');
Route::post('thuonghieu/sua/{id}', 'ThuonghieuController@postSua');
Route::get('thuonghieu/xoa/{id}', 'ThuonghieuController@getXoa')->name('thuonghieu.xoa');


Route::get('show/sanpham/{id}' ,'SanphamController@sanpham')->name('show.sanpham');
Route::get('sanpham/them', 'SanphamController@getThem')->name('sanpham.them');
Route::post('sanpham/them', 'SanphamController@postThem');
Route::get('sanpham/sua/{id}', 'SanphamController@getSua');
Route::post('sanpham/sua/{id}', 'SanphamController@postSua');
Route::get('sanpham/xoa/{id}', 'SanphamController@getXoa')->name('sanpham.xoa');

Route::get('quanli/sanpham', 'SanphamController@quanli')->name('sanpham.quanli');
Route::get ('quanli/donhang', 'PageController@donhang')->name('donhang');
Route::get('quanli/chitiet/{id}', 'PageController@chitiet')->name('chitiet');

Route::get('giohang',function()
{
	return view('frontend.giohang.giohang');
});

Route::get('plus/{id}', 'CartController@plus')->name('plus');
Route::get('minus/{id}', 'CartController@minus')->name('minus');

Route::get('thongtin',function()
{
	return view('frontend.giohang.thongtin');
});
Route::get('xacnhan',function()
{
	return view('frontend.giohang.xacnhan');
});
Route::get('thanhcong',function()
{
	return view('frontend.giohang.thanhcong');
});



// Route::get('giohang', 'SanphamController@loai')->name('show.giohang');

Route::post('cart-add', 'CartController@add')->name('cart.add');
Route::post('cart-clear', 'CartController@clear')->name('cart.clear');
Route::post('cart-remove', 'CartController@remove')->name('cart.remove');

Route::get('/checkout/{amount}','CartController@checkout')->name('cart.checkout');
Route::post('charge','CartController@charge')->name('cart.charge');

Route::post('add-customer', 'CustomerController@add')->name('custom.add');
Route::post('add-bill', 'CustomerController@bill')->name('bill.add');



Auth::routes();

Route::get('search', 'SearchController@getSearch');
Route::post('search/name', 'SearchController@getSearchAjax')->name('search');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('like','SothichController@index')->middleware('auth')->name('like');

Route::post('binhluan', 'SanphamController@binhluan')->name('binhluan');


Route::get('thanhtoan',function()
{
	return view('frontend.phuongthuc.thanhtoan');
});

// Route::post('cart-add', 'CartController@add')->name('cart.add');
// Route::post('cart-clear', 'CartController@clear')->name('cart.clear');
// Route::post('cart-remove', 'CartController@remove')->name('cart.remove');

