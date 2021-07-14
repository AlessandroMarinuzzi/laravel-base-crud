@extends('layout.app')

@section('title','It is Comic Home')


@section('main_content')
<div class="container">
    <h1>Add a comic</h1>
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="form_group">
            <label for="title">Cover Image</label>
            <input type="text" name="title" id="title" placeholder="Inserisci il titolo" aria-describedby="helpId">
            <small id="helpId">Paste Image Link Address</small>
        </div>
        <div class="form_group">
            <label for="description">Title</label>
            <textarea name="description" id="description" rows="3"></textarea>
            <small id="helpId">Insert Comic Title</small>
        </div>
        <div class="form_group">
            <label for="thumb">Plot</label>
            <input type="text" name="thumb" id="thumb" placeholder="url" aria-describedby="helpId">
            <small id="helpId">Insert Comic Plot</small>
        </div>
        <div class="form_group">
            <label for="price">Artist</label>
            <input type="text" name="price" id="price" placeholder="prezzo" aria-describedby="prezzo">
            <small id="prezzo">Insert Comic Artist</small>
        </div>
        <div class="form_group">
            <label for="series">Price</label>
            <input type="text" name="series" id="series" placeholder="serie" aria-describedby="prezzo">
            <small id="prezz">Insert Comic Price</small>
        </div>
        <button type="submit">Generate</button>
    </form>
</div>
@endsection