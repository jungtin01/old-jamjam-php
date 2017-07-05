<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\confsModel;

class confsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $confs = confsModel::orderBy('id','DESC')->get();
        return view('ai.layouts.conf',compact('confs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ui.layouts.conf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $confs = new confsModel;
        $confs->content = $request->content;
        $confs->level = 0;
        $confs->user_id = $request->user_id;
        $confs->save();

        return response()->json($confs);
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
        $confs = confsModel::find($id);
        $confs->level = $request->level;
        $confs->user_id = $request->user_id;
        $confs->update();

        return response()->json($confs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $confs = confsModel::find($id);
        $confs->delete();

        return response()->json($confs);
    }
}
