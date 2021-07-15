@extends('layout.app')

@section('title','Comics Page')


@section('main_content')
    <div class="container">
        
        <div class="single_comic_card">
            <div class="single_comic">
                <img src="{{$comic->cover}}" alt="">
            </div>
            <div class="single_card_details">
                <h2 class="title">{{$comic->title}}</h2>
                <p class="plot">{{$comic->plot}}</p>
                <h3 class="artist">{{$comic->artist}}</h3>
                <span class="price">{{$comic->price}} €</span>
                <div class="admin_buttons">
                    <button><a href="{{route('comics.edit',$comic->id)}}">Edit</a></button>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        @method("DELETE")

                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
@endsection