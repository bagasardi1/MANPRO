@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Dashboard Admin</h2>
        <div>
            <a href="{{ route('admin.kategori.index') }}" class="btn btn-primary me-2">Kelola Kategori</a>
            <a href="{{ route('admin.produk.index') }}" class="btn btn-primary me-2">Kelola Produk</a>
            <a href="{{ route('admin.pesanan.index') }}" class="btn btn-primary">Kelola Pesanan</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card text-center p-4">
                <h4>Total Produk</h4>
                <h2>{{ $totalProduk ?? 0 }}</h2>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card text-center p-4">
                <h4>Total Pesanan</h4>
                <h2>{{ $totalPesanan ?? 0 }}</h2>
            </div>
        </div>
    </div>
@endsection
