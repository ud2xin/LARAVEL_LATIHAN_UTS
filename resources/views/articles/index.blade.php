@extends('layouts.app')

@section('title','Daftar Artikel')

@section('content')
    <h2>Daftar Artikel</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @forelse($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
                <td>{{ $article->author }}</td>
                <td>
                    <a href="{{ route('articles.show', $article->id) }}">Detail</a> |
                    <a href="{{ route('articles.edit', $article->id) }}">Edit</a> |
                    <form action="{{ route('articles.destroy',$article->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Belum ada artikel</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
