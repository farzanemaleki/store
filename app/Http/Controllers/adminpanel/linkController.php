<?php

namespace App\Http\Controllers\adminpanel;

use App\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class linkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::all();
        return view('adminpanel.link.index' , compact('links'));
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
        $link = Link::findOrFail($id);
        return view('adminpanel.link.edit' , compact('link'));
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
        $this->validate($request ,[
            'title'=>['required','min:3','max:255'],
            'link1' => 'required',
            'Address_link1' => 'required',

        ],[
            'title.required' => 'عنوان لینک الزامی است.',
            'title.min'=>'عنوان لینک نمیتواند کمتر از سه کارکتر باشد.',
            'title.max'=>'عنوان لینک نمیتواند بیشتر از 255 کارکتر باشد.',
            'link1.required' => 'لینک اول الزامی است.',
            'Address_link1.required' => 'آدرس لینک اول الزامی است.',
        ]);
        $link = Link::findOrFail($id);
        $link->update([
            'title' => $request->get('title'),
            'link1' => $request->get('link1'),
            'Address_link1' => $request->get('Address_link1'),
            'link2' => $request->get('link2'),
            'Address_link2' => $request->get('Address_link2'),
            'link3' => $request->get('link3'),
            'Address_link3' => $request->get('Address_link3'),
            'link4' => $request->get('link4'),
            'Address_link4' => $request->get('Address_link4'),
            'link5' => $request->get('link5'),
            'Address_link5' => $request->get('Address_link5'),
        ]);
        $link->save();
        return redirect(route('dashboard.link.index'))->with('message', ' لینک '.$link->title.' با موفقیت ویرایش شد.');
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
