<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinumController extends Controller
{
    public function index()
    {
        
        $data['Minum']= \App\Models\Minum::paginate(5);
        $data['Judul']= 'Data-Data Minuman';
        return view('minuman_index',$data);
    
    }
    public function create()
    {
       
        $data['list_mnm'] = ['Teh','Kopi','Susu','EsBuah','Air Mineral','KopiSusu'];
        $data['list_tipe'] = ['Dingin','Hangat'];
        return view('minuman_create',$data);
        
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_mnm' => 'required|unique:minums,kode_mnm',
            'nama_mnm' => 'required',
            'harga_mnm' => 'required',
            'tipe_mnm' => 'required',
            
        ]);
        
        $Minuman = new \App\Models\Minum();
        $Minuman->kode_mnm = $request->kode_mnm;
        $Minuman->nama_mnm = $request->nama_mnm;
        $Minuman->harga_mnm = $request->harga_mnm;
       
        $Minuman->tipe_mnm = $request->tipe_mnm;
        $Minuman->save();
        
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
        $data['Minum']=\App\Models\Minum::findOrFail($id);
        $data['list_tipe'] = ['Dingin','Hangat'];
        $data['list_mnm'] = ['Teh','Kopi','Susu','EsBuah','Air Mineral','KopiSusu'];
        return view('minuman_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
        $request->validate([
            'kode_mnm' => 'required|unique:minums,kode_mnm,'.$id,
            'nama_mnm' => 'required',
            'harga_mnm' => 'required',
            'tipe_mnm' => 'required',
            
        ]);
        
        $Minuman = \App\Models\Minum::findOrFail($id);
        $Minuman->kode_mnm = $request->kode_mnm;
        $Minuman->nama_mnm = $request->nama_mnm;
        $Minuman->harga_mnm = $request->harga_mnm;
       
        $Minuman->tipe_mnm = $request->tipe_mnm;
        $Minuman->save();
        
        return back()->with('pesan','Data sudah diupdate');
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Minuman = \App\Models\Minum::findOrFail($id);
        $Minuman->delete();
        return back()->with('pesan','Data Sudah Dihapus');
    }
    public function laporan()
    {
        $data['Minum'] = \App\Models\Minum::all();
        $data['Judul']='Laporan Data Minuman';
        return view('minuman_laporan',$data);
    }
    public function cari(Request $request)
    {
        $cari = $request->get('search');
        $data['Minum'] = \App\Models\Minum::where('kode_mnm', 'like', '%' . $cari . '%')
            ->orWhere('nama_mnm', 'like', '%' . $cari . '%')
            ->paginate(5);
        $data['Judul'] = 'Data-Data Minum';
        return view('minuman_index', $data);
    }
}
