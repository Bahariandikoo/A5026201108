
    @extends('layout.bahagia')

    @section('title', 'Data Pegawai')

    @section('judulhalaman', 'Update Tugas Pegawai')

    @section('konten')

	<a href="/tugas"> << Kembali</a>

	<br/>
    @foreach($tugas as $a)
	<form action="/tugas/update" method="post">
		@csrf
        <input type="hidden" name="ID" value="{{ $a->ID }}"> <br/>

		<div class="form-group row">
            <div class="col-xs-3">
                <label for="idpegawai"> IDPegawai </label>
                <select class="form-control" name="IDPegawai" >
                    @foreach($pegawai as $p)
                     <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
		<div class="form-group">
            <label for="dtpickerdemo" class="control-label">Tanggal :</label>
            <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" value="{{ $a->Tanggal }}" required="required" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <script type="text/javascript">
            $(function() {
                $('#dtpickerdemo').datetimepicker({
                    format: 'YYYY-MM-DD hh:mm:ss',
                    showTodayButton: false,
                    locale : 'id',
                    "defaultDate": new Date(),
                });
            });
        </script>

        <div class="form-group row">
            <div class="col-xs-3">
                <label for="tugas">Nama Tugas</label>
                <input class="form-control" type="text" name="namatugas" value="{{$a->NamaTugas}}" required="required" class="input">
            </div>
        </div>

		<div class="form-group row">
            <div class="col-xs-1">
                <label for="status"> Status </label>
                <select class="form-control" name="status" class="input">
                    <option value="Y"
                     @if ( $a->Status === "Y")  selected="selected"
                    @endif>Y</option>
                    <option value="N" @if ( $a->Status === "N")  selected="selected"
                        @endif>N</option>
                </select>
            </div>
        </div>

        <br>

		<input type="submit" value="Update Data">
	</form>
    @endforeach

@endsection
