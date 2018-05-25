
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
        Sub Wilayah Kota berhasil ditambahkan
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
					  <button type="button" title="Delete" class="btn btn-sm bg-red" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i></button>
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
  
  <div class="modal modal-danger fade" id="modal-danger">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Perhatian!</h4>
		  </div>
		  <div class="modal-body">
			<p>Apakah anda yakin untuk menghapus data ini?</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-outline"onclick="location.href='<?php echo base_url();?>admin/swkRemove/<?php echo $row['swk_id'];?>'">Ya</button>
			<button type="button" class="btn btn-outline" data-dismiss="modal" >Tidak</button>
		  </div>
		</div>
		<!-- /.modal-content -->
	  </div>
	  <!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
