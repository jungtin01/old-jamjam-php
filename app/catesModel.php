<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catesModel extends Model
{
    protected $table = "cates";
    protected $fillable = ['name','tbn','description'];
    
    public $timestamps = true;
}
