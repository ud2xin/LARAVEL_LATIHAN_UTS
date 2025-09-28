@extends('layouts.app')

@section('title','Tambah Artikel')

@section('content')
    <h2>Tambah Artikel</h2>

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <label>Judul</label><br>
        <input type="text" name="title" value="{{ old('title') }}"><br>
        @error('title') <small style="color:red">{{ $message }}</small><br>@enderror

        <label>Penulis</label><br>
        <input type="text" name="author" value="{{ old('author') }}"><br>
        @error('author') <small style="color:red">{{ $message }}</small><br>@enderror

        <label>Isi</label><br>
        <textarea name="content">{{ old('content') }}</textarea><br>
        @error('content') <small style="color:red">{{ $message }}</small><br>@enderror

        <button type="submit">Simpan</button>
    </form>
@endsection
