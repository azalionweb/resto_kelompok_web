<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makan extends Model
{
    use HasFactory;
    protected $fillable = ['kode_mkn', 'nama_mkn', 'harga','tipe_mnm'];
    

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'makan_id');
    }
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
