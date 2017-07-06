<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catesModel;
use App\postsModel;

class postsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['only' => 'create' ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cates = catesModel::all();
        return view('ai.layouts.post',compact('cates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cates = catesModel::all();
        return view('ui.layouts.add',compact('cates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('tbn');
        $imgname = $img->getClientOriginalName();
        $upload = 'public/upload/imgsUpload';
        $img->move($upload,$imgname);

        //Upload file img
        $posts = new postsModel;
        $posts->title = $request->txtTitle;
        $posts->tbn = $imgname;
        $posts->description = $request->txtDesc;
        $posts->content = $request->txtContent;
        $posts->level = 0;
        $posts->cate_id = $request->cate_id;
        $posts->user_id = $request->user_id;
        $posts->save();

        return back()->with('status','Post thành công');
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
