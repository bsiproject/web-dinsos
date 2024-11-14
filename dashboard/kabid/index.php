
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kabid | Beranda</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <!-- Site Icons -->
   <link rel="shortcut icon" href="" type="image/x-icon" />
   <link rel="apple-touch-icon" href="">
   <link rel="icon" type="image/png" href="../user/logo.png">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="navbar-brand" href="index.php">HALAMAN KABID SISTEM INFORMASI PELAYANAN MASYARAKAT</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
       <li class="nav-item">
        <a class="nav-link" data-slide="true" href="logout.php" role="button">
          <i class="fas fa-sign-out-alt" data-toggle="tooltip" title="Keluar"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a>Kabid</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="bpjs.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                BPJS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="dtks.php" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                DTKS
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="bansos.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Bansos
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="kontak.php" class="nav-link">
              <i class="nav-icon far fa-comments"></i>
              <p>
                Kontak
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md">
            <h1 class="m-0"><i class="nav-icon fas fa-home"></i> Halaman Beranda</h1>
          <hr>    
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6 ml">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>BPJS</h3>
                <span class="info-box-number"></span>
                <p>Data BPJS</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-user"></i>
              </div>
              <a href="bpjs.php" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6 ml">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>DTKS</h3>

                <p>Data Terpadu</p>
              </div>
              <div class="icon">
                <i class="nav-icon far fa-address-card"></i>
              </div>
              <a href="dtks.php" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6 ml">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Bansos</h3>

                <p>Data Bantuan Sosial</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-users"></i>
              </div>
              <a href="bansos.php" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>    
          <div class="col-lg-3 col-6 ml">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Kontak</h3>

                <p>Data Kontak</p>
              </div>
              <div class="icon">
                <i class="nav-icon far fa-comments"></i>
              </div>
              <a href="kontak.php" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>  
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://www.instagram.com/ber.nii_/">M. AJi Wijaya</a></strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
