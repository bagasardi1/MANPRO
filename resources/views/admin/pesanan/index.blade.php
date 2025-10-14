@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Manajemen Pesanan</h2>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID Pesanan</th>
                        <th>Nama Customer</th>
                        <th>Waktu Pesanan</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($daftar_pesanan as $pesanan)
                        <tr>
                            <td>{{ $pesanan->id_pesanan }}</td>
                            <td>{{ $pesanan->customer->nama ?? 'N/A' }}</td>
                            <td>{{ $pesanan->waktu_pemesanan }}</td>
                            <td>Rp {{ number_format($pesanan->total_harga, 0, ',', '.') }}</td>
                            <td><span class="badge bg-info">{{ $pesanan->status_pesanan }}</span></td>
                            <td>
                                <a href="{{ route('admin.pesanan.show', $pesanan->id_pesanan) }}" class="btn btn-sm btn-primary"><i class="bi bi-eye"></i> Detail</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data pesanan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection