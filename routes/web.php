<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/blog-details{id}', [FrontendController::class, 'blogDetails'])->name('blog.details');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'admin'])->name('dashboard');
    Route::get('/admin/blog-details{id}', [AdminController::class, 'blogDetails'])->name('admin.blog.details');

    Route::get('/create-blog', [AdminController::class, 'createBlog'])->name('create.blog');
    Route::post('/create-blog-complete', [AdminController::class, 'createBlogComplete'])->name('create.blog.complete');

    Route::get('/manage-blog', [AdminController::class, 'manageBlog'])->name('manage.blog');

    Route::get('/delete-blog{id}', [AdminController::class, 'deleteBlog'])->name('delete.blog');

    Route::get('/update-blog{id}', [AdminController::class, 'updateBlog'])->name('update.blog');
    Route::post('/update-blog-complete{id}', [AdminController::class, 'updateBlogComplete'])->name('update.blog.complete');
});


