@extends('layouts.app')

@section('title')
    Movies
@endsection

@section('main-content')
    @foreach ($movies as $movie)
        @include('components.card', [
            'movie' => $movie,
        ])
    @endforeach
@endsection