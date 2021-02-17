@extends('layouts.app')

@section('title')
    About
@endsection

@section('content')
    <h1>Articoli</h1>
    @foreach($posts as $post)
        <h2>{{ $post["title"] }}</h2>
        <p>{{ $post["body"] }}</p>
    @endforeach
@endsection
