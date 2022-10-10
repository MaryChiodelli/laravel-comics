@extends('layouts.app')

@section('metaTitle', $comic['title'])

@section('content')
    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    <h1>{{ $comic['title'] }}</h1>
    <p>{{ $comic['description'] }}</p>
@endsection