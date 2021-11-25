<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tugas</title>
</head>
<body>
<h1> Data Tugas Pegawai</h1> <br>
<a href="/tugas/tambah"> + Tambah Data Baru</a> <br>
<table border="1">
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
				<a href="/tugas/update/{{ $p->ID }}">Edit</a>
				<a href="/tugas/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
</table>
</body>
</html>
