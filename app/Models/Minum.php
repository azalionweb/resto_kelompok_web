<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minum extends Model
{
    use HasFactory;
    protected $fillable = ['kode_mnm', 'nama_mnm', 'harga_mnm','tipe_mnm'];
    

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'minum_id');
    }
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
