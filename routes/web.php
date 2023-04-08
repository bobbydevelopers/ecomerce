<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\EmployeeController;


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
    return view('home.homepage');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('redirect',[HomeController::class,'redirect']);

Route::get('employee',[EmployeeController::class,'index']);
Route::post('addemp',[EmployeeController::class,'addemp']);






Route::get('about',function(){return view('home.about');})->name('about');
Route::get('product',function(){return view('home.product');})->name('product');
Route::get('contact',function(){return view('home.contact');})->name('contact');
Route::get('blog',function(){return view('home.blog');})->name('blog');
Route::get('testimonial',function(){return view('home.testimonial');})->name('testimonial');




Route::get('addcategory',[HomeController::class,'addcategory'])->name('addcategory');
Route::post('addcategory',[HomeController::class,'addcategory'])->name('addcategory');

