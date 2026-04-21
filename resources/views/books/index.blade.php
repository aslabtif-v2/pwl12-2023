<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Rak Buku</title>
</head>
<body>
    <h1>Daftar Rak Buku</h1>

    @if ($bookshelves->isEmpty())
        <p>Tidak ada rak buku.</p>
    @else
        <ul>
            @foreach ($bookshelves as $bookshelf)
                <li>
                    <a href="{{ route('books.show', $bookshelf->id) }}">
                        {{ $bookshelf->name }} ({{ $bookshelf->books_count }} buku)
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
