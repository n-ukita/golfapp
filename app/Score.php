<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'user_id' => 'required',
        'play_date' => 'required',
        'course_id' => 'required',
    );
         public function users()
    {
        return $this->hasMany('App\users');
    }
         public function courses()
    {
        return $this->hasMany('App\courses');
    }     
}
