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
}
