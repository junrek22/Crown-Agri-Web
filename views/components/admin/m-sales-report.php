<div class="row">
        <div class="col-sm-12">
            <div class="well" >
                <h2 style="text-align: left;"><strong>Monthly report</strong></h2>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-sm-12">
         <div class="panel-design-global item-space-between">
            <div id="file-container">
                <label for="file-upload" id="label-upload">Upload Excel</label>
                <input type="file" name="file-upload" id="file-uploader">
            </div>
            <div>
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
            <div id="bar-line-container">
                <div class="plot-chart">
                    <div id="Globalplotchart-header-container">
                        <div id="Globalplotchart-header">
                            <h3>ANNUALLY SALE REPORT</h3>
                            <p>Latest, May 2025</p>
                        </div>
                        <select id="sales-chart" name="" class="dropdown-global adjust-vertical-default">
                            <option value="Present">Present</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                    <canvas id="myChart" class="chart"></canvas>
                </div>
                <div class="plot-chart">
                    <div id="Globalplotchart-header-container">
                        <div id="Globalplotchart-header">
                            <h3>TOTAL OF SALES REVENUE</h3>
                            <p>Latest, May 2025</p>
                        </div>
                        <select id="revenue-chart" name="" class="dropdown-global adjust-vertical-default">
                            <option value="Present">Present</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                    <canvas id="myChart3" class="chart"></canvas>
                </div>
            </div>
        </div>
    </div>
<script>
  const ctx = document.getElementById('myChart');
  const ctx3 = document.getElementById('myChart3');
  const ctx4 = document.getElementById('myChart4');
  var char_bar = new Chart(ctx, bar_chart);
  var char_line = new Chart(ctx3, line_chart_sales_report);
  var char_pie = new Chart(ctx4, pie_chart);
</script>
