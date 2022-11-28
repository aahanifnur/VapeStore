<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h3 align="center">Data Pegawai</h3>
    <table border="1" cellpadding="10" align="center">
    <thead class="table-info">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th >Harga</th>
                    <th >Distributor</th>
                </tr>
            </thead>
                <tbody>
                    @php $no= 1; @endphp
                    @foreach($produk as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jenis->nama_jenis}}</td>
                        <td>{{ $row->Stok }}</td>
                        <td>Rp. {{number_format($row['Harga'], 2, ',', '. ')}}</td>
                        <td>{{ $row->penjual->name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

</body>
</html>