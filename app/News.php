<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = array('id');
    //
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
        '名前' => 'required',
        '性別' => 'required',
        '趣味' => 'required',
        '自己紹介' => 'required',
        
    );
}