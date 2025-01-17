@extends('layouts.admintmplt')

@section('isinya')
<div class="container-fluid" style="padding: 20px;">
    <h3>Edit Transaksi</h3>
    <form action="{{ route('transaksi.update', $transaksi->id_transaksi) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_plg">Pelanggan</label>
            <select name="kode_plg" id="kode_plg" class="form-control">
                @foreach($pelanggans as $pelanggan)
                <option value="{{ $pelanggan->kode_plg }}" {{ $transaksi->kode_plg == $pelanggan->kode_plg ? 'selected' : '' }}>{{ $pelanggan->nama_plg }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="kode_mkn">Makanan</label>
            <select name="kode_mkn" id="kode_mkn" class="form-control">
                <option value="">Tidak Memesan Makanan</option>
                @foreach($makans as $makanan)
                <option value="{{ $makanan->kode_mkn }}" {{ $transaksi->kode_mkn == $makanan->kode_mkn ? 'selected' : '' }}>{{ $makanan->nama_mkn }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="kode_mnm">Minuman</label>
            <select name="kode_mnm" id="kode_mnm" class="form-control">
                <option value="">Tidak Memesan Minuman</option>
                @foreach($minums as $minuman)
                <option value="{{ $minuman->kode_mnm }}" {{ $transaksi->kode_mnm == $minuman->kode_mnm ? 'selected' : '' }}>{{ $minuman->nama_mnm }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="kode_wtr">Waiters</label>
            <select name="kode_wtr" id="kode_wtr" class="form-control">
                @foreach($waiters as $waiter)
                <option value="{{ $waiter->kode_wtr }}" {{ $transaksi->kode_wtr == $waiter->kode_wtr ? 'selected' : '' }}>{{ $waiter->nama_wtr }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="total_harga">Total Harga</label>
            <input type="number" name="total_harga" id="total_harga" class="form-control" value="{{ $transaksi->total_harga }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
    </form>
</div>
@endsection