@extends('admin.index')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card text-dark bg-light mb-3">
                <div class="card-body">
                    <h5 class="card-title">Form Input Distributor</h5>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Terjadi Kesalahan saat input data<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form class="row g-3" method="POST" action="{{ route('penjual.store')}}">
                        @csrf
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Input Nama Distributor Baru:</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Input Nomor Telepon Distributor Baru:</label>
                            <input type="text" class="form-control" name="no_telp">
                        </div>

                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Input Alamat Distributor Baru:</label>
                            <input type="text" class="form-control" name="alamat">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-danger">Batal</button>
                        </div>
                    </form><!-- Vertical Form -->
                    

                </div>
            </div>
        </div>
    </div>
</section>

@endsection