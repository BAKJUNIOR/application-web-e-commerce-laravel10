<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Slider;

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
        return view('Admin.addproduct');
     }

     public function product(){
        return view('Admin.product');
     }

     public function order(){
        return view('Admin.order');
     }
} 
