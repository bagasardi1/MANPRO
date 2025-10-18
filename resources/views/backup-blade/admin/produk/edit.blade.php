@extends('admin.layouts.app')

@section('content')
<h2 class="mb-4">Edit Produk</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ route('admin.produk.update', $produk->id_produk) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Nama Produk --}}
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                    value="{{ old('nama_produk', $produk->nama_produk) }}" required>
            </div>

            {{-- Kategori --}}
            <div class="mb-3">
                <label for="id_kategori" class="form-label">Kategori</label>
                <select class="form-select" id="id_kategori" name="id_kategori" required>
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id_kategori }}" 
                            {{ $produk->id_kategori == $item->id_kategori ? 'selected' : '' }}>
                            {{ $item->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Harga --}}
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga"
                    value="{{ old('harga', $produk->harga) }}" required>
            </div>

            {{-- Stok --}}
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok"
                    value="{{ old('stok', $produk->stok) }}" required>
            </div>

            {{-- Deskripsi --}}
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
            </div>

            {{-- Status --}}
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status">
                    <option value="aktif" {{ $produk->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="nonaktif" {{ $produk->status == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                </select>
            </div>

            {{-- Gambar --}}
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Produk</label>
                @if ($produk->url_gambar)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $produk->url_gambar) }}" 
                             alt="gambar produk" 
                             width="120" 
                             class="img-thumbnail border rounded">
                    </div>
                @endif
                <input type="file" class="form-control" id="gambar" name="url_gambar" accept="image/*">
                <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar</small>
            </div>

            <button type="submit" class="btn btn-primary">💾 Simpan Perubahan</button>
            <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
