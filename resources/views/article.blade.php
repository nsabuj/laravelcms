@extends('layouts.page')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <h2>{{$article->title}}</h2>
        <p>{{$article->description}}</p>
    </div>
</div>

@endsection