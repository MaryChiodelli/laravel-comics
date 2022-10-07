@extends('layouts.app')

@section('metaTitle', 'Comics')

@section('content')
  @forelse($comics as $comic)
    <p>{{ $comic['title'] }}</p>
  @empty
    <p>No comics available</p>
  @endforelse
@endsection