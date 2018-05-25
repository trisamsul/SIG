
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Kecamatan
        <small>Tambah Kecamatan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-laptop"></i> Kecamatan</a></li>
        <li class="active">Tambah Kecamatan</li>
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
              <?php echo form_open_multipart('admin/kecamatanAdd'); ?>
				<h4>Profil</h4>
                <div class="form-group">
                  <input type="text" class="form-control" name="kecamatan_nama" placeholder="Nama Kecamatan" required>
                </div>
				<div class="form-group">
                  <select class="form-control select2" name="kecamatan_swk_id" style="width: 100%;" required>
                    <option selected="selected" disabled="disabled">- Sub Wilayah Kota -</option>
					<?php foreach($swk as $row){ ?>
						<option value="<?php echo $row['swk_id']; ?>"><?php echo $row['swk_nama']; ?></option>
					<?php }?>
                  </select>
				  <small style="margin-left: 10px; opacity: 0.7;">*Untuk Sub Wilayah Kota baru, silahkan tambahkan dahulu di menu <a href="<?php echo base_url(); ?>admin/swkPost">Tambah Sub Wilayah Kota</a></small>
                </div>
                <div class="form-group">
                  <select class="form-control select2" name="kecamatan_skala" style="width: 100%;" required>
                    <option selected disabled>- Skala -</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                  </select>
                </div>
				<div class="form-group">
                  <textarea class="textarea" placeholder="Deskripsi" name="kecamatan_deskripsi" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                </div>
				<div class="form-group">
                  <label>Unggah Foto : </label>
                  <input type="file" name="photo" required>
				  <small>( Format .JPG / .JPEG / .PNG, Max: 200kb )</small>
                </div>
				<h4>Demografi</h4>
				<div class="form-group">
                  <input type="number" class="form-control" name="kecamatan_populasi" placeholder="Jumlah Populasi" required>
                </div>
				<div class="form-group">
                  <input type="number" class="form-control" name="kecamatan_luas" placeholder="Luas Wilayah (ha)" required>
                </div>
				<div class="form-group">
                  <input type="number" class="form-control" name="kecamatan_kepadatan" placeholder="Kepadatan Penduduk (per/ha)" required>
                </div>
				<div class="form-group">
                  <input type="number" class="form-control" name="kecamatan_rth" placeholder="Jumlah Ruang Tebuka Hijau" required>
                </div>
				<div class="form-group">
                  <input type="number" class="form-control" name="kecamatan_rtnh" placeholder="Jumlah Ruang Tebuka Non-Hijau" required>
                </div>
				<h4>Kualitas Lingkungan</h4>
				<div class="form-group">
                  <input type="text" class="form-control" name="kl_temperatur" placeholder="Temperatur Tahunan (°C)" required>
                </div>
				<div class="form-group">
                  <input type="text" class="form-control" name="kl_curah_hujan" placeholder="Curah Hujan (%)" required>
                </div>
				<div class="form-group">
                  <input type="text" class="form-control" name="kl_kecepatan_angin" placeholder="Kecepatan Angin (m/s)" required>
                </div>
				<div class="form-group">
                  <input type="text" class="form-control" name="kl_kelembapan" placeholder="Kelembapan Udara (%)" required>
                </div>
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default bg-green" id="sendEmail" >Tambah Kecamatan <i class="fa fa-plus" style="margin-left:10px;"></i></button>
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
