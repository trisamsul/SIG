
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Sub Wilayah Kota
        <small>Semua Sub Wilayah Kota</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-laptop"></i> Sub Wilayah Kota</a></li>
        <li class="active">Semua Sub Wilayah Kota</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php if ($this->uri->segment(3) == "success"){ ?>
      <div class="alert alert-success" role="alert">
          <?php 
          if($this->session->userdata('category') != 1){ 
            echo "Sub Wilayah Kota berhasil diajukan. Menunggu persetujuan superadmin.";
          }else{
            echo "Sub Wilayah Kota berhasil ditambahkan.";
          }
          ?>
      </div>
      <?php }else if($this->uri->segment(3) == "delete"){ ?>
        <div class="alert alert-danger" role="alert">
        Sub Wilayah Kota berhasil dihapus
      </div>
	  <?php }else if($this->uri->segment(3) == "update"){ ?>
        <div class="alert alert-warning" role="alert">
        Sub Wilayah Kota berhasil diupdate
      </div>
      <?php } ?>
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Daftar Sub Wilayah Kota</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="dt" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Sub Wilayah Kota</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $i=1;foreach($all as $row){
                 ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['swk_nama']; ?></td>
                    <td><a href="#">Lokasi</a></td>
                    <td>
                      <button type="button" title="Edit" class="btn btn-sm bg-orange" onclick="location.href='<?php echo base_url();?>admin/swkEdit/<?php echo $row['swk_id'];?>'"><i class="fa fa-edit"></i></button>
                      <?php if($this->session->userdata('category') == 1){ ?>
                      <?php if($row['swk_status'] == 0){ ?>
                      <button type="button" title="Show" class="btn btn-sm bg-green" onclick="location.href='<?php echo base_url();?>admin/swkStatusSet/<?php echo $row['swk_id'];?>/1'"><i class="fa fa-eye"></i></button>
                      <?php }else{ ?>
                        <button type="button" title="Hide" class="btn btn-sm bg-blue" onclick="location.href='<?php echo base_url();?>admin/swkStatusSet/<?php echo $row['swk_id'];?>/0'"><i class="fa fa-eye-slash"></i></button>
                      <?php } ?>
					            <button type="button" title="Delete" class="btn btn-sm bg-red" onclick="location.href='<?php echo base_url();?>admin/swkRemove/<?php echo $row['swk_id'];?>'"><i class="fa fa-trash"></i></button>
                      <?php } ?>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
					<th>No.</th>
                    <th>Nama Sub Wilayah Kota</th>
                    <th>Lokasi</th>
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
  