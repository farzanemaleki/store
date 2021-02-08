<?php

namespace App\Http\Controllers\userpanel;

use App\Address;
use App\Order;
use App\Payment;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()){
        $userId = Auth::user()->id;
        $allAddress = Address::where('user_id' , '=' , $userId)->get();
        $allOrders = Payment::where('user_id' , '=' , $userId)->where('status' , '=' , 'OK')->with('address' , 'order')->latest()->get();
       return view('userpanel.dashboard' , compact(['allOrders' , 'allAddress']));
        }else{
            return redirect(route('login'));
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request , [
            'name' => 'required'
        ],[
            'name.required' => 'نام خود را وارد کنید.'
        ]);
        $user = Auth::user();
        if($request->get('password')){
            $password = Hash::make($request->get('password'));
        }else{
            $password = $user->password;
        }
        $mobile = $user->mobile;
        $user->update([
            'name' => $request->get('name'),
            'mobile' => $mobile,
            'password' => $password,
            'email' => $request->get('email')
        ]);
        $user->save();
        return redirect(route('user.account.index'))->with('message','اطلاعات شما با موفقیت به روز رسانی شد.');
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
