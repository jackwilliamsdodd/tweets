<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\SearchEvent;
use App\Tweet;

class SearchController extends Controller
{
        public function search(Request $request)
    {
        $query = $request->query('query');
        $tweets = Tweet::where('text', 'like', '%' . $query . '%')
            ->get();

        //broadcast search results with Pusher channels
        event(new SearchEvent($tweets));

        return response()->json("ok");
    }

    //fetch all tweets
    public function get(Request $request)
    {
        $tweets = Tweet::all();
        return response()->json($tweets);
    }
}
