<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$tugas = DB::table('tugas')->get();

    	// mengirim data pegawai ke view index
    	return view('tugas.index',['tugas' => $tugas]);

    }

    public function tambah(){
        return view('tugas.tambah');
    }

    public function input(Request $request){
        DB::table('tugas')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->tanggal,
            'NamaTugas' => $request->namatugas,
            'Status' => $request->status
        ]);

        return redirect('/tugas');
    }

    // method untuk edit data pegawai
        public function edit($id)
        {
            // mengambil data pegawai berdasarkan id yang dipilih
            $tugas = DB::table('tugas')->where('ID',$id)->get();

            // passing data pegawai yang didapat ke view edit.blade.php
            // return Carbon::parse($id)->format('Y-m-d\TH:i');
            return view('tugas.update',['tugas' => $tugas]);

        }

        // update data pegawai
        public function update(Request $request)
        {
            // update data pegawai
            DB::table('tugas')->where('ID',$request->ID)->update([
                'IDPegawai' => $request->IDPegawai,
                'Tanggal' => $request->tanggal,
                'NamaTugas' => $request->namatugas,
                'Status' => $request->status
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/tugas');
        }

        // method untuk hapus data tugas pegawai
        public function hapus($id)
        {
            // menghapus data tugas pegawai berdasarkan id yang dipilih
            DB::table('tugas')->where('ID',$id)->delete();

            // alihkan halaman ke halaman pegawai
            return redirect('/tugas');
        }
}
