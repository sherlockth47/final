<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BookController; //追加
use App\Models\Book; //追加


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

Route::get('/top', function () {return view('top');});
Route::get('/biv', function () {return view('biv');});
Route::get('/pj', function () {return view('pj');});
Route::get('/chart1', function () {return view('chart1');});
Route::get('/chart2', function () {return view('chart2');});
Route::get('/chart3', function () {return view('chart3');});
// Route::get('/newnewdashboard', function () {return view('newnewdashboard');});

//本：ダッシュボード表示(books.blade.php)
Route::get('/', [BookController::class,'index'])->middleware(['auth'])->name('book_index');
Route::get('/dashboard', [BookController::class,'index'])->middleware(['auth'])->name('dashboard');
// Route::get('/', [ItemController::class, 'create'])->middleware(['auth'])->name('book_create');
// Route::post('/', [ItemController::class, 'store'])->middleware(['auth'])->name('book.store');


Route::get('/', [BookController::class, 'index'])->name('book.index');
Route::get('/create', [BookController::class, 'create'])->name('book.create');
Route::post('/store', [BookController::class, 'store'])->name('book.store');

//本：追加 
Route::post('/books',[BookController::class,"store"])->name('book_store');

//本：削除 
Route::delete('/book/{book}', [BookController::class,"destroy"])->name('book_destroy');

//本：更新画面
Route::post('/booksedit/{book}',[BookController::class,"edit"])->name('book_edit'); //通常
Route::get('/booksedit/{book}', [BookController::class,"edit"])->name('edit');      //Validationエラーありの場合

//本：更新画面
Route::post('/books/update',[BookController::class,"update"])->name('book_update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
