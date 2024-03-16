<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Middleware\CheckPostOwner;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/users', [PostController::class, 'users'])->name('posts.users');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create')->middleware('auth');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show')->where('id', '[0-9]+');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit')->where('id', '[0-9]+')->middleware(CheckPostOwner::class);
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update')->where('id', '[0-9]+');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy')->where('id', '[0-9]+');
Route::get('/posts/trash', [PostController::class, 'trash'])->name('posts.trash');

Route::fallback(function () {
    return 'Route not found';
});



require __DIR__ . '/auth.php';
