<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TheaterController extends Controller
{
    public function index()
    {
        //  SHOWS ALL THEATERS

        //  INIT QUERY
        $query = DB::table('theaters')
            ->select('id', 'name', 'slug');

        $all = $query->get();

        //  MODIFY QUERY

        //  RETURN
        return $all;
    }

    public function single(Request $request)
    {
        //  PARAMETSER
        $whichTheater = $request->input('theaterName');

        //  INIT QUERY - theater select
        $query = DB::table('theaters')
            ->where('name', $whichTheater);

        //  INIT QUERY - screenings select
        $theaterId = $query->pluck('id');
        $query_screenings = DB::table('screenings')
            ->where('theater_id', '=', 1);

        $theater = $query->get();
        $screenings = $query_screenings->get();

        //  RETURN
        return [
            $theater,
            'screenings' => $screenings,
        ];
    }
}
