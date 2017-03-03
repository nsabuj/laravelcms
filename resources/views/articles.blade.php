@extends('layouts.page');


@section('content')
   <h2>Articles</h2>

   @foreach($articles as $aricle)

      <div class="row">
         <div class="col-lg-12">
         <h4><a href="/article/{{$aricle->id}}">{{$aricle->title}}</a></h4>
         <p>{{$aricle->description}}</p>
         </div>
      </div>

   @endforeach
@endsection