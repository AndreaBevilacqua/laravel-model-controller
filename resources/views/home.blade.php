@extends('layouts.main')

@section('tilte', 'Movies')

@section('core-content')

<h1>Movies</h1>
<section id="movies">
    <div class="row">
        @forelse($moviesa as $movie)
        <div class="col-2">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$movie->title}}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->nationality}}</h6>
                  <p class="card-text">{{$movie->date}} - {{$movie->vote}}</p>
                </div>
              </div>
        </div>
    </div>
</section>

@endsection

