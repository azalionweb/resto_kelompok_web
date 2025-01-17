<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data['Pelanggan']= \App\Models\Pelanggan::paginate(5);
        $data['Judul']= 'Data-Data Pelanggan';
        return view('pelanggan_index',$data);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $data['list_jk'] = ['Laki-Laki','Perempuan'];
        return view('pelanggan_create',$data);
        
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_plg' => 'required|unique:pelanggans,kode_plg',
            'nama_plg' => 'required',
            'nomorhp_plg' => 'required',
            'alamat_plg' => 'required',
            'jk' => 'required',
            
        ]);
        
        $Pelanggan = new \App\Models\Pelanggan();
        $Pelanggan->kode_plg = $request->kode_plg;
        $Pelanggan->nama_plg = $request->nama_plg;
        $Pelanggan->nomorhp_plg = $request->nomorhp_plg;
        $Pelanggan->alamat_plg = $request->alamat_plg;
        $Pelanggan->jk = $request->jk;
        $Pelanggan->save();
        
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
        $data['Pelanggan']=\App\Models\Pelanggan::findOrFail($id);
       
        $data['list_jk'] = ['Laki-Laki','Perempuan'];
        return view('pelanggan_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, string $id)
    {
      
        $request->validate([
            'kode_plg' => 'required|unique:pelanggans,kode_plg,'.$id,
            'nama_plg' => 'required',
            'nomorhp_plg' => 'required',
            'jk' => 'required',
           
        ]);
        
        $Pelanggan = \App\Models\Pelanggan::findOrFail($id);
        $Pelanggan->kode_plg = $request->kode_plg;
        $Pelanggan->nama_plg = $request->nama_plg;
        $Pelanggan->nomorhp_plg = $request->nomorhp_plg;
        $Pelanggan->jk = $request->jk;
        $Pelanggan->save();
        
        return back()->with('pesan','Data sudah diupdate');
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Pelanggan = \App\Models\Pelanggan::findOrFail($id);
        $Pelanggan->delete();
        return back()->with('pesan','Data Sudah Dihapus');
    }
    public function laporan()
    {
        $data['Pelanggan'] = \App\Models\Pelanggan::all();
        $data['Judul']='Laporan Data Pelanggan';
        return view('pelanggan_laporan',$data);
    }
    public function cari(Request $request)
    {
        $cari = $request->get('search');
        $data['Pelanggan'] = \App\Models\Pelanggan::where('nama_plg', 'like', '%' . $cari . '%')
            ->orWhere('nohp_plg', 'like', '%' . $cari . '%')
            ->paginate(5);
        $data['Judul'] = 'Data-Data Pelanggan';
        return view('pelanggan_index', $data);
    }
    public function registrasi()
    {
        $data['list_jk'] = ['Laki-Laki','Perempuan'];
        return view('registrasi_form', $data);
    }
}
