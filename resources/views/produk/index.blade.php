@extends('admin.index')
@section('content')
<div class="card text-center">
    <div class="card-body">
        <h3 class="card-header">Data Produk</h3>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="card-footer text-muted">
                <a class="btn btn-primary btn-sm col-2" title="Tambah Produk" href=" {{ route('produk.create') }}">
                    <i class="bi bi-file-earmark-plus"></i> &nbsp;&nbsp; Tambah Data Produk

                </a> &nbsp;

                <a alig="left" class="btn btn-danger btn-sm col-2" title="Download as PDF" href=" {{ url('/public/produk-pdf') }}">
                    <i class="bi bi-file-earmark-pdf"></i>&nbsp;Export to PDF
                </a> &nbsp;

                <a class="btn btn-success btn-sm col-2" title="Export to Excel" href="{{ url('produk-excel') }}">
                    <i class="bi bi-file-earmark-excel"></i>&nbsp;Export to Excel
                </a>
            </div>

        <table class="datatable table table-bordered border-info">
            <thead class="table-info">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Distributor</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $no= 1; @endphp
                @foreach($produk as $row)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->jenis->nama_jenis}}</td>
                    <td>{{ $row->Stok }}</td>
                    <td>Rp. {{number_format($row['Harga'], 2, ',', '. ')}}</td>
                    <td>{{ $row->penjual->name}}</td>
                    <td width="25%" align="center">
                        @empty($row->foto)
                        <img src="{{ url('/public/admin/img/nophoto.png') }}" width="35%" alt="Profile" class="border border-3 rounded">
                        @else
                        <img src="{{ url('/public/admin/img')}}/{{$row->foto}}" width="35%" alt="Profile" class="border border-3 rounded">
                        @endempty
                    </td>
                    <td>
                        <form method="POST" action="{{ route('produk.destroy',$row->id) }}">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-info btn-sm" title="Detail Produk"
                                href=" {{ route('produk.show',$row->id) }}">
                                <i class="bi bi-eye"></i>
                            </a>
                            &nbsp;
                            <a class="btn btn-warning btn-sm" title="Ubah Produk"
                                href=" {{ route('produk.edit',$row->id) }}">
                                <i class="bi bi-pencil"></i>
                            </a>
                            &nbsp;
                            <button type="submit" class="btn btn-danger btn-sm" title="Hapus Produk"
                                onclick="return confirm('Anda Yakin Data akan diHapus?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                        <!-- <a class="btn btn-info btn-sm" title="Detail Produk" 
                        href="{{ route('produk.show',$row->id) }}">
                            <i class="bi bi-eye"></i>
                        </a> -->
                        <!-- <a class="btn btn-info btn-sm" title="Tambah Data" 
                        href="{{ route('produk.show',$row->id) }}">
                            <i class="bi bi-plus-square-fill"></i>
                        </a> -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>
@endsection