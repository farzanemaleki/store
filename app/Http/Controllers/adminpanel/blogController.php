<?php

namespace App\Http\Controllers\adminpanel;

use App\Blog;
use App\BlogCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('adminpanel.blog.index' , compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allBlogCategory = BlogCategory::all();
        return view('adminpanel.blog.create' , compact('allBlogCategory'));
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
            'category' => ['required'],
            'body' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
            'status' => ['required'],
        ],
            [
                'topic.required' => 'عنوان نوشته الزامی است',
                'topic.min' => 'عنوان نوشته نمیتواند کمتر از سه کارکتر باشد',
                'topic.max' => 'عنوان نوشته نمیتواند بیشتر از 255 کارکتر باشد',
                'category.required' => 'دسته بندی نوشته الزامی است',
                'body.required' => 'توضیح کوتاه نوشته الزامی است',
                'description.required' => 'توضیح نوشته الزامی است',
                'image.required' => 'تصویر نوشته الزامی است',
                'status.required' => 'وضعیت نوشته الزامی است',

            ]);

        if ($request->hasFile('image')) {
            $image = '';
            $destination = public_path() . config('cms-setting.url_blog');
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $image = config('cms-setting.url_blog') . '/' . $filename;
            Blog::create([

                'topic' => $request->get('topic'),
                'category' => $request->get('category'),
                'body' => $request->get('body'),
                'author' => Auth::user()->id,
                'tags' => $request->get('tags'),
                'description' => $request->get('description'),
                'countView' => 0,
                'status' => $request->get('status'),
                'image' => $image,
            ]);
            return redirect(route('dashboard.blog.index'))->with('message', 'نوشته شما با موفقیت ثبت شد');
        } else
            return redirect(route('dashboard.blog.index'))->with('error', 'مشکلی در ثبت نوشته وجود دارد');
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
        $blog = Blog::findOrFail($id);
        return view('adminpanel/blog/edit', compact(['blog', 'allBlogCategory']));
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
            'topic' => ['required', 'min:3', 'max:255'],
            'category' => ['required'],
            'body' => ['required'],
            'description' => ['required'],
            'status' => ['required'],
        ],
            [
                'topic.required' => 'عنوان نوشته الزامی است',
                'topic.min' => 'عنوان نوشته نمیتواند کمتر از سه کارکتر باشد',
                'topic.max' => 'عنوان نوشته نمیتواند بیشتر از 255 کارکتر باشد',
                'category.required' => 'دسته بندی نوشته الزامی است',
                'body.required' => 'توضیح کوتاه نوشته الزامی است',
                'description.required' => 'توضیح نوشته الزامی است',
                'status.required' => 'وضعیت نوشته الزامی است',

            ]);
        $blog = Blog::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = '';
            $destination = public_path() . config('cms-setting.url_blog');
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $image = config('cms-setting.url_blog') . '/' . $filename;
        } else {
            $image = $blog->image;
        }
            $blog->update([

                'topic' => $request->get('topic'),
                'category' => $request->get('category'),
                'body' => $request->get('body'),
                'author' => Auth::user()->id,
                'tags' => $request->get('tags'),
                'description' => $request->get('description'),
                'countView' => 0,
                'status' => $request->get('status'),
                'image' => $image,
            ]);
        $blog->save();
        return redirect(route('dashboard.blog.index'))->with('message', 'نوشته ' . $blog->topic . ' با موفقیت ویرایش شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if(!$blog){
            return redirect()->route('dashboard.blog.index')->with('error' , ' نوشته مورد نظر در سایت موجود نیست');
        }else{
            $blog->delete();
            return redirect(route('dashboard.blog.index'))->with('warning', 'نوشته ' . $blog->topic . ' با موفقیت حذف شد');
        }
    }
    public function uploadImage()
    {
        $this->validate(request(), [
            'upload' => 'required'
        ]);
        $image = '';

        $imagePath = "/upload/blogs/images/2020/";
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
