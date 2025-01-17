@extends('layouts.beranda')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Registrasi Pelanggan
                <div class="card-body">
                    <form action="{{ route('Pelanggan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="kode_plg">Kode Pelanggan</label>
                            <input id="kode_plg" class="form-control" type="text" name="kode_plg" value="{{ old('kode_plg') }}">
                            <span class="text-danger">{{ $errors->first('kode_plg') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="nama_plg">Nama Pelanggan</label>
                            <input id="nama_plg" class="form-control" type="text" name="nama_plg" value="{{ old('nama_plg') }}">
                            <span class="text-danger">{{ $errors->first('nama_plg') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="alamat_plg">Alamat Pelanggan</label>
                            <input id="alamat_plg" class="form-control" type="text" name="alamat_plg" value="{{ old('alamat_plg') }}">
                            <span class="text-danger">{{ $errors->first('alamat_plg') }}</span>
                        </div>
                        
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select id="jk" class="form-control" name="jk">
                                @foreach ($list_jk as $a)
                                <option value="{{ $a }}" @selected($a == old('jk'))>{{ $a }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('jk') }}</span>
                        </div>
                       
                        <div class="form-group">
                            <label for="nomorhp_plg">Telepon</label>
                            <input id="nomorhp_plg" class="form-control" type="text" name="nomorhp_plg" value="{{ old('nomorhp_plg') }}">
                            <span class="text-danger">{{ $errors->first('nomorhp_plg') }}</span>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block">Registrasi</button>
                        </div>
                    </form>
                    
            </div>

        </div>
    </div>
</div>
</div>
@endsection
