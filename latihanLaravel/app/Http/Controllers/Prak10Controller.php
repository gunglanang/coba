<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbkategori;
class Prak10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Menampilkan data dari tabel tbkategori
        $KData = tbkategori::get();
        $JRek = tbkategori::count();

        return view('praktikum10.tugas1', compact('KData','JRek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Menampilkan form untuk menambahkan data baru
        return view('praktikum10.tugas1create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Menerima data dari form buat kategori
        $psn = [
            'required'=>'Field Harus Diisi!!',
        ];
        $this->validate($request,[
            'txkat'=>'required',
            'txdesk'=>'required',
        ],$psn);

        kategoris::create(
            [
                'KATEGORI'=>$request->txkat,
                'KETERANGAN'=>$request->txdesk,
            ]
        );
        return redirect()->route('prak10.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Menampilkan form dan data yang ingin diubah
        $eDT = kategoris::where('ID',$id)->first();
        return view('praktikum10.tugas1edit', compact('eDT'));
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
        //Proses perubahan data
        kategoris::where('ID',$id)->update([
            'KATEGORI'=> $request->txkat,
            'KETERANGAN'=> $request->txdesk,
        ]);
        return redirect()->route('prak10.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Proses hapus data
        kategoris::where('ID',$id)->delete();
        return redirect()->route('prak10.index');
    }
}