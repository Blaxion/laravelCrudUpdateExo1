<?php

use App\Http\Controllers\AnimalController;
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

Route::get('/', [AnimalController::class,'index']);
// Create
Route::get('/createAnimal', [AnimalController::class,'create']);
Route::post('/postAnimal', [AnimalController::class,'store']);
// Read
Route::get('/showAnimal/{id}', [AnimalController::class,'show']);
// Update
Route::get('/editAnimal/{id}', [AnimalController::class,'edit']);
Route::put('/putAnimal/{id}', [AnimalController::class,'update']);
// Delete
Route::delete('/deleteAnimal/{id}', [AnimalController::class,'destroy']);
