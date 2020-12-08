<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    //Property untuk Index
    public function index(){
        $produk = "sandal jc 289";
        return view('produk/index');
    }
    //Property Showproduk
    public function showproduk(){
        $produk = ["sandal jc 289","buku y 788", "kuwe 787","tas 888"];
        return view('produk/showproduk', compact('produk'));
    }
}