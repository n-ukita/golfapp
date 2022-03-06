<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Link;
use App\Course;

class LinksController extends Controller
{
    //
    public function add()
    {
        return view('admin.golf.links');
    }

    public function create(Request $request)
    {

        // Varidationを行う
        $this->validate($request, Link::$rules);

        $links = new Link;
        $form = $request->all();

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);

        // データベースに保存する
        $links->fill($form);
        $links->save();

        return redirect('admin/golf/links');
    }

    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = Link::where('golfcourse', 'like', "%$cond_title%")->get();
        } else {
            // それ以外はすべてのゴルフ場を取得する
            $posts = Link::all();
        }
        return view('admin.golf.linksindex', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
}
