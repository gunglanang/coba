<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbkategori extends Model
{
    use HasFactory;
    protected $guarded = ['ID','created_at', 'updated_at'];
    public $table="tbkategori";
}