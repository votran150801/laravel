<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\website\SanPhamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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



Route::get('/', [Controller::class , 'index' ])->name('website.home');

Route::get('/san-pham/{id}', [SanPhamController::class , 'viewSanPham' ])->name('website.sanpham');
Route::get('/san-pham/detail/{id}', [SanPhamController::class , 'detailSanPham' ])->name('sanpham.detail');
Route::view('/admin', 'admin.layouts.main')->name('admin.layouts.main')->middleware('checkrole');

Route::get('dang-nhap' , [LoginController::class , 'loginForm'])->name('login');
Route::post('dang-nhap' , [LoginController::class , 'postLogin']);

Route::get('dang-ky' , [SignupController::class , 'signupForm'])->name('signup');
Route::post('dang-ky' , [SignupController::class , 'postSignup']);

Route::get('fake-password/{mk}' , function($mk = '123456'){
    return Hash::make($mk);
});
Route::get('dang-xuat', function(){
    Auth::logout();
    return redirect('/dang-nhap');
})->name('login');

