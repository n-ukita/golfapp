<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //以下を追記
    protected $guarded = array('id');

    public static $rules = array(
        'link_id' => 'required',
        'hole' => 'required',
        'HP1' => 'required',
        'HP2' => 'required',
        'HP3' => 'required',
        'HP4' => 'required',
        'HP5' => 'required',
        'HP6' => 'required',
        'HP7' => 'required',
        'HP8' => 'required',
        'HP9' => 'required',

    );

    public function links()
    {
        return $this->belongsTo('App\Link');
    }
    public function scores()
    {
        return $this->belongsTo('App\Score');
    }
}
