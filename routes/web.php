<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\ProduitsController;
use App\Http\Controllers\admin\ProduitsController as AdminProduitsController;
use App\Http\Controllers\admin\UtilisateurController as AdminUtilisateurController;
use \App\Http\Controllers\front\CommandeController;
use App\Http\Controllers\admin\DashbordController;

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
Route::get("/commande", [CommandeController::class, "index"])->name("commander");

Auth::routes();

Route::middleware(["auth", "role:admin"])->name("admin.")->prefix("admin")->group(function (){
    Route::get('dashbord', [DashbordController::class, "index"]);
    Route::resource("produits", AdminProduitsController::class);
    Route::resource("utilisateurs", AdminUtilisateurController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
