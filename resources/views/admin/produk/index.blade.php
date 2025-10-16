@extends('admin.layouts.app')

@section('title', 'Data Produk')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Daftar Produk</h4>
    <a href="{{ route('admin.produk.create') }}" class="btn btn-primary">Tambah Produk</a>
</div>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produk as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_produk }}</td>
            <td>Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
            <td>{{ $item->stok }}</td>
            <td>
                <a href="{{ route('admin.produk.edit', $item->id_produk) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('admin.produk.destroy', $item->id_produk) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
