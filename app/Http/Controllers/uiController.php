<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uiController extends Controller
{
	public function index(){
    	return view('ui.layouts.index');
    }

    public function post(){
    	return view('ui.layouts.post');
    }
    public function add(){
    	return view('ui.layouts.add');
    }
}
