<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catesModel;

class catesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $this->validate($request ,[
            'name' => 'required|unique:cates,name'
        ],[
            'name.required' => 'Cần phải điền cate vào !',
            'name.unique' => 'Cate đã có người dùng !'
        ]);
        $cates = new catesModel;
        $cates->name = $request->name;
        $cates->tbn = $request->name;
        $cates->description = $request->name;
        $cates->save();

        return response()->json($cates);
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
        $this->validate($request ,[
            'name' => 'required|unique:cates,name'
        ],[
            'name.required' => 'Cần phải điền cate vào !',
            'name.unique' => 'Cate đã có người dùng !'
        ]);
        $cates = catesModel::find($id);
        $cates->name = $request->name;
        $cates->tbn = $request->name;
        $cates->description = $request->name;
        $cates->update();

        return response()->json($cates);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cates = catesModel::find($id);
        $cates->delete();

        return response()->json($cates);
    }
}
