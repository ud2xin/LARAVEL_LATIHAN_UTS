<h1>Daftar Artikel</h1>
@foreach ($articles as $article)
    <h2>{{ $article->title }}</h2>
    <p>{{ $article->content }}</p>
@endforeach
