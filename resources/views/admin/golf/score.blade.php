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
                             <select name="user_id" id="select1">
                                 <option value="user_name">名前を選んでください</option>
                                 @foreach ( $users as $user )
                                   <option value="{{ $user->id }}"
                                       @if (old( 'user_id' ) == $user->id) "selected"
                                       @endif>
                                       {{ $user->name }}
                                   </option>
                                 @endforeach  
                             </select>
                         </div>
                     </div> 
                     <div class="form-group row">
                         <label class="col-md-2" for="play_date">プレー日</label>
                         <div class="col-md-6">
                            <input type="text" class="form-control" name="play_date" value="{{ old('play_date') }}">
                         </div>
                     </div> 
                     <div class="form-group row">
                     <label class="col-md-2" for="link_id">ゴルフ場名</label>
                      <div class="col-md-10">
                          <select name="link_id" id="select4">
                          <option value="golfcourse_select">ゴルフ場を選択してください</option>
                          @foreach( $links as $link)
                              <option value="{{ $link->id }}" 
                                @if(old( 'link_id' ) == $link->id) "selected"
                                @endif>
                                {{ $link->golfcourse }}
                              </option>
                          @endforeach
                          </select>
                      </div>
                     </div>   
                 </form>
             </div>
         </div>
     </div>
@endsection     