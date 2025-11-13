@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-center">✏️ Edit Data Film</h2>

    <form action="{{ route('movies.update', $movie->id) }}" method="POST" class="border p-4 bg-light rounded">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Judul Film</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $movie->title) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control" value="{{ old('genre', $movie->genre) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Durasi (menit)</label>
            <input type="number" name="duration" class="form-control" value="{{ old('duration', $movie->duration) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tahun Rilis</label>
            <input type="number" name="release_year" class="form-control" value="{{ old('release_year', $movie->release_year) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga Tiket (Rp)</label>
            <input type="number" name="price" class="form-control" value="{{ old('price', $movie->price) }}" required>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('movies.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection
