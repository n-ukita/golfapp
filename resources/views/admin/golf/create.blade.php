{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'ゴルフ管理アプリ'を埋め込む --}}
@section('title', 'ゴルフ管理アプリ')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ゴルフ管理アプリ</h2>
                <form action="{{ action('Admin\GolfController@create') }}" method="post" enctype="multpart/form-data">

                  @if (count($errors) > 0)
                      <ul>
                          @foreach($errors->all() as $e)
                              <li>{{ $e }}</li>
                          @endforeach    
                      </ul>
                  @endif
                  <div class="form-group row">
                      <label class="col-md-2" for="link_id">ゴルフ場名</label>
                      <div class="col-md-10">
                          <select name="link_id" id="select4">
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
                      <label class="col-md-2" for="hole">ホール名</label>
                      <div class="col-md-3">
                          <input type="text" class="form-control" name="hole" value="{{ old('hole') }}">
                      </div>
                  </div>    
                  <div class="form-group row">
                      <label class="col-md-2" for="HP1">1番ホール</label>
                      <div class="col-md-2">
                          <input type="text" class="form-control" name="HP1" value="{{ old('HP1') }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-2" for="HP2">2番ホール</label>
                      <div class="col-md-2">
                          <input type="text" class="form-control" name="HP2" value="{{ old('HP2') }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-2" for="HP3">3番ホール</label>
                      <div class="col-md-2">
                          <input type="text" class="form-control" name="HP3" value="{{ old('HP3') }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-2" for="HP4">4番ホール</label>
                      <div class="col-md-2">
                          <input type="text" class="form-control" name="HP4" value="{{ old('HP4') }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-2" for="HP5">5番ホール</label>
                      <div class="col-md-2">
                          <input type="text" class="form-control" name="HP5" value="{{ old('HP5') }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-2" for="HP6">6番ホール</label>
                      <div class="col-md-2">
                          <input type="text" class="form-control" name="HP6" value="{{ old('HP6') }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-2" for="HP7">7番ホール</label>
                      <div class="col-md-2">
                          <input type="text" class="form-control" name="HP7" value="{{ old('HP7') }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-2" for="HP8">8番ホール</label>
                      <div class="col-md-2">
                          <input type="text" class="form-control" name="HP8" value="{{ old('HP8') }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-2" for="HP9">9番ホール</label>
                      <div class="col-md-2">
                          <input type="text" class="form-control" name="HP9" value="{{ old('HP9') }}">
                      </div>
                  </div>
                  {{ csrf_field() }}
                  <input type="submit" class="btn btn-primary" value="更新">
                </form>  
            </div>
        </div>
    </div>
@endsection