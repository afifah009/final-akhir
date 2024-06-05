<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('tampilan.landingpage');
// })->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');


Route::get('/bahari', [HomeController::class, 'bahari'])->name('bahari');
Route::get('/nonbahari', [HomeController::class, 'nonbahari'])->name('nonbahari');
Route::get('/kuliner', [HomeController::class, 'kuliner'])->name('kuliner');
Route::get('/senibudaya', [HomeController::class, 'senibudaya'])->name('senibudaya');
Route::get('/kerajinan', [HomeController::class, 'kerajinan'])->name('kerajinan');


Route::get('/forum', [HomeController::class, 'forum'])->name('forum');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
