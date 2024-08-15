<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;

Route::get('/',[HomeController::class,'home']); 

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

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

//Product Category

route::get('view_category',[AdminController::class,'view_category'])-> 
    middleware(['auth','admin']);


route::post('add_category',[AdminController::class,'add_category'])-> 
    middleware(['auth','admin']);

route::get('delete_category/{id}',[AdminController::class,'delete_category'])-> 
    middleware(['auth','admin']);

route::get('edit_category/{id}',[AdminController::class,'edit_category'])-> 
    middleware(['auth','admin']);

route::post('update_category/{id}',[AdminController::class,'update_category'])-> 
    middleware(['auth','admin']);


    //News Posts

route::get('view_news',[AdminController::class,'view_news'])-> 
    middleware(['auth','admin']);

route::post('add_news',[AdminController::class,'add_news'])-> 
    middleware(['auth','admin']);

route::get('delete_news/{id}',[AdminController::class,'delete_news'])-> 
    middleware(['auth','admin']);

route::get('edit_news/{id}',[AdminController::class,'edit_news'])-> 
    middleware(['auth','admin']);

route::post('update_news/{id}',[AdminController::class,'update_news'])-> 
    middleware(['auth','admin']);

    //Contact

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

route::get('view_contact',[AdminController::class,'view_contact'])-> 
    middleware(['auth','admin']);


    //News
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

Route::get('/home', [HomeController::class, 'home'])->name('home.index');


    //faqCategory
route::get('view_faqCategory',[AdminController::class,'view_faqCategory'])-> 
    middleware(['auth','admin']);

route::post('add_faqCategory',[AdminController::class,'add_faqCategory'])-> 
    middleware(['auth','admin']);

route::get('delete_faqCategory/{id}',[AdminController::class,'delete_faqCategory'])-> 
    middleware(['auth','admin']);

route::get('edit_faqCategory/{id}',[AdminController::class,'edit_faqCategory'])-> 
    middleware(['auth','admin']);

Route::put('update_faqCategory/{id}', [AdminController::class, 'update_faqCategory'])->name('update_faqCategory');

//Product

route::get('add_product',[AdminController::class,'add_product'])-> 
    middleware(['auth','admin']);

route::post('upload_product',[AdminController::class,'upload_product'])-> 
    middleware(['auth','admin']);

//FAQ Item

route::get('add_faqItem',[AdminController::class,'add_faqItem'])-> 
    middleware(['auth','admin']);

route::post('upload_faqItem',[AdminController::class,'upload_faqItem'])-> 
    middleware(['auth','admin']);