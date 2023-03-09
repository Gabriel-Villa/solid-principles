<?php

use App\Http\Controllers\SolidController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // -------------- Solid --------------

    // Single responsability
    Route::get('s', [SolidController::class, 'singleResponsability']);

    // Open / Close
    Route::get('o', [SolidController::class, 'openClose']);

    // Liskov substitution 
    Route::get('l', [SolidController::class, 'liskovSubstitution']);

    // Interface segregation 
    Route::get('i', [SolidController::class, 'interfaceSegregation']);

    // Dependency inversion 
    Route::get('d', [SolidController::class, 'dependencyInversion']);

});

require __DIR__.'/auth.php';
