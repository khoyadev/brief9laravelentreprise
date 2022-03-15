<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaysController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\EntrepriseController;

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


Route::get('/', function () {
    return view('welcome');
    });
    
    Route::get('/pays', [PaysController::class, 'index']);
    //Route::middleware(['auth'])->group(function () {
    Route::post('/entreprises/store', [EntrepriseController::class, 'store'])->name('entreprises.store');
    Route::get('/entreprises', [EntrepriseController::class, 'index'])->name('entreprises.index');
    Route::get('/entreprises/create', [EntrepriseController::class, 'create'])->name('entreprises.create');
    Route::get('/entreprises/{entreprise}', [EntrepriseController::class, 'show'])->name('entreprises.show');
//});
    Route::get('regions/{id}', [RegionController::class, 'list']);
    

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
