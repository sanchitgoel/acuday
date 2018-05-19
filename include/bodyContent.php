<section class="content">
    <div class="container-fluid row">
        <!-- <div class="block-header">
            <h2>DASHBOARD</h2>
        </div> -->

        <div class="row clearfix">
            <?php include('sensorsActivityInfo.php') ?>
            <?php include('taskInfo.php') ?>

        </div>

        <div class="row clearfix">
          <?php include('widgets.php') ?>
        </div>

        
        <div class="row clearfix">
          <?php include('cpuUsage.php') ?>
        </div>



        <div class="row clearfix">
          <?php include('visitorsInfo.php') ?>

          <?php include('answeredTickets.php') ?>
        </div>
    </div>
</section>
