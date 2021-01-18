<?php

namespace App\Http\Controllers\adminpanel;

use App\ElectricalSymbol;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class electricalSymbolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allSymbol = ElectricalSymbol::all();
        return view('adminpanel.electricalSymbol.index' , compact('allSymbol'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.electricalSymbol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> validate($request,[
            'title'=>['required','min:3','max:255'],

        ],[
            'title.required' => 'عنوان نماد الزامی است.',
            'title.min'=>'عنوان نماد نمیتواند کمتر از سه کارکتر باشد.',
            'title.max'=>'عنوان نماد نمیتواند بیشتر از 255 کارکتر باشد.',
        ]);
        if ($request->hasFile('electrical_symbol')){

            $destination = public_path().config('cms-setting.url_elecSymbol');

            if ( ! is_dir($destination)){
                mkdir($destination , '0777', true);
            }
            $destination = $destination. '/';
            $file = $request->file('electrical_symbol');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination,$filename);
            $image = config('cms-setting.url_elecSymbol').'/'.$filename;

        }else{
            $image = '';
        }

        ElectricalSymbol::create([
            'title' =>  $request->get('title'),
            'electrical_symbol' =>$image

        ]);
        return redirect(route('dashboard.elecSymbol.index'))->with('message','نماد با موفقیت ذخیره شد');


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
        $symbol = ElectricalSymbol::findOrFail($id);
        return view('adminpanel.electricalSymbol.edit' ,compact('symbol'));
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
        $this-> validate($request,[
            'title'=>['required','min:3','max:255'],

        ],[
            'title.required' => 'عنوان نماد الزامی است.',
            'title.min'=>'عنوان نماد نمیتواند کمتر از سه کارکتر باشد.',
            'title.max'=>'عنوان نماد نمیتواند بیشتر از 255 کارکتر باشد.',
        ]);

        $symbol = ElectricalSymbol::findOrFail($id);

        if ($request->hasFile('electrical_symbol')){

            $destination = public_path().config('cms-setting.url_elecSymbol');

            if ( ! is_dir($destination)){
                mkdir($destination , '0777', true);
            }
            $destination = $destination. '/';
            $file = $request->file('electrical_symbol');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination,$filename);
            $image = config('cms-setting.url_elecSymbol').'/'.$filename;

        }else{
            $image = $symbol->electrical_symbol;
        }
        $symbol->update([
            'title' =>  $request->get('title'),
            'electrical_symbol' =>$image

        ]);
        return redirect(route('dashboard.elecSymbol.index'))->with('message', 'نماد'.$symbol->title.'با موفقیت ویرایش شد.' );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $symbol = ElectricalSymbol::findOrFail($id);
        $symbol->delete();
        return redirect()->route('dashboard.elecSymbol.index')->with('message', 'نماد'.$symbol->title.'با موفقیت حذف شد.' );
    }
}
