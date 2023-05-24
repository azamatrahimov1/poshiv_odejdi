<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeasurementController;
use App\Http\Controllers\ReadyController;

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
})->name('index');
//Route::get('/about', function () {
//    return view('about');
//})->name('about');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/gender', function () {
    return view('admin.measurement.gender');
})->name('gender');
Route::get('/card', function () {
    return view('admin.measurement.card');
})->name('card');
Route::get('/readies', [ReadyController::class, 'show'])->name('ready');
Route::get('/abouts', [App\Http\Controllers\AboutController::class,'show'])->name('about');

Route::get('/dashboard', function () {
        return view('admin.index');
    })->middleware('auth')->name('dashboard');
    Route::resource('/measurement', MeasurementController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::delete('/measurement/{measurement}/delete', [MeasurementController::class, 'destroy'])->name('measurement.destroy');
    //Client
    Route::resource('/client', App\Http\Controllers\ClientController::class);
    //Colour
    Route::resource('/colour', App\Http\Controllers\ColourController::class);
    //Ready
    Route::resource('/ready', ReadyController::class);


require __DIR__.'/auth.php';
