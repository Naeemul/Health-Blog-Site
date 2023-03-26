<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>['AdminLogin']], function(){
    Route::get('/', [AdminController::class, 'login'])->name('admin-login');
});

Route::post('/adminLoginSubmit', [AdminController::class, 'loginSubmit'])->name('admin-login-submit');
Route::get('/logout', [AdminController::class, 'logout'])->name('admin-logout');

Route::group(['middleware'=>['AdminView']], function(){
    Route::get('/viewPost', [AdminController::class, 'viewPost'])->name('viewPost');
    Route::get('/managePost', [AdminController::class, 'managePost'])->name('managePost');
    Route::post('/postSubmit', [AdminController::class, 'postSubmit'])->name('postSubmit');
    Route::get('/deletePost/{id}', [AdminController::class, 'deletePost'])->name('deletePost');
    Route::get('/updatePost/{id}', [AdminController::class, 'updatePost'])->name('updatePost');
    Route::post('/updatePostComplete/{id}', [AdminController::class, 'updatePostComplete'])->name('updatePostComplete');
});




