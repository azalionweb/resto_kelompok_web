@extends('layouts.admintmplt')

@section('isinya')

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Waiter</title>

</head>
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
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(255, 213, 23, 0.944);
    }

    table th, table td {
        text-align: center;
        padding: 10px;
        font-size: 14px;
    }

    table th {
background-color: #ffe600 !important;
color: #000000 !important;
border-bottom: 1px solid #dee2e6 !important;
font-weight: bold !important;
}

    table td {
        background-color: #00a2ff;
    }

    table tbody tr:nth-child(even) td {
        background-color: #ffffff;
    }

    table tbody tr:hover td {
        background-color: hsl(163, 100%, 94%);
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
                            <th>Kode Waiter</th>
                            <th>Nama Waiter</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Nomor Hp</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Waiter as $a)
                        <tr style="transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#fbffb6';" onmouseout="this.style.backgroundColor='#fbffb6';">
                            <td>{{ $a->id }}</td>
                            <td>{{ $a->kode_wtr }}</td>
                            <td>{{ $a->nama_wtr }}</td>
                            <td>{{ $a->jk }}</td>
                            <td>{{ $a->alamat_wtr }}</td>
                            <td>{{ $a->nomorhp_wtr }}</td>
                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
</body>
@endsection
</html>
