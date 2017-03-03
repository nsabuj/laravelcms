@extends('layouts.page');


@section('content')
{{Session::get('message')}}
<form action="article/add_article" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="article_title">Article Title:</label>
        <input type="text" name="article_title" class="form-control" id="article_title">
    </div>
    <div class="form-group">
        <label for="article_description">Article Description:</label>
        <textarea name="article_description" class="form-control" id="article_description"></textarea>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>


@endsection