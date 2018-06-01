
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Kecamatan
        <small>Kualitas Lingkungan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-laptop"></i> Kecamatan</a></li>
        <li class="active">Kualitas Lingkungan</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php if ($this->uri->segment(3) == "update"){ ?>
      <div class="alert alert-warning" role="alert">
        Kualitas Lingkungan berhasil diupdate
      </div>
      <?php } ?>
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Daftar Kondisi Lingkungan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="dt" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Kecamatan</th>
                    <th>Temperatur (°C)</th>
                    <th>Kecepatan Angin (m/s)</th>
                    <th>Curah Hujan (%)</th>
                    <th>Kelembapan (%)</th>
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
                    <td><?php echo $row['kl_temperatur']; ?></td>
                    <td><?php echo $row['kl_kecepatan_angin']; ?></td>
                    <td><?php echo $row['kl_curah_hujan']; ?></td>
                    <td><?php echo $row['kl_kelembapan']; ?></td>
                    <td>
                      <button type="button" title="Edit" class="btn btn-sm bg-orange" onclick="location.href='<?php echo base_url();?>admin/kualitasEdit/<?php echo $row['kl_id'];?>'"><i class="fa fa-edit"></i></button>
                      <?php if($this->session->userdata('category') == 1){ ?>
                      <?php if($row['kl_status'] == 0){ ?>
                        <button type="button" title="Show" class="btn btn-sm bg-green" onclick="location.href='<?php echo base_url();?>admin/kualitasStatusSet/<?php echo $row['kl_id'];?>/1'"><i class="fa fa-eye"></i></button>
                      <?php }else{ ?>
                        <button type="button" title="Hide" class="btn btn-sm bg-blue" onclick="location.href='<?php echo base_url();?>admin/kualitasStatusSet/<?php echo $row['kl_id'];?>/0'"><i class="fa fa-eye-slash"></i></button>
                      <?php } ?>
                      <?php } ?>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
					<th>No.</th>
                    <th>Nama Kecamatan</th>
                    <th>Temperatur</th>
                    <th>Kecepatan Angin</th>
                    <th>Curah Hujan</th>
                    <th>Kelembapan</th>
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