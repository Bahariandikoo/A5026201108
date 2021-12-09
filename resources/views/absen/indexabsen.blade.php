@extends('layout.bahagia')

   @section('title', 'Data Absen')

   @section('judulhalaman', 'Absensi Pegawai')

   @section('konten')

	<a href="/absen/add"> + Tambah Absensi</a>

	<br/>
	<br/>

	<table class="table table-hover" border="1">
		<thead>
            <tr>
                <th>IDPegawai</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($absen as $a)
            <tr>

                <td>{{ $a->IDPegawai }}</td>
                <td>{{ $a->Tanggal }}</td>
                <td>{{ $a->Status }}</td>
                <td>
                    <a href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
                    |
                    <a href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
                </td>
            </tr>
        </tbody>

		@endforeach
	</table>
    <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        </p>
        @endsection
