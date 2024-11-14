<?php
include "models/m.bpjs.php";

$bpjs = new bpjs($connection);
?>

 		<div class="row">
          <div class="col-lg-12">
            <h1>Layanan BPJS Mandiri <small>Ke BPJS Gratis</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.php"><i class="icon-dashboard"></i>Layanan BPJS Mandiri Ke BPJS Gratis</a></li>
            </ol>
          </div>
        </div>

        <div class="row">
        	<div class="col-lg-12">
        		<div class="table-responsive">
        			<table class="table table-bordered table-hover table-striped" id="dataTables-example">
                        <thead>
        				<tr>
        					<th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Keterangan</th>
                            <th>KK</th>
                            <th>KTP</th>
                            <th>SKTM</th>
        				</tr></thead>
                        <tbody>
                        <?php
                        $no = 1;
                        $tampil = $bpjs->tampil();
                         while($data = $tampil->fetch_object()) {
                        ?>
        				<tr>
                            <td><?php echo $no++."."; ?></td>
                            <td><?php echo $data->nama; ?></td>
                            <td><?php echo $data->alamat; ?></td>
                            <td><?php echo $data->keterangan; ?></td>
                            <td>
                                <img width="50" src="upload/<?php echo $data->kk; ?>">
                            </td>
                            <td>
                                <img width="50" src="upload/<?php echo $data->ktp; ?>">
                            </td>
                            <td>
                                <img width="50" src="upload/<?php echo $data->sktm; ?>">
                            </td>          
                        </tr>
                        <?php
                    } ?>
        			</tbody></table>
        		</div>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Data</button>
                <div id="tambah" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-tittle"><b>Berkas Permohonan Masyarakat</b></h4>
                                <p>Halaman ini digunakan untuk mengupload data masyarakat</p>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label" for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="alamat">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="alamat" required>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label" for="keterangan">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" id="keterangan" required>
                                    </div>
                                     
                                    <div class="form-group">
                                        <label class="control-label" for="kk">KK (Kartu Keluarga)</label>
                                        <input type="file" name="kk" class="form-control" id="kk" required>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label" for="ktp">KTP (Kartu Tanda Penduduk)</label>
                                        <input type="file" name="ktp" class="form-control" id="ktp" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="sktm">SKTM (Surat Keterangan Tidak Mampu)</label>
                                        <input type="file" name="sktm" class="form-control" id="sktm" required>
                                    </div> 
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" name="tambah" value="Simpan">Kirim</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </form>
                            <?php
                            if(@$_POST['tambah']) {
                                $nama = $connection->conn->real_escape_string($_POST['nama']);
                                $alamat = $connection->conn->real_escape_string($_POST['alamat']);
                                $keterangan = $connection->conn->real_escape_string($_POST['keterangan']);
                                
                                $extensi = explode(".", $_FILES['kk']['name']);
                                $kk = "bpjs-".round(microtime(true)).".".end($extensi);
                                $sumber = $_FILES['kk']['tmp_name'];
                                $upload = move_uploaded_file($sumber, "upload/".$kk);


                                $extensi = explode(".", $_FILES['ktp']['name']);
                                $ktp = "bpjs-".round(microtime(true)).".".end($extensi);
                                $sumber = $_FILES['ktp']['tmp_name'];
                                $upload = move_uploaded_file($sumber, "upload/".$ktp);
                       

                                $extensi = explode(".", $_FILES['sktm']['name']);
                                $sktm = "bpjs-".round(microtime(true)).".".end($extensi);
                                $sumber = $_FILES['sktm']['tmp_name'];
                                $upload = move_uploaded_file($sumber, "upload/".$sktm);
                                if($upload) {
                                    $bpjs->tambah($nama, $alamat, $keterangan, $kk, $ktp, $sktm);
                                    header("location: ?page=bpjsmandiri");
                                } else {
                                    echo "<script>alert('upload gambar gagal!')</script>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
        	</div>
        </div>