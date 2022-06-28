<div class="card">
  <div class="head">
    <h2>{{ $movie->title}}</h2>
    <h4>{{ $movie->original_title }}</h4>
  </div>
  <div class="info">
    <h6>{{ $movie->nationality }}</h6>
    <p>{{ $movie->date }}</p>
    <p> {{ $movie->vote }}</p>
  </div>
</div>