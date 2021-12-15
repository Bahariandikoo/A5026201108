@extends('layout.bahagia')

   @section('title', 'Data Keranjang')

   @section('judulhalaman', 'Tambah Barang')

   @section('konten')

	<br/>
	<br/>

	<form class="form-group" action="/keranjang/store" method="post">
		@csrf
        <div class="row">
            <div class="form-group col-sm-5">
                <label for="nama">Kode Barang</label>
            <input class="form-control" type="number" name="kode" required="required">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-5">
               <label for="jabatan">Jumlah</label>
            <input class="form-control" type="number" name="jumlah" required="required">
            </div>
        </div>
        <div style="margin-left: 10px;" class="row">
            <div class="form-group">
                <div class='col-sm-4 input-group'>
                    <span class="input-group-addon">
                        <span> Rp. </span>
                      </span>
                    <input type="number" class="form-control" name="harga" id="dengan-rupiah">
                </div>
            </div> <br>
        </div>
        <button type="submit" class="btn btn-primary"> + Tambah Data</button>
	</form>

@endsection
