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
        $tugas = DB::table('tugas')
       ->join('pegawai', 'tugas.IDPegawai', '=', 'pegawai.pegawai_id')
       ->select('tugas.*', 'pegawai.pegawai_nama')
       ->paginate(10) ;

    	// mengirim data pegawai ke view index
    	return view('tugas.index',['tugas' => $tugas]);

    }

    public function tambah(){
         // mengambil data dari table pegawai
         $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key

         // memanggil view add
         return view('tugas.tambah', ['pegawai' => $pegawai]);
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

              // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key

            // passing data pegawai yang didapat ke view edit.blade.php
            // return Carbon::parse($id)->format('Y-m-d\TH:i');
            return view('tugas.update',['tugas' => $tugas,'pegawai'=> $pegawai]);

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
