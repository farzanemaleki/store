<?php

namespace App\Http\Controllers\site;

use App\Product;
<<<<<<< HEAD
use App\productAttribiutes;
=======
>>>>>>> c0a5a9f384955196b200fb275c7a0c937da3cd41
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
<<<<<<< HEAD
        $allAttr = productAttribiutes::all()->where('product_id' , '=' , $id);
        return view('site.product.product',compact(['product' , 'allcategory' , 'allAttr']));
=======
        return view('site.product.product',compact(['product' , 'allcategory']));
>>>>>>> c0a5a9f384955196b200fb275c7a0c937da3cd41
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
}
