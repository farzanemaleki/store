<?php

namespace App\Http\Controllers\adminpanel;


use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;



class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allProuduct = Product::all();
        return view("adminpanel.product.index", compact('allProuduct'));
<<<<<<< HEAD
=======

>>>>>>> create cart,shop,singleProduct,category Pages

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allcategories = ProductCategory::all();
        return view('adminpanel.product.create', compact('allcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
<<<<<<< HEAD
     * @param \Illuminate\Http\Request $request
=======
     * @param  \Illuminate\Http\Request  $request
>>>>>>> origin/master
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => ['required', 'min:3', 'max:255'],
            'category' => ['required'],
            'price' => ['required'],
            'product_id' => ['required'],
            'image' => ['required'],
            'status' => ['required'],
        ],
            [
                'title.required' => 'عنوان محصول الزامی است',
                'title.min' => 'عنوان محصول نمیتواند کمتر از سه کارکتر باشد',
                'title.max' => 'عنوان محصول نمیتواند بیشتر از 255 کارکتر باشد',
                'category.required' => 'دسته بندی محصول الزامی است',
                'price.required' => 'قیمت محصول الزامی است',
                'product_id.required' => 'کد محصول الزامی است',
                'image.required' => 'تصویر محصول الزامی است',
                'status.required' => 'وضعیت محصول الزامی است',

            ]);

        if ($request->hasFile('image')) {
            $image = '';
            $destination = public_path() . config('cms-setting.url');
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $image = config('cms-setting.url') . '/' . $filename;
            $thumbnail = $image;


            Product::create([
                'title' => $request->get('title'),
                'slug' => $request->get('title'),
                'description' => $request->get('description'),
                'price' => $request->get('price'),
                'old_price' => $request->get('old_price'),
                'category' => $request->get('category'),
                'count' => $request->get('count'),
                'size' => $request->get('size'),
                'weight' => $request->get('weight'),
                'discount' => $request->get('discount'),
                'product_id' => $request->get('product_id'),
                'status' => $request->get('status'),
                'image' => $image,
                'thumbnail' => $thumbnail,
                'rate' => 1,
            ]);
            return redirect(route('dashboard.product.index'))->with('message', 'محصول شما با موفقیت ثبت شد');
        } else
            return redirect(route('dashboard.product.index'))->with('error', 'مشکلی در ثبت محصول وجود دارد');

    }

    /**
     * Display the specified resource.
     *
<<<<<<< HEAD
     * @param int $id
=======
     * @param  int  $id
>>>>>>> origin/master
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
<<<<<<< HEAD
     * @param int $id
=======
     * @param  int  $id
>>>>>>> origin/master
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $product = Product::findorfail($id);
        $allcategories = ProductCategory::all();
        return view('adminpanel/product/edit', compact(['product', 'allcategories']));

    }

    /**
     * Update the specified resource in storage.
     *
<<<<<<< HEAD
     * @param \Illuminate\Http\Request $request
     * @param int $id
=======
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
>>>>>>> origin/master
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => ['required', 'min:3', 'max:255'],
            'category' => ['required'],
            'price' => ['required'],
//            'product_id'=>['required'],
//            'image'=>['required'],
            'status' => ['required'],
        ],
            [
                'title.required' => 'عنوان محصول الزامی است',
                'title.min' => 'عنوان محصول نمیتواند کمتر از سه کارکتر باشد',
                'title.max' => 'عنوان محصول نمیتواند بیشتر از 255 کارکتر باشد',
                'category.required' => 'دسته بندی محصول الزامی است',
                'price.required' => 'قیمت محصول الزامی است',
                'product_id.required' => 'کد محصول الزامی است',
                'image.required' => 'تصویر محصول الزامی است',
                'status.required' => 'وضعیت محصول الزامی است',

            ]);
        $product = Product::findorfail($id);

        if ($request->hasFile('image')) {
            $image = '';
            $destination = public_path() . config('cms-setting.url');
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $image = config('cms-setting.url') . '/' . $filename;
            $thumbnail = $image;

        } else {
            $image = $product->image;
            $thumbnail = $image;
        }
        $product->update([
            'title' => $request->get('title'),
            'slug' => $request->get('title'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'old_price' => $request->get('old_price'),
            'category' => $request->get('category'),
            'count' => $request->get('count'),
            'size' => $request->get('size'),
            'weight' => $request->get('weight'),
            'discount' => $request->get('discount'),
            'product_id' => $product->product_id,
            'status' => $request->get('status'),
            'image' => $image,
            'thumbnail' => $thumbnail,
//                'rate'=>1,
        ]);
        $product->save();
        return redirect(route('dashboard.product.index'))->with('message', 'محصول ' . $product->title . ' با موفقیت ویرایش شد');

    }

    /**
     * Remove the specified resource from storage.
     *
<<<<<<< HEAD
     * @param int $id
=======
     * @param  int  $id
>>>>>>> origin/master
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $product = Product::findOrFail($id);

        if (!$product) {
            return redirect(route('dashboard.product.index'))->with('error', 'محصول مورد نظر موجود نمی باشد');
        } else {
            $product->delete();
            return redirect(route('dashboard.product.index'))->with('warning', 'محصول ' . $product->title . ' با موفقیت حذف شد');
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
