<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class confsModel extends Model
{
    protected $table = 'confs';
    protected $fillable = ['content','level','edit_admin','user_id'];

    public $timestamps = true;
}
