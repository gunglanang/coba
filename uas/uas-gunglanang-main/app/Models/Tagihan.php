<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;
    protected $table = 'tbtagihan';
    protected $fillable = [
        'customer_id', 'bill_year', 'bill_month', 'bill_kwhusage', 'bill_total', 'bill_status'
    ];

    public function customer()
    {
        return $this->belongsTo(Pelanggan::class);
    }
}
