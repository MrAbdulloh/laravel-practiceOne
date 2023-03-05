<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NavbarController;
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

Route::get('/', [NavbarController::class, 'index'])->name('index');
Route::get('about', [NavbarController::class, 'about'])->name('about');
Route::get('service', [NavbarController::class, 'service'])->name('service');
Route::get('blog', [NavbarController::class, 'blog'])->name('blog');
Route::get('contact', [NavbarController::class, 'contact'])->name('contact');

