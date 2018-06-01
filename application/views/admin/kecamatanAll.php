
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Kecamatan
        <small>Semua Kecamatan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-laptop"></i> Kecamatan</a></li>
        <li class="active">Semua Kecamatan</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php if ($this->uri->segment(3) == "success"){ ?>
      <div class="alert alert-success" role="alert">
        <?php 
          if($this->session->userdata('category') != 1){ 
            echo "Kecamatan berhasil diajukan. Menunggu persetujuan superadmin.";
          }else{
            echo "Kecamatan Kota berhasil ditambahkan.";
          }
          ?>
      </div>
      <?php }else if($this->uri->segment(3) == "delete"){ ?>
        <div class="alert alert-danger" role="alert">
        Kecamatan berhasil dihapus
      </div>
	  <?php }else if($this->uri->segment(3) == "update"){ ?>
        <div class="alert alert-warning" role="alert">
        Kecamatan berhasil diupdate
      </div>
      <?php } ?>
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Daftar Kecamatan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="dt" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Kecamatan</th>
                    <th>Sub Wilayah Kecamatan</th>
                    <th>Skala</th>
                    <th>Jumlah Populasi</th>
                    <th>Luas Wilayah (ha)</th>
                    <th>Kepadatan Penduduk (per/ha)</th>
                    <th>RTH</th>
                    <th>RTNH</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $i=1;foreach($all as $row){
                 ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['kecamatan_nama']; ?></td>
                    <td><?php echo $row['swk_nama']; ?></td>
                    <td><?php echo $row['kecamatan_skala']; ?></td>
                    <td><?php echo $row['kecamatan_populasi']; ?></td>
                    <td><?php echo $row['kecamatan_luas']; ?></td>
                    <td><?php echo $row['kecamatan_kepadatan']; ?></td>
                    <td><?php echo $row['kecamatan_rth']; ?></td>
                    <td><?php echo $row['kecamatan_rtnh']; ?></td>
                    <td>
                      <?php ?>
                      <button type="button" title="Edit" class="btn btn-sm bg-orange" onclick="location.href='<?php echo base_url();?>admin/kecamatanEdit/<?php echo $row['kecamatan_id'];?>'"><i class="fa fa-edit"></i></button>
                      <?php if($this->session->userdata('category') == 1){ ?>
                      <?php if($row['kecamatan_status'] == 0){ ?>
                        <button type="button" title="Show" class="btn btn-sm bg-green" onclick="location.href='<?php echo base_url();?>admin/kecamatanStatusSet/<?php echo $row['kecamatan_id'];?>/1'"><i class="fa fa-eye"></i></button>
                      <?php }else{ ?>
                        <button type="button" title="Hide" class="btn btn-sm bg-blue" onclick="location.href='<?php echo base_url();?>admin/kecamatanStatusSet/<?php echo $row['kecamatan_id'];?>/0'"><i class="fa fa-eye-slash"></i></button>
                      <?php } ?>
                      <button type="button" title="Delete" class="btn btn-sm bg-red" onclick="location.href='<?php echo base_url();?>admin/kecamatanRemove/<?php echo $row['kecamatan_id'];?>'"><i class="fa fa-trash"></i></button>
                      <?php } ?>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
					<th>No.</th>
                    <th>Nama Kecamatan</th>
                    <th>Sub Wilayah Kecamatan</th>
                    <th>Skala</th>
                    <th>Jumlah Populasi</th>
                    <th>Luas Wilayah</th>
                    <th>Kepadatan Penduduk</th>
                    <th>RTH</th>
                    <th>RTNH</th>
                    <th>Aksi</th>
                </tr>
                </tfoot>
            </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  