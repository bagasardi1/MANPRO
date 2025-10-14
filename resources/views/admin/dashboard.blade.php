@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Selamat Datang di Dashboard Admin</h1>
                <p>Anda telah berhasil login sebagai admin.</p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Total Produk</div>
                    <div class="card-body">
                        <h5 class="card-title">15 Produk</h5>
                        <p class="card-text">Kelola semua produk Anda dari sini.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Pesanan Baru</div>
                    <div class="card-body">
                        <h5 class="card-title">5 Pesanan</h5>
                        <p class="card-text">Lihat dan proses pesanan yang masuk.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection