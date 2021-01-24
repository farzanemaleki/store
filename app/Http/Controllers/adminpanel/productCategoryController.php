<?php

namespace App\Http\Controllers\adminpanel;

use App\ProductCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\This;
use Rny\SlugUtf8\SlugUtf8;
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
            'status'=>'required',
            'parent_id'=>'required',
            'image'=>'required',

        ],[
            'title.required' => 'عنوان دسته بندی الزامی است',
            'title.min'=>'عنوان دسته بندی نمیتواند کمتر از سه کارکتر باشد',
            'title.max'=>'عنوان دسته بندی نمیتواند بیشتر از 255 کارکتر باشد',
            'status.required' => 'وضعیت دسته بندی الزامی است',
            'parent_id.required' => 'شاخه دسته بندی الزامی است',
            'image.required' => 'تصویر دسته بندی الزامی است',
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
        $productcategory = ProductCategory::findorfail($id);
        $allcategories = ProductCategory::all();

        return view('adminpanel.productCategory.edit', compact(['productcategory' , 'allcategories']));

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
            'status'=>'required',
            'parent_id'=>'required',

        ],[
            'title.required' => 'عنوان دسته بندی الزامی است',
            'title.min'=>'عنوان دسته بندی نمیتواند کمتر از سه کارکتر باشد',
            'title.max'=>'عنوان دسته بندی نمیتواند بیشتر از 255 کارکتر باشد',
            'status.required' => 'وضعیت دسته بندی الزامی است',
            'parent_id.required' => 'شاخه دسته بندی الزامی است',

        ]);
        $productcategory = ProductCategory::findorfail($id);
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
            $image = $productcategory->image;
        }
        $description = '';
        if ($request->get('description') == null || $request->get('description') == ''){
            $description = '';
        }
        else{
            $description = $request->get('description');
        }
        $productcategory->update([
            'title' =>  $request->get('title'),
            'description' => $description,
            'status' => $request->get('status'),
            'image' =>$image,
            'parent_id' => $request->get('parent_id')
        ]);
        $productcategory->save();
        return redirect(route('dashboard.productCategory.index'))->with('message', 'محصول ' . $productcategory->title . ' با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productcategory = ProductCategory::findorfail($id);
        if (!$productcategory){
            return redirect(route('dashboard.productCategory.index'))->with('error', 'دسته بندی مورد نظر موجود نمی باشد');
        }else{
            $productcategory->delete();
            return redirect(route('dashboard.productCategory.index'))->with('warning', 'دسته بندی ' . $productcategory->title . ' با موفقیت حذف شد');
        }
    }
    public function uploadImage()
    {
        $this->validate(request(), [
            'upload' => 'required'
        ]);
        $image = '';

        $imagePath = "/upload/images/2020/";
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
