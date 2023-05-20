<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Show a list of all of the movies.
     */
    public function getMovies() {
        $data = Movie::all();

        return response()->json([
            'data' => $data,
        ]);
    }

    public function getMovie($mov_id) {
        $movie = Movie::with(['ratings', 'cast', 'cast.actor', 'genres', 'directors', 'ratings.reviewer'])->find($mov_id);

        return response()->json([
            'id' => $movie->mov_id,
            'year' => $movie->mov_year,
            'time' => $movie->mov_time,
            'title' => $movie->mov_title,
            'description' => $movie->mov_description,
            'ratings' => $movie->ratings,
            'cast' => $movie->cast,
            'genres' => $movie->genres,
            'directors' => $movie->directors,
        ]);
    }

}
