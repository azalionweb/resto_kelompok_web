<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'transaksis';
    protected $dates =['tanggal'];

    protected $fillable = ['pelanggan_id', 'makan_id', 'minum_id','waiter_id', 'biaya'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id', 'id');
    }

    public function makan()
    {
        return $this->belongsTo(Makan::class, 'makan_id');
    }
    public function minum()
{
    return $this->belongsTo(Minum::class, 'minum_id');
}

public function waiter()
{
    return $this->belongsTo(Waiter::class, 'waiter_id');
}



}
