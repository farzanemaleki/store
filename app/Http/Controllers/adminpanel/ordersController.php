<?php

namespace App\Http\Controllers\adminpanel;

use App\Order;
use App\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Payment::where('status' , 'OK')->with('order' , 'user')->latest()->paginate(3);
        return view('adminpanel.order.order' ,compact('orders'));
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
        $order = Payment::with('order' , 'user' , 'address')->findOrFail($id);

        $selectedProductsIdsAsList =[];
        $selectedProductsNamesAsList =[];
        $selectedProductsCountsAsList =[];
        $selectedProductsPricesAsList =[];

        $selectedProductsTotalPricesAsList =[]; //with no tax

        $TotalPrice = 0; //price with tax
        $TotalPriceWithNoTax = 0;

        foreach(explode(',', str_replace(['{' , '}'] , '' , $order->order->product_id)) as $singleId){
            array_push($selectedProductsIdsAsList , $singleId);
        }

        foreach(explode(',', str_replace(['{' , '}'] , '' , $order->order->product_name)) as $singleName){
            array_push($selectedProductsNamesAsList , $singleName);
        }

        foreach(explode(',', str_replace(['{' , '}'] , '' , $order->order->product_count)) as $singleCount){
            array_push($selectedProductsCountsAsList , $singleCount);
        }

        foreach(explode(',', str_replace(['{' , '}'] , '' , $order->order->product_price)) as $singlePrice){
            array_push($selectedProductsPricesAsList , $singlePrice);
        }

        for($i=0 ; $i<count($selectedProductsPricesAsList) ; $i++){
            $currentPrice = $selectedProductsPricesAsList[$i] * $selectedProductsCountsAsList[$i] ;
            array_push($selectedProductsTotalPricesAsList, ($currentPrice));
            $TotalPriceWithNoTax += $currentPrice;
        }
        $TaxPrice = $TotalPriceWithNoTax * 0.09;
        $TotalPrice =$TaxPrice + $TotalPriceWithNoTax;
        return view('adminpanel.order.show' ,
            compact([
                'order',
                'selectedProductsIdsAsList',
                'selectedProductsNamesAsList',
                'selectedProductsCountsAsList',
                'selectedProductsPricesAsList',
                'selectedProductsTotalPricesAsList',
                'TotalPriceWithNoTax',
                'TaxPrice',
                'TotalPrice'
            ]));
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
