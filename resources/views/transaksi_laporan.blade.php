
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
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(255, 0, 0, 0.944);
    }

    table th, table td {
        text-align: center;
        padding: 10px;
        font-size: 14px;
    }

    table th {
background-color: #ff9100 !important;
color: #000000 !important;
border-bottom: 1px solid #dee2e6 !important;
font-weight: bold !important;
}

    table td {
        background-color: #08a5ff;
    }

   

    table tbody tr:hover td {
        background-color: hsl(68, 100%, 70%);
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
            {{ $bayar }}
        </center>  
          
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
                           
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
</body>
@endsection

