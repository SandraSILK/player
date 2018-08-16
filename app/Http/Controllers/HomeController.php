<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//         $song = Song::where('id', 11)->first();
//         $songs = Song::all();

//         if ($song == null) {
            
//             foreach ($songs as $song) {
//                 $song = Song::where('id', '>', $id)->first();
//             }            
//         }
        

//         if ($songs->max('id') == 11) {

//             $id = $songs->min('id');
//             $song = Song::find($id);
           
//         }

// dd($song);

        $songs = Song::all();

        return view('home', [
            'songs' => $songs,
        ]);
    }
}
