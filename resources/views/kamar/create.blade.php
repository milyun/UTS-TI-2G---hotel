@extends('kamar.layout')
@section ('content')

<div class="container mt-5">

        <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
                <div class="card-header">
            Tambah Kamar
        </div>
        <div class="card-body">
            @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Menambahkan inputan Error.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
         @endif

 
         <form method="post" action="{{ route('kamar.store') }}" id="myForm">
 
            @csrf
 
            <div class="form-group">
                <label for="no_kamar">No kamar</label>
                <input type="text" name="no_kamar" class="form-control" id="no_kamar" aria-describedby="no_kamar" >
            </div>
 
            <div class="form-group">
                <label for="tipe">Tipe</label>
                <input type="text" name="tipe" class="form-control" id="tipe" ariadescribedby="tipe" >
            </div>

 
            <div class="form-group">
                <label for="fasilitas">Fasilitas</label>
                <input type="text" name="fasilitas" class="form-control" id="fasilitas" ariadescribedby="fasilitas" >
            </div>

 
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" class="form-control" id="harga" ariadescribedby="harga" >
            </div>

            <div class="form-group">
                <label for="status">status</label>
                <input type="text" name="status" class="form-control" id="status" ariadescribedby="status" >
            </div>

 
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
 
        </form>
 
    </div>
 
</div>

</div>

</div>

@endsection