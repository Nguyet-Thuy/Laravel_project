<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FAQController;




Route::get('/',[HomeController::class,'home']); 

Auth::routes();

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


route::get('admin/dashboard',[HomeController::class,'index'])-> 
    middleware(['auth','admin']);


route::get('view_category',[AdminController::class,'view_category'])-> 
    middleware(['auth','admin']);


route::post('add_category',[AdminController::class,'add_category'])-> 
    middleware(['auth','admin']);

route::get('delete_category/{id}',[AdminController::class,'delete_category'])-> 
    middleware(['auth','admin']);


Route::middleware([AdminMiddleware::class])->group(function () {

 //FAQ
 Route::get('/faq_edit', [FAQController::class, 'editFaqView'])->name('faq.edit_faq');
 Route::delete('/delete_category/{id}', [FAQController::class, 'deleteFAQCategory'])->name('delete_category');
 Route::post('/add_category', [FAQController::class, 'addCategory'])->name('add_category');
 Route::put('/faq/edit_item/{id}', [FAQController::class, 'updateFaqItem'])->name('update_faq_item');
 Route::delete('/faq/delete/{id}', [FAQController::class, 'deleteFaqItem'])->name('delete_faq_item');
 Route::post('/faq/add-item/{category_id}', [FAQController::class, 'addFaqItem'])->name('add_faq_item');
 Route::put('/faq/edit_category/{id}', [FAQController::class, 'updateFaqCategory'])->name('update_faq_category');

    });

//faq
Route::get('/faq', [App\Http\Controllers\FAQController::class, 'faqView'])->name('faq.faq');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
