<section class="content">
  <div class="block-header">
      <h2>Add Activity</h2>
  </div>
    <div class="container-fluid row">

      <div class="card">
        <div class="clearfix body">
          <div class="col-xs-12 ">
            <input name="group4" type="radio" id="radio_1" class="radio-col-red">
            <label for="radio_1">One Time Activity</label>
          </div>
          <div class="col-xs-12" style="margin-bottom:0">
            <input name="group4" type="radio" id="radio_2" class="radio-col-red">
            <label for="radio_2">Sequesnce Activity</label>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="header">
          <h2>Select starting Date and time</h2>
        </div>
        <div class="clearfix body">
          <div class="col-xs-12">
            <div class="row clearfix">

                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="datetimepicker form-control" placeholder="Please choose date & time...">
                        </div>
                    </div>

            </div>
          </div>

        </div>
      </div>

      <div class="card">
        <div class="header">
          <h2>Time interval</h2>
        </div>
        <div class="clearfix body">
          <div class="col-xs-12">
            <div class="row clearfix">


              <select class="form-control show-tick">
                  <option value="">-- Please select --</option>
                  <option value="10">10 mins</option>
                  <option value="20">20 mins</option>
                  <option value="30">30 mins</option>
                  <option value="40">40 mins</option>
                  <option value="50">50 mins</option>
                  <option value="50">1 hr</option>
              </select>


            </div>
          </div>

        </div>
      </div>

      <div class="card">
        <div class="header">
          <h2>Select Sensors</h2>
        </div>
        <div class="clearfix body">
          <div class="col-xs-12">
            <select id="optgroup" class="ms" multiple="multiple">
                    <option value="AK">Sensor A</option>
                    <option value="AK2">Sensor B</option>
                    <option value="AK3">Sensor C</option>
                    <option value="AK4">Sensor D</option>
                    <option value="AK5">Sensor E</option>

            </select>
          </div>

        </div>
      </div>

      <div class="card" style="margin-bottom:50px">
        <div class="header">
          <h2>Select Sensitivity</h2>
        </div>
        <div class="clearfix body">
          <div class="col-xs-12">
            <div id="nouislider_basic_example"></div>
            <div class="m-t-20 font-12"><b>Value: </b><span class="js-nouislider-value"></span></div>
          </div>

        </div>
      </div>



    </div>
    <button type="button" class="btn btn-block btn-lg bg-red waves-effect fixed" style="position:fixed;bottom:0;left:0">Save</button>
</section>
