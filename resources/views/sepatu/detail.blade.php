@extends('layout.bahagia')
@section('title', 'Melihat Detail Sepatu')
@section('judulhalaman', 'Detail Data Sepatu')

@section('konten')
	<a href="/sepatu"> Kembali</a>

	<br/>
	<br/>

	@foreach($sepatu as $p)
    <form method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kode" value="{{ $p->kodesepatu }}"> <br/>
		Merk Sepatu : {{ $p->merksepatu }} <br/>
		Stock :  {{ $p->stocksepatu}} <br/>
		Tersedia :  {{ $p->tersedia}} <br/>
	</form>
	@endforeach

@endsection
