<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Order;

class AdminController extends Controller
{
    public function Home(){
       return view('Admin.Home');
    }

    public function addCategorie(){
        return view('Admin.addCategorie');
     }

     public function Categorie(){
    
      $categories = Categories::get();
        return view('Admin.Categorie')->with( 'categories',$categories);
     }
     
     public function addSlider(){
        return view('Admin.addSlider');
     }

     public function Slider(){

      $sliders = Slider::get();
        return view('Admin.Slider')->with("sliders" , $sliders);
     }

     public function addproduct(){
         $categories = Categories :: get();
        return view('Admin.addproduct')->with('categories', $categories);
     }

     public function product(){

      $products = Product :: get();
        return view('Admin.product')->with('products' , $products);

     }

     public function order(){

      $orders = Order::All();

      $orders-> transform(function($order , $key){
         
         $order->panier = unserialize($order->panier);
         return $order;
      });


        return view('Admin.order')->with('orders', $orders);
     }
} 
