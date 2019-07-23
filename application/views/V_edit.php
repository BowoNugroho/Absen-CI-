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
  <style type="text/css">
  .margin {
    margin: 10px 10px 10px 10px;
  }
</style>
</head>
<body>
  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="<?php echo base_url(); ?>index.php/C_patroli/showpatroli"class="tip-bottom"><i class="icon icon-table"></i> Form Catatan</a> </div>
      <h1>Silahkan isikan Catatan yang sesuai dengan keadaan Kelas</h1><br> 
    </div>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
              <h5>Patroli Harian</h5>
            </div>
            <div >
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal,Jam</th>
                    <th>Petugas</th>
                    <th>Lokasi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach($menampilkan_data as $data){?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data->tanggal_jam ?></td>
                      <td><?php echo $data->nama_petugas ?></td>
                      <td><?php echo $data->nama_lokasi ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <table class="table table-bordered table-striped" >
          <thead>
            <tr>
              <th>Masukan Catatan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
             <form action="<?php echo base_url(); ?>/index.php/C_patroli/update" name="form" ction="" method="POST"> <th class="center"><textarea name="ctt" style="width: 300px;height: 75px;"></textarea>
              <input type="hidden" name="id" value="<?php echo $data->id_patroli ?>"><br><button type="submit" class="btn btn-info">Save</button></th></form>
            </tr>
          </tbody>
        <?php } ?>
      </table>
    </div>
  </div>
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script> 
  <script src="<?php echo base_url(); ?>assets/js/jquery.ui.custom.js"></script> 
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
  <script src="<?php echo base_url(); ?>assets/js/jquery.uniform.js"></script> 
  <script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script> 
  <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script> 
  <script src="<?php echo base_url(); ?>assets/js/matrix.js"></script> 
  <script src="<?php echo base_url(); ?>assets/js/matrix.tables.js"></script>
  <script type="text/javascript">
    document.form.ctt.focus();
  </script>
</body>
</html>
