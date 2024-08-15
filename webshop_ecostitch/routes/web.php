<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;


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
