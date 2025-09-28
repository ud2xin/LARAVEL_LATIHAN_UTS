@extends('layouts.app')

@section('title','Edit Artikel')

@section('content')
    <h2>Edit Artikel</h2>

    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul</label><br>
        <input type="text" name="title" value="{{ old('title', $article->title) }}"><br>

        <label>Penulis</label><br>
        <input type="text" name="author" value="{{ old('author', $article->author) }}"><br>

        <label>Isi</label><br>
        <textarea name="content">{{ old('content', $article->content) }}</textarea><br>

        <button type="submit">Update</button>
    </form>
@endsection
