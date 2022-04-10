@extends(kamar.layout)

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Data Kamar

                
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('kamar.update', $kamar->no_kamar) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="no_kamar">Nomor Kamar</label>
                        <input type="text" name="no_kamar" class="form-control" id="no_kamar" value="{{ $kamar->no_kamar }}" aria-describedby="no_kamar">
                    </div>
                    <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <input type="tipe" name="tipe" class="form-control" id="tipe" value="{{ $kamar->tipe }}" aria-describedby="tipe">
                    </div>
                    <div class="form-group">
                        <label for="fasilitas">Fasilitas Kamar</label>
                        <input type="fasilitas" name="fasilitas" class="form-control" id="fasilitas" value="{{ $kamar->fasilitas }}" aria-describedby="fasilitas">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Kamar</label>
                        <input type="harga" name="harga" class="form-control" id="harga" value="{{ $kamar->harga }}" aria-describedby="harga">
                    </div>
                    <div class="form-group">
                        <label for="status">Status Kamar</label>
                        <input type="status" name="status" class="form-control" id="status" value="{{ $kamar->status }}" aria-describedby="status">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection