@extends('layout.bahagia')

   @section('title', 'Data Pegawai')

   @section('judulhalaman', 'Edit Pegawai')

   @section('konten')

    <a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		@csrf
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

        <div class="row">
            <div class="form-group col-sm-5">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-5">
               <label for="jabatan">Jabatan</label>
                <input type="text" maxlength="20" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-5">
                <label for="umur">Umur</label>
                <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-5">
               <label for="alamat">Alamat</label>
               <textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>

		<button type="submit" class="btn btn-primary"> Update Data</button>
	</form>
	@endforeach

    @endsection
