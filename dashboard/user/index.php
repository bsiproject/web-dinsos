<?php
ob_start();
require_once('config/koneksi.php');
require_once('models/database.php');

$connection = new Database($host, $user, $pass, $database);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Halaman User</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<link href="assets/dataTables/dataTables.bootstrap.js" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Sistem Informasi Pelayanan Masyarakat</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Layanan Publik <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?page=bpjsmandiri">BPJS Mandiri</a></li>
                <li><a href="?page=dataterpadu">Data Terpadu</a></li>
                <li><a href="?page=bansos">Bantuan Sosial</a></li>
              </ul>
            </li>
            <li>
            <hr><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a>
            </li><
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

      <?php
       if(@$_GET['page'] == 'dashboard' || @$_GET['page'] == '') {
       include "views/dashboard.php";
     } else if (@$_GET['page'] == 'bpjsmandiri') {
        include "views/bpjsmandiri.php";
     }else if (@$_GET['page'] == 'dataterpadu') {
        include "views/dataterpadu.php";
     }else if (@$_GET['page'] == 'bansos') {
        include "views/bansos.php";
     }
     
       ?>
     

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
<script src="assets/dataTables/jquery.dataTables.js"></script>
<script src="assets/dataTables/dataTables.bootstrap.js"></script>
<script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
  </body>
</html>