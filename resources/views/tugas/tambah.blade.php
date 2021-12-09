@extends('layout.bahagia')

@section('title', 'Data Pegawai')

@section('judulhalaman', 'Tambah Tugas Pegawai')

@section('konten')

    <a href="/tugas"> << Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/input" method="post">
		@csrf
		<div class="form-group row">
            <div class="col-xs-3">
             <label for="">IDPegawai</label>
                <select class="form-control" name="IDPegawai" >
                    @foreach($pegawai as $p)
                     <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }} {{ $p->pegawai_id }}</option>
                    @endforeach
                </select>
            </div>
        </div>

		<label for="tanggal"> Tanggal </label>
        <div class="row">
            <div class='col-sm-3'>
               <div class="form-group">
                  <div class='input-group date' id='datetimepicker2'>
                     <input type='text' name="tanggal" required  class="form-control" />
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>
               </div>
            </div>
            <script type="text/javascript">
               $(function () {
                   $('#datetimepicker2').datetimepicker({
                    format: 'YYYY-MM-DD hh:mm:ss',
                    showTodayButton: false,
                    locale : 'id',
                    "defaultDate": new Date(),
                   });
               });
            </script>
         </div>

        <div class="form-group row">
            <div class="col-xs-3">
                <label for="tugas">Nama Tugas</label>
                <input class="form-control" type="text" name="namatugas" required="required" class="input">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-xs-1">
                <label for="status"> Status </label>
                <select class="form-control" name="status" class="input">
                    <option value="Y">Y</option>
                    <option value="N">N</option>
                </select>
            </div>
        </div>

		<button type="submit" class="btn btn-primary"> + Tambah Data</button>
	</form>

@endsection
