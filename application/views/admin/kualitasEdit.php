
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Kecamatan
        <small>Edit Kualitas Lingkungan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-laptop"></i> Kecamatan</a></li>
        <li class="active">Edit Kualitas Lingkungan</li>
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
              <?php echo form_open('admin/kualitasUpdate'); ?>
				<div class="form-group">
				  <label>Nama Kecamatan</label>
                  <input type="text" class="form-control" value="<?php echo $kualitas['kecamatan_nama']; ?>" disabled required>
                </div>
				<div class="form-group">
				  <label>Temperatur Tahunan (°C)</label>
                  <input type="text" class="form-control" name="kl_temperatur" placeholder="Temperatur Tahunan (°C)" value="<?php echo $kualitas['kl_temperatur']; ?>" required>
                </div>
				<div class="form-group">
				  <label>Curah Hujan (%)</label>
                  <input type="text" class="form-control" name="kl_curah_hujan" placeholder="Curah Hujan (%)" value="<?php echo $kualitas['kl_curah_hujan']; ?>" required>
                </div>
				<div class="form-group">
				  <label>Kecepatan Angin (m/s)</label>
                  <input type="text" class="form-control" name="kl_kecepatan_angin" placeholder="Kecepatan Angin (m/s)" value="<?php echo $kualitas['kl_kecepatan_angin']; ?>" required>
                </div>
				<div class="form-group">
				  <label>Kelembapan Udara (%)</label>
                  <input type="text" class="form-control" name="kl_kelembapan" placeholder="Kelembapan Udara (%)"  value="<?php echo $kualitas['kl_kelembapan']; ?>"required>
                </div>
				
				<input type="hidden" class="form-control" name="kl_id" value="<?php echo $kualitas['kl_id']; ?>">
				
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