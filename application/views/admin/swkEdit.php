
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Sub Wilayah Kota
        <small>Edit Sub Wilayah Kota</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-laptop"></i> Sub Wilayah Kota</a></li>
        <li class="active">Edit Sub Wilayah Kota</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12">
          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-body">
              <?php echo form_open('admin/swkUpdate'); ?>
                <div class="form-group">
				  <label>Nama Sub Wilayah Kota</label>
                  <input type="text" class="form-control" name="swk_nama" placeholder="Nama Sub Wilayah Kota" value="<?php echo $swk['swk_nama']; ?>" required>
                </div>
				<div class="form-group">
				  <label>Lokasi (Latitude)</label>
                  <input type="text" class="form-control" name="swk_lat" placeholder="Lokasi (Latitude)" value="<?php echo $swk['swk_lat']; ?>" required>
                </div>
				<div class="form-group">
				  <label>Lokasi (Longitude)</label>
                  <input type="text" class="form-control" name="swk_lon" placeholder="Lokasi (Longitude)" value="<?php echo $swk['swk_lon']; ?>" required>
                </div>
				
				<input type="hidden" class="form-control" name="swk_id" value="<?php echo $swk['swk_id']; ?>">
				
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default bg-green" id="sendEmail" >Simpan <i class="fa fa-save" style="margin-left:10px;"></i></button>
            </div>
            </form>
          </div>

        </section>
        <!-- /.Left col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>