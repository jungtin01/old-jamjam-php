<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postsModel extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title','tbn','description','content','level','edit_admin','cate_id','user_id'];

    public $timestamps = true;
    public function cate(){
    	return $this->belongsTo('App\catesModel');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }

}
