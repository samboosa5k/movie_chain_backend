<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MovieController extends Controller
{
    public function index()
    {
        //  genres, genre_movie

        //  PARAMETERS

        //  INIT QUERY
        $query = DB::table('movies')
            ->leftJoin('genre_movie', 'movies.id', '=', 'genre_movie.movie_id')
            ->leftJoin('genres', 'genre_movie.genre_id', '=', 'genres.id')
            ->limit(20);

        //  MODIFY QUERY



        //  RETURN QUERY
        $all = $query->get();
        return $all;

        //  REQUIREMENTS
        //  List of theaters = ID && NAME
    }
}
