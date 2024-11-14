<html>
<head>
  <title>Admin | Cetak Laporan </title>
  <link rel="icon" type="image/png" href="../images/logo.png" sizes="16x16">
</head>
<body>
  <img src="../images/logo.png" style="position: absolute; width: 90px; height: auto;">
    <center>
    <table width="100%">
      <tr>
        <td align="center">
          <span style="line-height: 1.6; font-weight: bold;">
            DINAS SOSIAL<br>
          </span>
          <p>Kompleks Perkantoran Pemerintah Kabupaten Kuantan Singingi<br> 
            HP. 081378114287 Email : dinsos@gmail.com</p>
            <hr style="border: solid 1px;">
        <p><b>LAPORAN BPJS</b></p><br>
        </td>
      </tr>
    </table>
    </center>

    <center>
      <table border="1" style="width: 100%">
        <tr align="center">
          <th>No.</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Keterangan</th>
                  <th>KK</th>
                  <th>KTP</th>
                  <th>SKTM</th>
        </tr>

      <?php
      include '../config.php';
      $no=1;
      $data = mysqli_query($koneksi, "select * from bpjs ORDER BY nama ASC");
      while($d=mysqli_fetch_array($data)){
        ?>
          <tr align="center">
          <td align="center"><?php echo $no++; ?></td>
          <td><?php echo $d['nama']; ?></td>
          <td align="left"><?php echo $d['alamat']; ?></td>
          <td><?php echo $d['keterangan']; ?></td>
          <td><img src="user/upload/<?php echo $d['kk']; ?>" width="50" height="50"></td>
          <td><img src="user/upload/<?php echo $d['ktp']; ?>" width="50" height="50"></td>
          <td><img src="user/upload/<?php echo $d['sktm']; ?>" width="50" height="50"></td>
        </tr>
      <?php
        }
        ?>

    </table>
    </center>

      <table>
        <tr>
          <td width="400"></td><br><br><br>
          <td>Teluk Kuantan, <br>Kepala Dinas Sosial<br>
          Kabupaten Kuantan Singingi<br><br><br><br>Drs. Napisman</td>
        </tr>
      </table>
    <script>
        window.print()
    </script>

</body>
</html>