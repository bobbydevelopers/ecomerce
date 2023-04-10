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




Route::get('category',[AdminController::class,'view_category'])->name('category');
Route::post('category',[AdminController::class,'add_category'])->name('category');
Route::get('delete/{id}',[AdminController::class,'delete_category']);




Route::get('add_product',[AdminController::class,'view_product']);
Route::post('add_product',[AdminController::class,'add_product']);
Route::get('show_product',[AdminController::class,'show_product']);
Route::get('delete_product/{id}',[AdminController::class,'delete_product']);
Route::get('update_product/{id}',[AdminController::class,'update_product']);
Route::post('update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);





