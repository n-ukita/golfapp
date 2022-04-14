@extends('layouts.admin')
@section('title', 'スコア一覧')

@section('content')
   <div class="container">
       <div class="row">
           <h2>スコア一覧</h2>
       </div>
        <div class="row">
              <div class="col-md-4">
               <a href="{{ action('Admin\ScoreController@add') }}" role="button" class="btn btn-primary">スコア登録</a>
              </div>  
              <div class="col-md-8">
                <form action="{{ action('Admin\ScoreController@index') }}" method="get">
                    <div class="form-group row">
                       <label class="col-md-2">ゴルフ場検索</label>
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
            <div class="list-score col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <therd>
                            <tr>
                                <th width=7%>プレー日</th>
                                <th width=15%>ゴルフ場名</th>
                                <th width=5%>トータルスコア</th>
                                <th width=5%>スコアシート</th>
                            </tr>
                        </thead> 
                        <tbody>
                          @foreach($posts->unique('play_date') as $scores)
                             <tr>
                               <th>{{ $scores->play_date }}</th>
                               <th>{{ $scores->link->golfcourse }}</th>
                               <th>{{ $scores->getSumC($scores->link_id,$scores->play_date)}}</th>
                               <th><a href="{{ action('Admin\ScoreController@sheet',['play_date'=> $scores->play_date,'link_id'=> $scores->link_id]) }}" role="button" class="btn btn-primary">スコアシート</a></th>
                          @endforeach  
                             </tr>  



                        </tbody>

                    </table>

                </div>

            </div>

        </div>




    </div>    



@endsection
