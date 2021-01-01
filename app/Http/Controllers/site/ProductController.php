<?php

namespace App\Http\Controllers\site;

use App\Comment;
use App\Product;
use App\helper;

use App\productAttribiutes;
use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allcategory = ProductCategory::all();
        $product = Product::FindOrFail($id);

        $allAttr = productAttribiutes::all()->where('product_id' , '=' , $id);

        $comments = $product->comments()->where('confirmed' , 1)->where('parent_id' , 0)->latest()->get();
        return view('site.product.product',compact(['product' , 'allcategory' , 'allAttr' , 'comments']));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function search(Request $request){
        $text = $request->get('q');
        $result = Product::where('title' , 'LIKE' , '%' .$text. '%' )->get();
        return view('site.search.search', compact(['result' , 'text']));
    }
}
