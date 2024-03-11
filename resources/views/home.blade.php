@extends('layouts.main')

@section('tilte', 'Movies')

@section('core-content')

<h1>Movies</h1>
<section id="movies">
    <div class="row">
        @forelse($movies as $movie)
        <div class="col-6">
            <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title">{{$movie->title}}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->nationality}}</h6>
                  <p class="card-text">Data: {{$movie->date}}  Voto: {{$movie->vote}}</p>
                </div>
              </div>
        </div>
        @empty 
        <div class="col-12">
            <h2>Non ci sono film</h2>
        </div>
        @endforelse
    </div>
</section>

@endsection

