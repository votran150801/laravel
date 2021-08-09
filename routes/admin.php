<?php

use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\PlaneController;
use App\Http\Controllers\admin\UserController;
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



Route::get('welcome' , function(){
    return "Admin Dashboard";
});


Route::prefix('viewbrand')->group(function(){
    Route::get('/', [BrandController::class , 'viewBrands' ])->name('brand.index')->middleware('checkrole');
    Route::get('/add', [BrandController::class, 'formAddBrand'])->name('brand.add')->middleware('checkrole');
    Route::post('/add', [BrandController::class, 'saveAddBrand']);
    Route::get('/edit/{id}', [BrandController::class , 'formEditBrand' ])->name('brand.edit')->middleware('checkrole');
    Route::post('/edit/{id}', [BrandController::class , 'saveEditBrand' ]);
    Route::get('/remove/{id}', [BrandController::class , 'removeBrand' ])->name('brand.remove')->middleware('checkrole');
    
});

Route::prefix('viewplane')->group(function(){
    Route::get('/', [PlaneController::class , 'viewplane' ])->name('plane.index')->middleware('checkrole');
    Route::get('/add', [PlaneController::class, 'formAddPlane'])->name('plane.add')->middleware('checkrole');
    Route::post('/add', [PlaneController::class, 'saveAddPlane']);
    Route::get('/edit/{id}', [PlaneController::class , 'formEditPlane' ])->name('plane.edit')->middleware('checkrole');
    Route::post('/edit/{id}', [PlaneController::class , 'saveEditPlane' ]);
    Route::get('/remove/{id}', [PlaneController::class , 'removePlane' ])->name('plane.remove')->middleware('checkrole');
    
});
Route::prefix('viewuser')->group(function(){
    Route::get('/' , [UserController::class , 'viewuser'])->name('user.index');
    Route::get('/edit/{id}' , [UserController::class , 'editForm'])->name('user.edit');
    Route::post('/edit/{id}' , [UserController::class , 'saveUser']);
});