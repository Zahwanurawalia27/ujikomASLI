<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Models\Gallery;
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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/gallery', function () {
    return view('gallery');
});


Route::get('/dataFoto', function () {
    return view('admin/dataFoto/dataFoto');
});
Route::get('/tambahFoto', function () {
    return view('admin/dataFoto/tambahFoto');
});


Route::get('/dataAlbum', function () {
    return view('admin/dataAlbum/dataAlbum');
});
Route::get('/tambahAlbum', function () {
    return view('admin/dataAlbum/tambahAlbum');
});


Route::get('/dashboardAdmin', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// crud album
Route::get('/album/tambahAlbum', [AlbumController::class,'create']);
Route::post('/album/tambahAlbum', [AlbumController::class,'store']);
Route::get('/dataAlbum', [AlbumController::class, 'index']);

// crud foto
Route::get('/foto/tambahFoto', [FotoController::class,'create']);
Route::post('/foto/tambahFoto', [FotoController::class,'store']);
Route::get('/dataFoto', [FotoController::class, 'index']);


Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/index', [AlbumController::class, 'category'])->name('index');



// Route::get('/foto/tambahFoto', [FotoController::class,'create']);
// Route::post('/foto/tambahFoto', [FotoController::class,'store']);
// Route::get('/album/{AlbumID}/dataAlbum', [AlbumController::class,'show']); 

//Route::resource('/dataFoto', FotoController::class);

require __DIR__.'/auth.php';
