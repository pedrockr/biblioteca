<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogPost extends Model
{


    protected $fillable = [
    	    'blogPost_titulo',
            'blogPost_msg',
            'blogPost_autor',
            'blogPost_data'
    ];


}
