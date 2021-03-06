<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function scores()
    {
        return $this->hasMany('App\Score');
    }
    public function getBestScore(){
        $scores = $this->scores;
        $best = $scores[0];
        foreach($scores as $score){
            if($score->getSumC() < $best->getSumC()){
                $best = $score;
            }
        }
        return $best;
    }

    public function getAverageScore(){
        $total_score = 0;
        foreach($this->scores as $score){
            $total_score += $score->getSumC();
        }
        return $total_score / count($this->scores);
    }

    public function getAveragePutt(){
        $total_P_score = 0;
        foreach($this->scores as $score){
            $total_P_score += $score->getSumP();
        }
        return $total_P_score / count($this->scores);
    }


}
