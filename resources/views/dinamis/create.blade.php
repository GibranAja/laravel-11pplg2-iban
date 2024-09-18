<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Konten</title>
</head>
<body>
    <h1>Tambah Konten Baru</h1>

    <form action="{{ route('dinamis.store') }}" method="POST">
        @csrf
        <label for="konten">Konten:</label>
        <input type="text" name="konten" id="konten" required>
        <button type="submit">Tambah</button>
    </form>

    <a href="{{ route('dinamis.index') }}">Kembali</a>
</body>
</html>
