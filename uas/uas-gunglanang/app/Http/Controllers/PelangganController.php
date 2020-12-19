<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarif;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarif = Tarif::orderBy('id', 'DESC')->get();
        $pelanggan = Pelanggan::orderBy('id', 'DESC')->get();
        return view('pelanggan.index', compact('tarif', 'pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tarif_id'      => 'required|integer',
            'meter_no'      => 'required|integer',
            'name'          => 'required|string',
            'phone'         => 'required|string|unique:tbpelanggan',
            'address'       => 'required|string'
        ]);

        Pelanggan::create([
            'tarif_id'  => $request->tarif_id,
            'meter_no'  => $request->meter_no,
            'name'      => $request->name,
            'phone'     => $request->phone,
            'address'   => $request->address
        ]);

        return redirect()->route('pelanggan.index');
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
        $tarif              = Tarif::orderBy('id', 'DESC')->get();
        $currentPelanggan   = Pelanggan::findOrFail($id);
        $pelanggan          = Pelanggan::orderBy('id', 'DESC')->get();
        return view('pelanggan.edit', compact('tarif', 'pelanggan', 'currentPelanggan'));
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
        $request->validate([
            'tarif_id'      => 'required|integer',
            'meter_no'      => 'required|integer',
            'name'          => 'required|string',
            'phone'         => 'required|string|unique:tbpelanggan,phone,'.$id,
            'address'       => 'required|string'
        ]);
        $model              = Pelanggan::findOrFail($id);
        $model->tarif_id    = $request->tarif_id;
        $model->meter_no    = $request->meter_no;
        $model->name        = $request->name;
        $model->phone       = $request->phone;
        $model->address     = $request->address;
        $model->save();

        return redirect()->route('pelanggan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pelanggan::destroy($id);
        return redirect()->route('pelanggan.index');
    }
}
