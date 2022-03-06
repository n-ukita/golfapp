@extends('layouts.admin')
@section('title', 'スコア登録')

@section('content')
     <div class="container">
         <div class="row">
             <div class="col-md-8 mx-auto">
                 <h2>スコア登録</h2>
                 <form action="{{ action('Admin\ScoreController@create') }}" method="post" enctype="multipart/form-data">

                     @if (count($errors) > 0)
                          <ul>
                              @foreach($errors->all() as $e)
                                  <li>{{ $e }}</li>
                              @endforeach    
                          </ul>
                     @endif
                     <div class="form-group row">
                         <label class="col-md-2" for="user_id">プレイヤー</label>
                         <div class="col-md-10">
                             <input type="text">
                         </div>
                     </div>     
                 </form>
             </div>
         </div>
     </div>