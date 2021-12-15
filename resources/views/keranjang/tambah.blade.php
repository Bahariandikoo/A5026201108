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
                    <input type="text" class="form-control" name="harga" id="dengan-rupiah">
                </div>
            </div> <br>
        </div>
        <button type="submit" class="btn btn-primary"> + Tambah Data</button>
	</form>

    <script type="text/javascript">
        /* Dengan Rupiah */
    var dengan_rupiah = document.getElementById('dengan-rupiah');
    dengan_rupiah.addEventListener('keyup', function(e)
    {
        dengan_rupiah.value = formatRupiah(this.value, '');
    });

    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
    }
    </script>
@endsection
