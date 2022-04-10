@extends('kamar.layout')

@section('content')

<!-- <style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style> -->

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>KAMAR HOTEL</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('kamar.create') }}"> Input Kamar</a>
        </div>
        </div>
    </div>
    <!-- Start kode untuk form pencarian -->

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-error">
        <p>{{ $message }}</p>
    </div>
@endif

<form class="form" method="get" action="\search">
    <div class="form-group w-100 mb-3">
        <label for="search" class="d-block mr-2">Pencarian</label>
        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
        <button type="submit" class="btn btn-primary mb-1">Cari</button>
    </div>

<table class="table table-bordered">
    <tr>
        <th>Nomer Kamar</th>
        <th>Tipe</th>
        <th>Fasilitas</th>
        <th>Harga</th>
        <th>Status</th>
        <th width="280x">Action</th>
    </tr>
    @foreach ($kamar as $kmr)
    <tr>
    <td>{{ $kmr->no_kamar }}</td>
        <td>{{ $kmr->tipe }}</td>
        <td>{{ $kmr->fasilitas }}</td>
        <td>{{ $kmr->harga }}</td>
        <td>{{ $kmr->status }}</td> 
        <td>
        <form action="{{ route('kamar.destroy',['kamar'=>$kmr->no_kamar]) }}" method="POST">
            <a class="btn btn-info" href="{{ route('kamar.show',$kmr->no_kamar) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('kamar.edit',$kmr->no_kamar) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
</table>


@endsection