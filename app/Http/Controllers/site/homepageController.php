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


<<<<<<< HEAD
//       $allcategory = ProductCategory::all();
=======
       $allcategory = ProductCategory::all();
>>>>>>> c0a5a9f384955196b200fb275c7a0c937da3cd41
       if(cache('allProducts')){
           $allProducts = cache('allProducts');
       }else{
           $allProducts = Product::latest()->take(8)->get();
           cache(['allProducts'=>$allProducts], carbon::now()->addMinute(5));
       }
<<<<<<< HEAD
       return view('site.homePage.homePage', compact('allProducts' ));
=======
       return view('site.homePage.homePage', compact(['allProducts' , 'allcategory']));
>>>>>>> c0a5a9f384955196b200fb275c7a0c937da3cd41
   }
}
