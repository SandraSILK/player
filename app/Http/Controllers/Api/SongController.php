<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function previous(Song $song)
    {
        // $song = Song::find($song->id)->
        return 'kotek';
    }

    public function next($id)
    {
        $songs = Song::all();

        foreach ($songs as $song) {
           $song = Song::where('id', '>', $id)->first();
        }

        if ($songs->max('id') == $id) {
            $id = $songs->min('id');
            return Song::find($id);;
        }

        return $song;
    }
}
