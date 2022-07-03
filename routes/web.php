<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\santriController;
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

Route::get('/santri', [SantriController::class, 'index']);
Route::get('/santri/create', [SantriController::class, 'create']);
Route::post('/santri/store', [SantriController::class, 'store']);
Route::get('/santri/{id}/edit', [SantriController::class, 'edit']);
Route::put('/santri/{id}/', [SantriController::class, 'update']);
Route::delete('/santri/{id}/', [SantriController::class, 'destroy']);
