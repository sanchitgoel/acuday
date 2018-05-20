<section class="content">
  <div class="block-header">
      <h2>Manage Sensors</h2>
  </div>

  <div class="container-fluid row">

    <!-- Add new sensor -->
    <div class="card">
      <div class="header">
        <h2>Add New Sensor</h2>
      </div>
      <div class="clearfix body">
        <div class="col-xs-12">
          <canvas id="radar_chart" height="250"></canvas>
        </div>

        <div class="col-xs-12">
          <h3>New Sensors:</h3>
          <ul class="dashboard-stat-list">
              <li class="clearfix">
                  Sensor 7
                   <button type="button" data-type="prompt" class="btn bg-red waves-effect pull-right"><i class="material-icons">add_circle</i></button>
              </li>
              <li class="clearfix">
                  Sensor 8
                   <button type="button" data-type="prompt" class="btn bg-red waves-effect pull-right"><i class="material-icons">add_circle</i></button>
              </li>

          </ul>
        </div>

      </div>
    </div>
    <!-- Add new sensor -->

    <!-- Remove new sensor -->
    <div class="card">
        <div class="body bg-blue-grey">
            <div class="font-bold m-b--35">REMOVE SENSOR</div>
            <ul class="dashboard-stat-list js-sweetalert removeList">
                <li class="clearfix">
                    Sensor A
                     <button type="button" data-type="confirm" class="btn bg-grey waves-effect pull-right"><i class="material-icons">remove_circle</i></button>
                </li>
                <li class="clearfix">
                    Sensor B
                     <button type="button" data-type="confirm" class="btn bg-grey waves-effect pull-right"><i class="material-icons">remove_circle</i></button>
                </li>
                <li class="clearfix">
                    Sensor C
                    <button type="button" data-type="confirm" class="btn bg-grey waves-effect pull-right"><i class="material-icons">remove_circle</i></button>
                </li>
                <li class="clearfix">
                    Sensor C
                    <button type="button" data-type="confirm" class="btn bg-grey waves-effect pull-right"><i class="material-icons">remove_circle</i></button></span>
                </li>
                <li class="clearfix">
                    Sensor D
                    <button type="button" data-type="confirm" class="btn bg-grey waves-effect pull-right"><i class="material-icons">remove_circle</i></button></span>
                </li>
                <li class="clearfix">
                    ALL
                    <button type="button" data-type="confirm" class="btn bg-grey waves-effect pull-right"><i class="material-icons">remove_circle</i></button></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./Remove new sensor -->


  </div>
</section>
