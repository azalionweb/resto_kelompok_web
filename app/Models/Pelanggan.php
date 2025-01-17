<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $fillable = ['kode_plg', 'nama_plg', 'nohp_plg','jk'];

 
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'pelanggan_id', 'id');
    }
   

}
