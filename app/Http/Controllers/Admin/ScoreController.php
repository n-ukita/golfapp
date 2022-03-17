<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

use App\Link;

use App\Course;

class ScoreController extends Controller
{
    //
    public function add()
    {
        $users=User::all();
        $links=Link::all();
        $courses=Course::all();
        return view('admin.golf.score',['users'=>$users,'links'=>$links,'courses'=>$courses]);
    }

    public function create()
    {
        return redirect('admin.golf.scorecreate');
    }
}
