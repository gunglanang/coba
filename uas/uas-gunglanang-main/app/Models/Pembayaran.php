<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'tbpembayaran';
    protected $fillable = [
        'bill_id', 'payment_via'
    ];

    public function bill()
    {
        return $this->belongsTo(Tagihan::class);
    }
}
