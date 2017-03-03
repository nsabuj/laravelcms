@extends('layouts.page')


@section('content')
<div class="row">

    <div class="col-lg-12">
        <ul>
        @foreach($articles as $article)
       <li><p>{{$article->title}}</p><a href="/edit_article/{{$article->id}}">Edit</a> </li>

        @endforeach
        </ul>
    </div>

</div>

@endsection