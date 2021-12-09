@extends('layout.bahagia')

   @section('title', 'Data Pegawai')

   @section('judulhalaman', 'Data Pegawai')

   @section('konten')
    <br>
	<a class="btn-sm btn-primary" role="button" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/> <br>

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
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    @endsection
