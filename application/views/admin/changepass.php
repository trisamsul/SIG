
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Ganti Password</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-home"></i> Ganti Password</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="box box-info">
        <div class="box-body">

          
          <?php echo form_open('Admin/updatePass'); ?>
            <input type="password" name="old" value="" placeholder="Password lama" class="form-control"><br>
            <input type="password" name="new" value="" placeholder="Password baru" class="form-control"><br>
            <input type="submit" name="" value="Submit" class="form-control btn btn-primary">
          </form>
        </div>   
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  