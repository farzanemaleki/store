<?php

namespace App\Http\Controllers\adminpanel;

use App\SiteInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function foo\func;

class SiteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $url;
    public function index()
    {
        $allInfo = SiteInfo::all();
        return view('adminpanel.siteInfo.index' , compact('allInfo'));
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
        $info = SiteInfo::findOrFail($id);

        $persian = ['۰', '۱', '۲', '۳', '۴', '٤', '۵', '٥', '٦', '۶', '۷', '۸', '۹'];
        $english = [ 0 ,  1 ,  2 ,  3 ,  4 ,  4 ,  5 ,  5 ,  6 ,  6 ,  7 ,  8 ,  9 ];

        return view('adminpanel.siteInfo.edit' , compact(['info' , 'persian' , 'english']));
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
            'company_name' => ['required', 'min:3', 'max:255'],
            'company_tell' => ['required'],
            'short_description' => ['required'],

        ],[
            'company_name.required' => 'نام شرکت الزامی است.',
            'company_name.min' => 'نام شرکت نمیتواند کمتر از سه کارکتر باشد.',
            'company_name.max' => 'نام شرکت نمیتواند بیشتر از 255 کارکتر باشد.',
            'company_tell.required' => ' شماره تماس شرکت الزامی است.',
            'short_description.required' => 'توضیح کوتاه درباره شرکت الزامی است',

        ]);
        $info = SiteInfo::findOrFail($id);
        if ($request->hasFile('company_logo')) {
            $image = '';
            $destination = public_path() . config('cms-setting.url_logo');
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('company_logo');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $image = config('cms-setting.url_logo') . '/' . $filename;
        }else{
            $image = $info->company_logo;
        }
        $persian = ['۰', '۱', '۲', '۳', '۴', '٤', '۵', '٥', '٦', '۶', '۷', '۸', '۹'];
        $english = [ 0 ,  1 ,  2 ,  3 ,  4 ,  4 ,  5 ,  5 ,  6 ,  6 ,  7 ,  8 ,  9 ];
        $info->update([
            'company_name' => $request->get('company_name'),
            'company_tell' => $request->get('company_tell'),
            'manager_tell' => $request->get('manager_tell'),
            'short_description' => $request->get('short_description'),
            'description' => str_replace($persian, $english, $request->get('description')),
            'company_logo' => $image,
        ]);
        $info->save();
        return redirect(route('dashboard.siteInfo.index'))->with('message', 'اطلاعات شرکت شما با موفقیت ویرایش شد');

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
    public function uploadImage()
    {
        $this->validate(request(), [
            'upload' => 'required'
        ]);
        $image = '';

        $imagePath = "/upload/siteInfo/images/2020/";
        $file = request()->file('upload');
        $filename = $file->getClientOriginalName();
        if (file_exists(public_path($imagePath) . $filename)) {
            $filename = Carbon::now()->timestamp . $filename;
        }
        $file->move(public_path($imagePath), $filename);
        $url = $imagePath . $filename;
        $function_number = $_GET['CKEditorFuncNum'];
        $message = '';
        return "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction( '$function_number' , '$url' , '$message' );</script>";

    }
}
