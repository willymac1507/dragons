<?php

use App\Http\Controllers\ImagesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Models\News;
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
    return view('index');
});

Route::get('/home', function () {
    return view('home', [
        'news' => News::latest()->take(4)->get()
    ]);
})->middleware(['auth', 'verified'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/{news:slug}', [NewsController::class, 'show'])->name('news.show');
    Route::get('/news/item/add', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');

    Route::get('/team', [TeamController::class, 'index'])->name('team.index');
});

Route::middleware('auth')->group(function () {
    Route::get('privateImages/{filename}', [ImagesController::class, 'show'])->name('images.show');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
