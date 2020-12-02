<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use phpDocumentor\Reflection\Types\This;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/homepage';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $this->validate($request,
            ['mobile'=>'required|max:11|min:11',
                'password'=>'required'
            ],
            ['mobile.required'=>'لطفا شماره موبایل خود را وارد کنید',
                'mobile.min'=>'تعداد اعداد کمتر از شماره موبایل است',
                'mobile.max'=>'تعداد اعداد بیشتر از شماره موبایل است',
                'password.required'=>'پسورد را وارد کنید',]
        );

        $data['mobile']= $request->mobile;
        $data['password']= $request->password;

        $user=User::where('mobile',$request->get('mobile'))->first();
        if (!$user){
            return redirect(route('login'))->with('error','یوزر موردنظر موجود نمیاشد');
        }
        elseif(!Hash::check($request->get('password'),$user->password)){
            return redirect(route('login'))->with('error','پسورد اشتباه است');
        }
        elseif($user->role!=='admin'){
            Auth::login($user);
            return redirect(route('user.account.index'));
        }
        else {
            Auth::login($user);
            return redirect(route('dashboard'));
        }

    }
    public function logout(Request $request)
    {
        auth()->logout();
        return redirect(route('homepage'));
    }
}
