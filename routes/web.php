<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\pdfController;


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
Route::get('/AjouterPanier/{id}', [clientController::class ,'AjouterPanier']); // rédiriger vers la page panier
Route::put('/panier/modifierQte/{id}', [clientController::class ,'modifierQte']);
Route::get('/panier/supprimerItem/{id}', [clientController::class ,'supprimerItem']);
Route::post('/createCompte', [clientController::class ,'createCompte']);
Route::post('/connexionCompte', [clientController::class ,'connexionCompte']);
Route::get('/logout', [clientController::class ,'logout']);
Route::post('/payer', [clientController::class ,'payer']);





// Admin Controller routes
Route::get('/Admin', [AdminController::class ,'Home']); // rédiriger vers la page Home de L'admin
Route::get('/Admin/addCategorie', [AdminController::class ,'addCategorie']); // rédiriger vers la page Home addCategorie de L'admin
Route::get('/Admin/Categorie', [AdminController::class ,'Categorie']);
Route::get('/Admin/addSlider', [AdminController::class ,'addSlider']);
Route::get('/Admin/Slider', [AdminController::class ,'Slider']); 
Route::get('/Admin/addproduct', [AdminController::class ,'addproduct']);
Route::get('/Admin/product', [AdminController::class ,'product']);  
Route::get('/Admin/order', [AdminController::class ,'order']);  



// Categories controller
Route::post('/Admin/SaveCategorie', [CategorieController::class ,'SaveCategorie']);  // Savegarder vers la base de donnée
Route::delete('/Admin/deleteCategorie/{id}', [CategorieController::class ,'deleteCategorie']);  
Route::get('/Admin/editeCategorie/{id}', [CategorieController::class ,'editeCategorie']);  
Route::put('/Admin/UpdateCategorie/{id}', [CategorieController::class ,'UpdateCategorie']);  


// Slider controller
Route::post('/Admin/SaveSlider', [SliderController::class ,'SaveSlider']);  
Route::delete('/Admin/deleteSlider/{id}', [SliderController::class ,'deleteSlider']);  
Route::get('/Admin/editeSlider/{id}', [SliderController::class ,'editeSlider']);  
Route::put('/Admin/UpdateSlider/{id}', [SliderController::class ,'UpdateSlider']);  
Route::put('/Admin/DesactiverSlider/{id}', [SliderController::class ,'DesactiverSlider']);  
Route::put('/Admin/activerSlider/{id}', [SliderController::class ,'activerSlider']);  




// Product controller
Route::post('/Admin/SaveProduct', [ProductController::class ,'SaveProduct']); 
Route::delete('/Admin/deleteProduct/{id}', [ProductController::class ,'deleteProduct']); 
Route::get('/Admin/editeProduct/{id}', [ProductController::class ,'editeProduct']); 
Route::put('/Admin/UpdateProduct/{id}', [ProductController::class ,'UpdateProduct']); 
Route::put('/Admin/DesactiverProduct/{id}', [ProductController::class ,'DesactiverProduct']); 
Route::put('/Admin/activerProduct/{id}', [ProductController::class ,'activerProduct']);

//pdf controller 
Route::get('/VoirCommande/{id}', [pdfController::class ,'VoirCommande']);

