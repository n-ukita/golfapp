@extends('layouts.admin')
@section('golfcourse', '登録済みゴルフ場の一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>ゴルフ場一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\GolfController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\GolfController@index') }}" method="get">
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
            <div class="list-course col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="3%">ID</th>
                                <th width="25%">ゴルフ場名</th>
                                <th width="8%">ホール名</th>
                                <th width="5%">1番ﾎｰﾙ</th>
                                <th width="5%">2番ﾎｰﾙ</th>
                                <th width="5%">3番ﾎｰﾙ</th>
                                <th width="5%">4番ﾎｰﾙ</th>
                                <th width="5%">5番ﾎｰﾙ</th>
                                <th width="5%">6番ﾎｰﾙ</th>
                                <th width="5%">7番ﾎｰﾙ</th>
                                <th width="5%">8番ﾎｰﾙ</th>
                                <th width="5%">9番ﾎｰﾙ</th>
                            </tr>
                        </thead>
                    <tbody>
                        @php
                        $check = "";
                        @endphp
                        @foreach($posts as $value)
                        <tr>
                                 <th>{{ $value->id }}</th>
                                 <td>{{ str_limit($value->golfcourse, 100) }}</td>
                                 @if(isset($value->courses))
                            @foreach($value->courses as $course)
                            @if($check == $value->id)
                                 <th></th><td></td>
                                 @endif        
                                 <td>{{ str_limit($course->hole, 20) }}</td>
                                 <td>{{ str_limit($course->HP1, 4) }}</td>
                                 <td>{{ str_limit($course->HP2, 4) }}</td>
                                 <td>{{ str_limit($course->HP3, 4) }}</td>
                                 <td>{{ str_limit($course->HP4, 4) }}</td>
                                 <td>{{ str_limit($course->HP5, 4) }}</td>
                                 <td>{{ str_limit($course->HP6, 4) }}</td>
                                 <td>{{ str_limit($course->HP7, 4) }}</td>
                                 <td>{{ str_limit($course->HP8, 4) }}</td>
                                 <td>{{ str_limit($course->HP9, 4) }}</td>
                                 </tr><tr>
                            @php
                              $check = $value->id
                            @endphp
                            @endforeach
                            @endif
                            </tr>
                        @endforeach    

                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection   