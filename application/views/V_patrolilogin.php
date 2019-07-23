<!DOCTYPE html>
<html lang="en">

<head>
    <title>Patroli</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-login.css" />
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

</head>
<body>
    <div id="loginbox">            
        <form id="loginform" class="form-vertical" action="<?php echo base_url(); ?>/index.php/C_login/login" method="POST">
           <div class="control-group normal_text"> <h3><img src="<?php echo base_url(); ?>assets/img/logosmk.png" width ="178px" height="180" /></h3></div>
           <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"></i></span><input type="text" placeholder="username" name="username" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"/>
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="password" name="password" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"/>
                </div>
            </div>
        </div>
         <div class="form-actions">
            <span class="pull-left"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Petunjuk</button></span>
            <span class="pull-right"><button type="submit" class="btn btn-success" > Login</button></span>
        </div>
    </form>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Petunjuk Cara Kerja Sistem</h4>
      </div>
      <div class="modal-body">
        <p>Login</p>
        <ol>
            <li>Buka Aplikasi Web Patroli Absen</li>
            <li>Masukan Username dan Passwordnya yang telah terdaftar, setelah itu klik login</li>
        </ol>
        <p>Menu Patroli</p>
        <ol>
            <li>Klik button "Tambah" untuk melakukan scan id kelas, setelah lihat tabel patrolinya</li>
            <li>Klik button "edit" untuk menambahkan catatan kondisi di kelas saat itu</li>
            <li>Setelah itu akan masuk ke halaman edit, langsung saja berikan catatanya dan klik "save", lihat perubahannya</li>
            <li>Atur tanggal pada form "pilih tanggal" untuk melihat data di hari sebelumnya lalu klik "cari",Lalu lihat tabel dibawahnya</li>
        </ol>
        <p>Menu Add</p>
        <ol>
            <li>Pilih Daftar Kelas</li>
            <li>Lalu akan masuk ke halaman daftar kelas</li>
            <li>Setelah itu masukan nama kelas dan id kelas lalu enter, Lihat tabel dibawah nya</li>
            <li>Setelah itu pilih Daftar Petugas</li>
            <li>Lalu akan masuk ke halaman daftar petugas</li>
            <li>Setelah itu masukan identitas petugasnya, lalu klik "submit" dan Lihat tabel dibawah nya</li>
        </ol>
        <p>Menu Grafik</p>
        <ol>
            <li>Pilih Menu Grafik</li>
            <li>Lalu akan masuk ke halaman grafik</li>
            <li>Tabel di bawahnya akan tampil data/laporan hari itu juga jika sudah melakukan patroli</li>
            <li>Atur range tanggal untuk melihat laporan di tanggal sebelumnya setelah itu klik "cari", Lalu lihat laporan patrolinya</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
      </div>
    </div>

  </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>  
<script src="<?php echo base_url(); ?>assets/js/matrix.login.js"></script> 
</body>
</html>