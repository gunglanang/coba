<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarif;

class TarifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarif = Tarif::orderBy('id', 'DESC')->get();
        return view('tarif.index', compact('tarif'));
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
            'daya'          => 'required|integer|unique:tbtarif',
            'tarif_perkwh'  => 'required|integer',
            'beban'         => 'required|integer',
        ]);

        Tarif::create([
            'daya'          => $request->daya,
            'tarif_perkwh'  => $request->tarif_perkwh,
            'beban'         => $request->beban,
        ]);

        return redirect()->route('tarif.index');
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
        $tarif          = Tarif::orderBy('id', 'DESC')->get();
        $currentTarif   = Tarif::findOrFail($id);
        return view('tarif.edit', compact('tarif', 'currentTarif'));
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
            'daya'          => 'required|integer|unique:tbtarif,daya,'.$id,
            'tarif_perkwh'  => 'required|integer',
            'beban'         => 'required|integer',
        ]);
        $model                  = Tarif::findOrFail($id);
        $model->daya            = $request->daya;
        $model->tarif_perkwh    = $request->tarif_perkwh;
        $model->beban           = $request->beban;
        $model->save();

        return redirect()->route('tarif.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tarif::destroy($id);
        return redirect()->route('tarif.index');
    }
}
