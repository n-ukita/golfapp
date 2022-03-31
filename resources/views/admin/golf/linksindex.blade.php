@extends('layouts.admin')
@section('title', '登録済みゴルフ場一覧')

@section('content')
     <div class="container">
         <div class="row">
             <h2>ゴルフ場一覧</h2>
         </div>
         <div class="row">
             <div class="col-md-4">
                 <a href="{{ action('Admin\LinksController@add') }}" role="button" class="btn btn-primary">新規作成</a>
             </div>
             <div class="col-md-8">
                 <form action="{{ action('Admin\LinksController@index') }}" method="get">
                     <div class="form-group row">
                         <label class="col-md-2">ゴルフ場名</label>
                         <div class="col-md-8">
                             <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                         </div>
                         <div class="col-md-2">
                             {{ csrf_field() }}
                             <input type="submit" class="btn btn-primary" value="検索">
                         </div>
                     </div>
                 </form>
             </div>
         </div>
         <div class="row">
             <div class="list-links col-md-12 mx-auto">
                 <div class="row">
                     <table class="table table-dark">
                         <thead>
                             <tr>
                                 <th width="4%">ID</th>
                                 <th width="20%">ゴルフ場名</th>
                                 <th width="8%">都道府県</th>
                                 <th width="25%">住所</th>
                                 <th width="10%">ＴＥＬ</th>
                                 <th width="10%">ホームページ</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach($posts as $links)
                                 <tr>
                                     <th>{{ $links->id }}</th>
                                     <td>{{ \Str::limit($links->golfcourse, 100) }}</td>
                                     <td>{{ \Str::limit($links->prefecture, 10)}}</td>
                                     <td>{{ \Str::limit($links->address, 100) }}</td>
                                     <td>{{ \Str::limit($links->telephone, 40) }}</td>
                                     <td>{{ \Str::limit($links->homepage, 20) }}</td>
                                 </tr>
                             @endforeach    
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
         <div class="form-group row">
                <a href="{{ action('Admin\GolfController@index') }}" role="button" class="btn btn-primary">ゴルフ場一覧</a>
         </div>  
         <div class="form-group row">
                <a href="{{ action('Admin\ScoreController@add') }}" role="button" class="btn btn-primary">スコア登録</a>
         </div>  

     </div>
@endsection     