<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

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


 
Route::controller(MainController::class)->group(function () {
    Route::get('/trang-chu', 'home');
    Route::get('/gioi-thieu', 'Introduce')->name('introduce');
    Route::get('/lien-he', 'contact');
    Route::get('/dang-nhap', 'signin');
    Route::get('/tin-tuc', 'news');
    Route::get('/dich-vu', 'Service');
    Route::get('/album', 'album');
});


Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'admin');
    Route::get('/save-information', 'saveInfor');
    Route::get('/chinh-sua-lien-he', 'editContact');
});
