@extends('admin.index')
@section('content')
<section class="section">
      <div class="row">
        
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Grafik Stok Produk</h5>
              <br>
              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                //ambil data nama pegawai dan kekayaan dari DashboardController di fungsi index
                var lbl = [@foreach($ar_stok as $st) '{{ $st->nama }}', @endforeach];
                var stk = [@foreach($ar_stok as $st) {{ $st->Stok }}, @endforeach];
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      //labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                      labels: lbl,
                      datasets: [{
                        label: 'Stok Produk',
                        //data: [65, 59, 80, 81, 56, 55, 40],
                        data: stk,
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->
              <br>
            </div>
          </div>
        </div>

      
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Grafik Jumlah Barang berdasarkan Kategori</h5>

              <!-- Doughnut Chart -->
              <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
              <script>
                var lbl2 = [@foreach($ar_jen as $j) '{{ $j->nama_jenis }}', @endforeach];
                var jns= [@foreach($ar_jen as $j) {{ $j->jumlah }}, @endforeach];
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#doughnutChart'), {
                    type: 'doughnut',
                    data: {
                      labels: lbl2,
                      datasets: [{
                        label: 'My First Dataset',
                        data: jns,
                        backgroundColor: [
                          'rgb(255, 99, 132)',
                          'rgb(201, 203, 207)',
                          'rgb(54, 162, 235)',
                          'rgb(255, 205, 86)',
                          'rgb(100, 159, 30)'
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Doughnut CHart -->

            </div>
          </div>
        </div>

        

      </div>
    </section>
@endsection