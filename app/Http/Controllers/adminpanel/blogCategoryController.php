<?php

namespace App\Http\Controllers\adminpanel;

use App\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class blogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allBlogCategory = BlogCategory::all();
        return view('adminpanel.blogCategory.index' , compact('allBlogCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allBlogCategory = BlogCategory::all();
        return view('adminpanel.blogCategory.create', compact('allBlogCategory'));
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
            'topic' => ['required', 'min:3', 'max:255'],
            'body' => ['required'],
            'parent_id' => ['required'],
            'image' => ['required'],
            'status' => ['required'],
        ],[
            'topic.required' => 'عنوان نوشته الزامی است',
            'topic.min' => 'عنوان نوشته نمیتواند کمتر از سه کارکتر باشد',
            'topic.max' => 'عنوان نوشته نمیتواند بیشتر از 255 کارکتر باشد',
            'body.required' => 'توضیح کوتاه نوشته الزامی است',
            'parent_id.required' => 'توضیح نوشته الزامی است',
            'image.required' => 'تصویر نوشته الزامی است',
            'status.required' => 'وضعیت نوشته الزامی است',
        ]);
        if ($request->hasFile('image')) {
            $image = '';
            $destination = public_path() . config('cms-setting.url_blog_category_image');
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $image = config('cms-setting.url_blog_category_image') . '/' . $filename;
            BlogCategory::create([

                'topic' => $request->get('topic'),
                'tags' => $request->get('tags'),
                'parent_id' => $request->get('parent_id'),
                'body' => $request->get('body'),
                'status' => $request->get('status'),
                'image' => $image,
                'thumbnail' => $image,
            ]);
            return redirect(route('dashboard.blogCategory.index'))->with('message', 'دسته بندی شما با موفقیت ثبت شد');
        } else
            return redirect(route('dashboard.blogCategory.index'))->with('error', 'مشکلی در ثبت دسته بندی وجود دارد');
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
        $allBlogCategory = BlogCategory::all();
        $blogcategory = BlogCategory::findOrFail($id);
        return view('adminpanel.blogCategory.edit' , compact(['blogcategory' , 'allBlogCategory']));
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
            'topic' => ['required', 'min:3', 'max:255'],
            'body' => ['required'],
        ],[
            'topic.required' => 'عنوان نوشته الزامی است',
            'topic.min' => 'عنوان نوشته نمیتواند کمتر از سه کارکتر باشد',
            'topic.max' => 'عنوان نوشته نمیتواند بیشتر از 255 کارکتر باشد',
            'body.required' => 'توضیح کوتاه نوشته الزامی است',
        ]);

        $blogcategory = BlogCategory::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = '';
            $destination = public_path() . config('cms-setting.url_blog_category_image');
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $image = config('cms-setting.url_blog_category_image') . '/' . $filename;
        } else {
            $image = $blogcategory->image;
            $thumbnail = $image;
        }
        $blogcategory->update([

            'topic' => $request->get('topic'),
            'tags' => $request->get('tags'),
            'parent_id' => $request->get('parent_id'),
            'body' => $request->get('body'),
            'status' => $request->get('status'),
            'image' => $image,
            'thumbnail' => $image,
        ]);
        $blogcategory->save();
        return redirect(route('dashboard.blogCategory.index'))->with('message', 'دسته بندی نوشته ' . $blogcategory->topic . ' با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogcategory = BlogCategory::findOrFail($id);
        if (!$blogcategory){
            return redirect()->route('dashboard.blogCategory.index')->with('error' , ' دسته بندی نوشته مورد نظر در سایت موجود نیست');
        }else{
            $blogcategory->delete();
            return redirect(route('dashboard.blogCategory.index'))->with('warning', 'دسته بندی نوشته ' . $blogcategory->topic . ' با موفقیت حذف شد');
        }
    }
}
