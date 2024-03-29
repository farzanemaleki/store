<?php

namespace App\Http\Controllers\site;

use App\Product;

use App\ProductCategory;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allcategory = ProductCategory::all();
        return view('site.cart.cart' , compact('allcategory'));


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
        Cart::add($request->id , $request->name , 1 , $request->price)->associate('App\Product');
        return redirect()->route('site.cart.index')->with('success-message' , 'محصول شما با موفقیت به سبد خرید اضافه شد.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $newQty = $request->get('newQty');
        $rowId = $request->get('rowId');
        $procount = $request->get('productCount');

        if ($procount == null || $procount >= $newQty+1){
            Cart::update($rowId , $newQty + 1);
            return redirect()->route('site.cart.index')->with('message' , 'سبد خرید با موفقیت به روز رسانی شد');
        }else
        {
            return redirect()->route('site.cart.index')->with('alert-message' , 'درخواست شما بیشتر از موجودی انبار می باشد');
        }



    }

    public function update2(Request $request)
    {
        $newQty = $request->get('newQty');
        $rowId = $request->get('rowId');

        Cart::update($rowId, $newQty - 1);
        return redirect()->route('site.cart.index')->with('message', 'سبد خرید با موفقیت به روز رسانی شد');

    }
//    public function update(Request $request, $id)
//    {
//
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect(route('site.cart.index'))->with('alert-message' , 'محصول شما با موفقیت از سبد خرید حذف شد.');
    }
}
