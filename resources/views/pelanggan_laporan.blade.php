@extends('layouts.admintmplt')

@section('isinya')

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #ffffff;
    }

    h2 {
        margin: 20px 0;
        font-size: 24px;
        color: #000000;
        font-weight: bold;
    }

    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        margin: 20px 0;
        background-color: #00ff2f;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 153, 255, 0.944);
    }

    table th, table td {
        text-align: center;
        padding: 10px;
        font-size: 14px;
    }

    table th {
background-color: #001aff !important;
color: #000000 !important;
border-bottom: 1px solid #dee2e6 !important;
font-weight: bold !important;
}

    table td {
        background-color: hsl(112, 100%, 79%);
    }

   

    table tbody tr:hover td {
        background-color: hsl(0, 0%, 69%);
    }

    h5 {
        text-align: left;
        margin-top: 20px;
        font-weight: bold;
    }

    .container-fluid {
        padding: 20px;
    }

    .row {
        margin-top: 20px;
    }
</style>

<body>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <center>
                <h2>{{ $Judul }}</h2>
            </center>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode Pelanggan</th>
                        <th>Nama Pelanggan</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomor Hp</th>
                        <th>Alamat</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Pelanggan as $a)
                    <tr>
                        <td>{{ $a->id }}</td>
                        <td>{{ $a->kode_plg }}</td>
                        <td>{{ $a->nama_plg }}</td>
                        <td>{{ $a->jk }}</td>
                        <td>{{ $a->nomorhp_plg }}</td>
                        <td>{{ $a->alamat_plg }}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
           
        </div>
    </div>
</div>
</body>
@endsection

