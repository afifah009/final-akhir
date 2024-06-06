<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminBahariController;
use App\Http\Controllers\AdminNonBahariController;
use App\Http\Controllers\AdminSeniBudayaController;
use App\Http\Controllers\AdminKulinerController;
use App\Http\Controllers\AdminKerajinanKreatifController;
use App\Http\Controllers\AdminGalleryController;

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

    Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
    });

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


// Route Admin Only

Route::prefix('admin')->group(function () {
    Route::resource('gallery', AdminGalleryController::class);
    Route::get('gallery', [AdminGalleryController::class, 'index'])->name('admin.gallery.index');
    Route::post('gallery', [AdminGalleryController::class, 'store'])->name('admin.gallery.store');
    Route::get('gallery/create', [AdminGalleryController::class, 'create'])->name('admin.gallery.create');
    Route::delete('gallery/{id}', [AdminGalleryController::class, 'destroy'])->name('admin.gallery.destroy');
    Route::get('gallery/{id}/edit', [AdminGalleryController::class, 'edit'])->name('admin.gallery.edit');
    Route::put('gallery/{id}', [AdminGalleryController::class, 'update'])->name('admin.gallery.update');


    Route::resource('bahari', AdminBahariController::class);
    Route::get('bahari', [AdminBahariController::class, 'index'])->name('admin.bahari.index');
    Route::post('bahari', [AdminBahariController::class, 'store'])->name('admin.bahari.store');
    Route::get('admin/bahari/create', [AdminBahariController::class, 'create'])->name('admin.bahari.create');
    Route::delete('bahari/{id}', [AdminBahariController::class, 'destroy'])->name('admin.bahari.destroy');
    Route::get('bahari/{id}/edit', [AdminBahariController::class, 'edit'])->name('admin.bahari.edit');
    Route::put('bahari/{id}', [AdminBahariController::class, 'update'])->name('admin.bahari.update');

    Route::resource('nonbahari', AdminNonBahariController::class);
    Route::get('nonbahari', [AdminNonBahariController::class, 'index'])->name('admin.nonbahari.index');
    Route::post('nonbahari', [AdminNonBahariController::class, 'store'])->name('admin.nonbahari.store');
    Route::get('nonbahari/create', [AdminNonBahariController::class, 'create'])->name('admin.nonbahari.create');
    Route::delete('nonbahari/{id}', [AdminNonBahariController::class, 'destroy'])->name('admin.nonbahari.destroy');
    Route::get('nonbahari/{id}/edit', [AdminNonBahariController::class, 'edit'])->name('admin.nonbahari.edit');
    Route::put('nonbahari/{id}', [AdminNonBahariController::class, 'update'])->name('admin.nonbahari.update');

    
    Route::resource('senibudaya', AdminSeniBudayaController::class);
    Route::get('senibudaya', [AdminSeniBudayaController::class, 'index'])->name('admin.senibudaya.index');
    Route::post('senibudaya', [AdminSeniBudayaController::class, 'store'])->name('admin.senibudaya.store');
    Route::get('senibudaya/create', [AdminSeniBudayaController::class, 'create'])->name('admin.senibudaya.create');
    Route::delete('senibudaya/{id}', [AdminSeniBudayaController::class, 'destroy'])->name('admin.senibudaya.destroy');
    Route::get('senibudaya/{id}/edit', [AdminSeniBudayaController::class, 'edit'])->name('admin.senibudaya.edit');
    Route::get('senibudaya/{id}', [AdminSeniBudayaController::class, 'update'])->name('admin.senibudaya.update');

    Route::resource('kuliner', AdminKulinerController::class);
    Route::get('kuliner', [AdminKulinerController::class, 'index'])->name('admin.kuliner.index');
    Route::post('kuliner', [AdminKulinerController::class, 'store'])->name('admin.kuliner.store');
    Route::get('kuliner/create', [AdminKulinerController::class, 'create'])->name('admin.kuliner.create');
    Route::delete('kuliner/{id}', [AdminKulinerController::class, 'destroy'])->name('admin.kuliner.destroy');
    Route::get('kuliner/{id}/edit', [AdminKulinerController::class, 'edit'])->name('admin.kuliner.edit');
    Route::get('kuliner/{id}', [AdminKulinerController::class, 'update'])->name('admin.kuliner.update');
   
    Route::resource('kerajinankreatif', AdminKerajinanKreatifController::class);
    Route::get('kerajinankreatif', [AdminKerajinanKreatifController::class, 'index'])->name('admin.kerajinankreatif.index');
    Route::post('kerajinankreatif', [AdminKerajinanKreatifController::class, 'store'])->name('admin.kerajinankreatif.store');
    Route::get('kerajinankreatif/create', [AdminKerajinanKreatifController::class, 'create'])->name('admin.kerajinankreatif.create');
    Route::delete('kerajinankreatif/{id}', [AdminKerajinanKreatifController::class, 'destroy'])->name('admin.kerajinankreatif.destroy');
    Route::get('kerajinankreatif/{id}/edit', [AdminKerajinanKreatifController::class, 'edit'])->name('admin.kerajinankreatif.edit');
    Route::get('kerajinankreatif/{id}', [AdminKerajinanKreatifController::class, 'update'])->name('admin.kerajinankreatif.update');
});