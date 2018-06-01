
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Beranda
        <small>Halaman Utama</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-home"></i> Beranda</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <?php if($this->session->userdata('category') == 1){ ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $user; ?></h3>
              <p>User</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="<?php echo site_url();?>admin/userAll" class="small-box-footer">Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } ?>
		    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?php echo $swk; ?></h3>

              <p>Sub Wilayah Kota</p>
            </div>
            <div class="icon">
              <i class="fa fa-map-pin"></i>
            </div>
            <a href="<?php echo site_url();?>admin/swkAll" class="small-box-footer">Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $kecamatan; ?></h3>

              <p>Kecamatan</p>
            </div>
            <div class="icon">
              <i class="fa fa-dot-circle-o"></i>
            </div>
            <a href="<?php echo site_url();?>admin/kecamatanAll" class="small-box-footer">Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
