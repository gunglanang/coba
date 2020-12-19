<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarif;
use App\Models\Pelanggan;
use App\Models\Tagihan;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarif      = Tarif::orderBy('id', 'DESC')->get();
        $pelanggan  = Pelanggan::orderBy('id', 'DESC')->get();
        $tagihanBelumBayar    = Tagihan::orderBy('id', 'DESC')->where('bill_status', 'Belum Bayar')->get();
        $pembayaran    = Pembayaran::orderBy('id', 'DESC')->get();
        return view('pembayaran.index', compact('tarif', 'pelanggan', 'tagihanBelumBayar', 'pembayaran'));
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
            'bill_id'       => 'required|integer|unique:tbpembayaran',
            'payment_via'   => 'required|string',
        ]);

        $tagihan                = Tagihan::findOrFail($request->bill_id);
        $tagihan->bill_status   = 'Lunas';
        $tagihan->save();
        Pembayaran::create([
            'bill_id'       => $request->bill_id,
            'payment_via'   => $request->payment_via,
        ]);

        return redirect()->route('pembayaran.index');
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
