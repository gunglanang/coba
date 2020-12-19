<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'tbpelanggan';
    protected $fillable = [
        'tarif_id', 'meter_no', 'name', 'phone', 'address'
    ];

    public function bill()
    {
        return $this->hasMany(Tagihan::class);
    }
    public function payment()
    {
        return $this->hasMany(Pembayaran::class);
    }
    public function tarif()
    {
        return $this->belongsTo(Tarif::class);
    }
}
