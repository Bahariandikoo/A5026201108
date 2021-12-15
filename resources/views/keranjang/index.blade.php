@extends('layout.bahagia')

   @section('title', 'Data Keranjang')

   @section('judulhalaman', 'Data Keranjang')

   @section('konten')

	<table class="table table-hover" >
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga Per Item</th>
            <th>Total</th>
            <th> Action</th>
        </tr>
		@foreach($keranjang as $p)
    <tr>
        <td>{{ $p->ID }}</td>
        <td>{{ $p->KodeBarang }}</td>
        <td>{{ $p->Jumlah }}</td>
        <td>{{ number_format($p->Harga)}}</td>
        <td>{{ number_format($p->Jumlah*$p->Harga) }}</td>
        <td>
            <a class="btn-sm btn-primary" role="button" href="/keranjang/tambah"> Beli </a>
            |
            <a class="btn-sm btn-danger" role="button" href="/keranjang/hapus/{{ $p->ID }}">Batal</a>
        </td>
    </tr>
    @endforeach
	</table>
<br>

    @endsection
