@extends('templates.base')

@section ('main')

<div class="container-cards">
    @foreach($allMovie as $movie)
        <div class="card">
            <div class="img-container">
                <img src="{{$movie->image}}">
            </div>
            <div>{{$movie->title}}</div>
        </div>
    @endforeach
</div>

@endsection


