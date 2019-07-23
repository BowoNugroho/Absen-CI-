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
</head>
<body>
  <div id="content">
    <div id="content-header" >
      <div id="breadcrumb"> <a href="<?php echo base_url(); ?>index.php/C_patroli/showpatroli"class="tip-bottom"><i class="icon icon-table"></i> Tabel Kelas</a> </div>
      <h1>SMK N 2 KLATEN</h1><br>
      <div class="container-fluid">  \
        <div class="container-fluid"> 
          <div class="container">
            <h2>Tambah Kelas</h2>
            <form class="form-horizontal" action="<?php echo base_url(); ?>/index.php/C_patroli/savelokasi" method="POST" >
              <div class="form-group">
                <label class="control-label col-sm-2" >Nama Kelas :</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" placeholder="Masukan kelas" name="lokasi" method="POST">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" >ID Kelas :</label>
                <div class="col-sm-8">          
                  <input type="password" class="form-control" placeholder="Masukan RFID" name="rfid" method="POST">
                  <button id="myBtn" type="submit" style="display: none;">Button</button>
                </div>
              </div>
            </form>
          </div>
        </div>          
      </div>
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                <h5>Daftar Kelas</h5>
              </div>
              <div >
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kelas</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach($menampilkan_lokasi as $u) { 
                      ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $u->nama_lokasi ?></td>
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
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/matrix.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/matrix.tables.js"></script>
<script>
  var input = document.getElementById("rfid");
  input.addEventListener("keyup", function(event) {
    event.preventDefault();
    // if (event.keyCode === 13) {
    //     document.getElementById("myBtn").click();
    // }
  });
</script>
</body>
</html>
