<?php

namespace App\Http\Controllers\adminpanel;

use App\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class partnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allpartner = Partner::all();
        return view('adminpanel.partner.index', compact('allpartner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'min:3', 'max:255'],
            'manager_name' => ['required'],
            'phone' => ['required'],
            'logo' => ['required'],
        ],[
            'name.required' => 'نام شرکت الزامی است',
            'name.min' => 'نام شرکت نمیتواند کمتر از سه کارکتر باشد',
            'name.max' => 'نام شرکت نمیتواند بیشتر از 255 کارکتر باشد',
            'manager_name.required' => 'نام مدیر الزامی است',
            'phone.required' => 'شماره تماس الزامی است',
            'logo.required' => 'لوگو شرکت الزامی است',
        ]);
        if ($request->hasFile('logo')) {
            $image = '';
            $destination = public_path() . config('cms-setting.url_partner');
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('logo');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $image = config('cms-setting.url_partner') . '/' . $filename;
            Partner::create([

                'name' => $request->get('name'),
                'manager_name' => $request->get('manager_name'),
                'phone' => $request->get('phone'),
                'address' => $request->get('address'),
                'email' => $request->get('email'),
                'logo' => $image
            ]);
            return redirect(route('dashboard.partner.index'))->with('message', 'همکار شما با موفقیت ثبت شد');
        } else
            return redirect(route('dashboard.partner.index'))->with('error', 'مشکلی در ثبت همکار وجود دارد');
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
        $partner = Partner::findOrFail($id);
        return view('adminpanel.partner.edit' , compact('partner'));
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
        $this->validate($request, [
            'name' => ['required', 'min:3', 'max:255'],
            'manager_name' => ['required'],
            'phone' => ['required'],
        ],[
            'name.required' => 'نام شرکت الزامی است',
            'name.min' => 'نام شرکت نمیتواند کمتر از سه کارکتر باشد',
            'name.max' => 'نام شرکت نمیتواند بیشتر از 255 کارکتر باشد',
            'manager_name.required' => 'نام مدیر الزامی است',
            'phone.required' => 'شماره تماس الزامی است',
        ]);
        $partner = Partner::findOrFail($id);
        if ($request->hasFile('logo')) {
            $image = '';
            $destination = public_path() . config('cms-setting.url_partner');
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('logo');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $image = config('cms-setting.url_partner') . '/' . $filename;
        }else{
            $image = $partner->logo;
        }
        $partner->update([
            'name' => $request->get('name'),
            'manager_name' => $request->get('manager_name'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'logo' => $image
        ]);
        $partner->save();
        return redirect(route('dashboard.partner.index'))->with('message', 'همکار ' . $partner->name . ' با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        if(!$partner){
            return redirect()->route('dashboard.partner.index')->with('error' , ' همکار مورد نظر در سایت موجود نیست');
        }else{
            $partner->delete();
            return redirect(route('dashboard.partner.index'))->with('warning', 'همکار ' . $partner->name . ' با موفقیت حذف شد');
        }
    }
}
