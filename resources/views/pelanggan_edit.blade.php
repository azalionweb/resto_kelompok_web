@extends('layouts.admintmplt')

@section('isinya')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Data Pelanggan
                </div>
                <div class="card-body">
                    <form action="{{ url('Pelanggan/'.$Pelanggan->id, []) }}" method="POST">

                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="kode_plg">Id Pelanggan </label>
                            <input id="kode_plg" class="form-control" type="text" name="kode_plg"
                                value="{{ $Pelanggan->kode_plg ?? old('kode_plg') }}">
                            <span class="text-danger">{{ $errors->first('kode_plg') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="nama_plg">Nama Pelanggan</label>
                            <input id="nama_plg" class="form-control" type="text" name="nama_plg"
                                value="{{ $Pelanggan->nama_plg ?? old('nama_plg') }}">
                            <span class="text-danger">{{ $errors->first('nama_plg') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="nomorhp_plg">Nomor HP</label>
                            <input id="nomorhp_plg" class="form-control" type="text" name="nomorhp_plg"
                                value="{{ $Pelanggan->nomorhp_plg ?? old('nomorhp_plg') }}">
                            <span class="text-danger">{{ $errors->first('nomorhp_plg') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select id="jk" class="form-control" name="jk">
                                @foreach ($list_jk as $a)
                                <option value="{{ $a }}" @selected($a == $Pelanggan->jk)>{{ $a }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('jk') }}</span>
                        </div>


                        

                        

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
