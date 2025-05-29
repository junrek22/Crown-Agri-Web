<div class="row">
    <div class="col-sm-12">
        <div class="panel-heading">
            <div class="panel-title" style="padding-left:0;">
                <h3 style="font-weight:bold; color:#00a651;">Sale Forecasting</h3>   
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
         <div class="panel-design-global item-space-between">
            <div class="panel-items-container">
                <div id="file-container">
                    <label for="file-upload" id="label-upload">Upload Excel</label>
                    <input type="file" name="file-upload" id="file-uploader">
                </div>
                <div class="item-space-between">
                    <button type="button" disabled class="btn btn-primary button-margin-left" data-toggle="modal" data-target="#create_user_modal">
                    Upload an excel
                </button>
                </div>
            </div>
            <div class="dropdown-container">
                <select id="report-charts-change_m" name="" class="dropdown-global adjust-vertical-pad">
                    <option value="Jan">--Month--</option>
                    <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                </select>
                <select name="" id="" class="dropdown-global adjust-vertical-pad">
                    <option value="">Graph Sheet</option>
                    <option value="">Table Sheet</option>
                </select>
            </div>
        </div>
    </div>
</div>
    <!-- <hr> -->
<div class="row">
    <div class="col-sm-12">
        <div class="plot-chart sale-forecast-screen">
            <div id="Globalplotchart-header-container">
                <div id="Globalplotchart-header">
                    <h3>SALE FORECAST GRAPH PREDICTION</h3>
                    <p>Latest, May 2025</p>
                </div>
            </div>
            <canvas id="myChart3" height="100" class="chart"></canvas>
        </div>
    </div>
</div>
<script>
    const ctx3 = document.getElementById('myChart3');
    var char_line = new Chart(ctx3, line_chart_forecast);
</script>
