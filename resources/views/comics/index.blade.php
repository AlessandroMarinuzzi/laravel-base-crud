@extends('layout.app')

@section('title','It is Comic Home')


@section('main_content')
<div class="container">
    <h1>It is Comic Home</h1>
</div>
<div class="comic container">
    @foreach($comics as $comic)
    <div class="comic_card">
        <a href="{{route('comics.show',$comic)}}" class="single_comic">
            <img src="{{$comic->cover}}" alt="">
        </a>
            <h2 class="title">{{$comic->title}}</h2>
            <p class="plot">{{$comic->plot}}</p>
            <h3 class="artist">{{$comic->artist}}</h3>
            <span class="price">{{$comic->price}} €</span>
        </div>
    @endforeach
</div>
@endsection