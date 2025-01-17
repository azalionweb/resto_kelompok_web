<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakanController extends Controller
{
    public function index()
    {
        
        $data['Makan']= \App\Models\Makan::paginate(5);
        $data['Judul']= 'Data-Data Makanan';
        return view('makanan_index',$data);
    
    }
    public function create()
    {
       
        $data['list_mkn'] = ['Bakso','MieAyam','Soto','NasiGoreng'];
        $data['list_tipe'] = ['Pedas','Biasa'];
        return view('makanan_create',$data);
        
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_mkn' => 'required|unique:makans,kode_mkn',
            'nama_mkn' => 'required',
            'harga' => 'required',
            'tipe_mkn' => 'required',
            
        ]);
        
        $Makanan = new \App\Models\Makan();
        $Makanan->kode_mkn = $request->kode_mkn;
        $Makanan->nama_mkn = $request->nama_mkn;
        $Makanan->harga = $request->harga;
       
        $Makanan->tipe_mkn = $request->tipe_mkn;
        $Makanan->save();
        
        return back()->with('pesan','Data sudah disimpan');
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
        $data['Makan']=\App\Models\Makan::findOrFail($id);
        $data['list_tipe'] = ['Pedas','Biasa'];
        $data['list_mkn'] = ['Bakso','MieAyam','Soto','NasiGoreng'];
        return view('makanan_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
        $request->validate([
           'kode_mkn' => 'required|unique:makans,kode_mkn,'.$id,
            'nama_mkn' => 'required',
            'harga' => 'required',
            'tipe_mkn' => 'required',
            
        ]);
        
        $Makanan =  \App\Models\Makan::findOrFail($id);
        $Makanan->kode_mkn = $request->kode_mkn;
        $Makanan->nama_mkn = $request->nama_mkn;
        $Makanan->harga = $request->harga;
       
        $Makanan->tipe_mkn = $request->tipe_mkn;
        $Makanan->save();
        
        return back()->with('pesan','Data sudah diupdate');
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Makanan = \App\Models\Makan::findOrFail($id);
        $Makanan->delete();
        return back()->with('pesan','Data Sudah Dihapus');
    }
    public function laporan()
    {
        $data['Makan'] = \App\Models\Makan::all();
        $data['Judul']='Laporan Data Makanan';
        return view('makanan_laporan',$data);
    }
    public function cari(Request $request)
    {
        $cari = $request->get('search');
        $data['Makan'] = \App\Models\Makan::where('nama_plg', 'like', '%' . $cari . '%')
            ->orWhere('nohp_plg', 'like', '%' . $cari . '%')
            ->paginate(5);
        $data['Judul'] = 'Data-Data Makanan';
        return view('makanan_index', $data);
    }
}
