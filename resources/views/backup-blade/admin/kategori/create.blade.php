@extends('admin.layouts.app')

@section('content')
    <h2>Tambah Kategori</h2>

    <form action="{{ route('admin.kategori.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_kategori" class="form-label">Nama Kategori</label>
            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.kategori.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
