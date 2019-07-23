<!DOCTYPE html>
<html lang="en">

<head>
  <title>Patroli</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/uniform.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-style.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-media.css" />
  <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
  <style type="text/css">#container {
    min-width: 310px;
    max-width: 800px;
    height: 400px;
    margin: 0 auto
  }</style>
  <script  type="text/javascript" src="<?php echo base_url(); ?>assets/js/Chart.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/series-label.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
</head>
<body>
  <div id="content">
    <div id="content-header" >
      <div id="breadcrumb"> <a href="<?php echo base_url(); ?>index.php/C_patroli/showpatroli"class="tip-bottom"><i class="icon icon-table"></i> Grafik</a> </div>
      <h1>Grafik</h1><br>
      <div class="container">
        <h2>Pilih Tanggal</h2>
        <form class="center" method="GET">
          <div class="form-group">
            <label class="control-label col-sm-2" >Dari Tanggal :</label>
            <div class="col-sm-10">          
             <input type="date" name="tanggal1"/>
           </div>
         </div>
         <div class="form-group">
          <label class="control-label col-sm-2" >Sampai Tanggal :</label>
          <div class="col-sm-10">          
           <input type="date" name="tanggal2"/>
         </div>
       </div>
       <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" name="cari" value="Cari"/>
        </div>
      </div>
    </form>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Laporan Kelas Yang Dipatroli</h5>
          </div>
          <div >
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kelas</th>
                  <th>Dipatroli</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                if (isset($_GET['cari'])){
                  if($_GET['cari']!=='' ){
                    $tanggal1=$_GET['tanggal1'];
                    $tanggal2=$_GET['tanggal2'];
                    $data1 = $this->db->query("SELECT
                      tbl_patroli.tanggal_jam,
                      tbl_patroli.id_patroli,
                      tbl_lokasi.nama_lokasi,
                      Count(tbl_lokasi.nama_lokasi) as total1
                      FROM
                      tbl_patroli 
                      LEFT JOIN   tbl_lokasi  ON tbl_patroli.id_lokasi  = tbl_lokasi.id_lokasi
                      WHERE DATE(tbl_patroli.tanggal_jam) BETWEEN '$tanggal1' AND '$tanggal2'
                      GROUP BY tbl_lokasi.nama_lokasi")->result();}
                  }
                  foreach($data1 as $u) { 
                    ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $u->nama_lokasi ?></td>
                      <td><?php echo $u->total1 ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
              <h5>Laporan Petugas Yang Patroli</h5>
            </div>
            <div >
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Petugas</th>
                    <th>Patroli (x)</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  if (isset($_GET['cari'])){
                    if($_GET['cari']!=='' ){
                      $tanggal1=$_GET['tanggal1'];
                      $tanggal2=$_GET['tanggal2'];
                      $data2 = $this->db->query("SELECT
                        tbl_patroli.tanggal_jam,
                        tbl_patroli.id_patroli,
                        tbl_petugas.nama_petugas,
                        Count(tbl_petugas.nama_petugas) as total2
                        FROM
                        tbl_patroli 
                        LEFT JOIN   tbl_petugas ON tbl_patroli.id_petugas   = tbl_petugas.id_petugas
                        WHERE DATE(tbl_patroli.tanggal_jam)BETWEEN '$tanggal1' AND '$tanggal2'
                        GROUP BY tbl_petugas.nama_petugas")->result();}
                    }
                    foreach($data2 as $u) { 
                      ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $u->nama_petugas ?></td>
                        <td><?php echo $u->total2 ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<script type="text/javascript">

  Highcharts.chart('container1',{
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false
    },
    title: {
      text: 'Grafik Kelas Yang Dipatroli ( SMK N 2 KLATEN )'
    },
    tooltip: {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: true,
          format: '<b>{point.name}</b>: {point.percentage:.1f} %',
          style: {
            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
          }
        }
      }
    },
    series: [{
      type: 'pie',
      name: 'Persentase Kelas Yang Dipatroli',
      data: [
      <?php 
          // data yang diambil dari database
      if(count($data1)>0)
      {
       foreach ($data1 as $data) {
         echo "['" .$data->nama_lokasi . "'," . $data->total1 ."],\n";
       }
     }
     ?>
     ]
   }]
 });
</script>
<script type="text/javascript">

  Highcharts.chart('container2',{
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false
    },
    title: {
      text: 'Grafik Petugas Yang Patroli ( SMK N 2 KLATEN )'
    },
    tooltip: {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: true,
          format: '<b>{point.name}</b>: {point.percentage:.1f} %',
          style: {
            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
          }
        }
      }
    },
    series: [{
      type: 'pie',
      name: 'Persentase Petugas Yang Patroli',
      data: [
      <?php 
          // data yang diambil dari database
      if(count($data2)>0)
      {
       foreach ($data2 as $data) {
         echo "['" .$data->nama_petugas . "'," . $data->total2 ."],\n";
       }
     }
     ?>
     ]
   }]
 });
</script>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/matrix.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/matrix.tables.js"></script>
</body>
</html>
