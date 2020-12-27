<?php

namespace App\Http\Controllers\site;

use App\Address;
use App\Order;
use App\Payment;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use http\Header;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SoapClient;

class checkOutController extends Controller
{
    protected $Merchant_ID = 'f43b1d86-cd4d-11e7-aef7-005056a205be'; //Required


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $current_addresses = Address::where('user_id' , '=' , auth()->user()->id)->get();
        } catch (\Exception $e){
            $current_addresses = null;
        }
        return view('site.checkout.checkout' , compact('current_addresses'));

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
        $this->validate($request , [
            'name' => 'required',
            'postal_code' => 'required',
            'phone' => 'required',
        ],[
            'name.required' => 'نام پرداخت کننده الزامی است',
            'postal_code.required' => 'کد پستی پرداخت کننده الزامی است',
            'phone.required' => 'شماره تماس پرداخت کننده الزامی است'

        ]);
        $current_user_id = auth()->user()->id;
        $amount = intdiv(((double)str_replace(',' , '' , Cart::total()) + 100000) , 10);

//        $MerchantID = 'test'; //Required
        $MerchantID = $this->Merchant_ID; // Required
        $Amount = $amount; //Amount will be based on Toman - Required
        $Description = 'خرید از فروشگاه ایرانیان' . auth()->user()->name . ' به شماره موبایل' . auth()->user()->mobile; // Required
        $Mobile = auth()->user()->mobile; // Optional
        $CallbackURL = 'http://localhost:8000/checkout/verify'; // Required

        $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

        $result = $client->PaymentRequest(
            [
                'MerchantID' => $MerchantID,
                'Amount' => $Amount,
                'Description' => $Description,
                'Mobile' => $Mobile,
                'CallbackURL' => $CallbackURL,
            ]
        );

        //Redirect to URL You can do it also by creating a form
        if ($result->Status == 100) {

            if ($request->get('address_choose_id') == 0) {
                //new user
                Address::create([
                    'user_id' => $current_user_id,
                    'user_address' => 'نام موسسه یا شرکت: ' . $request->get('company_name') . ' آدرس: ' . $request->get('city')
                        . ' - ' . $request->get('state') . ' - ' . $request->get('address')
                ]);
                $current_address_id = Address::where('user_id', $current_user_id)->first();
            }
            else {
                $current_address_id = Address::where('id' , $request->get('address_choose_id') )->first();
            }

            $ids = [];
            $names = [];
            $counts = [];

            foreach (Cart::content() as $item){
                array_push($ids, '{' . $item->model->id . '}');
                array_push($names, '{' .$item->model->title . '}');
                array_push($counts, '{' .$item->qty . '}');
            }

            $new_order = '';
            $new_order = Order::create([
                'user_id' => $current_user_id,
                'product_id' => implode(',' , $ids),
                'product_name' => implode(',' , $names),
                'product_count' => implode(',' , $counts),
                'amount' => $amount,
                'description' => $request->get('description') ?? '',
                'delivery_address_id' => $current_address_id->id ,
                'postal_code' => $request->get('postal_code'),
                'company_name' => $request->get('company_name') ?? '',
                'discount' => 0
            ]);

            $current_order_id = $new_order->id;

            Payment::create([
                'order_id' => $current_order_id,
                'status' => 'NOK',
                'amount' => $amount,
                'RefID' => '',
                'card_pan' => '',
            ]);

            return redirect('https://www.zarinpal.com/pg/StartPay/'.$result->Authority);

        } else {
            echo'ERR: '.$result->Status;
        }

    }

    public function verifycheck(Request $request)
    {
        $Authority = $request->get('Authority');
        $order =Order::where('user_id' , auth()->user()->id)->latest(1);
        $payment = Payment::where('order_id' , $order->id)->first();
        $Amount = $payment->amount;
        if ($request->get('Status')  == 'OK') {
            $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
            $result = $client->PaymentVerification(
                [
                    'MerchantID' => $this->Merchant_ID,
                    'Authority' => $Authority,
                    'Amount' => $Amount,
                ]
            );

            if ($result->Status == 100) {

                $payment->update([
                   'status' => 'OK' ,
                    'RefID' => $result->RefID,
                    'card_pan' => '',
                    'updated_at'=> Carbon::now()
                ]);
                Cart::destroy();

                echo 'Transaction success. RefID:'.$result->RefID;
            } else {
                echo 'Transaction failed. Status:'.$result->Status;
            }
        } else {
            echo 'Transaction canceled by user';
        }
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
