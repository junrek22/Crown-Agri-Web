<!-- <div id="dashboard">
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
</div> -->



<div class="main-content">
    <!-- In the main-content div, replace the existing row div with this: -->
  <div class="row">
    <div class="col-md-12 clearfix">
      <ul class="list-inline links-list pull-right" style="margin: 0; padding: 10px 15px;">
          <!-- Language Selector -->
          <li class="dropdown language-selector" style="display: inline-block; margin-right: 15px;">
              Language: &nbsp;
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                  <img src="plugins/assets/images/flags/flag-uk.png" width="16" height="16" />
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
  <div class="row">
    <div class="col-sm-12">
        <div class="well">
            <h2 style="text-align: left;" >Welcome Dear User, <strong>Ann Smith</strong></h2>
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
 <footer class="main">
    <a>&copy; 2025 <strong>CATCORP</strong> All Rights Reserved</a>
  </footer>
<!-- END OF MAIN TAG -->
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

<link rel="stylesheet" href="plugins/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
<link rel="stylesheet" href="plugins/assets/css/font-icons/entypo/css/entypo.css">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
<link rel="stylesheet" href="plugins/assets/css/bootstrap.css">
<link rel="stylesheet" href="plugins/assets/css/neon-core.css">
<link rel="stylesheet" href="plugins/assets/css/neon-theme.css">
<link rel="stylesheet" href="plugins/assets/css/neon-forms.css">
<link rel="stylesheet" href="plugins/assets/css/custom.css">
<link rel="stylesheet" href="plugins/assets/css/skins/green.css">
<link rel="stylesheet" href="plugins/assets/css/monthy_report.css">
<link rel="stylesheet" href="plugins/assets/css/quarterly_report.css">
<link rel="stylesheet" href="plugins/assets/css/annual_report.css">

<script src="plugins/assets/js/gsap/TweenMax.min.js"></script>
<script src="plugins/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<script src="plugins/assets/js/bootstrap.js"></script>
<script src="plugins/assets/js/joinable.js"></script>
<script src="plugins/assets/js/resizeable.js"></script>
<script src="plugins/assets/js/neon-api.js"></script>
<script src="plugins/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
<script src="plugins/assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="plugins/assets/js/jquery.sparkline.min.js"></script>
<script src="plugins/assets/js/rickshaw/vendor/d3.v3.js"></script>
<script src="plugins/assets/js/rickshaw/rickshaw.min.js"></script>
<script src="plugins/assets/js/raphael-min.js"></script>
<script src="plugins/assets/js/morris.min.js"></script>
<script src="plugins/assets/js/toastr.js"></script>
<script src="plugins/assets/js/fullcalendar/fullcalendar.min.js"></script>
<script src="plugins/assets/js/neon-chat.js"></script>
<script src="plugins/assets/js/neon-custom.js"></script>
<script src="plugins/assets/js/neon-demo.js"></script>
<!-- Imported styles on this page -->
<link rel="stylesheet" href="plugins/assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
<link rel="stylesheet" href="plugins/assets/js/rickshaw/rickshaw.min.css">


