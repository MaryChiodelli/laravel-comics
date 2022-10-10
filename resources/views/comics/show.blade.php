@extends('layouts.app')

@section('metaTitle', $comic['title'])

@section('content')

  <div class="hero hero-comic">
    <div class="container-sm">
      <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </div>
  </div>

  <section class="comic-intro">
    <div class="container-sm">
      <div class="row">
        <div class="col">
          <h1>{{ $comic['title'] }}</h1>
          <div>
            <div>U.S. Price: {{ $comic['price'] }}</div>
            <div>available</div>
            <a class="btn">Check Availability +</a>
          </div>
          <p>{{ $comic['description'] }}</p>
        </div>
        <div class="col">
          <div>advertisement</div>
          <img src="{{ asset('img/adv.jpg') }}" alt="comic adv">
        </div>
      </div>
    </div>
  </section>

  <section class="comic-data">

  </section>

  <div class="inline-list">

  </div>

@endsection