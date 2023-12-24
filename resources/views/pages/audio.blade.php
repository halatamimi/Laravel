<!-- resources/views/pages/audio.blade.php -->

@extends('layouts.master')

@section('title', 'Audio Page')

@section('content')
    <h1>Audio Page</h1>
    <audio controls>
        <source src="{{ asset('audio/sample.mp3') }}" type="audio/mp3">
        Your browser does not support the audio tag.
    </audio>
@endsection
