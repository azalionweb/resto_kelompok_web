@extends('layouts.admintmplt')

@section('isinya')
<style>
    .biaya-display{
        display: inline-block;
        text-align: right;
        min-width:100px;
    }
</style>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="col-md-4">

                    <form class="d-flex" role="search" method="get"
                        action="{{ url('Siswa/cari/data', []) }}">
    
                        <input class="form-control me-2" type="search" placeholder="Cari Transaksi..." aria-label="Search"
                            name="search"> &nbsp;
    
                        <button class="btn btn-outline-success" type="submit">Cari</button>
    
                    </form>
                </div>
               
                        <div class="card" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="card-header" style="background-color: #3bc51c; color: white; font-weight: bold; text-align: center;">
                        {{ $bayar }}
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Makanan Yang Dipesan</th>
                                    <th>Minuman Yang Dipesan</th>
                                    <th>Waiters Yang Melayani</th>
                                    <th>Total Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Transaksi as $a)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ date('d M Y',strtotime($a->tanggal)) }}</td>
                                        <td>{{ $a->Pelanggan->nama_plg }}</td>
                                        <td>{{ $a->Makan->nama_mkn }}</td>
                                        <td>{{ $a->Minum->nama_mnm }}</td>
                                        <td>{{ $a->Waiter->nama_wtr }}</td>
                                        <td>Rp.<span class="biaya-display"></span>{{number_format( $a->biaya,0,',','.') }}</td>
                                        <td>

                                            <a href="{{ url('Transaksi/' . $a->id . '/edit', []) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                          
                                            <form action="{{ url('Transaksi/'.$a->id,[]) }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Dihapus?')">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection