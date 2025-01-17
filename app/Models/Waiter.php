<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waiter extends Model
{
    use HasFactory;

    protected $fillable =['kode_wtr', 'nama_wtr','alamat_wtr', 'no_hpwtr', 'jk'];


    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'waiter_id');
    }
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
