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
    
    // 以下を追記
    // Newsモデルに関連付けを行う
    public function histories()
    {
      return $this->hasMany('App\ContactHistory');

    }
}
