<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientController extends Controller
{
    //
  public function Home(){
   return view('client.Home');
  }

  public function boutique(){
    return view('client.boutique');
   }
 
   public function panier(){
    return view('client.panier');
   }

   public function checkout(){
    return view('client.checkout');
   }

   public function inscription(){
    return view('client.inscription');
   }

   public function connexion(){
    return view('client.connexion');
   }
 
 
   
}
