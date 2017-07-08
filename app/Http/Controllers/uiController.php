<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postsModel;
use App\confsModel;

class uiController extends Controller
{
	public function index(){
		$carous = postsModel::where('level',1)->orderBy('id','DESC')->limit(3)->get();
		$posts = postsModel::where('level',1)->orderBy('id','DESC')->get();
        $confs = confsModel::where('level',1)->orderBy('id','DESC')->get();
    	return view('ui.layouts.index',compact('posts','carous','confs'));
    }

    public function post($id){
        $post = postsModel::find($id);
    	return view('ui.layouts.post',compact('post'));
    }
    public function add(){
    	return view('ui.layouts.add');
    }
}
