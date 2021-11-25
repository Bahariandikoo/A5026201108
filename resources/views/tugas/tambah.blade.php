<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>

    <style>
        .input{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
	<h3>Data Tugas Pegawai</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/input" method="post">
		@csrf
		ID Pegawai <br>
        <input type="text" name="IDPegawai" required="required" class="input"> <br/>

		Tanggal <br>
        <input type="datetime-local" name="tanggal" required="required" class="input"> <br/>

		Nama Tugas <br>
        <input type="text" name="namatugas" required="required" class="input"> <br/>

		Status <br>
        <select name="status" class="input">
            <option value="Y">Y</option>
            <option value="N">N</option>
        </select>

        <br> <br>

		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
