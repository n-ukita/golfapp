<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'user_id' => 'required',
        'play_date' => 'required',
        'link_id' => 'required',
    );

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function course()
    {
        return $this->belongsTo('App\Course');
    } 

    public function link()
    {
        return $this->belongsTo('App\Link');
    } 

    public function  getSumC()
    {
        $scores = $this->where('play_date',$this->play_date)->where('link_id',$this->link_id)->get();
        $total = 0;
        foreach($scores as $score)
        { 
            $total += $score->c1 + $score->c2 + $score->c3 + $score->c4 + $score->c5 + $score->c6 + $score->c7 + $score->c8 + $score->c9;
        }
        return $total;

    }
}
