<?php

use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\UnitController;
use App\Models\testimoni;
use App\Models\unit;
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
    $testimonis = testimoni::all();
    $units = unit::all();
    return view('index', compact('testimonis', 'units'));
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    // testimoni

    Route::get('/data-testimoni', [TestimoniController::class, 'index'])->name('testimoni');
    Route::get('/data-testimoni/create', [TestimoniController::class, 'create'])->name('testimoni.create');
    Route::post('/data-testimoni/store', [TestimoniController::class, 'store'])->name('testimoni.store');
    Route::get('/data-testimoni/edit/{testimoni}', [TestimoniController::class, 'edit'])->name('testimoni.edit');
    Route::put('/data-testimoni/update/{testimoni}', [TestimoniController::class, 'update'])->name('testimoni.update');
    Route::delete('/data-testimoni/destroy/{testimoni}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');




    Route::get('/data-unit', [UnitController::class, 'index'])->name('unit');
    Route::get('/data-unit/create', [UnitController::class, 'create'])->name('unit.create');
    Route::post('/data-unit/store', [UnitController::class, 'store'])->name('unit.store');
    Route::get('/data-unit/{unit}', [UnitController::class, 'edit'])->name('unit.edit');
    Route::put('/data-unit/update/{unit}', [UnitController::class, 'update'])->name('unit.update');
    Route::delete('/data-unit/destroy/{unit}', [UnitController::class, 'destroy'])->name('unit.destroy');
});
