
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
  <nav class="main-header navbar navbar-expand navbar-dark navbar-dark" style="width: 113%">
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
  <div class="content-wrapper" style="width: 113%">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md">
            <h1 class="m-0"><i class="nav-icon fas fa-address-card"></i> Halaman Data Terpadu</h1>
          <hr>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
      <div class="container-fluid">
        <a href="tambah_dtks.php">
      <button style="margin-bottom: 20px;" class="btn btn-dark" data-toggle="modal" data-target="#tambah">Tambah Data </button>
        </a>
    <!-- Main content -->
    <section class="content">
     <div class="row">
      <div class="col-lg-12">
		 <table class="table-responsive">
    	  <table class="table table-bordered table-hover table-striped" id="dataTables-example">
	    	  <thead>
	    		<tr align="center">
	    			<th>No</th>
            <th>Kecamatan</th>
            <th>Desa</th>
            <th>Alamat</th>
            <th width="100">RT-RW</th>
            <th>No KK</th>
            <th>No NIK</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Ibu Kandung</th>
            <th>Hubungan Keluarga</th>
            <th>Aksi</th>
	    		</tr>
	    	</thead>
	    	<tbody>
				<?php
				include 'koneksi.php';
			        $no = 1;
			        $query = "SELECT * FROM dtks ORDER BY id DESC";
			        $dinsos = $db->prepare($query);
			        $dinsos->execute();
			        $res1 = $dinsos->get_result();

			        if ($res1->num_rows > 0) {
				        while ($row = $res1->fetch_assoc()) {
				        	$id = $row['id'];
				            $kecamatan = $row['kecamatan'];
				            $desa = $row['desa'];
                    $alamat = $row['alamat'];
				            $rt_rw = $row['rt_rw'];
                    $kk = $row['kk'];
                    $nik = $row['nik'];
                    $nama = $row['nama'];
                    $tgl_lahir = $row['tgl_lahir'];
                    $lahir = $row['lahir'];
                    $jk = $row['jk'];
                    $ibukandung = $row['ibukandung'];
                    $keluarga = $row['keluarga'];
				?>
					<tr align="center">
						<td><?php echo $no++."."; ?></td>
            <td><?php echo $kecamatan; ?></td>
            <td><?php echo $desa; ?></td>
            <td><?php echo $alamat; ?></td>
            <td><?php echo $rt_rw; ?></td>
            <td><?php echo $kk; ?></td>
            <td><?php echo $nik; ?></td>
						<td><?php echo $nama; ?></td>
						<td><?php echo $tgl_lahir; ?></td>
						<td><?php echo $lahir; ?></td>
						<td><?php echo $jk; ?></td>
						<td><?php echo $ibukandung; ?></td>
						<td><?php echo $keluarga; ?></td>
						<td>
							<!-- base64_encode berguna untuk enkripsi id jadi nanti akan mengubah urlnya menjadi tulisan acak -->
							<a href="detail_dtks.php?aa=<?php echo base64_encode($id) ?>">
								<button class="btn btn-success btn-sm"> Edit </button>
							</a>
              <a href="cetak_dtks.php?aa=<?php echo base64_encode($id) ?>">
                <button class="btn btn-warning btn-sm"> Cetak </button>
              </a>
							<a href="hapus_dtks.php?aa=<?php echo base64_encode($id) ?>">
								<button class="btn btn-danger btn-sm"> Hapus </button>
							</a>
						</td>
					</tr>
			    <?php } } else { ?> 
				    <tr>
				    	<td colspan='7'>Tidak ada data ditemukan</td>
				    </tr>
			    <?php } ?>
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
