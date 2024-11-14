<?php
include "models/m.dtks.php";

$dtks = new dtks($connection);
?>

 		<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Buku
                        </div>

        <div class="row">
        	<div class="col-lg-12">
                <div class="panel-body">
        		<div class="table-responsive">
        			<table class="table table-bordered table-hover table-striped" id="dataTables-example">
                        <thead>
        				<tr>
        					<th>No</th>
                            <th>Provinsi</th>
                            <th>Kabupaten</th>
                            <th>Kecematan</th>
                            <th>Desa</th>
                            <th>Alamat</th>
                            <th>Dusun</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>No KK</th>
                            <th>No NIK</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Tempat Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Ibu Kandung</th>
                            <th>Hubungan Keluarga</th>
        				</tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $tampil = $dtks->tampil();
                         while($data = $tampil->fetch_object()) {
                        ?>
        				<tr>
                            <td><?php echo $no++."."; ?></td>
                            <td><?php echo $data->provinsi; ?></td>
                            <td><?php echo $data->kabupaten; ?></td>
                            <td><?php echo $data->kecematan; ?></td>
                            <td><?php echo $data->kecematan; ?></td>
                            <td><?php echo $data->kecematan; ?></td>
                            <td><?php echo $data->dusun; ?></td>
                            <td><?php echo $data->rt; ?></td>
                            <td><?php echo $data->rw; ?></td>
                            <td><?php echo $data->kk; ?></td>
                            <td><?php echo $data->nik; ?></td>
                            <td><?php echo $data->nama; ?></td>
                            <td><?php echo $data->tgl_lahir; ?></td>
                            <td><?php echo $data->lahir; ?></td>
                            <td><?php echo $data->jk; ?></td>
                            <td><?php echo $data->ibukandung; ?></td>
                            <td><?php echo $data->keluarga; ?></td>         
                        </tr>
                        <?php
                    } ?>
                    </tbody>
        			</table>

        		</div>
                </div>
        	</div>
        </div>