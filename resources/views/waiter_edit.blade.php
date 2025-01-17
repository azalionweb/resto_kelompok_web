@extends('layouts.admintmplt')

@section('isinya')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Data Waiter
                </div>
                <div class="card-body">
                    <form action="{{ url('Waiter/'.$Waiter->id, []) }}" method="POST">

                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="kode_wtr">Kode Waiter </label>
                            <input id="kode_wtr" class="form-control" type="text" name="kode_wtr"
                                value="{{ $Waiter->kode_wtr ?? old('kode_wtr') }}">
                            <span class="text-danger">{{ $errors->first('kode_wtr') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="nama_wtr">Nama Waiter</label>
                            <input id="nama_wtr" class="form-control" type="text" name="nama_wtr"
                                value="{{ $Waiter->nama_wtr ?? old('nama_wtr') }}">
                            <span class="text-danger">{{ $errors->first('nama_wtr') }}</span>
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
                            <label for="alamat_wtr">Alamat</label>
                            <input id="alamat_wtr" class="form-control" type="text" name="alamat_wtr"
                                value="{{ $Waiter->alamat_wtr ?? old('alamat_wtr') }}">
                            <span class="text-danger">{{ $errors->first('alamat_wtr') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="nomorhp_wtr">Nomor HP</label>
                            <input id="nomorhp_wtr" class="form-control" type="text" name="nomorhp_wtr"
                                value="{{ $Waiter->nomorhp_wtr ?? old('nomorhp_wtr') }}">
                            <span class="text-danger">{{ $errors->first('nomorhp_wtr') }}</span>
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
