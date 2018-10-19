<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\;

class MovieModel extends Model {
    
    protected guarded = [];

    protected $dates = ['release_date'];


    $movies = Movie::all();

    $firstMovie = Movie::first();
    $lastMovie = Movie::last();

    $queryMoviesById = Movie::find(1);

    $queryMoviesByTitle = Movie::where('title', 'Avatar')->get();
    $queryMoviesByRating = Movie::where('rating', '>', '8')->get();

}
