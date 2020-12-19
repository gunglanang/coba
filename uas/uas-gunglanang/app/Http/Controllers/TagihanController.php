<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarif;
use App\Models\Pelanggan;
use App\Models\Tagihan;

class TagihanController extends Controller
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
        $tagihan    = Tagihan::orderBy('id', 'DESC')->get();
        return view('tagihan.index', compact('tarif', 'pelanggan', 'tagihan'));
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
            'customer_id'    => 'required|integer',
            'bill_year'      => 'required|integer',
            'bill_month'     => 'required|string',
            'bill_kwhusage'  => 'required|string',
            'bill_status'    => 'required|string'
        ]);

        $pelanggan = Pelanggan::findOrFail($request->customer_id);
        $bill_total = $request->bill_kwhusage * $pelanggan->tarif->tarif_perkwh;
        Tagihan::create([
            'customer_id'   => $request->customer_id,
            'bill_year'     => $request->bill_year,
            'bill_month'    => $request->bill_month,
            'bill_kwhusage' => $request->bill_kwhusage,
            'bill_total'    => $bill_total,
            'bill_status'   => $request->bill_status
        ]);

        return redirect()->route('tagihan.index');
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
