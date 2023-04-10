<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\EmployeeController;
use App\Http\controllers\AdminController;




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




Route::get('category',[AdminController::class,'index'])->name('category');
Route::post('category',[AdminController::class,'addcategory'])->name('category');
Route::get('delete/{id}',[AdminController::class,'delete']);




Route::get('add_product',[AdminController::class,'view_product']);
Route::post('add_product',[AdminController::class,'add_product']);


