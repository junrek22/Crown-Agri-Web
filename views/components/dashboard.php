<!-- Main Content -->
<div class="main-content">
<!-- In the main-content div, replace the existing row div with this: -->
    <div class="row">
        <div class="col-md-12 clearfix">
            <ul class="list-inline links-list pull-right" style="margin: 0; padding: 10px 15px;">
                <!-- Language Selector -->
                <li class="dropdown language-selector" style="display: inline-block; margin-right: 15px;">
                    Language: &nbsp;
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                        <img src="../assets/images/flags/flag-uk.png" width="16" height="16" />
                    </a>
                    <ul class="dropdown-menu dropdown-persist">
                        <li><a href="#"><img src="../assets/images/flags/flag-uk.png" alt="English" width="16" height="16" /> English</a></li>
                    </ul>
                </li>

                <!-- Logout Button -->
                <li style="display: inline-block;">
                    <a href="extra-login.html" style="padding: 0;">
                        <i class="entypo-logout"></i> Log Out
                    </a>
                </li>
            </ul>
        </div>
    </div>       
    <hr />
    <!-- Welcome Section -->
    <div class="row">
        <div class="col-sm-12" style="text-align: left;">
            <div class="well" style="text-align: left;">
                <h2>Welcome Dear User, <strong>Ann Smith</strong></h2>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <div id="dashboard">
                <div class="chart-container">
                    <div class="plot-chart" id="sales-profit">
                        <h3>SALES PROFIT</h3>
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
    <!-- Footer -->
    <footer class="main">
        <a>&copy; 2025 <strong>CATCORP</strong> All Rights Reserved</a>
    </footer>
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



