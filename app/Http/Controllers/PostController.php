<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->pic->getClientOriginalExtension();

        $simpan = new Post;
        $simpan -> title = $request -> title;
        $simpan -> body = $request -> body;
        $simpan->sort = $request->sort;
        $simpan->pic = $imageName;
        
        $simpan -> save();
        request()->pic->move(public_path('assets/images'), $imageName);
        return redirect('post');
           
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
       $cariposts=Post::find($id);
       return view('post.edit',compact('cariposts'));
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
        //Post::find($id)->update($request->all());
        request()->validate([
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->pic->getClientOriginalExtension();

        $simpan = Post::find($id);
        $simpan -> title = $request -> title;
        $simpan -> body = $request -> body;
        $simpan->sort = $request->sort;
        $simpan->pic = $imageName;
        
        $simpan -> save();
        request()->pic->move(public_path('assets/images'), $imageName);
        return redirect('post');
        //return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return back();
    }
}
