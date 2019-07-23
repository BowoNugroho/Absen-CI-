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
	<!--Header-part-->
	<div id="header">
		<h3><img src="<?php echo base_url(); ?>assets/img/logosmk1.png" width ="178px" height="60" ></h3>
	</div>
	<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Menu</a>
		<ul>
			<?php if($this->session->userdata('status')=='admin'):?>
				<li><i class="icon icon-user"></i> <span><?php echo $this->session->userdata('nama_petugas'); ?></span></li>
				<li><a href="<?php echo base_url(); ?>index.php/C_patroli/showpatroli"><i class="icon icon-table"></i> <span>Patroli</span></a></li>
				<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i>Add</a>
					<ul>
						<li><a href="<?php echo base_url(); ?>index.php/C_patroli/showlokasi"><i class="icon icon-table"></i> <span>Daftar Kelas</span></a></li>
						<li><a href="<?php echo base_url(); ?>index.php/C_patroli/showdaftar"><i class="icon icon-table"></i> <span>Daftar Petugas</span></a></li>	
					</ul>					
					<li><a href="<?php echo base_url(); ?>index.php/C_patroli/showgrafik"><i class="icon icon-signal"></i> <span>Grafik</span></a> </li>
					<li class=""><a href="<?php echo base_url(); ?>index.php/C_login/logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
					<?php else:?>
						<li><i class="icon icon-user"></i> <span><?php echo $this->session->userdata('nama_petugas'); ?></span></li>
						<li><a href="<?php echo base_url(); ?>index.php/C_patroli/showpatroli"><i class="icon icon-table"></i> <span>Patroli</span></a></li>			
						<li><a href="<?php echo base_url(); ?>index.php/C_patroli/showgrafik"><i class="icon icon-signal"></i> <span>Grafik</span></a> </li>
						<li class=""><a href="<?php echo base_url(); ?>index.php/C_login/logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
					<?php endif;?>
				</ul>
			</div>
			<!--sidebar-menu-->

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
