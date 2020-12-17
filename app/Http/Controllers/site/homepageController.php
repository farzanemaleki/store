<?php

namespace App\Http\Controllers\site;

use App\Product;
use App\ProductCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homepageController extends Controller
{
   public function index(){
//       $product = new Product();
//       $allProducts = $product->publishedProduct();


//       $allcategory = ProductCategory::all();
       if(cache('allProducts')){
           $allProducts = cache('allProducts');
       }else{
           $allProducts = Product::latest()->take(8)->get();
           cache(['allProducts'=>$allProducts], carbon::now()->addMinute(5));
       }
       return view('site.homePage.homePage', compact('allProducts' ));
   }
}
