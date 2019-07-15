<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Twitter;
use File;
use Illuminate\Routing\Controller;
use DB;

class TwitterController extends Controller
{
    public function getTweetsByWords(Request $request)
    {
        $query = $request->get('search');
        $data = Twitter::getSearch(['q' => $query, 'result_type' => 'recent', 'count' => 50]);
        $timezone = date('d-m-Y H:i:s');;
        $dataToDB = array('query' => $query, 'created_at' => $timezone);
        DB::table('search_historial')->insert($dataToDB);
        return view('/tweets', compact('data'));
    }
    public function getAllSearchTweets()
    { 
        $tweets = DB::table('search_historial')->orderBy('created_at', 'DESC')->get();
        return view('history', compact('tweets'));
    }
}
