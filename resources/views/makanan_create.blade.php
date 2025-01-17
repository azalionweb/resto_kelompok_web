@extends('layouts.admintmplt')

@section('isinya')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tambah Makanan
                    <div class="card-body">
                        <form action="{{ route('Makan.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="kode_mkn">Kode Makanan</label>
                                <input id="kode_mkn" class="form-control" type="text" name="kode_mkn" value="{{ old('kode_mkn') }}">
                                <span class="text-danger">{{ $errors->first('kode_mkn') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="nama_mkn">Nama Makanan</label>
                                <select id="nama_mkn" class="form-control" name="nama_mkn">
                                    @foreach ($list_mkn as $a)
                                    <option value="{{ $a }}" @selected($a == old('nama_mkn'))>{{ $a }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('nama_mkn') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="tipe_mkn">Tipe Makanan</label>
                                <select id="tipe_mkn" class="form-control" name="tipe_mkn">
                                    @foreach ($list_tipe as $a)
                                    <option value="{{ $a }}" @selected($a == old('tipe_mkn'))>{{ $a }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('tipe_mkn') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga Makanan</label>
                                <input id="harga" class="form-control" type="number" name="harga" value="{{ old('harga') }}">
                                <span class="text-danger">{{ $errors->first('harga') }}</span>
                            </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    
            </div>

        </div>
    </div>
</div>
</div>
@endsection
