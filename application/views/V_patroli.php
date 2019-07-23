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
      <div id="breadcrumb"> <a href="<?php echo base_url(); ?>index.php/C_patroli/showpatroli"class="tip-bottom"><i class="icon icon-table"></i> Tabel Patroli</a> </div>
      <h1>SELAMAT DATANG <?php echo $this->session->userdata('nama_petugas'); ?> Silahkan melakukan patroli, Klik Tambah untuk Patroli.<a href="<?php echo base_url(); ?>index.php/C_patroli/showscan"><button style="width: 100px;height: 50px;" class="btn btn-primary">Tambah</button></a></h1><br>
      <div class="container-fluid">    
        <table style="width: 300px;height: 75px;" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th><h5>Pilih Tanggal</h5></th>
            </thead>
            <tbody>
              <tr class="odd gradeX">
                <td class="center">  
                  <form class="center" method="GET">
                    <input type="date" name="tanggal"> <br>
                    <input type="submit" value="Cari">
                  </form>
                </td>
              </tr>
            </tbody>
          </table>         
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
                        <th>Kelas</th>
                        <th>Catatan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;
                      if (isset($_GET['tanggal'])){
                        if($_GET['tanggal']!=='' ){
                          $tanggal=$_GET['tanggal'];
                          $menampilkan_data = $this->db->query("SELECT
                            A.id_patroli,
                            A.tanggal_jam,
                            C.nama_petugas,
                            B.nama_lokasi,
                            A.catatan
                            FROM
                            tbl_patroli AS A
                            LEFT JOIN tbl_lokasi AS B ON A.id_lokasi = B.id_lokasi
                            LEFT JOIN tbl_petugas AS C ON A.id_petugas = C.id_petugas
                            WHERE SUBSTRING(A.tanggal_jam,1,10) = '$tanggal'
                            ORDER BY
                            A.id_patroli DESC")->result();}
                        }
                        foreach($menampilkan_data as $u)

                          { ?>
                            <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $u->tanggal_jam ?></td>
                              <td><?php echo $u->nama_petugas ?></td>
                              <td><?php echo $u->nama_lokasi ?></td>
                              <td><?php echo $u->catatan ?></td>
                              <td class="center"><a href="<?php echo base_url(); ?>index.php/C_patroli/showedit/<?php echo $u->id_patroli; ?>"><button type="button" class="btn btn-info">Edit</button></a></td>
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
      <script type="text/javascript">
        document.div.area.focus();
      </script>
    </body>
    </html>
