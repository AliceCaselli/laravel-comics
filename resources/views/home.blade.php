@extends('layouts/main-layout')


@section('content')
    @foreach($comics as $comic)
        {{$comic['title']}}

            @foreach($comic['artists'] as $artist)
                {{$artist}}
            @endforeach
    @endforeach
@endsection