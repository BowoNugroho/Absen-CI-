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
      <div id="content-header">
        <div id="breadcrumb"><a href="<?php echo base_url(); ?>index.php/C_patroli/showpatroli" class="current"><i class="icon icon-table"></i>Tables</a> <a href="#" class="current">Scan</a></div>
        <h1>Silahkan Melakukan SCAN ID Kelas.
            <div class="container-fluid">
                <div class="row-fluid">
                  <div class="span12">
                      <div >
                        <table class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th><h4>SCAN ID Kelas</h4></th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th class="center">
                            <div > 
                                <form id="myform1" name="myform" action="<?php echo base_url(); ?>/index.php/C_patroli/savedata" method="POST">
                                    <input type="password"  name="scan" id="scan1">
                                    <button id="myBtn" type="submit" style="display: none;">Button</button>
                                </form>
                            </div>
                        </th>
                    </tr>
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
    var input = document.getElementById("scan");
    input.addEventListener("keyup", function(event) {
        event.preventDefault();
    // if (event.keyCode === 13) {
    //     document.getElementById("myBtn").click();
    // }
});
</script>
<script type="text/javascript">
    document.myform.scan.focus();
</script>
</body>
</html>
