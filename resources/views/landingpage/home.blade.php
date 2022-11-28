@extends('landingpage.index')
@section('content')

<!-- ======= hero Section ======= -->
<section id="hero">

<div class="hero-content" data-aos="fade-up">
  <h2>Keep Calm<br>&<br>Vape On!</h2>
  <div>
    <br><br><br>
    <a href="{{ asset('/about') }}" class="btn-get-started scrollto">Lihat Selengkapnya</a>
  </div>
</div>

{{-- Nanti ini buat bikin background ! --}}
{{-- <div class="hero-slider swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide" style="background-image: {{url('assets/img/hero-carousel/1.jpg')}};"></div>
    <div class="swiper-slide" style="background-image: {{url('assets/img/hero-carousel/2.jpg')}};"></div>
    <div class="swiper-slide" style="background-image: {{url('assets/img/hero-carousel/3.jpg')}};"></div>
    <div class="swiper-slide" style="background-image: {{url('assets/img/hero-carousel/4.jpg')}};"></div>
    <div class="swiper-slide" style="background-image: {{url('assets/img/hero-carousel/5.jpg')}};"></div>
  </div>
</div> --}}

</section><!-- End Hero Section --> 

@endsection