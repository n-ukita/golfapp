@extends('layouts.admin')
@section('title', 'ゴルフ場登録')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
            <h2>ゴルフ場登録</h2>
            <form action="{{ action('Admin\LinksController@create') }}" method="post" enctype="multipart/form-data">

                @if (count($errors) > 0)
                     <ul>
                         @foreach($errors->all() as $e)
                              <li>{{ $e }}</li>
                         @endforeach     
                     </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2">ゴルフ場名</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="golfcourse" value="{{ old('golfcourse') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">都道府県</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="prefecture" value="{{ old('prefecture') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">住所</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">ＴＥＬ</label>
                    <div class="col-md-10">
                        <input type="tel" class="form-control" name="telephone" value="{{ old('telephone') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">ホームページ</label>
                    <div class="col-md-10">
                        <input type="url" class="form-control" name="homepage" value="{{ old('homepage') }}">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
            </form>
        </div>
      </div>
    </div>
@endsection    
