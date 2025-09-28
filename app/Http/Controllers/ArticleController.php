<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // daftar artikel
    public function index()
    {
        $articles = Article::with('user')->latest()->get();
        return view('articles.index', compact('articles'));
    }

    // form tambah artikel
    public function create()
    {
        return view('articles.create');
    }

    // simpan artikel baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required'
        ]);

        $request->user()->articles()->create($validated);

        return redirect()->route('articles.index')
                        ->with('success','Artikel berhasil dibuat!');
    }

    // detail artikel
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    // form edit
    public function edit(Article $article)
    {
        // opsional: cek otorisasi di policy
        return view('articles.edit', compact('article'));
    }

    // update
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required'
        ]);

        $article->update($validated);

        return redirect()->route('articles.index')
                        ->with('success','Artikel berhasil diperbarui!');
    }

    // hapus
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')
                        ->with('success','Artikel berhasil dihapus!');
    }
}
