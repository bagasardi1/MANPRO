@extends('admin.layouts.app')

@section('content')
<h2>Edit Kategori</h2>

<form action="{{ route('admin.kategori.update', $kategori->id_kategori) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nama_kategori" class="form-label">Nama Kategori</label>
        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ $kategori->nama_kategori }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('admin.kategori.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
