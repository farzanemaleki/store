<?php

namespace App\Http\Controllers\adminpanel;

use App\SocialMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class socialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allMedia = SocialMedia::all();
        return view('adminpanel.socialMedia.index' , compact('allMedia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.socialMedia.create');
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
            'title' => ['required', 'min:3', 'max:255'],
            'address' => ['required'],
            'icon' => ['required'],
        ],[
            'title.required' => 'نام شبکه اجتماعی الزامی است',
            'title.min' => 'نام شبکه اجتماعی نمیتواند کمتر از سه کارکتر باشد',
            'title.max' => 'نام شبکه اجتماعی نمیتواند بیشتر از 255 کارکتر باشد',
            'address.required' => 'آدرس شبکه اجتماعی الزامی است',
            'icon.required' => 'آیکون شبکه اجتماعی الزامی است',
        ]);

        if ($request->hasFile('icon')) {
            $image = '';
            $destination = public_path() . config('cms-setting.url_socialMedia');
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('icon');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $image = config('cms-setting.url_socialMedia') . '/' . $filename;
            SocialMedia::create([

                'title' => $request->get('title'),
                'address' => $request->get('address'),
                'icon' => $image,
            ]);
            return redirect(route('dashboard.socialMedia.index'))->with('message', 'شبکه اجتماعی شما با موفقیت ثبت شد');
        } else
            return redirect(route('dashboard.socialMedia.index'))->with('error', 'مشکلی در ثبت شبکه اجتماعی وجود دارد');
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
        $media = SocialMedia::findOrFail($id);
        return view('adminpanel.socialMedia.edit' ,compact('media'));
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
            'title' => ['required', 'min:3', 'max:255'],
            'address' => ['required'],
        ],[
            'title.required' => 'نام شبکه اجتماعی الزامی است',
            'title.min' => 'نام شبکه اجتماعی نمیتواند کمتر از سه کارکتر باشد',
            'title.max' => 'نام شبکه اجتماعی نمیتواند بیشتر از 255 کارکتر باشد',
            'address.required' => 'آدرس شبکه اجتماعی الزامی است',
        ]);
        $media = SocialMedia::findOrFail($id);
        if ($request->hasFile('icon')) {
            $image = '';
            $destination = public_path() . config('cms-setting.url_socialMedia');
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('icon');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $image = config('cms-setting.url_socialMedia') . '/' . $filename;
        }
        else{
            $image = $media->icon;
        }
        $media->update([
            'title' => $request->get('title'),
            'address' => $request->get('address'),
            'icon' => $image,
        ]);
        $media->save();
        return redirect(route('dashboard.socialMedia.index'))->with('message', 'شبکه اجتماعی ' . $media->title . ' با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = SocialMedia::findOrFail($id);
        if (!$media){
            return redirect()->route('dashboard.socialMedia.index')->with('error' , ' شبکه اجتماعی مورد نظر در سایت موجود نیست');
        }else{
            $media->delete();
            return redirect(route('dashboard.socialMedia.index'))->with('warning', 'شبکه اجتماعی ' . $media->title . ' با موفقیت حذف شد');
        }
    }
}
