@extends('landingpage.index')
@section('content')
<section class="section schedule">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Macam Liquid</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
               

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
                        <td align="center">
                        
                            <a class="btn btn-info btn-sm border border-primary" title="Detail Produk"
                                href=" {{ route('liquid.show',$row->id) }}">
                                <i class="bi bi-eye"></i>&nbsp;&nbsp;Lihat Produk
                            </a>
                           
                        </form>
                    </td>
                @endforeach
            </tbody>
        </table>
        </div>
        </div>
    </div>
</section>
@endsection
 