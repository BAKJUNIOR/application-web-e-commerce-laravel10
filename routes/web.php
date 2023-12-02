<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
use App\Http\Controllers\AdminController;
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


// Client Controller routes

Route::get('/', [clientController::class ,'Home']); // rédiriger vers la page Home
Route::get('/boutique', [clientController::class ,'boutique']); // rédiriger vers la page boutique
Route::get('/panier', [clientController::class ,'panier']); // rédiriger vers la page panier
Route::get('/checkout', [clientController::class ,'checkout']); // rédiriger vers la page payement
Route::get('/inscription', [clientController::class ,'inscription']); // rédiriger vers la page inscription
Route::get('/connexion', [clientController::class ,'connexion']); // rédiriger vers la page connexion


// Admin Controller routes
Route::get('/Admin', [AdminController::class ,'Home']); // rédiriger vers la page Home de L'admin
Route::get('/Admin/addCategorie', [AdminController::class ,'addCategorie']); // rédiriger vers la page Home addCategorie de L'admin
Route::get('/Admin/Categorie', [AdminController::class ,'Categorie']);
Route::get('/Admin/addSlider', [AdminController::class ,'addSlider']);
Route::get('/Admin/Slider', [AdminController::class ,'Slider']); 
Route::get('/Admin/addproduct', [AdminController::class ,'addproduct']);
Route::get('/Admin/product', [AdminController::class ,'product']);  
Route::get('/Admin/order', [AdminController::class ,'order']);  



