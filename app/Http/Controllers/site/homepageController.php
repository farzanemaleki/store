<?php

namespace App\Http\Controllers\site;

use App\ElectricalSymbol;
use App\Partner;
use App\Product;
use App\ProductCategory;
use App\SocialMedia;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;

class homepageController extends Controller
{
   public function index(){
//       $product = new Product();
//       $allProducts = $product->publishedProduct();
//       $allcategory = ProductCategory::all();

       $allElecSymbol = ElectricalSymbol::all();
       $allcategory = ProductCategory::all();
       $allpartners = Partner::all();

       if(cache('allProducts')){
           $allProducts = cache('allProducts');
       }else{
           $allProducts = Product::latest()->take(8)->get();
           cache(['allProducts'=>$allProducts], carbon::now()->addMinute(5));
       }
       return view('site.homePage.homePage', compact(['allProducts' , 'allcategory' , 'allElecSymbol' , 'allpartners']));
   }


   

   public function comment(Request $request)
   {
        $this->validate($request , [
            'comment_body' => ['required','min:3']
        ],
        [
            'comment_body.required' => 'لطفا نظر خود را وارد کنید.',
            'comment_body.min' => 'بخش نظرات کمتر از سه کارکتر است.'
        ]);
       Comment::create([
            'user_id' => auth()->user()->id ,
            'comment_body' =>$request->get('comment_body'),
            'parent_id' => $request->get('parent_id'),
            'commentable_id' => $request->get('commentable_id'),
            'commentable_type' => $request->get('commentable_type'),
        ]);
        return back();
   }
}
