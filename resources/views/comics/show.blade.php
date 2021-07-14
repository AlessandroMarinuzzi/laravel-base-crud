@extends('layout.app')

@section('title','Comics Page')


@section('main_content')
    <div class="container">
        
        <div class="comic_card">
            <a href="" class="single_comic">
                <img src="{{$comic->cover}}" alt="">
            </a>
                <h2 class="title">{{$comic->title}}</h2>
                <p class="plot">{{$comic->plot}}</p>
                <h3 class="artist">{{$comic->artist}}</h3>
                <span class="price">{{$comic->price}}</span>
            </div>
        
    </div>
@endsection