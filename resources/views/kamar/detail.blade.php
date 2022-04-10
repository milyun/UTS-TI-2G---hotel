@extends('kamar.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div   class="card" style="width: 24rem;">
        <div class="card-header">
        Detail Kamar
 </div>

    <div class="card-body">
        <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>No_Kamar: </b>{{$kamar->no_kamar}}</li>
        <li class="list-group-item"><b>Tipe: </b>{{$kamar->tipe}}</li>
        <li class="list-group-item"><b>Fasilitas: </b>{{$kamar->fasilitas}}</li>
        <li class="list-group-item"><b>Harga: </b>{{$kamar->harga}}</li>
        <li class="list-group-item"><b>Status: </b>{{$kamar->status}}</li>
 </ul>
 </div>
 <a class="btn btn-success mt-3" href="{{ route('kamar.index') }}">Kembali</a>
 </div>
 </div>
</div>
@endsection