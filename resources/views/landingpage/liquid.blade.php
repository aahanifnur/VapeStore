@extends('admin.index')
@section('content')

<section class="section schedule">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Liquid</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
               
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Distributor</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                        @php $no= 1; @endphp
                        @foreach($produk as $row)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->Stok }}</td>
                            <td>Rp. {{number_format($row['Harga'], 2, ',', '. ')}}</td>
                            <td>{{ $row->penjual->name}}</td>
                            <td>
                                <form action="produk_controller.php" method="POST">
                                    <a href="index.php?hal=produk_detail&id=<?= $row['id'] ?>">
                                        <button type="button" class="btn btn-info btn-sm" title="Detail Produk">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                </form>
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection