<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index ()
    {
    	$songs = Song::all();

    	return view('welcome', [
    		'songs' => $songs,
    	]);
    }

    public function next($song_id)
    {
    	//
    }
}
