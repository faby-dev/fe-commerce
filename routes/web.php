<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\ProduitsController;

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

Route::get('/', [ProduitsController::class, "index"])->name("boutique");
Route::get("/produits/{id}", [ProduitsController::class, "show"])->where("id", "\d+")->name("Affiche_Produits");

Auth::routes();

Route::middleware(["auth", "role:admin"])->group(function (){
    Route::get("/test",function (){
        return "Bonjour, Admin";
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
