@extends('admin.index')
@section('content')
<div class="card text-center">
        <div class="card-body">
            <h3 class="card-header">Data Penjual</h3>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered border-info datatable">
                <thead class="table-info">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no= 1; @endphp
                    @foreach($penjual as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->no_telp }}</td>
                        <td>{{ $row->alamat }}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="card-footer text-muted">
                <a class="btn btn-primary btn-sm col-2" title="Tambah Penjual" href=" {{ route('penjual.create') }}">
                    <i class="bi bi-plus-square-fill"></i> Tambah Data Penjual
                </a>
            </div>
        </div>

    </div>
</div>

@endsection