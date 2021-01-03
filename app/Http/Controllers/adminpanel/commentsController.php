<?php

namespace App\Http\Controllers\adminpanel;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class commentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allComments = Comment::with('user')->where('confirmed' , '=' , '1')->latest()->paginate(5);
        return view('adminpanel.comments.index' ,compact('allComments'));
    }

    public function UnConfirmedComments(){
        $allUnConfirmedComments = Comment::with('user')->where('confirmed' , '=' , '0')->latest()->paginate(5);
        return view('adminpanel.comments.unconfiremd' ,compact('allUnConfirmedComments'));
    }

    public function confirmedComments($id){
        $comment = Comment::findOrFail($id);
        $comment->update([
            'confirmed' => 1
        ]);
        $comment->save();
        $allUnConfirmedComments = Comment::with('user')->where('confirmed' , '=' , '0')->latest()->paginate(5);
        return redirect()->route('dashboard.comments.unconfirmed')->with('message' , 'کامنت مورد نظر شما تایید شد.');

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
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->route('dashboard.comments.unconfirmed')->with('warning' , 'کامنت مورد نظر شما با موفقیت حذف شد');
    }
    public function destroy2($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->route('dashboard.comments.index')->with('warning' , 'کامنت مورد نظر شما با موفقیت حذف شد');
    }

}
