<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
    /*
    Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
    });
    */
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/bahari', [HomeController::class, 'bahari'])->name('bahari');
Route::get('/nonbahari', [HomeController::class, 'nonbahari'])->name('nonbahari');
Route::get('/kuliner', [HomeController::class, 'kuliner'])->name('kuliner');
Route::get('/senibudaya', [HomeController::class, 'senibudaya'])->name('senibudaya');
Route::get('/kerajinan', [HomeController::class, 'kerajinan'])->name('kerajinan');
Route::get('/forum', [HomeController::class, 'forum'])->name('forum');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');


