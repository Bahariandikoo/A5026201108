<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>

    <style>
        .input{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
	<h3>Data Tugas Mahasiswa Pemograman WEB Kelas A</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>
    @foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		@csrf
        <input type="hidden" name="ID" value="{{ $p->ID }}"> <br/>

		ID Pegawai <br>
        <input type="text" name="IDPegawai" required="required" value="{{$p->IDPegawai}}" class="input"> <br/>

		Tanggal <br>
        <input type="datetime-local" name="tanggal" required="required" value="{{ date('Y-m-d\TH:i', strtotime($p->Tanggal)) }}" class="input"> <br/>
		Nama Tugas <br>
        <input type="text" name="namatugas" required="required" value="{{$p->NamaTugas}}" class="input"> <br/>

		Status <br>
        <select name="status" value="option_select" class="input">
            <option value="{{$p->ID}}">{{ $p->Status}}</option>
            <option value="Y">Y</option>
            <option value="N">N</option>
        </select>

        <br> <br>

		<input type="submit" value="Update Data">
	</form>
    @endforeach

</body>
</html>

{{-- @foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		@csrf
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
		Nama <input type="text" required="required" name="namatugas" value="{{ $p->NamaTugas }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach --}}
