@extends('layouts.login')
@section('title', 'Odtwarzacz')

@section('content')
<div class="container" id="app">
    <div class="row justify-content-center">
        <player v-bind:song="song" v-on:next="nextSong" v-on:prev="prevSong"></player>
        <div class="col-md-1"></div>
        <playlist :songs="{{ $songs }}" v-on:choose-song="chooseSong" v-bind:next="next" v-bind:prev="prev" v-bind:hidePlaylist="hidePlaylist"></playlist>
    </div>
</div>
@endsection
