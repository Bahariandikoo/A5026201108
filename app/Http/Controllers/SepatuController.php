<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SepatuController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$sepatu = DB::table('sepatu')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('sepatu.index',['sepatu' => $sepatu]);

    }

    public function tambah(){
        return view('sepatu.tambah');
    }

    public function store(Request $request){
        DB::table('sepatu')->insert([
            'merksepatu' => $request->merk,
            'stocksepatu' => $request->stock,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/sepatu');
    }

    // method untuk edit data pegawai
        public function edit($id)
        {
            // mengambil data pegawai berdasarkan id yang dipilih
            $sepatu = DB::table('sepatu')->where('kodesepatu',$id)->get();

            // passing data pegawai yang didapat ke view edit.blade.php
            return view('sepatu.edit',['sepatu' => $sepatu]);

        }

         // method untuk view data pegawai
   public function detail($id)
   {
	   // mengambil data pegawai berdasarkan id yang dipilih
       $sepatu = DB::table('sepatu')->where('kodesepatu',$id)->get();

	   // passing data pegawai yang didapat ke view detail.blade.php
	   return view('sepatu.detail',['sepatu' => $sepatu]);

   }

        // update data pegawai
        public function update(Request $request)
        {
            // update data pegawai
            DB::table('sepatu')->where('kodesepatu',$request->kode)->update([
                'kodesepatu' => $request->kode,
                'merksepatu' => $request->merk,
                'stocksepatu' => $request->stock,
                'tersedia' => $request->tersedia
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/sepatu');
        }

        // method untuk hapus data pegawai
        public function hapus($id)
        {
            // menghapus data pegawai berdasarkan id yang dipilih
            DB::table('sepatu')->where('kodesepatu',$id)->delete();

            // alihkan halaman ke halaman pegawai
            return redirect('/sepatu');
        }

        //method untuk cari data pegawai
        public function cari(Request $request)
        {
            // menangkap data pencarian
            $cari = $request->cari;

                // mengambil data dari table pegawai sesuai pencarian data
            $sepatu = DB::table('sepatu')->where('merksepatu','like',"%".$cari."%")
            -> orwhere('kodesepatu','like',"%".$cari."%")
            ->paginate();

                // mengirim data pegawai ke view index
            return view('sepatu.index',['sepatu' => $sepatu]);

        }
}
