<!-- resources/views/pages/video.blade.php -->

@extends('layouts.master')

@section('title', 'Video Page')

@section('content')
    <h1>Video Page</h1>
    <video controls width="400">
        <source src="{{ asset('videos/sample.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
@endsection
