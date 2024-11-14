<?php
include "models/m.bansos.php";

$bansos = new bansos($connection);
?>

<div class="row">
          <div class="col-lg-12">
           <h1>Pencarian Data <small>Penerima Bansos</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i>Wilayah Penerima Bantuan Sosial</a></li>
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
                            <th>Nama Penerima</th>
                            <th>Alamat Penerima</th>
                            <th>Jumlah</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $tampil = $bansos->tampil();
                         while($data = $tampil->fetch_object()) {
                        ?>
                        <tr>
                            <td><?php echo $no++."."; ?></td>
                            <td><?php echo $data->nama; ?></td>
                            <td><?php echo $data->alamat; ?></td>
                            <td><?php echo $data->jumlah; ?></td>
                            <td><?php echo $data->keterangan; ?></td>
                        </tr>
                        <?php
                    } ?>
                    </tbody></table>
                </div>
    


 </div>
                    </div>
                </div>
            </div>
        </div>