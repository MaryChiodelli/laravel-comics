@extends('layouts.app')

@section('metaTitle', $comic['title'])

@section('content')
    @dump($comic)
@endsection