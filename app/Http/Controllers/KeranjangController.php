<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$keranjang = DB::table('keranjangbelanja')->get();

    	// mengirim data pegawai ke view index
    	return view('keranjang.index',['keranjang' => $keranjang]);

    }

    public function tambah(){
        return view('keranjang.tambah');
    }

    public function store(Request $request){
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->kode,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga,
        ]);

        return redirect('/keranjang');
    }

}
