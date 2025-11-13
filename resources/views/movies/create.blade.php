@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-center">➕ Tambah Film Baru</h2>

    <form action="{{ route('movies.store') }}" method="POST" class="border p-4 bg-light rounded shadow-sm">
        @csrf

        <div class="mb-3">
            <label class="form-label">Judul Film</label>
            <input type="text" name="title" class="form-control" placeholder="Masukkan judul film" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control" placeholder="Masukkan genre film" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Durasi (menit)</label>
            <input type="number" name="duration" class="form-control" placeholder="Contoh: 120" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tahun Rilis</label>
            <input type="number" name="release_year" class="form-control" placeholder="Contoh: 2025" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga Tiket (Rp)</label>
            <input type="number" name="price" class="form-control" placeholder="Contoh: 45000" required>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('movies.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-success">Tambah Data</button>
        </div>
    </form>
</div>
@endsection
