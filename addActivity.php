<?php include('include/head.php') ?>
<body class="theme-red visible-xs">

  <?php include('include/pageLoader.php') ?>
  <?php include('include/overlay_sideBar.php') ?>
  <?php include('include/overlay_sideBar.php') ?>
  <?php include('include/searchBar.php') ?>
  <?php include('include/topNavigation.php') ?>
  <?php include('include/leftNavigation.php') ?>
  <?php include('include/addActivity.php') ?>



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

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

        <!-- Multi Select Plugin Js -->
        <script src="plugins/multi-select/js/jquery.multi-select.js"></script>

        <!-- noUISlider Plugin Js -->
        <script src="plugins/nouislider/nouislider.js"></script>

            <!-- Moment Plugin Js -->
            <script src="plugins/momentjs/moment.js"></script>

            <!-- Bootstrap Material Datetime Picker Plugin Js -->
            <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>

    <script>
    //Get noUISlider Value and write on
    function getNoUISliderValue(slider, percentage) {
        slider.noUiSlider.on('update', function () {
            var val = slider.noUiSlider.get();
            if (percentage) {
                val = parseInt(val);
                val += '%';
            }
            $(slider).parent().find('span.js-nouislider-value').text(val);
        });
    }



    $('#optgroup').multiSelect({ selectableOptgroup: true });

    //noUISlider
    var sliderBasic = document.getElementById('nouislider_basic_example');
    noUiSlider.create(sliderBasic, {
        start: [30],
        connect: 'lower',
        step: 1,
        range: {
            'min': [0],
            'max': [100]
        }
    });
    getNoUISliderValue(sliderBasic, true);


    //Datetimepicker plugin
    $('.datetimepicker').bootstrapMaterialDatePicker({
        format: 'dddd DD MMMM YYYY - HH:mm',
        clearButton: true,
        weekStart: 1
    });


    </script>
</body>

</html>
