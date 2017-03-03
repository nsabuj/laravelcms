

@extends('layouts.page')

@section('title', 'Page Title custom')

@section('sidebar')
    @parent

    <p>This is appended to the  sidebar.</p>
@endsection


@section('content')
    <h2>About Page</h2>
    <p>
        We are a new organization .
    </p>
@endsection