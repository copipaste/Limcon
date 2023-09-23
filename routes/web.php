<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelpController;
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
Route::get('helper', [HelpController::class, 'index'])->name('helper.index');
Route::get('herper/mision', [HelpController::class, 'mision'])->name('helper.mision');
Route::get('herper/problematica', [HelpController::class, 'problematica'])->name('helper.problematica');
Route::get('herper/solucion', [HelpController::class, 'solucion'])->name('helper.solucion');

