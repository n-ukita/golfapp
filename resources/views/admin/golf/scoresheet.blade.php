@extends('layouts.admin')
@section('title', 'スコアシート')

@section('content')
<div class="container">
       <div class="row">
           <h2>スコアシート</h2>
       </div>
       <div class="row">
       <a href="{{ action('Admin\ScoreController@index') }}" role="button" class="btn btn-primary">スコア一覧へ</a>
       </div>
       <div class="row">

           <div class="scoresheet col-md-12 mx-auto">
               <div class="row">
                   <table class="table table-dark">
                       <therd>
                           <tr>
                               <th ></th>
                           </tr>

                       </therd>


                   </table>

               </div>

           </div>
        </div>

</div>




@endsection
