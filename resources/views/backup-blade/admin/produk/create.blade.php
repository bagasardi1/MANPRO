@extends('admin.layouts.app')

@section('content')
    <h2 class="mb-4">Tambah Produk Baru</h2>

    {{-- 🔴 Menampilkan Error Validasi --}}
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
            <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Nama Produk --}}
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                        value="{{ old('nama_produk') }}" placeholder="Masukkan nama produk" required>
                </div>

                {{-- Kategori --}}
                <div class="mb-3">
                    <label for="id_kategori" class="form-label">Kategori</label>
                    <select class="form-select" id="id_kategori" name="id_kategori" required>
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($kategori as $item)
                            <option value="{{ $item->id_kategori }}"
                                {{ old('id_kategori') == $item->id_kategori ? 'selected' : '' }}>
                                {{ $item->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Harga --}}
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga (Rp)</label>
                    <input type="number" class="form-control" id="harga" name="harga"
                        value="{{ old('harga') }}" placeholder="Masukkan harga produk" required>
                </div>

                {{-- Stok --}}
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok"
                        value="{{ old('stok') }}" placeholder="Jumlah stok tersedia" required>
                </div>

                {{-- Deskripsi --}}
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"
                        placeholder="Tuliskan deskripsi produk">{{ old('deskripsi') }}</textarea>
                </div>

                {{-- Status --}}
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="aktif" {{ old('status') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="nonaktif" {{ old('status') == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                    </select>
                </div>

                {{-- Gambar --}}
                <div class="mb-3">
                    <label for="url_gambar" class="form-label">Gambar Produk</label>
                    <input class="form-control" type="file" id="url_gambar" name="url_gambar" accept="image/*"
                        onchange="previewImage(event)">
                    <small class="text-muted">Format: JPG, PNG. Maks 2MB.</small>
                    <div class="mt-3">
                        <img id="preview" src="#" alt="Preview Gambar" style="max-width: 200px; display: none;" class="img-thumbnail">
                    </div>
                </div>

                {{-- Tombol Aksi --}}
                <div class="d-flex justify-content-start gap-2">
                    <button type="submit" class="btn btn-primary">💾 Simpan</button>
                    <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>

    {{-- Script Preview Gambar --}}
    <script>
        function previewImage(event) {
            const preview = document.getElementById('preview');
            const file = event.target.files[0];
            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            } else {
                preview.src = '';
                preview.style.display = 'none';
            }
        }
    </script>
@endsection
