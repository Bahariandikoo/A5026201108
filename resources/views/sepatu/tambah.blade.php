@extends('layout.bahagia')

   @section('title', 'Data Sepatu')

   @section('judulhalaman', 'Tambah Sepatu Baru')

   @section('konten')
	<a href="/sepatu"><< Kembali</a>

	<br/>
	<br/>

	<form class="form-group" action="/sepatu/store" method="post">
		@csrf
        <div class="row">
            <div class="form-group col-sm-5">
                <label for="nama">Merk Sepatu</label>
            <input class="form-control" type="text" name="merk" required="required">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-5">
               <label for="jabatan">Stock Sepatu</label>
            <input class="form-control" maxlength="11" type="text" name="stock" required="required">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-5">
                <label for="tersedia">Ketersediaan</label>
                <div class="radio">
                    <label for="umur"><input class="form-radio" type="radio" id="html" name="tersedia" value="Y">Tersedia</label>
                </div>
                <div class="radio">
                    <label for="kosong"><input type="radio" id="css" name="tersedia" value="N" checked="checked">Kosong</label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary"> + Tambah Data</button>
	</form>
@endsection
