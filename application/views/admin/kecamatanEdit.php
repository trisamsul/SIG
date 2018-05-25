
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Kecamatan
        <small>Edit Kecamatan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-laptop"></i> Kecamatan</a></li>
        <li class="active">Edit Kecamatan</li>
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
              <?php echo form_open('admin/kecamatanUpdate'); ?>
				<h4>Profil</h4>
                <div class="form-group">
				  <label>Nama Kecamatan</label>
                  <input type="text" class="form-control" name="kecamatan_nama" placeholder="Nama Kecamatan" value="<?php echo $kecamatan['kecamatan_nama']; ?>" required>
                </div>
				<div class="form-group">
				  <label>Sub Wilayah Kota</label>
                  <select class="form-control select2" name="kecamatan_swk_id" style="width: 100%;">
                    <option selected="selected" disabled="disabled">- Sub Wilayah Kota -</option>
					<?php foreach($swk as $row){ ?>
						<option value="<?php echo $row['swk_id']; ?>" <?php if($kecamatan['kecamatan_id'] == $row['swk_id']){ echo 'selected';}?>><?php echo $row['swk_nama']; ?></option>
					<?php }?>
                  </select>
				  <small style="margin-left: 10px; opacity: 0.7;">*Untuk Sub Wilayah Kota baru, silahkan tambahkan dahulu di menu <a href="<?php echo base_url(); ?>admin/swkPost">Tambah Sub Wilayah Kota</a></small>
                </div>
                <div class="form-group">
				  <label>Skala</label>
                  <select class="form-control select2" name="kecamatan_skala" style="width: 100%;" required>
                    <option selected disabled>- Skala -</option>
                    <option value="A" <?php if($kecamatan['kecamatan_skala'] == 'A'){ echo 'selected';}?>>A</option>
                    <option value="B" <?php if($kecamatan['kecamatan_skala'] == 'B'){ echo 'selected';}?>>B</option>
                    <option value="C" <?php if($kecamatan['kecamatan_skala'] == 'C'){ echo 'selected';}?>>C</option>
                  </select>
                </div>
				<hr/>
				<h4>Demografi</h4>
				<div class="form-group">
				  <label>Jumlah Populasi</label>
                  <input type="number" class="form-control" name="kecamatan_populasi" placeholder="Jumlah Populasi"  value="<?php echo $kecamatan['kecamatan_populasi']; ?>" required>
                </div>
				<div class="form-group">
				  <label>Luas Wilayah (ha)</label>
                  <input type="number" class="form-control" name="kecamatan_luas" placeholder="Luas Wilayah (ha)"  value="<?php echo $kecamatan['kecamatan_luas']; ?>" required>
                </div>
				<div class="form-group">
				  <label>Kepadatan Penduduk (per/ha)</label>
                  <input type="number" class="form-control" name="kecamatan_kepadatan" placeholder="Kepadatan Penduduk (per/ha)" value="<?php echo $kecamatan['kecamatan_kepadatan']; ?>" required>
                </div>
				<div class="form-group">
				  <label>Jumlah Ruang Terbuka Hijau</label>
                  <input type="number" class="form-control" name="kecamatan_rth" placeholder="Jumlah Ruang Tebuka Hijau" value="<?php echo $kecamatan['kecamatan_rth']; ?>" required>
                </div>
				<div class="form-group">
				  <label>Jumlah Ruang Tebuka Non-Hijau</label>
                  <input type="number" class="form-control" name="kecamatan_rtnh" placeholder="Jumlah Ruang Tebuka Non-Hijau" value="<?php echo $kecamatan['kecamatan_rtnh']; ?>" required>
                </div>
				
				<input type="hidden" class="form-control" name="kecamatan_id" value="<?php echo $kecamatan['kecamatan_id']; ?>">
				
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
