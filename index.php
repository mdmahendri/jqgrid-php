<?php 
    require 'top.php';
    require 'data.php';
?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row row-offcanvas row-offcanvas-right">

            <div class="col-xs-12 col-sm-12">
                <div class="jumbotron">
                </div>
                <div class="row">
                <?php for($i = 0; $i < 3; $i++) : ?>
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title"><?= $datarss->item[$i]->title ?></h3>
                  </div>
                  <div class="panel-body">
                    <p><?= $datarss->item[$i]->description ?></p>
                    <p><a class="btn btn-default" href="<?= $datarss->item[$i]->link ?>" role="button">Lihat detail »</a></p>
                  </div>
                </div>
                <?php endfor ?>
                </div><!--/row-->
            </div>
        </div>
        <br></br>

        <!-- /.row -->
        <div class="row">
            <div class="col-lg-8">
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i>Rata-Rata Harga Beberapa Barang 2011-2016
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <!-- /.col-lg-4 (nested) -->
                            <div class="col-sm-12">
                                <div id="barchart"></div>
                            </div>
                            <!-- /.col-lg-8 (nested) -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i>Trend Rataan Inflasi
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <!-- /.col-lg-4 (nested) -->
                            <div class="col-sm-12">
                                <div id="linechartMeanInflasi"></div>
                            </div>
                            <!-- /.col-lg-8 (nested) -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i>Perkembangan IHK 2017
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <!-- /.col-lg-4 (nested) -->
                            <div class="col-sm-12">
                                <div id="linechartMeanIHK"></div>
                            </div>
                            <!-- /.col-lg-8 (nested) -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->

            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i>Persentase Jumlah UMK dan UMB Nasional 2016
                    </div>
                    <div class="panel-body">
                        <div id="donutchart"></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i>Perkembangan Inflasi Nasional 2017
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="linechartInflasi"></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i>Perkembangan Inflasi Nasional 2017
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="linechartIHK"></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart", "bar"]});
        google.charts.setOnLoadCallback(drawPie);
        google.charts.setOnLoadCallback(drawBar);
        google.charts.setOnLoadCallback(drawChartInflasi);
        google.charts.setOnLoadCallback(drawChartMeanInflasi);
        google.charts.setOnLoadCallback(drawChartIHK);
        google.charts.setOnLoadCallback(drawChartMeanIHK);  

        function drawBar() {
            var data = google.visualization.arrayToDataTable([
                ["Barang", "Harga"]
                <?php foreach ($rowBar as $bar) {
                    echo ",['" . $bar['nama_barang'] . "'," . $bar['harga'] . "]";
                }?>
            ]);

            var options = {
                width: 600,
                legend: 'none'
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('barchart'));
            chart.draw(data, options);
        }

        function drawPie() {
            var data = google.visualization.arrayToDataTable([
              ['Jenis', 'Jumlah'],
              ['UMK', <?= $rowPie['total_umk'] ?>],
              ['UMB', <?= $rowPie['total_umb'] ?>]
            ]);

            var options = {
              pieHole: 0.4,
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }


        function drawChartInflasi(){  
            var data = google.visualization.arrayToDataTable([  
                  ['Bulan', 'Inflasi'],  
                  <?php  
                  while($row = mysqli_fetch_array($result))  
                  {  
                       echo "['".$row["bulan"]."', ".$row["inflasi_rate"]."],";  
                  }  
                  ?>  
            ]);  
            var options = {
                legend: 'none'
            };  
            var chart = new google.visualization.LineChart(document.getElementById('linechartInflasi'));  
            chart.draw(data, options);  
        }

        function drawChartMeanInflasi(){  
            var data = google.visualization.arrayToDataTable([  
                      ['Tahun', 'Rata-rata'],  
                      <?php  
                      while($row = mysqli_fetch_array($result1))  
                      {  
                           echo "['".$row["tahun"]."', ".$row["rata_inflasi"]."],";  
                      }  
                      ?>  
                 ]);  
            var options = {
                legend: 'none'
            };  
            var chart = new google.visualization.LineChart(document.getElementById('linechartMeanInflasi'));  
            chart.draw(data, options);  
        }

        function drawChartIHK(){  
            var data = google.visualization.arrayToDataTable([  
                ['Bulan', 'IHK'],  
                <?php  
                while($row = mysqli_fetch_array($result2))  
                {  
                   echo "['".$row["bulan"]."', ".$row["ihk"]."],";  
                }  
                ?>  
            ]);  
            var options = {
                legend : 'none'
            };  
            var chart = new google.visualization.LineChart(document.getElementById('linechartIHK'));  
            chart.draw(data, options);  
        }

        function drawChartMeanIHK(){  
            var data = google.visualization.arrayToDataTable([  
                  ['Tahun', 'Rata-rata IHK'],  
                  <?php  
                  while($row = mysqli_fetch_array($result3))  
                  {  
                       echo "['".$row["tahun"]."', ".$row["rata_ihk"]."],";  
                  }  
                  ?>  
            ]);
            var options = {
                legend : 'none'
            };  
            var chart = new google.visualization.LineChart(document.getElementById('linechartMeanIHK'));  
            chart.draw(data, options);  
        }
    </script>

<?php require 'bottom.php' ?>