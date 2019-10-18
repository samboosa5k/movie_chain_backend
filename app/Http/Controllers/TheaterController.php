<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TheaterController extends Controller
{
    public function index()
    {

        //  PARAMETERS

        //  INIT QUERY
        $query = DB::table('theaters')
            ->select('id', 'name');

        $all = $query->get();

        //  MODIFY QUERY
        return $all;

        //  REQUIREMENTS
        //  List of theaters = ID && NAME
    }
}
