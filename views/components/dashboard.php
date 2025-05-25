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
            <div id="dashboard">
                <div class="chart-container">
                    <div class="plot-chart" id="sales-profit">
                        <h3>SALES REPORT</h3>
                        <canvas id="myChart" class="chart"></canvas>
                    </div>
                    <div class="plot-chart">
                        <h3>BREAKDOWN</h3>
                        <canvas id="myChart2" class="chart"></canvas>
                    </div>
                    <div class="plot-chart">
                        <h3>GAIN AND LOSS</h3>
                        <canvas id="myChart3" class="chart"></canvas>
                    </div>
                    <div class="plot-chart">
                        <h3>RETURN OF INTEREST</h3>
                        <canvas id="myChart4" class="chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
  const ctx = document.getElementById('myChart');
  const ctx2 = document.getElementById('myChart2');
  const ctx3 = document.getElementById('myChart3');
  const ctx4 = document.getElementById('myChart4');
  new Chart(ctx, chart1);
  new Chart(ctx2, chart2);
  new Chart(ctx3, chart3);
  new Chart(ctx4, chart4);
</script>



