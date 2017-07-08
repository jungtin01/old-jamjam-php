<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postsModel;

class uiController extends Controller
{
	public function index(){
		$carous = postsModel::orderBy('id','DESC')->limit(3)->get();
		$posts = postsModel::orderBy('id','DESC')->get();
    	return view('ui.layouts.index',compact('posts','carous'));
    }

    public function post($id){
        $post = postsModel::find($id);
    	return view('ui.layouts.post',compact('post'));
    }
    public function add(){
    	return view('ui.layouts.add');
    }
}
