<?php

namespace App\Http\Controllers\site;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homepageController extends Controller
{
   public function index(){
       $product = new Product();
       $allProducts = $product->publishedProduct();
       return view('site.homePage.homePage',compact('allProducts'));
   }
}
