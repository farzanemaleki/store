<?php

namespace App\Http\Controllers\adminpanel;

use App\Product;
use App\productAttribiutes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class productAttribiutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allproductAttr = productAttribiutes::all();
        return view('adminpanel.productAttr.index' , compact('allproductAttr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allProduct = Product::all();
        return view('adminpanel.productAttr.create' , compact('allProduct'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'product_id' => 'required',
            'key' => 'required',
            'value' => 'required',
        ] , [
            'product_id.required' => 'انتخاب محصول الزامی است.',
            'key.required' => 'عنوان ویژگی الزامی است.',
            'value.required' => 'مقدار ویزگی الزامی است.'
        ]);

        productAttribiutes::create([
            'product_id' => $request->get('product_id'),
            'key' => $request->get('key'),
            'value' => $request->get('value')
        ]);
        return redirect()->route('dashboard.productAttribiutes.index')->with('message' , 'ویژگی مدنظر شما با موفقیت ثبت شد.');

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
        $Atrr = productAttribiutes::findOrFail($id);
        return view('adminpanel.productAttr.edit' , compact('Atrr'));
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
