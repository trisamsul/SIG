
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Sub Wilayah Kota
        <small>Tambah Sub Wilayah Kota</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-laptop"></i> Sub Wilayah Kota</a></li>
        <li class="active">Tambah Sub Wilayah Kota</li>
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
              <?php echo form_open('admin/swkAdd'); ?>
                <div class="form-group">
                  <input type="text" class="form-control" name="swk_nama" placeholder="Nama Sub Wilayah Kota" required>
                </div>
				<div class="form-group">
                  <input type="text" class="form-control" name="swk_lat" placeholder="Lokasi (Latitude)" required>
                </div>
				<div class="form-group">
                  <input type="text" class="form-control" name="swk_lon" placeholder="Lokasi (Longitude)" required>
                </div>
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default bg-green" id="sendEmail" >Tambah Sub Wilayah Kota<i class="fa fa-plus" style="margin-left:10px;"></i></button>
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