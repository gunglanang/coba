@extends('pratikum')
@section('JDUL PAGE','Saftar Stok Produk')
@section('KONTEN')
<h3>Daftar Produk</h3>
<sup>Total Data:{{$JRek}}</sup>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">produk</th>
      <th scope="col">kategori</th>
      <th scope="col">hargajual</th>
      <th scope="col">harga beli</th>
      <th scope="col">stok</th>
      <th scope="col"><a href="{{route('prak11.create')}}">tambah data</a></th>
    </tr>
  </thead>
  <tbody>
  	@foreach($KData as $i=>$p)
    <tr>
      <th scope="row">{{$i+1}}</th>
      <td>{{$p->NAMA}}</td>
      <td>{{$p->HARGA_JUAL}}</td>
      <td>{{$p->HARGA_BELI}}</td>
      <td>{{$p->QTY}}</td>
      <td>EDIT</td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop