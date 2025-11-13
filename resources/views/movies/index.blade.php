<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
    <h2 class="mb-4 text-center">🎬 Manajemen Film</h2>

    <div class="d-flex justify-content-between mb-3">
        <form class="d-flex" method="GET" action="{{ route('movies.index') }}">
            <input type="text" name="search" class="form-control me-2" placeholder="Cari judul atau genre"
                   value="{{ request('search') }}">
            <button class="btn btn-primary">Cari</button>
            <a href="{{ route('movies.index') }}" class="btn btn-secondary ms-2">Reset</a>
        </form>
        <a href="{{ route('movies.create') }}" class="btn btn-success">+ Tambah Film</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark text-center">
            <tr>
                <th>Judul</th>
                <th>Genre</th>
                <th>Durasi</th>
                <th>Tahun</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->genre }}</td>
                <td>{{ $movie->duration }} menit</td>
                <td>{{ $movie->release_year }}</td>
                <td>Rp {{ number_format($movie->price, 0, ',', '.') }}</td>
                <td class="text-center">
                    <a href="#" class="btn btn-sm btn-info">Lihat</a>
                    <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus film ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center text-muted">Tidak ada data.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>
