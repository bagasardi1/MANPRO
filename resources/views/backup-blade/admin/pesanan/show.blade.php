@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Detail Pesanan #{{ $pesanan->id_pesanan }}</h2>
        <a href="{{ route('admin.pesanan.index') }}" class="btn btn-secondary">Kembali ke Daftar Pesanan</a>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produk yang Dipesan</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Jumlah</th>
                                <th>Harga Satuan</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($pesanan->detailPesanan as $produk)
                                <tr>
                                    <td>{{ $produk->nama_produk }}</td>
                                    <td>{{ $produk->pivot->jumlah }}</td>
                                    <td>Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                                    <td>Rp {{ number_format($produk->pivot->subtotal, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Informasi Pesanan</div>
                <div class="card-body">
                    <p><strong>Customer:</strong> {{ $pesanan->customer->nama }}</p>
                    <p><strong>Email:</strong> {{ $pesanan->customer->email }}</p>
                    <p><strong>Waktu Pesan:</strong> {{ $pesanan->waktu_pemesanan }}</p>
                    <p><strong>Total Harga:</strong> <strong class="fs-5">Rp {{ number_format($pesanan->total_harga, 0, ',', '.') }}</strong></p>
                    <hr>
                    <form action="{{ route('admin.pesanan.update', $pesanan->id_pesanan) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="status_pesanan" class="form-label">Ubah Status Pesanan</label>
                            <select name="status_pesanan" id="status_pesanan" class="form-select">
                                <option value="pending" {{ $pesanan->status_pesanan == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="diproses" {{ $pesanan->status_pesanan == 'diproses' ? 'selected' : '' }}>Diproses</option>
                                <option value="dikirim" {{ $pesanan->status_pesanan == 'dikirim' ? 'selected' : '' }}>Dikirim</option>
                                <option value="selesai" {{ $pesanan->status_pesanan == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                <option value="dibatalkan" {{ $pesanan->status_pesanan == 'dibatalkan' ? 'selected' : '' }}>Dibatalkan</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Update Status</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection