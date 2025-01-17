<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\Makan;
use App\Models\Minum;
use App\Models\Waiter;

class TransaksiController extends Controller
{
    // Menampilkan daftar transaksi
    public function index()
    {
        $data['Transaksi']= \App\Models\Transaksi::with(['Pelanggan', 'Makan','Minum','Waiter'])->paginate(5);
        $data['bayar']= 'Data-Data Transaksi';
        return view('transaksi_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_Pelanggan'] =
        \App\Models\Pelanggan::selectRaw("id,concat(nama_plg)as tampil")
        ->pluck('tampil','id');
        $data['list_Makan'] =
        \App\Models\Makan::selectRaw("id,concat(nama_mkn)as tampil")
        ->pluck('tampil','id');
        $data['list_Minum'] =
        \App\Models\Minum::selectRaw("id,concat(nama_mnm)as tampil")
        ->pluck('tampil','id');
        $data['list_Waiter'] =
        \App\Models\Waiter::selectRaw("id,concat(nama_wtr)as tampil")
        ->pluck('tampil','id');
        return view('transaksi_create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'tanggal'=>'required',
            'makan_id' => 'required',
            'minum_id' => 'required',
            'waiter_id'=>'required',
            'biaya' => 'required',
        ]);
    
        // Simpan data ke tabel administrasi
       $Transaksi = new \App\Models\Transaksi();
       $Transaksi ->pelanggan_id=$request->pelanggan_id;
       $Transaksi ->tanggal =$request->tanggal;
       $Transaksi ->makan_id=$request->makan_id;
       $Transaksi ->minum_id=$request->minum_id;
       $Transaksi->waiter_id =$request->waiter_id;
       $Transaksi ->biaya=$request->biaya;
       $Transaksi->save();

        // Redirect kembali ke halaman index dengan pesan sukses
        return back()->with('pesan', 'Data Transaksi berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['administrasi']=\App\Models\Transaksi::findOrFail($id);
        $data['list_Pelanggan'] =
        \App\Models\Pelanggan::selectRaw("id,concat(nama_plg)as tampil")
        ->pluck('tampil','id');
        $data['list_Makan'] =
        \App\Models\Makan::selectRaw("id,concat(nama_mkn)as tampil")
        ->pluck('tampil','id');
        $data['list_Minum'] =
        \App\Models\Minum::selectRaw("id,concat(nama_mnm)as tampil")
        ->pluck('tampil','id');
        $data['list_Waiter'] =
        \App\Models\Waiter::selectRaw("id,concat(nama_wtr)as tampil")
        ->pluck('tampil','id');
        return view('administrasi_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
          'pelanggan_id' => 'required',
          'tanggal'=>'required',
            'makan_id' => 'required',
            'minum_id' => 'required',
            'waiter_id'=>'required',
            'biaya' => 'required',
        ]);

        $Transaksi = \App\Models\Transaksi::findOrFail($id);
        $Transaksi ->pelanggan_id=$request->pelanggan_id;
        $Transaksi ->tanggal =$request->tanggal;
       $Transaksi ->makan_id=$request->makan_id;
       $Transaksi ->minum_id=$request->minum_id;
       $Transaksi->waiter_id =$request->waiter_id;
       $Transaksi ->biaya=$request->biaya;
       $Transaksi ->save();
        return redirect('/Transaksi')->with('pesan','Data sudah di update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $administrasi = \App\Models\Transaksi::findOrFail($id);
        $administrasi->delete();
        return back()->with('pesan','Data Sudah Dihapus');
    }
    
    public function laporan()
    {
        $Transaksi = Transaksi::with(['Pelanggan', 'Makan', 'Minum', 'Waiter'])->get();
        $bayar = "Laporan Data Transaksi";
        
        return view('transaksi_laporan', compact('Transaksi', 'bayar'));
    }
    
    public function cari(Request $request)
    {
        $cari = $request->get('search');
        $data['Transaksi'] = \App\Models\Pelanggan::where('pelanggan_id', 'like', '%' . $cari . '%')
            ->orWhere('waiter_id', 'like', '%' . $cari . '%')
            ->paginate(5);
        $data['bayar'] = 'Data-Data Transaksi';
        return view('transaksi_index', $data);
    }
}
