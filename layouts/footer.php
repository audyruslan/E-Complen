 

            </div>
            <!-- End of Main Content -->
 </div>
    <!-- End of Page Wrapper -->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih Tombol "Keluar" jika ingin melanjtukan.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="logout.php">Keluar</a>
                </div>
            </div>
        </div>
    </div>

<!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>

      <!-- Sweetalert -->
    <script src="assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- jquery-validation -->
    <script src="assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/vendor/jquery-validation/additional-methods.min.js"></script>

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
    <script src="assets/js/leaflet/leaflet-routing-machine.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>

    <!-- Area Chart -->
    <script>
      var ctx = document.getElementById("keluhanAreaChart");
      var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            lineTension: 0.3,
            backgroundColor: "rgba(78, 115, 223, 0.05)",
            borderColor: "rgba(78, 115, 223, 1)",
            pointRadius: 3,
            pointBackgroundColor: "rgba(78, 115, 223, 1)",
            pointBorderColor: "rgba(78, 115, 223, 1)",
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
            pointHoverBorderColor: "rgba(78, 115, 223, 1)",
            pointHitRadius: 10,
            pointBorderWidth: 2,
            data: [0, 20, 10, 20, 21, 22, 13, 50, 22, 31, 27, 31],
          }],
        },
        options: {
          maintainAspectRatio: false,
          layout: {
            padding: {
              left: 10,
              right: 25,
              top: 25,
              bottom: 0
            }
          },
          scales: {
            xAxes: [{
              time: {
                unit: 'date'
              },
              gridLines: {
                display: false,
                drawBorder: false
              },
              ticks: {
                maxTicksLimit: 7
              }
            }],
            yAxes: [{
              ticks: {
                maxTicksLimit: 5,
                padding: 10,
                // Include a dollar sign in the ticks
                callback: function(value, index, values) {
                  return number_format(value)+ ' keluhan';
                }
              },
              gridLines: {
                color: "rgb(234, 236, 244)",
                zeroLineColor: "rgb(234, 236, 244)",
                drawBorder: false,
                borderDash: [2],
                zeroLineBorderDash: [2]
              }
            }],
          },
          legend: {
            display: false
          },
          tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            titleMarginBottom: 10,
            titleFontColor: '#6e707e',
            titleFontSize: 14,
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            intersect: false,
            mode: 'index',
            caretPadding: 10,
            callbacks: {
              label: function(tooltipItem, chart) {
                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                return datasetLabel + number_format(tooltipItem.yLabel) + ' keluhan';
              }
            }
          }
        }
      });
    </script>

    <!-- Pie Chart -->
    <script>
      var ctx = document.getElementById("keluhanPieChart");
      var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ["Selesai", "Keluhan"],
          datasets: [{
            data: [55, 30],
            backgroundColor: ['#4e73df', '#1cc88a'],
            hoverBackgroundColor: ['#2e59d9', '#17a673'],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
          }],
        },
        options: {
          maintainAspectRatio: false,
          tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
          },
          legend: {
            display: false
          },
          cutoutPercentage: 80,
        },
      });
    </script>

    <?php
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
    ?>
      <script>
          Swal.fire({
              title: '<?= $_SESSION['status'];  ?>',
              icon: '<?= $_SESSION['status_icon'];  ?>',
              text: '<?= $_SESSION['status_info'];  ?>'
          });
      </script>
  <?php
        unset($_SESSION['status']);
    }
    ?>
    <script>
        // Hapus Data Pelanggan
        $(document).on('click', '.hapus_pelanggan', function(e) {

        e.preventDefault();
        var href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda Yakin?',
            text: "Data Pelanggan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data!'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }

        })

        });

        // Hapus Data Administrator
        $(document).on('click', '.hapus_admin', function(e) {

        e.preventDefault();
        var href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda Yakin?',
            text: "Data Administrator!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data!'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }

        })

        });

         // Hapus Data Laporan Pelanggan
        $(document).on('click', '.hapus_laporan', function(e) {

        e.preventDefault();
        var href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda Yakin?',
            text: "Data Laporan Pelanggan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data!'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }

        })

        });
    </script>

    <!-- Maps Semua Pelanggan -->
    <script>
      var map = L.map('map').setView([-0.899629585486179, 119.87738334998697], 13); 
      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      L.marker([-0.8957447825867245, 119.88037353063179]).addTo(map);

      // Mengambil Data Latitude dan Longitude dari Database untuk ditampilkan di Marker dan Popup.
      <?php 
          $sql = mysqli_query($conn, "SELECT * FROM tb_pelanggan");
          while ($row = mysqli_fetch_assoc($sql)) {
      ?>
        L.marker([<?= $row['lat']; ?>, <?= $row['lng']; ?>]).addTo(map).bindPopup("No. Meter : <?= $row['no_meter']; ?><br>"+
                                                                                  "Nama Pelanggan : <?= $row['nama']; ?><br>"+
                                                                                  "<button class='btn btn-sm btn-primary' onclick='return keSini(<?= $row['lat']; ?>, <?= $row['lng']; ?>)'>Ke Sini</button>");
      <?php 
          }
      ?>

      // Menampilkan Da
      var control = L.Routing.control({
          waypoints: [
            L.latLng(-0.8957447825867245, 119.88037353063179),
            L.latLng(-0.8358958153422379, 119.89369369997439)
          ],
          routeWhileDragging: true
        }).addTo(map);

      // Fungsi untuk Mendapatkan Rute 
      function keSini(lat, lng){
        var latLng=L.latLng(lat, lng);
        control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng);
      }

    </script>

    <!-- Maps Detail Pelanggan -->
    <script>
      var map2 = L.map('map2').setView([-0.899629585486179, 119.87738334998697], 8); 
      var latLng1 = L.latLng(-0.8957447825867245, 119.88037353063179);
      <?php 
          $id_lokasi = $_GET["id"];
          $sql = mysqli_query($conn, "SELECT * FROM tb_pelanggan WHERE id = '$id_lokasi'");
          while ($row = mysqli_fetch_assoc($sql)) {
      ?>
          var latLng2 = L.latLng(<?= $row['lat']; ?>, <?= $row['lng']; ?>);
      <?php 
          }
      ?>
      var wp1 = new L.Routing.Waypoint(latLng1);
      var wp2 = new L.Routing.Waypoint(latLng2);

      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map2);

        L.Routing.control({
          waypoints: [latLng1,latLng2]
        }).addTo(map2);

        var routeUs = L.Routing.osrmv1();
        routeUs.route([wp1,wp2], (err,routes) => {
          if(!err){
            // Mencari Rute Terpendek dengan membandingkan dua Variabel best dan bestRoute

            // Variabel best adalah jarak default untuk melakukan perbandingan
            var best = 1000000000000000;

            // Variabel besRoute digunakan untuk menyimpan Nilai Array dari Rute Terdekat
            // Defaultnya adalah 0, karena Array dimulai dari Angka 0
            // Jika Arraynya hanya 1, maka Array 0 Adalah Rute yang paling mendekati yang terdekat
            var bestRoute = 0;
            for(i in routes){
              // Membandingkan Apakah totalDistancenya / totalJaraknya lebih kecil dari best 
              // jika ia, selanjutnya variabel best akan melakukan perbandingan lagi dan jika ada data totalDistance/totalJarak terbaru yang lebih kecil dari yang pertama, atau data sebelumya, hingga menghasilkan data yang paling terkecil dari pembandingnya.
              // Maka Nilai akan disimpan dalam variabel besRoute sebagai nilai terkecil dan rute terpendek
              if(routes[i].summary.totalDistance < best){
                // bestRoutenya adalah rute yang paling terdekat dari hasil perbandingan sebelumnya
                // Urutan ke-i atau Array-0 yang merupakan indeks pertama dalam Array
                bestRoute = i;
                // Nilai bestnya adalah data yang telah dilakukan perbandingan sebelumnya
                best = routes[i].summary.totalDistance;
              }
            }
            console.log('Rute Terbaik', routes[bestRoute]);
            L.Routing.line(routes[bestRoute],{
              styles : [
                {
                  color : 'green',
                  weight : '10'
                }
              ]
            }).addTo(map2);
          }
        })
    </script>
</body>

</html>