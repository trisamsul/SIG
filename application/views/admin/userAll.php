
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        User
        <small>Semua User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-laptop"></i> User</a></li>
        <li class="active">Semua User</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php if ($this->uri->segment(3) == "success"){ ?>
      <div class="alert alert-success" role="alert">
        User berhasil ditambahkan
      </div>
      <?php }else if($this->uri->segment(3) == "delete"){ ?>
        <div class="alert alert-danger" role="alert">
        User berhasil dihapus
      </div>
      <?php } ?>
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">User List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="dt" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Kategori</th>
                    <th>Log</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $i=1;foreach($all as $row){
                 ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['user_username']; ?></td>
                    <td>
						<?php 
							if($row['user_category'] == 1){
								echo 'Super Admin';
							}else if($row['user_category'] == 2){
								echo 'Admin';
							}else if($row['user_category'] == 3){
								echo 'Sub Admin';
							}
							
						?>
					</td>
                    <td><?php echo $row['user_lastlogin']; ?></td>
                    <td>
                       <button type="button" title="Delete" class="btn btn-sm bg-red" onclick="location.href='<?php echo base_url();?>admin/userRemove/<?php echo $row['user_id'];?>'"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
					<th>No.</th>
                    <th>Username</th>
                    <th>Kategori</th>
                    <th>Log</th>
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