@extends('layouts.admintmplt')

@section('isinya')

<style>
     table tbody tr:hover td {
        background-color: hsl(0, 0%, 93%);
    }

</style>
<div class="container-fluid" style="padding: 20px;">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="col-md-4">

                <form class="d-flex" role="search" method="get"
                    action="{{ url('Makan/cari/data', []) }}">

                    <input class="form-control me-2" type="search" placeholder="Cari Pelajaran..." aria-label="Search"
                        name="search"> &nbsp;

                    <button class="btn btn-outline-success" type="submit">Cari</button>

                </form>
            </div>
            <div class="card" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-header" style="background-color: #ff0000; color: white; font-weight: bold; text-align: center;">
                    {{ $Judul }}
                </div>
                <div class="card-body" style="padding: 20px;">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover" style="width: 100%; margin: 0 auto; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); border-radius: 5px; overflow: hidden; text-align: center;">
                            <thead style="background-color: #000000; font-weight: bold; text-align: center;">
                            <tr>
                                <th>ID</th>
                                <th>Kode Makanan</th>
                                <th>Nama Makanan</th>
                                <th>Tipe Makanan</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Makan as $a)
                            <tr style="transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#fbffb6';" onmouseout="this.style.backgroundColor='#fbffb6';">
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->kode_mkn }}</td>
                                <td>{{ $a->nama_mkn }}</td>
                                <td>{{ $a->tipe_mkn }}</td>
                                <td>Rp.<span class="biaya-display"></span>{{number_format( $a->harga,0,',','.') }}</td>
                                
                               
    
                                <td>  <a href="{{ url('Makan/'.$a->id.'/edit',[]) }}"
                                    class="btn btn-primary btn-sm">Edit</a>

                                <form action="{{ url('Makan/'.$a->id,[]) }}"method="post" class="d-inline"
                                    onsubmit="return confirm('Apakah Dihapus?')">
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
                    {{ $Makan->links() }}
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection