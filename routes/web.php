<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
//

// Route::prefix('admin')->group(function(){
//     Route::get('news/{id}',function($id){
//         return 'News' . $id;
//     });


//     Route::get('users/{name?}',function($name = 'Boy'){
//         return 'Welcome' .$name;
//     });
// });
//


Route::get('/',[SiteController::class,'index'])->name('index');
Route::get('/services',[SiteController::class,'services'])->name('services');
Route::get('/about',[SiteController::class,'about'])->name('about');
Route::get('/contact',[SiteController::class,'contact'])->name('contact');
Route::get('/user/{name?}',[SiteController::class,'user'])->name('user');
