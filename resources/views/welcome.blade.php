@extends('layouts.app')
@section('title', 'Odtwarzacz - strona główna')
@section('content')
    <div class="hero text-center">
        <h1>Odwtarzacz muzyczny</h1>
        <p>Uzyskaj dostęp do nieograniczonej muzyki</p>
        <p><a href="{{ route('login') }}">Zaloguj</a> lub <a href="{{ route('register') }}">Zarejetruj się</a>!</p>
    </div>
@endsection


