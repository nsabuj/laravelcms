@extends('layouts.page')


@section('content')
    {{Session::get('message')}}
    <form action="/update_article" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="article_id" value="{{$article->id}}">
        <div class="form-group">
            <label for="article_title">Article Title:</label>
            <input type="text" name="article_title" class="form-control" id="article_title" value="{{$article->title}}">
        </div>
        <div class="form-group">
            <label for="article_description">Article Description:</label>
            <textarea name="article_description" class="form-control" id="article_description">{{$article->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-default">Update</button>
    </form>

@endsection