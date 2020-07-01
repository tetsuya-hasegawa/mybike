<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactHistory extends Model
{
    //
      protected $guarded = array('id');

    public static $rules = array(
        'contact_id' => 'required',
        'edited_at' => 'required',
    );
}
