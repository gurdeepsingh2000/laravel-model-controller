@extends('templates.base')

@section ('main')

@foreach($allMovie as $movie)

    {{$movie->title}}

@endforeach


