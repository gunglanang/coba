<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class prak9Controller extends Controller
{
    //Menampilkan jumlah data total data Record
    public function QB_tugas1(){
    	$JRekProduk = DB::table('produks')->count();
    	$JREkkategori = DB::table('tbkategori')->count();

    	return view('tugas2',compact('JRekProduk','JREkkategori'));
    }
    //Menampilkan jumlah data total data Record
    public function QB_tugas2(){
    	$id_ket = 3;
    	$PData = DB::table('produks')->where('ID_KATEGORI',$id_ket)->get();
    	$JRek = DB::table('tbkategori')->where('ID',$id_ket)->count();

    	return view('qb_tugas2',compact('PData','JRek','id_ket'));
    }
}

