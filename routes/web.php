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

Route::get('/admin/dashboard', [
    'as'=>'admin-dashboard',
    'uses'=>'AdminController@dashboard'
]);

//login
Route::get('/admin/login', [
    'as'=>'admin-login',
    'uses'=>'AdminController@login'
]);
Route::post('/admin/signin', [
    'as'=>'admin-signin',
    'uses'=>'AdminController@signin'
]);
// log-out
Route::get('/admin/logout', [
    'as'=>'admin-logout',
    'uses'=>'AdminController@logout'
]);

// home default
Route::get('/', function () {
    return view('pages/home');
});

// home route2
Route::get('/home', function () {
    return view('pages/home');
})->name('home');

// Quản lí danh mục sách

Route::get('/admin/list-category', [
    'as'=>'list-category',
    'uses'=>'Admin\CategoryController@list_category'
]);

//add category
Route::get('/admin/add-category', [
    'as'=>'add-category',
    'uses'=>'Admin\CategoryController@add_category'
]);
Route::post('/admin/save-category', [
    'as'=>'save-category',
    'uses'=>'Admin\CategoryController@save_category'
]);
//update category

Route::get('/admin/edit-category', [
    'as'=>'edit-category',
    'uses'=>'Admin\CategoryController@edit_category'
]);
Route::post('/admin/update-category', [
    'as'=>'update-category',
    'uses'=>'Admin\CategoryController@update_category'
]);

//delete category

Route::post('/admin/delete-category', [
    'as'=>'delete-category',
    'uses'=>'Admin\CategoryController@delete_category'
]);

// Quản lí tác giả
Route::get('/admin/list-author', [
    'as'=>'list-author',
    'uses'=>'Admin\AuthorController@list_author'
]);
Route::get('/admin/add-author', [
    'as'=>'add-author',
    'uses'=>'Admin\AuthorController@add_author'
]);
Route::post('/admin/save-author', [
    'as'=>'save-author',
    'uses'=>'Admin\AuthorController@save_author'
]);
//delete category

Route::post('/admin/author-category', [
    'as'=>'delete-author',
    'uses'=>'Admin\AuthorController@delete_author'
]);









//account nguoi dung
Route::get('/account', function () {
    return view('pages/account');
})->name('account') ;

// gio hang
Route::get('/shop-cart', function () {
    return view('pages/shop_cart');
})->name('shop-cart') ;

// danh sach san pham
Route::get('/list-book', function () {
    return view('pages/list_book');
})->name('list-book') ;

// chi tiet san pham
Route::get('/detail-book', function () {
    return view('pages/detail_book');
})->name('detail-book') ;
