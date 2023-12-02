<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Home(){
       return view('Admin.Home');
    }

    public function addCategorie(){
        return view('Admin.addCategorie');
     }

     public function Categorie(){
        return view('Admin.Categorie');
     }
     
     public function addSlider(){
        return view('Admin.addSlider');
     }

     public function Slider(){
        return view('Admin.Slider');
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
