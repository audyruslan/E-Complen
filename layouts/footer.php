 

            </div>
            <!-- End of Main Content -->
 </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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

        // Hapus Data Pelanggan
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
    </script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBT23Hn4kTqEuF8ix4ZutQOhsLlc6J4Hlw&callback=initMap"></script>
      <script>
        function initMap() {
        var markerArray = [];
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
         
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: -0.8364268, lng: 119.891505}
        });
        var stepDisplay = new google.maps.InfoWindow;
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('panel'));
    calculateAndDisplayRoute(directionsDisplay, directionsService, markerArray, stepDisplay, map);
        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsDisplay, directionsService, markerArray, stepDisplay, map);
        };
 
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('finish').addEventListener('change', onChangeHandler);
      }
 
      function calculateAndDisplayRoute(directionsDisplay, directionsService, markerArray, stepDisplay, map) {
       for (var i = 0; i < markerArray.length; i++) {
          markerArray[i].setMap(null);
        }
        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('finish').value,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
            showSteps(response, markerArray, stepDisplay, map);
            $("#error").empty();
            $("#error").removeClass();
          } else {
           $("#error").addClass("badge badge-danger");
            $("#error").text("Tidak dapat menemukan nama lokasi, status error: "+status);
          }
        });
      }
 
      function showSteps(directionResult, markerArray, stepDisplay, map) {
        var myRoute = directionResult.routes[0].legs[0];
        for (var i = 0; i < myRoute.steps.length; i++) {
          var marker = markerArray[i] = markerArray[i] || new google.maps.Marker;
          marker.setMap(map);
          marker.setPosition(myRoute.steps[i].start_location);
          attachInstructionText(
              stepDisplay, marker, myRoute.steps[i].instructions, map);
        }
      }
 
      function attachInstructionText(stepDisplay, marker, text, map) {
        google.maps.event.addListener(marker, 'click', function() {
          stepDisplay.setContent(text);
          stepDisplay.open(map, marker);
        });
      }
    </script>

</body>

</html>