<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    
     protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'required',
        'title' => 'required',
        'body' => 'required',
    );
}
