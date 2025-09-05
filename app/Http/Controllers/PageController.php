<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutPage(){
        return view('about');
    }
     public function contactpage(){
        return view('contact');
    }
 
     public function menuPage(){
        return view('menu');
    }
     public function productsPage(){
        return view('products');
    }
  
    public function storagePage(){
        return view('store');
    }
    public function welcomePage(){
        return view('welcome');
    }
      
       
    }

    
    




