@extends('layouts.admin')
@section('title', 'TOP')

@section('content')
     <div class="container">
         <div class="row">
            <div class="col-md-12 mx-auto">
                <h2>トップページ</h2>
            </div>
         </div>   
            <div class="row">
                <div class="toppage col-md-6 mx-auto">
                    <div class="row">
                        <table class="table table-dark">
                            <tbody>
                              <tr>
                                 <th width="40%">ベストスコア</th>
                                 <th width="20%">{{ Auth::user()->getBestScore()->getSumC() }}</th>
                              </tr>
                              <tr>
                                  <th>コース名</th>
                                  <th>{{ Auth::user()->getBestScore()->link->golfcourse }}</th>
                              </tr>
                              <tr>
                                  <th>日付</th>
                                  <th>{{ Auth::user()->getBestScore()->play_date }}</th>
                              </tr>


                                

                                </tbody>
                        </table>


                    </div>


                </div>

            </div>











         <div class="form-group row">
                <a href="{{ action('Admin\GolfController@index') }}" role="button" class="btn btn-primary">ゴルフ場一覧</a>
         </div>  
         <div class="form-group row">
                <a href="{{ action('Admin\ScoreController@index') }}" role="button" class="btn btn-primary">スコア一覧</a>
        </div>  



     </div>


@endsection