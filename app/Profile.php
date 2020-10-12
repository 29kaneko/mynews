<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{   
    protected $guarded = array('id');
    public static $rules = array(
        '名前' => 'required',
        '性別' => 'required',
        '趣味' => 'required',
        '自己紹介' => 'required',
        
    );
}
