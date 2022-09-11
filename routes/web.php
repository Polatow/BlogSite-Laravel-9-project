<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontPageController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\MakalalarController;
use App\Http\Controllers\Admin\HabarlarController;
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

Route::get('/', [FrontPageController::class, 'front_index'])->name('front_index');
Route::get('/news', [FrontPageController::class, 'news'])->name('news');
Route::get('/single-new', [FrontPageController::class, 'single_news'])->name('single_news');
Route::get('/makalalar', [FrontPageController::class, 'makalalar'])->name('makalalar');
Route::get('/single-makala', [FrontPageController::class, 'single_makalalar'])->name('single_makalalar');
Route::get('/about', [FrontPageController::class, 'about'])->name('about');
Route::get('/contact', [FrontPageController::class, 'contact'])->name('contact');

Auth::routes(['register'=>false]);

Route::group(['prefix'=>'admin'], function(){
    Route::get('/', [AdminPageController::class, 'admin_index'])->name('admin_index');
    Route::resource('categories', CategoriesController::class);
    Route::resource('news', HabarlarController::class);
    Route::resource('makalalar', MakalalarController::class);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
