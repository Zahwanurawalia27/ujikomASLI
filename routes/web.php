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
Route::get('/editFoto', function () {
    return view('admin/dataFoto/editFoto');
});
Route::get('/detailFoto', function () {
    return view('admin/dataFoto/detail');
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
Route::delete('/album/{album}', [AlbumController::class, 'destroy'])->name('album.destroy');
//Route::get('/dataAlbum/editAlbum/{id}', [AlbumController::class, 'edit']);
Route::get('/dataAlbum/editAlbum/{album}', [AlbumController::class, 'edit'])->name('album.edit');
Route::put('/dataAlbum/update/{album}', [AlbumController::class, 'update'])->name('album.update');;

// crud foto
Route::get('/foto/tambahFoto', [FotoController::class,'create']);
Route::post('/foto/tambahFoto', [FotoController::class,'store']);
Route::get('/dataFoto', [FotoController::class, 'index']);
Route::delete('/dataFoto/{id}', [FotoController::class, 'destroy']);
Route::get('/dataFoto/editFoto/{id}', [FotoController::class, 'edit']);
Route::put('/dataFoto/update/{id}', [FotoController::class, 'update']);


// like foto
Route::post('/like/{foto}', [FotoController::class, 'toggleLike'])->name('like.toggle');

// komentar foto
//Route::post('/foto/{id}/comment', [FotoController::class, 'storeComment'])->name('foto.comment');
//Route::get('/gallery/{foto}', [FotoController::class, 'show'])->name('gallery.show');
//Route::get('/gallery/{foto}', [FotoController::class, 'komentar'])->name('foto.komentar');
Route::post('/gallery/{foto}/comment', [FotoController::class, 'storeComment'])->name('foto.comment');
Route::get('/detail/{foto}', [FotoController::class, 'show'])->name('foto.show');



Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/index', [AlbumController::class, 'category'])->name('index');





// Route::get('/foto/tambahFoto', [FotoController::class,'create']);
// Route::post('/foto/tambahFoto', [FotoController::class,'store']);
// Route::get('/album/{AlbumID}/dataAlbum', [AlbumController::class,'show']); 

//Route::resource('/dataFoto', FotoController::class);

require __DIR__.'/auth.php';
