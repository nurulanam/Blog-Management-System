<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index'])->name('front.index');

// Route::get('', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::prefix('/dashboard')->middleware('auth','role:admin|writer')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::middleware('auth')->group(function () {

// });

require __DIR__.'/auth.php';
