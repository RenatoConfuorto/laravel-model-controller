@extends('layouts.app')

@section('title')
    Movies
@endsection

@section('main-content')
    <div class="card-container">
        @foreach ($movies as $movie)
            @include('components.card', [
                'movie' => $movie,
            ])
        @endforeach

    </div>
@endsection
