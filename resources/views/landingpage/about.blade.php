@extends('landingpage.index')
@section('content')

<!-- ======= About Section ======= -->
<section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">

          <div align="center" class="col-lg-6 about-img border border-primary">
            <br>
            <br>
            <br>
            
            <img src="{{ url('/public/assets/img/Logo.png')}}">
          </div>

          <div class="col-lg-6 content border border-primary">
            <h2 style="text-align:center"> Welcome to Kelompok 1 Vape House!</h2>
            <h3 style="text-align:justify"> Sebagai salah satu vapesstore online terkemuka sejak 2022,
                Kelompok 1 Vape House dengan bangga menyediakan yang terbaik di antaranya,
                e-liquid, Hardware dan aksesoris. Anda juga akan menemukan berbagai macam 
                e-liquid dari merek populer seperti Nasty Juice dan Dinner Lady, bersama dengan 
                lini produk Double Drip dan Vapouriz Premium kami yang sangat sukses. Dengan rasa 
                mulai dari tembakau hingga mentol, buah-buahan dan makanan penutup dan segala sesuatu 
                di antaranya, ada sesuatu untuk memuaskan semua selera di Vapestore. 
                Pengetahuan khusus dan dedikasi kami terhadap keunggulan akan membantu meningkatkan 
                setiap aspek pengalaman vaping Anda, dan setiap produk telah dipilih dengan 
                cermat oleh vapers, untuk vapers. Kami mengambil langsung dari produsen dan 
                menawarkan layanan pelanggan yang tak tertandingi, memungkinkan Anda berbelanja dengan 
                percaya diri penuh di setiap langkah. 
            </h3>
            <ul>
              <li><i class="bi bi-check-circle"></i> Transaksi Mudah.</li>
              <li><i class="bi bi-check-circle"></i> Banyak Berbagai Jenis Pilihan.</li>
              <li><i class="bi bi-check-circle"></i> Pastinya Terpercaya.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Vape House – Pemasok Rokok Elektronik dan Perlengkapannya</h2>
          <p>Vape House Company adalah toko rokok elektronik dan aksesoris vape terkemuka di Purwokerto. Terkenal sebagai pemasok perintis alat penguap, kami menawarkan berbagai macam jus vape baik e-liquid salt nic dan e-liquid freebase di toko kami dan online. Selain itu, kami secara eksklusif berurusan dengan produk vape berkualitas tinggi dengan harga diskon dan layanan pelanggan yang tak tertandingi. Jadi, berbelanja dari berbagai perangkat keras rokok elektrik seperti tangki, kit, mod, sistem pod, pengisi daya, dan baterai dengan kami, benar-benar bebas repot!</p>
        </div>

        <div class="section-header">
          <h2>Apa Saja Yang Kami Sediakan ?</h2>
        </div>

        <div class="row gy-4">

         <!-- <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-folder-symlink-fill"></i></div>
              <h4 class="title"><a href="index.php?hal=produk">All Produk</a></h4>
              <p class="description"> Berbagai macam produk vape seperti Device, Liquid, Accecoris, dll.</p>
            </div>
          </div> -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-robot"></i></div>
              <h4 class="title"><a href="{{ url('/device')}}">Device</a></h4>
              <p class="description">6 bagian penting dalam vape,yaitu mod(device vape),RDA / RDTA / RBA / TANK (bagian atas vape,untuk menyedot uap liquid vape),
                baterai vape(umumnya tipe baterai 18650), kawat serta kapas khusus vape.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-eyedropper"></i></div>
              <h4 class="title"><a href="{{ url('/liquid')}}">Liquid</a></h4>
              <p class="description">Liquid Vape adalah cairan yang biasa dimasukkan ke dalam rokok elektrik yang saat ini lagi nge-trend. Liquid Vape jika dibandingkan dengan rokok konvensional ini sama seperti tembakaunya, tapi tidak mengandung tar serta nikotin alias 0%..</p>
            </div>
          </div>

          
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <div class="icon"><i class="bi bi-stars"></i></div>
              <h4 class="title"><a href="{{ url('/acc')}}">Accecoris</a></h4>
              <p class="description"> kamu bisa menambahkan beberapa aksesori pada vape untuk melengkapi sensasi vaping.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <div class="icon"><i class="bi bi-battery-charging"></i></div>
              <h4 class="title"><a href="{{ url('/batre')}}">Baterai</a></h4>
              <p class="description"> Vape Store ini menyediakan berbagai varian baterai untuk menunjang kebutuhan vaping kamu.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <div class="icon"><i class="bi bi-voicemail"></i></div>
              <h4 class="title"><a href="{{ url('/coil')}}">Coil</a></h4>
              <p class="description"> Vape Store ini juga menyediakan berbagai macam jenis coil.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

@endsection