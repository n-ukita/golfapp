@extends('layouts.admin')
@section('title', 'スコア登録')

@section('content')
     <div class="container">
         <div class="row">
             <div class="col-md-12 mx-auto">
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
                         <label class="col-md-1" for="user_id">名前</label>
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
                         <label class="col-md-1" for="play_date">プレー日</label>
                         <div class="col-md-3">
                            <input type="date" class="form-control" name="play_date" value="{{ old('play_date') }}">
                         </div>
                     </div> 
                     <div class="form-group row">
                     <label class="col-md-1" for="link_id">ゴルフ場</label>
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
                     <div class="form-group row">
                         <label class="col-md-1" for="half">ハーフ</label>
                        <div class="col-md-2">
                            <select name="half" id="select1">
                                @foreach( $courses as $course)
                                  <option value="{{ $course->id }}"
                                      @if(old( 'half' ) == $course->id) "selected"
                                      @endif>
                                      {{ $course->hole }}
                                  </option>
                                @endforeach  
                            </select>
                        </div>
                     </div> 
                     <div class="form-group row">
                      <label class="col-md-1" for="1">1(10)</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="1" value="{{ old('1') }}">
                      </div>
                      <label class="col-md-1" for="putt1">パット数</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="putt1" value="{{ old('putt1') }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-1" for="2">2(11)</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="2" value="{{ old('2') }}">
                      </div>
                      <label class="col-md-1" for="putt2">パット数</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="putt2" value="{{ old('putt2') }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-1" for="3">3(12)</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="3" value="{{ old('3') }}">
                      </div>
                      <label class="col-md-1" for="putt3">パット数</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="putt3" value="{{ old('putt3') }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-1" for="4">4(13)</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="4" value="{{ old('4') }}">
                      </div>
                      <label class="col-md-1" for="putt4">パット数</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="putt4" value="{{ old('putt4') }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-1" for="5">5(14)</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="5" value="{{ old('5') }}">
                      </div>
                      <label class="col-md-1" for="putt5">パット数</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="putt5" value="{{ old('putt5') }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-1" for="6">6(15)</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="6" value="{{ old('6') }}">
                      </div>
                      <label class="col-md-1" for="putt6">パット数</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="putt6" value="{{ old('putt6') }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-1" for="7">7(16)</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="7" value="{{ old('7') }}">
                      </div>
                      <label class="col-md-1" for="putt7">パット数</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="putt7" value="{{ old('putt7') }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-1" for="8">8(17)</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="8" value="{{ old('8') }}">
                      </div>
                      <label class="col-md-1" for="putt8">パット数</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="putt8" value="{{ old('putt8') }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-1" for="9">9(18)</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="9" value="{{ old('9') }}">
                      </div>
                      <label class="col-md-1" for="putt9">パット数</label>
                      <div class="col-md-1">
                          <input type="text" class="form-control" name="putt9" value="{{ old('putt9') }}">
                      </div>
                  </div>
                  {{ csrf_field() }}
                  <div class="form-group row">
                  <input type="submit" class="btn btn-primary" value="更新">
                  </div>
                 </form>
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