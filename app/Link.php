<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    // Validationを設定する
    protected $guarded = array('id');

    public static $rules = array(
        'golfcourse' => 'required',
        'prefecture' => 'required',
        'address' => 'required',
        'telephone' => 'required',
    );

    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
