<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Course;

use App\Link;

class GolfController extends Controller
{
    public function add()
    {
        $links=Link::all(); 
        return view('admin.golf.create',['links'=>$links]);
    }

    public function create(Request $request)
    {
        //Varidationを行う
        $this->validate($request, Course::$rules);

        $course = new Course;
        $form = $request->all();

        //フォームから送信されてきた_tokenを削除する
        unset($form['_token']);

        //データベースに保存する
        $course->fill($form);
        $course->save();

        return redirect('admin/golf/create');
    }

    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = Link::where('golfcourse', 'like', "%$cond_title%")->get();
        } else {
            // それ以外はすべてのゴルフ場名を取得する
            $posts = Link::all();
        }

        

        return view('admin.golf.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
}
