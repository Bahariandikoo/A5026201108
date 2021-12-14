@extends('layout.bahagia')

   @section('title', 'Data Pegawai')

   @section('judulhalaman', 'Data Pegawai')

   @section('konten')
    <br>
	<a class="btn-sm btn-primary" role="button" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br> <br>
    <form action="/pegawai/cari" method="GET">
        <div class="form-group">
            <div class='col-sm-4 input-group'>
                <input type="text" id="wage" class="form-control" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
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
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}">Lihat Detail</a>
				|
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
<br>
Halaman : {{ $pegawai->currentPage() }} <br/>
	Jumlah Data : {{ $pegawai->total() }} <br/>
	Data Per Halaman : {{ $pegawai->perPage() }} <br/>


<div style="text-align: center;"> {{ $pegawai->links() }} </div>


    @endsection
