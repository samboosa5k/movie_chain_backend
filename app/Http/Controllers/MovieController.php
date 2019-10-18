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
            ->limit(20);

        //  MODIFY QUERY



        //  RETURN QUERY
        $all = $query->get();
        return $all;

        //  REQUIREMENTS
        //  List of theaters = ID && NAME
    }
}
