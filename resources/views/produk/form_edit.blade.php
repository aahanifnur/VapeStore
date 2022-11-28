@extends('admin.index')
@section('content')
@php
$ar_jenis = App\Models\Jenis::all();
$ar_penjual = App\Models\Penjual::all();
@endphp
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Input Produk</h5>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('produk.update',$row->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Produk</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" value="{{$row->nama}}">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="jenis_id">
                                    <option selected>-- Pilih Kategori --</option>
                                    @foreach($ar_jenis as $jen)
                                    @php $sel = ($jen->id == $row->jenis_id) ? 'selected' : ''; @endphp
                                    <option value="{{ $jen->id }}" {{ $sel }}>{{ $jen->nama_jenis }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                       
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Stok</label>
                            <div class="col-sm-10">
                                <input type="text" name="Stok" class="form-control" value="{{$row->Stok}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" name="Harga" class="form-control" value="{{$row->Harga}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Distributor</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="Penjual_id">
                                    <option selected>-- Pilih Distributor --</option>
                                    @foreach($ar_penjual as $pen)
                                    @php $sel = ($pen->id == $row->Penjual_id) ? 'selected' : ''; @endphp
                                    <option value="{{ $pen->id }}" {{ $sel }}>{{ $pen->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="foto">
                                @if(!empty($row->foto)) <img src="{{ url('/public/admin/img')}}/{{$row->foto}}" 
                                                             width="10%" class="img-thumbnail">
                                <br/>{{$row->foto}}
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10 ">

                                <a class="btn btn-info" title="Kembali" href=" {{ url('/produk') }}">
                                    <i class="bi bi-arrow-left-square"> Kembali</i>
                                </a>
                                &nbsp;
                                <button type="submit" class="btn btn-primary" title="Simpan Produk"><i
                                        class="bi bi-save"></i> Ubah</button>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>


@endsection