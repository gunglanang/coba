<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kategoriController extends Controller
{
    public function index(){
    	$kategori = DB::table('tbkategori')->get();
    	return view('kategori',compact('kategori'));
    }
}
