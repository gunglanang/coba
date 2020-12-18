<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prodaks;

class Prak11Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Menampilkan seluruh data dari tabel Produk
        $KData = prodaks::get();
        $JRek = prodaks::count();

        return view('pratikum11.index',compact('KData','JRek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Menampilkan form untuk menambah data produk baru
        $DKat = kategoris::get();

        return view('pratikum11.create',compact('DKat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Membuat Validasi Data
        $aturan = [
            'txProduk'=>'required',
            'txHARGA_BELI'=>'required|numeric',
            'txHARGA_JUAL'=>'required|numeric',
            'txStok'=>'required|numeric',
            'txKategori'=>'required|numeric',
        ];
        $msg = [
            'required'=>'wajib diisi',
            'numeric'=>'diisi dengan data angka',
        ];

        //lakukan validasi form
        $this->validate($request,$aturan,$msg);

        //Menambahkan data produk baru
        produks::create([
            'NAMA'=>$request->txProduk,
            'HARGA_BELI'=>$request->txHARGA_BELI,
            'HARGA_JUAL'=>$request->txHARGA_JUAL,
            'QTY'=>$request->txStok,
            'ID'=>$request->txKategori,
        ]);
        return redirect()->route('prak11.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Menampilkan data berdasarkan kriteria
        $kreteria = "%".$id."%";
        $PDataKret = prodak::where('NAMA_PRODUK','like',$kreteria)->get();
        $JRek = prodak::where('NAMA_PRODUK','like',$kreteria)->count();
        return view('praktikum11.index',compact('KData','JRek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}