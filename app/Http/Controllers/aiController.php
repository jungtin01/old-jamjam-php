<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aiController extends Controller
{
    public function admin(){
    	return view('ai.master');
    }

    public function user(){
    	return view('ai.layouts.user');
    }

    public function post(){
    	return view('ai.layouts.post');
    }
    
    public function conf(){
    	return view('ai.layouts.conf');
    }
    
    public function view(){
    	return view('ai.layouts.view');
    }
}
