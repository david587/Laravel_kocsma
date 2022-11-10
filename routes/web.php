<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;

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

Route::get("/uj-kocsma",[DrinkController::class,"index"]);

Route::post("/submit-kocsma", [DrinkController::class,"storeKocsma"]);

Route::get("/list-kocsma",[DrinkController::class,"list"]);

Route::get("/keres-kocsma",[DrinkController::class,"showKocsma"]);

Route::get("/show-update-drink",[DrinkController::class,"showUpdateDrink"]);
Route::post("/update-drink", [DrinkController::class,"updateDrink"]);

Route::get("/delete-student",[DrinkController::class,"destroy"]);