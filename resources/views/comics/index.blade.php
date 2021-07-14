@extends('layout.app')

@section('title','It is Comic Home')


@section('main_content')

<h1>It is Comic Home</h1>
<div class="container">
    @foreach($comics as $comic)
    <div class="comic_card">
        <a href="" class="single_comic">
            <img width="150" src="{{$comic->cover}}" alt="">
        </a>
            <h2 class="title">{{$comic->title}}</h2>
            <p class="plot">{{$comic->plot}}</p>
            <h3 class="artist">{{$comic->artist}}</h3>
            <span class="price">{{$comic->price}}</span>
        </div>
    @endforeach
</div>
@endsection