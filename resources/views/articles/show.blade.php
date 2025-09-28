@extends('layouts.app')

@section('title','Detail Artikel')

@section('content')
    <h2>{{ $article->title }}</h2>
    <p><strong>Penulis:</strong> {{ $article->author }}</p>
    <p>{{ $article->content }}</p>

    <a href="{{ route('articles.index') }}">← Kembali</a>
@endsection
