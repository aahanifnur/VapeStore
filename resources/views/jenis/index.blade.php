@extends('admin.index')
@section('content')
<div class="card text-center">
        <div class="card-body">
            <h3 class="card-header">Kategori</h3>
            <table class="datatable table table-bordered border-info">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                    </tr>
                </thead>
                <tbody>

                    @php 
                        $no= 1; 
                    @endphp

                    @foreach($jenis as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->nama_jenis }}</td>
                    </tr>
                    @endforeach

                </tbody>
                
            </table>
            <div class="card-footer text-muted">
                <a class="btn btn-primary btn-sm col-2" title="Tambah Jenis Produk" href=" {{ route('jenis.create') }}">
                    <i class="bi bi-plus-square-fill">&nbsp;&nbsp; Tambah Data Produk</i> 
                </a>
            </div>
        </div>

    </div>
</div>

@endsection