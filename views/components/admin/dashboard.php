<div class="row">
        <div class="col-sm-12">
            <div class="well" >
                <h2 style="text-align: left;">Welcome Dear User, <strong>Ann Smith</strong></h2>
            </div>
        </div>
    </div>
    <!-- <hr> -->
    <div class="row">
        <div class="col-sm-12">
            <div class="chart-container">
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
                <div class="plot-chart" id="pie-chart">
                    <h3>RANKED OF MOST PURCHASED PRODUCT</h3>
                    <p>Latest, May 2025</p>
                    <canvas id="myChart4" class="chart"></canvas>
                </div>
            </div>
        </div>
    </div>
<script>
  const ctx = document.getElementById('myChart');
  const ctx3 = document.getElementById('myChart3');
  const ctx4 = document.getElementById('myChart4');
  var char_bar = new Chart(ctx, bar_chart);
  var char_line = new Chart(ctx3, line_chart_dashboard);
  var char_pie = new Chart(ctx4, pie_chart);
</script>



