@extends('landingpage.index')
@section('content')
<section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Produk Kami :</h2>
        </div>
        <!-- ======= Portfolio Details Section ======= -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title" align="center">{{ $row->nama}}</h5>

            <!-- Slides only carousel -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ url('/public/admin/img')}}/{{$row->foto}}" class="d-block w-100" alt="...">
                </div>
              </div>
            </div><!-- End Slides only carousel-->
            
          </div>
        </div>

          <div class="card-body">
                    <div class="alert alert-secondary">
              <h3>Informasi Produk :</h3>
              <ul>
                <li><strong>Nama Produk</strong>: {{ $row->nama}}</li>
                <li><strong>Distributor</strong>: {{ $row->penjual->name}}</li>
                <li><strong>Kategory</strong>: {{ $row->jenis->nama_jenis}}</li>
                <li><strong>Harga</strong>: Rp. {{number_format($row['Harga'], 2, ',', '. ')}}</li>
                <li><strong>Alamat</strong>: {{ $row->penjual->alamat }}</li>
                <li><strong>No. Telephone</strong>: {{ $row->penjual->no_telp }}</li>
              </ul>
            </div>
            
        </div>
          <p align="right"><a href="{{ url('coil') }}" class="btn btn-primary btn-lg"><i class="bi bi-reply" aria-hidden="true"></i></a></p>

      </div>
    </section><!-- End Portfolio Details Section -->

      </div>
      
    </section><!-- End Team Section -->

    @endsection