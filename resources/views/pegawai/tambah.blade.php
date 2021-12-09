@extends('layout.bahagia')

   @section('title', 'Data Pegawai')

   @section('judulhalaman', 'Tambah Pegawai')

   @section('konten')
	<a href="/pegawai"><< Kembali</a>

	<br/>
	<br/>

	<form class="form-group" action="/pegawai/store" method="post">
		@csrf
        <div class="row">
            <div class="form-group col-sm-5">
                <label for="nama">Nama</label>
            <input class="form-control" type="text" name="nama" required="required">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-5">
               <label for="jabatan">Jabatan</label>
            <input class="form-control" type="text" name="jabatan" required="required">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-5">
                <label for="umur">Umur</label>
            <input class="form-control" type="number" name="umur" required="required">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-5">
               <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" required="required"></textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-primary"> + Tambah Data</button>
	</form>
@endsection
