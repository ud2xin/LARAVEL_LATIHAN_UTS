<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Artikel')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Manajemen Artikel</h1>
        <nav>
            <a href="{{ route('articles.index') }}">Daftar Artikel</a>
            <a href="{{ route('articles.create') }}">Tambah Artikel</a>
        </nav>
        <hr>
    </header>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>
