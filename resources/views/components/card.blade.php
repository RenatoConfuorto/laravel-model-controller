<div class="card">
  <div class="head">
    <h2>{{ $movie->title}}</h2>
    <p>Titolo originale: <span class="bold">{{ $movie->original_title }}</span></p>
  </div>
  <div class="info">
    <h3>Nazionalità: <span>{{ ucfirst($movie->nationality) }}</span></h3>
    <p>Data di rilascio: <span>{{ $movie->date }}</span></p>
    <p>Voto: <span>{{ $movie->vote }}</span></p>
  </div>
</div>