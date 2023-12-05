<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class clientController extends Controller
{
    //
  public function Home(){

    $sliders = Slider :: where('status',1)->get();
    $products = Product :: where('status',1)->get();
   return view('client.Home')->with('sliders',$sliders)->with('products' , $products);
  }

  public function boutique(){
    $products = Product :: where('status',1)->get();
    return view('client.boutique')->with('products' , $products);
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
 
   public function AjouterPanier($id){

    $product = Product :: find($id);
    
    $oldCard = Session :: has ('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCard);
    $cart->add($product);

    Session :: put ('cart', $cart);
    Session :: put('topCart', $cart->items);

  return back();



   }
 
   
}
