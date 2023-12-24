<!-- resources/views/pages/image.blade.php -->

@extends('layouts.master')

@section('title', 'Image Page')

@section('content')
    <h1>Image Page</h1>
    <img src="{{ asset('images/sample.jpg') }}" alt="Sample Image">
@endsection
