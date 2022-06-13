@extends('layouts.principal')

@section('main')

<section >
  <h1>Movies</h1>
  <div>
    @foreach ($data as $movie)
      <div>
        <h2>{{ $movie->title }}</h2>
        <h2>{{ $movie->original_title }}</h2>
        <h4>{{ $movie->nationality }}</h4>
        <h4>{{ $movie->date }}</h4>
        <h1>{{ $movie->vote }}</h1>
      </div>
    @endforeach
  </div>
</section>

@endsection