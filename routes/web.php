<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UrlController;
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
    return redirect('/shorten');
});

route::prefix('/tyne')->group(function () {
    route::get('/{shortenUrl}', [UrlController::class, 'redirectToOriginalUrl']);
});

Route::get('/dashboard', function () {
    return redirect('/shorten');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->prefix('/shorten')->group(function () {
    Route::get('/', [UrlController::class, 'create']);
    Route::post('/', [UrlController::class, 'store']);
    Route::get('/{url}', [UrlController::class, 'show']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
