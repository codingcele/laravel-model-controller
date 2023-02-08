@extends('layouts.main-layout')

@section('content')
    <h1 class="text-danger">Movies</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie -> title }}</li>
        @endforeach
    </ul>
@endsection
