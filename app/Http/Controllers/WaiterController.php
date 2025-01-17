<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaiterController extends Controller
{
    public function index()
    {
        
        $data['Waiter']= \App\Models\Waiter::paginate(5);
        $data['Judul']= 'Data-Data Waiter';
        return view('waiter_index',$data);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $data['list_jk'] = ['Laki-Laki','Perempuan'];
        return view('waiter_create',$data);
        
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_wtr' => 'required|unique:waiters,kode_wtr',
            'nama_wtr' => 'required',
            'nomorhp_wtr' => 'required',
            'alamat_wtr'=>'required',
            'jk' => 'required',
            
        ]);
        
        $Waiter = new \App\Models\Waiter();
        $Waiter->kode_wtr = $request->kode_wtr;
        $Waiter->nama_wtr = $request->nama_wtr;
        $Waiter->nomorhp_wtr = $request->nomorhp_wtr;
        $Waiter->alamat_wtr = $request->alamat_wtr;
        $Waiter->jk = $request->jk;
        $Waiter->save();
        
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
        $data['Waiter']=\App\Models\Waiter::findOrFail($id);
        
        $data['list_jk'] = ['Laki-Laki','Perempuan'];
        return view('waiter_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
        $request->validate([
            'kode_wtr' => 'required|unique:waiters,kode_wtr,'.$id,
            'nama_wtr' => 'required',
            'nomorhp_wtr' => 'required',
            'alamat_wtr'=>'required',
            'jk' => 'required',
           
        ]);
        
        $Waiter = new \App\Models\Waiter();
        $Waiter->kode_wtr = $request->kode_wtr;
        $Waiter->nama_wtr = $request->nama_wtr;
        $Waiter->nomorhp_wtr = $request->nomorhp_wtr;
        $Waiter->alamat_wtr = $request->alamat_wtr;
        $Waiter->jk = $request->jk;
        $Waiter->save();
        
        return back()->with('pesan','Data sudah diupdate');
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Waiter = \App\Models\Waiter::findOrFail($id);
        $Waiter->delete();
        return back()->with('pesan','Data Sudah Dihapus');
    }
    public function laporan()
    {
        $data['Waiter'] = \App\Models\Waiter::all();
        $data['Judul']='Laporan Data Waiter';
        return view('waiter_laporan',$data);
    }
    public function cari(Request $request)
    {
        $cari = $request->get('search');
        $data['Waiter'] = \App\Models\Waiter::where('kode_wtr', 'like', '%' . $cari . '%')
            ->orWhere('nama_wtr', 'like', '%' . $cari . '%')
            ->paginate(5);
        $data['Judul'] = 'Data-Data Waiter';
        return view('index_waiter', $data);
    }
}
