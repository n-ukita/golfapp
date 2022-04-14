@extends('layouts.admin')
@section('title', 'スコアシート')

@section('content')
<div class="container">
       <div class="row">
           <h2>スコアシート</h2>
       </div>
       <div class="row">
          <div class="col-md-4">
          <a href="{{ action('Admin\ScoreController@index') }}" role="button" class="btn btn-primary">スコア一覧へ</a>
          </div>
       </div> 

       <div class="row">
           <div class="scoresheet col-md-10 mx-auto">
               <div class="row">
                   <table class="table table-dark">
                       <therd>
                           <tr align="center">
                               <th width=20%>{{ $scores[0]->play_date }}</th>
                               <th width=20%>{{$scores[0]->link->golfcourse }}</th>
                               <th width=20%></th>
                               <th width=20%></th>
                               <th width=20%>{{$scores[0]->link->prefecture }}</th>
                           </tr>
                           <tr align="center">
                               <td>コース</td>
                               <td>{{ $scores[0]->course->hole }} →　{{ $scores[1]->course->hole }}</td>
                            
                               <td colspan="3">スコア</td>
                           </tr>
                           <tr align="center">
                               <td>ホール</td>
                               <td>Par</td>
                               <td>点数</td>
                               <td>パット数</td>
                               <td>成績</td>
                           </tr>
                           <tr align="center">
                               <th>1</th>
                               <td>{{ $scores[0]->course->HP1 }}</td>
                               <td>{{ $scores[0]->c1 }}</td>
                               <td>{{ $scores[0]->putt1 }}</td>
                               <td>{{ record($scores[0]->c1 - $scores[0]->course->HP1) }}</td>
                           </tr>
                           <tr align="center">
                               <th>2</th>
                               <td>{{ $scores[0]->course->HP2 }}</td>
                               <td>{{ $scores[0]->c2 }}</td>
                               <td>{{ $scores[0]->putt2 }}</td>
                               <td>{{ record($scores[0]->c2 - $scores[0]->course->HP2) }}</td>
                           </tr>
                           <tr align="center">
                               <th>3</th>
                               <td>{{ $scores[0]->course->HP3 }}</td>
                               <td>{{ $scores[0]->c3 }}</td>
                               <td>{{ $scores[0]->putt3 }}</td>
                               <td>{{ record($scores[0]->c3 - $scores[0]->course->HP3) }}</td>
                           </tr>
                           <tr align="center">
                               <th>4</th>
                               <td>{{ $scores[0]->course->HP4 }}</td>
                               <td>{{ $scores[0]->c4 }}</td>
                               <td>{{ $scores[0]->putt4 }}</td>
                               <td>{{ record($scores[0]->c4 - $scores[0]->course->HP4) }}</td>
                           </tr>
                           <tr align="center">
                               <th>5</th>
                               <td>{{ $scores[0]->course->HP5 }}</td>
                               <td>{{ $scores[0]->c5 }}</td>
                               <td>{{ $scores[0]->putt5 }}</td>
                               <td>{{ record($scores[0]->c5 - $scores[0]->course->HP5) }}</td>
                           </tr>
                           <tr align="center">
                               <th>6</th>
                               <td>{{ $scores[0]->course->HP6 }}</td>
                               <td>{{ $scores[0]->c6 }}</td>
                               <td>{{ $scores[0]->putt6 }}</td>
                               <td>{{ record($scores[0]->c6 - $scores[0]->course->HP6) }}</td>
                           </tr>
                           <tr align="center">
                               <th>7</th>
                               <td>{{ $scores[0]->course->HP7 }}</td>
                               <td>{{ $scores[0]->c7 }}</td>
                               <td>{{ $scores[0]->putt7 }}</td>
                               <td>{{ record($scores[0]->c7 - $scores[0]->course->HP7) }}</td>
                           </tr>
                           <tr align="center">
                               <th>8</th>
                               <td>{{ $scores[0]->course->HP8 }}</td>
                               <td>{{ $scores[0]->c8 }}</td>
                               <td>{{ $scores[0]->putt8 }}</td>
                               <td>{{ record($scores[0]->c8 - $scores[0]->course->HP8) }}</td>
                           </tr>
                           <tr align="center">
                               <th>9</th>
                               <td>{{ $scores[0]->course->HP9 }}</td>
                               <td>{{ $scores[0]->c9 }}</td>
                               <td>{{ $scores[0]->putt9 }}</td>
                               <td>{{ record($scores[0]->c9 - $scores[0]->course->HP9) }}</td>
                           </tr>
                           <tr align="center">
                               <th>前半</th>
                               <td>{{ $scores[0]->course->HP1 + $scores[0]->course->HP2 + $scores[0]->course->HP3 + $scores[0]->course->HP4 + $scores[0]->course->HP5 + $scores[0]->course->HP6 + $scores[0]->course->HP7 + $scores[0]->course->HP8 + $scores[0]->course->HP9 }}</td>
                               <td>{{ $scores[0]->c1 + $scores[0]->c2 + $scores[0]->c3 + $scores[0]->c4 + $scores[0]->c5 + $scores[0]->c6 + $scores[0]->c7 + $scores[0]->c8 + $scores[0]->c9 }}</td>
                               <td>{{ $scores[0]->putt1 + $scores[0]->putt2 + $scores[0]->putt3 + $scores[0]->putt4 + $scores[0]->putt5 + $scores[0]->putt6 + $scores[0]->putt7 + $scores[0]->putt8 + $scores[0]->putt9 }}</td>
                           </tr>
                           <tr align="center">
                               <th>1</th>
                               <td>{{ $scores[1]->course->HP1 }}</td>
                               <td>{{ $scores[1]->c1 }}</td>
                               <td>{{ $scores[1]->putt1 }}</td>
                               <td>{{ record($scores[1]->c1 - $scores[1]->course->HP1) }}</td>
                           </tr>
                           <tr align="center">
                               <th>2</th>
                               <td>{{ $scores[1]->course->HP2 }}</td>
                               <td>{{ $scores[1]->c2 }}</td>
                               <td>{{ $scores[1]->putt2 }}</td>
                               <td>{{ record($scores[1]->c2 - $scores[1]->course->HP2) }}</td>
                           </tr>
                           <tr align="center">
                               <th>3</th>
                               <td>{{ $scores[1]->course->HP3 }}</td>
                               <td>{{ $scores[1]->c3 }}</td>
                               <td>{{ $scores[1]->putt3 }}</td>
                               <td>{{ record($scores[1]->c3 - $scores[1]->course->HP3) }}</td>
                           </tr>
                           <tr align="center">
                               <th>4</th>
                               <td>{{ $scores[1]->course->HP4 }}</td>
                               <td>{{ $scores[1]->c4 }}</td>
                               <td>{{ $scores[1]->putt4 }}</td>
                               <td>{{ record($scores[1]->c4 - $scores[1]->course->HP4) }}</td>
                           </tr>
                           <tr align="center">
                               <th>5</th>
                               <td>{{ $scores[1]->course->HP5 }}</td>
                               <td>{{ $scores[1]->c5 }}</td>
                               <td>{{ $scores[1]->putt5 }}</td>
                               <td>{{ record($scores[1]->c5 - $scores[1]->course->HP5) }}</td>
                           </tr>
                           <tr align="center">
                               <th>6</th>
                               <td>{{ $scores[1]->course->HP6 }}</td>
                               <td>{{ $scores[1]->c6 }}</td>
                               <td>{{ $scores[1]->putt6 }}</td>
                               <td>{{ record($scores[1]->c6 - $scores[1]->course->HP6) }}</td>
                           </tr>
                           <tr align="center">
                               <th>7</th>
                               <td>{{ $scores[1]->course->HP7 }}</td>
                               <td>{{ $scores[1]->c7 }}</td>
                               <td>{{ $scores[1]->putt7 }}</td>
                               <td>{{ record($scores[1]->c7 - $scores[1]->course->HP7) }}</td>
                           </tr>
                           <tr align="center">
                               <th>8</th>
                               <td>{{ $scores[1]->course->HP8 }}</td>
                               <td>{{ $scores[1]->c8 }}</td>
                               <td>{{ $scores[1]->putt8 }}</td>
                               <td>{{ record($scores[1]->c8 - $scores[1]->course->HP8) }}</td>
                           </tr>
                           <tr align="center">
                               <th>9</th>
                               <td>{{ $scores[1]->course->HP9 }}</td>
                               <td>{{ $scores[1]->c9 }}</td>
                               <td>{{ $scores[1]->putt9 }}</td>
                               <td>{{ record($scores[1]->c9 - $scores[1]->course->HP9) }}</td>
                           </tr>
                           <tr align="center">
                               <th>後半</th>
                               <td>{{ $scores[1]->course->HP1 + $scores[1]->course->HP2 + $scores[1]->course->HP3 + $scores[1]->course->HP4 + $scores[1]->course->HP5 + $scores[1]->course->HP6 + $scores[1]->course->HP7 + $scores[1]->course->HP8 + $scores[1]->course->HP9 }}</td>
                               <td>{{ $scores[1]->c1 + $scores[1]->c2 + $scores[1]->c3 + $scores[1]->c4 + $scores[1]->c5 + $scores[1]->c6 + $scores[1]->c7 + $scores[1]->c8 + $scores[1]->c9 }}</td>
                               <td>{{ $scores[1]->putt1 + $scores[1]->putt2 + $scores[1]->putt3 + $scores[1]->putt4 + $scores[1]->putt5 + $scores[1]->putt6 + $scores[1]->putt7 + $scores[1]->putt8 + $scores[1]->putt9 }}</td>
                           </tr>
                           <tr align="center">
                               <th>TOTAL</th>
                               <td>{{ $scores[0]->course->HP1 + $scores[0]->course->HP2 + $scores[0]->course->HP3 + $scores[0]->course->HP4 + $scores[0]->course->HP5 + $scores[0]->course->HP6 + $scores[0]->course->HP7 + $scores[0]->course->HP8 + $scores[0]->course->HP9 + $scores[1]->course->HP1 + $scores[1]->course->HP2 + $scores[1]->course->HP3 + $scores[1]->course->HP4 + $scores[1]->course->HP5 + $scores[1]->course->HP6 + $scores[1]->course->HP7 + $scores[1]->course->HP8 + $scores[1]->course->HP9 }}</td>
                               <td>{{ $scores[0]->c1 + $scores[0]->c2 + $scores[0]->c3 + $scores[0]->c4 + $scores[0]->c5 + $scores[0]->c6 + $scores[0]->c7 + $scores[0]->c8 + $scores[0]->c9 + $scores[1]->c1 + $scores[1]->c2 + $scores[1]->c3 + $scores[1]->c4 + $scores[1]->c5 + $scores[1]->c6 + $scores[1]->c7 + $scores[1]->c8 + $scores[1]->c9 }}</td>
                               <td>{{ $scores[0]->putt1 + $scores[0]->putt2 + $scores[0]->putt3 + $scores[0]->putt4 + $scores[0]->putt5 + $scores[0]->putt6 + $scores[0]->putt7 + $scores[0]->putt8 + $scores[0]->putt9 + $scores[1]->putt1 + $scores[1]->putt2 + $scores[1]->putt3 + $scores[1]->putt4 + $scores[1]->putt5 + $scores[1]->putt6 + $scores[1]->putt7 + $scores[1]->putt8 + $scores[1]->putt9 }}</td>


                           </tr>

                       </therd>


                   </table>

               </div>

           </div>
        </div>

</div>




@endsection
