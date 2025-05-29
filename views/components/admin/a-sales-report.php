<div class="row">
        <div class="col-sm-12">
            <div class="panel-heading">
                <div class="panel-title" style="padding-left:0;">
                    <h3 style="font-weight:bold; color:#00a651;">Annually report</h3>   
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
                <select id="report-charts-change_a" name="" class="dropdown-global adjust-vertical-pad">
                        <option value="Present">Present</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
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
            <div id="sales-report-container-graph">
                <div class="plot-chart">
                    <div id="Globalplotchart-header-container">
                        <div id="Globalplotchart-header">
                            <h3>ANNUALLY SALE REPORT</h3>
                            <p>Latest, May 2025</p>
                        </div>
                    </div>
                    <canvas id="myChart" class="chart"></canvas>
                </div>
                <div class="plot-chart">
                    <div id="Globalplotchart-header-container">
                        <div id="Globalplotchart-header">
                            <h3>REVENUE SALES GRAPH</h3>
                            <p>Latest, May 2025</p>
                        </div>
                    </div>
                    <canvas id="myChart3" class="chart"></canvas>
                </div>
            </div>
        </div>
    </div>
<script>
  const ctx = document.getElementById('myChart');
  const ctx3 = document.getElementById('myChart3');
  var char_bar = new Chart(ctx, bar_chart);
  var char_line = new Chart(ctx3, line_chart_sales_report);
</script>
