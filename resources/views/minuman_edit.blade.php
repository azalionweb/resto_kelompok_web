@extends('layouts.admintmplt')

@section('isinya')



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Edit Minuman
                    </div>
                    <div class="card-body">
                        <form action="{{ url('Minum/'.$Minum->id, []) }}" method="POST">
    
                            @method('PUT')
                            @csrf
    
                            <div class="form-group">
                                <label for="kode_mnm">Kode Minuman </label>
                                <input id="kode_mnm" class="form-control" type="text" name="kode_mnm"
                                    value="{{ $Minum->kode_mnm ?? old('kode_mnm') }}">
                                <span class="text-danger">{{ $errors->first('kode_mnm') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="nama_mnm">Nama Minuman</label>
                                <select id="nama_mnm" class="form-control" name="nama_mnm">
                                    @foreach ($list_mnm as $a)
                                    <option value="{{ $a }}" @selected($a == $Minum->nama_mnm)>{{ $a }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('nama_mnm') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="tipe_mnm">Tipe Minuman</label>
                                <select id="tipe_mnm" class="form-control" name="tipe_mnm">
                                    @foreach ($list_tipe as $a)
                                    <option value="{{ $a }}" @selected($a == $Minum->tipe_mnm)>{{ $a }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('tipe_mnm') }}</span>
                            </div>
    
                           
                         
    
    
                            <div class="form-group">
                                <label for="harga_mnm">Harga</label>
                                <input id="harga_mnm" class="form-control" type="number" name="harga_mnm"
                                    value="{{ $Minum->harga_mnm ?? old('harga_mnm') }}">
                                <span class="text-danger">{{ $errors->first('harga_mnm') }}</span>
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
    