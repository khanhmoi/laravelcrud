<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\khanhggController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('create',[khanhggController::class,'create'])->middleware('auth');
Route::post('create',[khanhggController::class,'store']);

Route::get('list1',[khanhggController::class,'index']);

Route::get('column',[khanhggController::class,'indexColumn']);

Route::get('edit/{id}',[khanhggController::class,'edit']);
Route::post('edit/update/{id}',[khanhggController::class,'update']);

Route::get('infor/{id}',[khanhggController::class,'show']);

Route::get('delete/{id}',[khanhggController::class,'destroy']);

//Route::post('create',[khanhggController::class,'validationform']);

Route::resource('user',UserController::class);


Route::get('html',function (){
    return view('hanh.thu');
});



Route::resource('admin',App\Http\Controllers\AdminController::class);
Route::get('/dashboard',[App\Http\Controllers\AdminController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/list',[App\Http\Controllers\AdminController::class,'list'])->name('list')->middleware('auth');
//Route::post('checklogin',[App\Http\Controllers\AdminController::class,'checklogin'])->name('check');
Route::post('',[App\Http\Controllers\AdminController::class,'lg'])->name('logout');


Route::get('/dang-ky',function (){
    return view('admin.registration');
});
Route::get('admin11',function (){
    return 'Tạo tài khoản thành công';
});


