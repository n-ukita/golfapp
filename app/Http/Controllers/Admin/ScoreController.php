<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

use App\Link;

use App\Course;

use App\Score;

class ScoreController extends Controller
{
    //
    public function add()
    {
        $users=User::all();
        $links=Link::all();
        $courses=Course::all();
        $scores=Score::all();
        return view('admin.golf.score',['users'=>$users,'links'=>$links,'courses'=>$courses]);
    }

    public function create(Request $request)
    {
                //Varidationを行う
                $this->validate($request, Score::$rules);

                $score = new Score;
                $form = $request->all();
        
                //フォームから送信されてきた_tokenを削除する
                unset($form['_token']);
        
                //データベースに保存する
                $score->fill($form);
                $score->save();
        
        return redirect('admin/golf/score');
    }
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = Score::leftjoin('links','scores.link_id','=','links.id')
             ->where('golfcourse', 'like', "%$cond_title%")->get();
        } else {
            // それ以外はすべてのゴルフ場名を取得する
            $posts = Score::all();

        }
        
        return view('admin.golf.scoreindex', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function sheet(Request $request)
    {


        return view('admin.golf.scoresheet');
    }


}
