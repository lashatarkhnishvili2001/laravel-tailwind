<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Middleware\ProtectedPostRoutes;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware([ProtectedPostRoutes::class])->group(function (){
    Route::prefix('/post') ->group(function (){
        Route::get('-create', [PostController::class, 'create'])->name('post-create');
        Route::Post('-store', [PostController::class, 'store'])->name('post-store');
        Route::get('-edit/{id}', [PostController::class, 'edit'])->name('post-edit');
        Route::put('-update/{id}', [PostController::class, 'update'])->name('post-update');
        Route::delete('-delete/{id}', [PostController::class, 'destroy'])->name('post-delete');
    });
});

Route::get('/', [PostController::class, 'posts'])->name('posts');
// Route::get('/posts', [PostController::class, 'posts'])->name('posts');
Route::get('/post-show/{id}', [PostController::class, 'show'])->name('post-show');
// Route::get('/post-create', [PostController::class, 'create'])->name('post-create');

// Route::Post('/post-store', [PostController::class, 'store'])->name('post-store');
// Route::get('/post-edit/{id}', [PostController::class, 'edit'])->name('post-edit');
// Route::put('/post-update/{id}', [PostController::class, 'update'])->name('post-update');
// Route::delete('/post-delete/{id}', [PostController::class, 'destroy'])->name('post-delete');

// Route::get('/post-create', [PostController::class, 'create']) -> middleware('protect.post.routes')->name('post-create');