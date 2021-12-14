@extends('layout.bahagia')

   @section('title', 'Data Sepatu')

   @section('judulhalaman', 'Data Sepatu')

   @section('konten')
    <br>
	<a class="btn-sm btn-primary" role="button" href="/sepatu/tambah"> + Tambah Sepatu Baru</a>

	<br> <br>
    <form action="/sepatu/cari" method="GET">
        <div class="form-group">
            <div class='col-sm-4 input-group'>
                <input type="text" id="wage" class="form-control" name="cari" placeholder="Cari Sepatu.." value="{{ old('cari') }}">
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-search"> </span>
                </span>
            </div> <br>
            <button class="btn btn-default"> <span class="glyphicon glyphicon-search"> </span> Cari </button>
        </div>
	</form>
    <br>

	<table class="table table-hover" >
		<tr>
			<th>Kode Sepatu</th>
			<th>Merk Sepatu</th>
			<th>Stock Sepatu</th>
			<th>Tersedia</th>
		</tr>
		@foreach($sepatu as $s)
		<tr>
			<td>{{ $s->kodesepatu }}</td>
			<td>{{ $s->merksepatu }}</td>
			<td>{{ $s->stocksepatu }}</td>
			<td>{{ $s->tersedia }}</td>
			<td>
                <a href="/sepatu/detail/{{ $s->kodesepatu }}">Lihat Detail</a>
				|
				<a href="/sepatu/edit/{{ $s->kodesepatu }}">Edit</a>
				|
				<a href="/sepatu/hapus/{{ $s->kodesepatu }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
<br>
Halaman : {{ $sepatu->currentPage() }} <br/>
	Jumlah Data : {{ $sepatu->total() }} <br/>
	Data Per Halaman : {{ $sepatu->perPage() }} <br/>


<div style="text-align: center;"> {{ $sepatu->links() }} </div>


    @endsection
