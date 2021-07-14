@extends('layout.app')

@section('title','It is Comic Home')


@section('main_content')
<div class="add_comic_form container">
    <h1>Add a comic</h1>
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="form_group">
            <label for="cover">Cover Image</label>
            <input type="text" name="cover" id="cover" placeholder="Insert Image Link">
            <small id="helpId">Paste Image Link Address</small>
        </div>
        <div class="form_group">
            <label for="title">Title</label>
            <input name="title" id="title" placeholder="Insert Title"></input>
            <small id="helpId">Insert Comic Title</small>
        </div>
        <div class="form_group">
            <label for="plot">Plot</label>
            <textarea name="plot" id="plot" rows="5"></textarea>
            <small id="helpId">Insert Comic Plot</small>
        </div>
        <div class="form_group">
            <label for="artist">Artist</label>
            <input type="text" name="artist" id="artist" placeholder="Insert Artist Full Name" aria-describedby="artist">
            <small id="artist">Insert Comic Artist</small>
        </div>
        <div class="form_group">
            <label for="series">Price</label>
            <input type="text" name="price" id="price" placeholder="Insert Price" aria-describedby="price">
            <small id="price">Insert Comic Price</small>
        </div>
        <button type="submit">Generate</button>
    </form>
</div>
@endsection