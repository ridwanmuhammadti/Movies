@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        {{-- start populer movies --}}
        <div class="populer-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Populer Movies
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5  gap-16">
                @foreach ($popularMovies as $movie)
                    
                    <x-movie-card :movie="$movie" :genres="$genres" />
                
                @endforeach
            </div>
        </div>
        {{-- end populer movies --}}

           {{-- start now playing --}}
           <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Now Playing
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5  gap-16">
                @foreach ($nowPlayingMovies as $movie)
                    
                <x-movie-card :movie="$movie" :genres="$genres" />
            
            @endforeach
            </div>
        </div>
        {{-- end now playing --}}
    </div>
@endsection