@extends('layouts.admintmplt')

@section('isinya')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Transaksi</div>
                <div class="card-body">
                    <form action="{{ route('Transaksi.store') }}" method="POST">
                        @csrf

                       

                        <div class="form-group">
                            <label for="pelanggan_id">Pelanggan</label>
                            <select id="pelanggan_id" class="form-control" name="pelanggan_id">
                                <option value="">Pilih Pelanggan</option>
                                @foreach ($list_Pelanggan as $id => $tampil)
                                    <option value="{{ $id }}" @selected($id == old('pelanggan_id'))>{{ $tampil }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('pelanggan_id') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input id="tanggal" class="form-control" type="date" name="tanggal" value="{{ old('tanggal') }}">
                            <script>
                                document.getElementById("tanggal").valueAsDate = new Date();
                            </script>
                            <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                        </div>


                      
                        
                        <div class="form-group">
                            <label for="makan_id">Makanan</label>
                            <select id="makan_id" class="form-control" name="makan_id">
                                <option value="">Pilih Makanan</option>
                                @foreach ($list_Makan as $id => $tampil)
                                    <option value="{{ $id }}" @selected($id == old('makan_id'))>{{ $tampil }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('makan_id') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="minum_id">Minuman</label>
                            <select id="minum_id" class="form-control" name="minum_id">
                                <option value="">Pilih Minuman</option>
                                @foreach ($list_Minum as $id => $tampil)
                                    <option value="{{ $id }}" @selected($id == old('minum_id'))>{{ $tampil }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('minum_id') }}</span>
                        </div>
                        
                        <div class="form-group">
                            <label for="waiter_id">Waiters</label>
                            <select id="waiter_id" class="form-control" name="waiter_id">
                                <option value="">Waiters Yang Melayani</option>
                                @foreach ($list_Waiter as $id => $tampil)
                                    <option value="{{ $id }}" @selected($id == old('waiter_id'))>{{ $tampil }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('waiter_id') }}</span>
                        </div>
                     

                        <div class="form-group">
                            <label for="biaya">Total Harga</label>
                            <input id="biaya" class="form-control" type="number" name="biaya" value="{{ old('biaya') }}">
                            <span class="text-danger">{{ $errors->first('biaya') }}</span>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
