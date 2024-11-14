
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Beranda</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link href="dist/assets/dataTables/css/dataTables.bootstrap.css" rel="stylesheet">
  <link href="dist/assets/dataTables/css/dataTables.bootstrap.js" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <!-- Site Icons -->
   <link rel="shortcut icon" href="" type="image/x-icon" />
   <link rel="apple-touch-icon" href="">
   <link rel="icon" type="image/png" href="../images/logo.png">
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
        <a class="navbar-brand" href="index.php">HALAMAN ADMIN SISTEM INFORMASI PELAYANAN MASYARAKAT</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
       <li class="nav-item">
        <a class="nav-link" data-slide="true" href="../pages/examples/logout.php" role="button">
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
          <a>Admin</a>
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
            <h1 class="m-0"><i class="nav-icon fas fa-users"></i> Halaman DTKS</h1>
          <hr>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<?php
include 'koneksi.php';
?>
    <!-- Main content -->
    <form method="POST" action="tambah_dtks_action.php" enctype="multipart/form-data">
      <div class="content-header"> 
      <div class="container-fluid">
        <div class="row">
          <div class="col-md">
            <div class="col-md-8">
              <div class="card card-dark">
                <div class="card-header">
                  <h3 class="card-title">Tambah Data DTKS</h3>
              </div>
      <div class="modal-body">
          <div class="form-group">
            <label>Kecematan</label>
            <input type="hidden" name="id" id="id">
            <input type="text" name="kecamatan" id="kecamatan" class="form-control" required="true">
          </div>
            
           <div class="form-group">
            <label>Desa</label>
            <input type="hidden" name="id" id="id">
            <input type="text" name="desa" id="desa" class="form-control" required="true">
          </div>

           <div class="form-group">
            <label>Alamat</label>
            <input type="hidden" name="id" id="id">
            <input type="text" name="alamat" id="alamat" class="form-control" required="true">
          </div>

           <div class="form-group">
            <label>RT-RW</label>
            <input type="hidden" name="id" id="id">
            <input type="text" name="rt_rw" id="rt_rw" class="form-control" required="true">
          </div>
          <div class="form-group">
            <label>No KK</label>
            <input type="hidden" name="id" id="id">
            <input type="text" name="kk" id="kk" class="form-control" required="true">
          </div>
          <div class="form-group">
            <label>No NIK</label>
            <input type="hidden" name="id" id="id">
            <input type="text" name="nik" id="nik" class="form-control" required="true">
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="hidden" name="id" id="id">
            <input type="text" name="nama" id="nama" class="form-control" required="true">
          </div>
          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="hidden" name="id" id="id">
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required="true">
          </div>
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="hidden" name="id" id="id">
            <input type="text" name="lahir" id="lahir" class="form-control" required="true">
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <input type="hidden" name="id" id="id">
            <input type="text" name="jk" id="jk" class="form-control" required="true">
          </div>
          <div class="form-group">
            <label>Ibu Kandung</label>
            <input type="hidden" name="id" id="id">
            <input type="text" name="ibukandung" id="ibukandung" class="form-control" required="true">
          </div>
          <div class="form-group">
            <label>Hubungan Keluarga</label>
            <input type="hidden" name="id" id="id">
            <input type="text" name="keluarga" id="keluarga" class="form-control" required="true">
          </div>
            
      <div class="form-group">
            <button type="submit" name="simpan" id="simpan" value="simpan" class="btn btn-success">
               Simpan
            </button>
            
            <a href="dtks.php"><button type="button" class="btn btn-danger" title="Kembali">Kembali</button></a>
            </button>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
         
        </tbody>
      </table>
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
<script type="text/javascript" src="dist/DataTables/datatables.min.js"></script>
<script src="dist/assets/dataTables/js/jquery.dataTables.js"></script>
<script src="dist/assets/dataTables/js/dataTables.bootstrap.js"></script>
<script>
$(document).ready(function () {
$('#dataTables-example').dataTable();
});
</script>
</body>
</html>
