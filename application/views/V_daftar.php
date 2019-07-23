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
      <div id="breadcrumb"> <a href="<?php echo base_url(); ?>index.php/C_patroli/showpatroli"class="tip-bottom"><i class="icon icon-table"></i> Tabel Petugas</a> </div>
      <h1>SMK N 2 KLATEN</h1><br>
      <div class="container-fluid"> 
        <div class="container">
          <h2>Tambah Petugas</h2>
          <form class="form-horizontal" action="<?php echo base_url(); ?>/index.php/C_patroli/savepetugas" method="POST" id="formDaftar">
            <div class="form-group">
              <label class="control-label col-sm-2" >Nama  :</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Masukan nama" name="nama" method="POST" required oninvalid="this.setCustomValidity('harus diisi!!!')" oninput="setCustomValidity('')"/>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >NIP :</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Masukan nip" name="nip" method="POST" required oninvalid="this.setCustomValidity('harus diisi!!!')" oninput="setCustomValidity('')"/>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Status :</label>
              <div class="col-sm-8">
                <select name="status">
                  <option>-Pilih Status-</option>
                  <option value="admin">Admin</option>
                  <option value="petugas">Petugas</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Username :</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Masukan username" name="username" method="POST" required oninvalid="this.setCustomValidity('harus diisi!!!')" oninput="setCustomValidity('')"/>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Password :</label>
              <div class="col-sm-8">          
                <input type="password" class="form-control" placeholder="Masukan password" name="password" method="POST" required oninvalid="this.setCustomValidity('harus diisi!!!')" oninput="setCustomValidity('')"/>
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button><div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
              </div>
            </div>
          </form>
        </div> 
      </div>
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                <h5>Daftar Petugas</h5>
              </div>
              <div >
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Petugas</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php $no = 1;
                   foreach($menampilkan_petugas as $u) { 
                    ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $u->nama_petugas ?></td>
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
</body>
</html>
