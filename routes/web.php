<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
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

//Route::get('/', function () {
   // return view('welcome');
//});


Route::get('/', [clientController::class ,'Home']); // rédiriger vers la page Home
Route::get('/boutique', [clientController::class ,'boutique']); // rédiriger vers la page boutique
Route::get('/panier', [clientController::class ,'panier']); // rédiriger vers la page panier
Route::get('/checkout', [clientController::class ,'checkout']); // rédiriger vers la page payement
Route::get('/inscription', [clientController::class ,'inscription']); // rédiriger vers la page inscription
Route::get('/connexion', [clientController::class ,'connexion']); // rédiriger vers la page connexion
