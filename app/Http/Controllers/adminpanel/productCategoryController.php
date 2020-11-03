<?php

namespace App\Http\Controllers\adminpanel;

use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\This;

class productCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allcategories = ProductCategory::all();
       return view('adminpanel/productCategory/index', compact('allcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allcategories = ProductCategory::all();
       return view('adminpanel/productCategory/create',compact('allcategories'));
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
            'title.required' => 'عنوان دسته بندی الزامی است',
            'title.min'=>'عنوان دسته بندی نمیتواند کمتر از سه کارکتر باشد',
            'title.max'=>'عنوان دسته بندی نمیتواند بیشتر از 255 کارکتر باشد',
        ]);
        if ($request->hasFile('image')){

            $destination = public_path().config('cms-setting.url_product_category_image');

            if ( ! is_dir($destination)){
                mkdir($destination , '0777', true);
            }
            $destination = $destination. '/';
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination,$filename);
            $image = config('cms-setting.url_product_category_image').'/'.$filename;

        }else{
            $image = '';
        }
        $description = '';
        if ($request->get('description') == null || $request->get('description') == ''){
            $description = '';
        }
        else{
            $description = $request->get('description');
            }
        ProductCategory::create([
            'title' =>  $request->get('title'),
            'slug' => $request->get('title'),
            'description' => $description,
            'status' => $request->get('status'),
            'image' =>$image,
            'parent_id' => $request->get('parent_id')

        ]);
        return redirect(route('dashboard.productCategory.index'))->with('message','دسته بندی با موفقیت ذخیره شد');

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
