

   @extends('layout.bahagia')

   @section('title', 'Menambah Absen')
   @section('judulhalaman', 'Menambah Data Absen')

   @section('konten')

   <p> <a href="/absen"><< Kembali</a></p>
    <form action="/absen/store" method="post">
        @csrf



<div class="form-group row">
    <div class="col-xs-3">
     <label for="">IDPegawai</label>
        <select class="form-control" name="idpegawai" >
            @foreach($pegawai as $p)
             <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
    </div>
</div>

        <div class="form-group">
            <label for="dtpickerdemo" class=" control-label">Tanggal :</label>
            <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" required="required" />
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


        Status <br />
        <input type="radio" id="html" name="status" value="I">
        <label for="html">Izin</label><br>
        <input type="radio" id="css" name="status" value="S" checked="checked">
        <label for="css">Sakit</label><br>
        <input type="radio" id="javascript" name="status" value="A">
        <label for="javascript">Alpha</label>

        <button type="submit" class="btn btn-primary"> + Tambah Data</button>
    </form>
@endsection
