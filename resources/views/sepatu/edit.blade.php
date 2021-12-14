@extends('layout.bahagia')

   @section('title', 'Data sepatu')

   @section('judulhalaman', 'Edit sepatu')

   @section('konten')

    <a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($sepatu as $p)
	<form action="/sepatu/update" method="post">
		@csrf
        <input type="hidden" name="kode" value="{{ $p->kodesepatu }}">

        <div class="row">
            <div class="form-group col-sm-5">
                <label for="nama">Merk Sepatu</label>
                <input type="text" class="form-control" required="required" name="merk" value="{{ $p->merksepatu }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-5">
               <label for="stock">Stock</label>
                <input type="text" maxlength="20" class="form-control" required="required" name="stock" value="{{ $p->stocksepatu }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-5">
                <label for="tersedia">Ketersediaan</label>
                <div class="radio">
                    <label for="umur"><input class="form-radio" type="radio" id="html" name="tersedia" value="Y" @if ($p->tersedia === "Y" ) checked="checked" @endif>Tersedia</label>
                </div>
                <div class="radio">
                    <label for="kosong"><input type="radio" id="css" name="tersedia" value="N" @if ($p->tersedia === "N" ) checked="checked" @endif>Kosong</label>
                </div>
            </div>
        </div>

		<button type="submit" class="btn btn-primary"> Update Data</button>
	</form>
	@endforeach

    @endsection
