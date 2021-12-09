@extends('layout.bahagia')

   @section('title', 'Data Pegawai')

   @section('judulhalaman', 'Data Tugas Pegawai')

   @section('konten')

<a class="btn btn-primary" href="/tugas/tambah"> + Tambah Data Baru</a> <br> <br>
<table class="table table-hover" >
    <tr>
        <td> ID Pegawai </td>
        <td> Tanggal </td>
        <td> Nama Tugas </td>
        <td> Status </td>
        <td> Action </td>
    </tr>
    @foreach($tugas as $p)
	    <tr>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->NamaTugas }}</td>
            <td>{{ $p->Status }}</td>
			<td>
				<a href="/tugas/update/{{ $p->ID }}">Edit</a> |
				<a href="/tugas/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
</table>
<p>
    Keterangan Status: <br>
    Y : Sudah <br>
    N : Belum <br>
    </p>
@endsection
