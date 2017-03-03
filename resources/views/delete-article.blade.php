@extends('layouts.page')



@section('content')
<form method="post" action="/delete_article">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  @foreach($articles as $article)

    <input type="checkbox" name="article_id[]" value="{{$article->id}}">{{$article->title}}<br>


  @endforeach


  <button type="submit" class="btn btn-default">Delete</button>
</form>
@endsection