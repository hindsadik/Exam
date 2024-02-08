<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    return inertia("Home");
});

Route::get('/Create', [PostController::class, 'create'])->name('posts.create');

Route::post('/images', [PostController::class, 'store'])->name('posts.store');

Route::put('/images/{post}', [PostController::class, 'update'])->name('posts.update');



