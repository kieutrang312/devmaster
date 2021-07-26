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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/',  'ShopController@index');
// Trang liên hệ
Route::get('/lien-he', 'ShopController@contact')->name('shop.contact');
Route::post('/postContact', 'ShopController@postContact')->name('shop.postContact');
// Trang danh mục
Route::get('/danh-muc-san-pham/{slug}', 'ShopController@listProducts')->name('shop.listProduct');

// Trang chi tiết sản phẩm
Route::get('/chi-tiet-san-pham/{slug}', 'ShopController@detailProduct')->name('shop.detailProduct');

// Trang danh sach tin tuc
Route::get('/danh-muc-tin-tuc', 'ShopController@listArticles')->name('shop.listArticle');

// Trang chi tiet tin tuc
Route::get('/chi-tiet-tin-tuc/{slug}', 'ShopController@detailArticle')->name('shop.detailArticle');

//thêm sản phẩm vào giỏ
Route::get('/them-san-pham-vao-gio/{id}', 'ShopController@addToCart')->name('shop.addToCart');

//hủy đơn hàng
Route::get('/huy-gio-hang', 'ShopController@cancelCart')->name('shop.cancelCart');

Route::get('/cap-nha-so-luong-gio-hang/{rowId}/{qty}', 'ShopController@updateCart')->name('shop.updateCart');

Route::get('/dat-hang', 'ShopController@order')->name('shop.order');

Route::get('/tim-kiem', 'ShopController@search')->name('shop.search');

Route::post('/dat-hang', 'ShopController@postOrder')->name('shop.postOrder');
//xoa sp trong gio
Route::get('/xoa-san-pham-trong-gio-hang/{rowId}', 'ShopController@removeProductOnCart')->name('shop.removeProductOnCart');
//Danh sách
Route::get('/danh-sach-gio-hang', 'ShopController@cart')->name('shop.cart');
Route::get('/dat-hang-thanh-cong', 'ShopController@orderSuccess')->name('shop.orderSuccess');
Route::get('/admin/login', 'LoginController@index')->name('admin.login');
Route::post('/admin/postLogin', 'LoginController@postLogin')->name('admin.postLogin');
Route::get('/admin/logout', 'LoginController@logout')->name('admin.logout');
// Gom nhóm route của trang admin thông qua hàm group
Route::group(['prefix' => 'admin','as' => 'admin.','middleware' => 'checkLogin'], function() {
    //giúp cho chúng ta tạo các url  tương ứng với controller truyền vào
    Route::resource('danh-muc','CategoryController');
    Route::resource('nha-cung-cap','VendorController');
    Route::resource('product','ProductController');
    Route::resource('banner','BannerController');
    Route::resource('user','UserController');
    Route::resource('setting','SettingController');
    Route::resource('article','ArticleController');
    Route::resource('order','OrderController');
});

//Route::resource('product','BannerController');
