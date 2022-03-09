<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

use App\Link;

class ScoreController extends Controller
{
    //
    public function add()
    {
        $users=User::all();
        $links=Link::all();
        return view('admin.golf.score',['users'=>$users],['links'=>$links]);
    }

    public function create()
    {
        return redirect('admin.golf.score');
    }
}
