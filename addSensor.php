<?php include('include/head.php') ?>
<body class="theme-red visible-xs">

  <?php include('include/pageLoader.php') ?>
  <?php include('include/overlay_sideBar.php') ?>
  <?php include('include/overlay_sideBar.php') ?>
  <?php include('include/searchBar.php') ?>
  <?php include('include/topNavigation.php') ?>
  <?php include('include/leftNavigation.php') ?>
  <?php include('include/addSensor.php') ?>



    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>
    <!-- Chart Plugins Js -->
    <script src="../../plugins/chartjs/Chart.bundle.js"></script>
    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>


    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>
    <!-- Demo Js -->
    <script src="js/demo.js"></script>
    <script>
    $('button[data-type="prompt"]').on('click', function () {
      let _this = $(this);
      swal({
          title: "Enter Code!!!",
          text: "To Pair your mobile with Sensor's bluetooth, enter the code displayed on your screen.",
          type: "input",
          showCancelButton: true,
          closeOnConfirm: false,
          animation: "slide-from-top",
          inputPlaceholder: "Enter Code"
      }, function (inputValue) {
          if (inputValue === false) return false;
          if (inputValue === "") {
              swal.showInputError("Code Required!"); return false
          }
          swal("Hurrah!", "Successfully paired sensor with code: " + inputValue, "success");
          _this.data('type','confirm');
          _this.removeClass('bg-red').addClass('bg-grey').html('<i class="material-icons">remove_circle</i>');
          _this.parents('li').prependTo('.removeList');
      });

    });

    $('button[data-type="confirm"]').on('click', function () {
      let _this = $(this);
      swal({
          title: "Are you sure?",
          text: "Not to worry, you can add the same sensor later anytime!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false
      }, function () {
          swal("Deleted!", "Your Sensor has been deleted.", "success");
          _this.parents('li').detach();
      });

    });


    new Chart(document.getElementById("radar_chart").getContext("2d"), {
          type: 'radar',
          data: {
              labels: ["N", "E-N", "E", "S-E", "S", "S-W", "W", "N-W"],
              datasets: [{
                  label: "Sensors Availale",
                  data: [2, 1, 0, 3, 2, 1, 1, 0],
                  //borderColor: 'rgba(0, 188, 212, 0.8)',
                  borderColor: 'rgba(0, 0, 0, 0)',
                  backgroundColor: 'rgba(0, 0, 0, 0)',
                  pointBorderColor: 'rgba(0, 188, 212, 0)',
                  pointBackgroundColor: 'rgba(0, 188, 212, 0.8)',
                  pointBorderWidth: 1
              }]
          },
          options: {
              responsive: true,
              legend: true
          }
      });


    </script>
</body>

</html>
