@extends('layout.app')

@section('title','It is Comic Home')


@section('main_content')
<div class="container">
    <h1>Add a comic</h1>
    <form class="add_comic_form" action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form_group">
            <label for="cover">Cover Image</label>
            <input type="text" name="cover" id="cover" placeholder="Insert Image Link" value="{{$comic->cover}}">
            <small id="helpId">Paste Image Link Address</small>
        </div>

        <div class="form_group">
            <h4>Currunt Cover</h4>    
            <img width="100" src="{{$comic->cover}}" alt="">
        </div>

        <div class="form_group">
            <label for="title">Title</label>
            <input name="title" id="title" placeholder="Insert Title" value="{{$comic->title}}"></input>
            <small id="helpId">Insert Comic Title</small>
        </div>
        <div class="form_group">
            <label for="plot">Plot</label>
            <textarea name="plot" id="plot" rows="5">{{$comic->plot}}</textarea>
            <small id="helpId">Insert Comic Plot</small>
        </div>
        <div class="form_group">
            <label for="artist">Artist</label>
            <input type="text" name="artist" id="artist" placeholder="Insert Artist Full Name" aria-describedby="artist" value="{{$comic->artist}}">
            <small id="artist">Insert Comic Artist</small>
        </div>
        <div class="form_group">
            <label for="series">Price</label>
            <input type="text" name="price" id="price" placeholder="€" aria-describedby="price" value="{{$comic->price}}">
            <small id="price">Insert Comic Price</small>
        </div>
        <button type="submit">Update</button>
    </form>
</div>
@endsection