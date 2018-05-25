
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        User
        <small>Tambah User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-laptop"></i> User</a></li>
        <li class="active">Tambah User</li>
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
              <?php echo form_open('admin/userAdd'); ?>
                <div class="form-group">
                  <input type="text" class="form-control" name="user_username" placeholder="Username" required>
                </div>
				<div class="form-group">
                  <input type="password" class="form-control" name="user_password" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <select id="category" class="form-control select2" name="user_category" style="width: 100%;" required>
                    <option selected disabled>- Kategori -</option>
                    <option value="1">Super Admin</option>
                    <option value="2">Admin</option>
                  </select>
                </div>
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default bg-green" id="sendEmail" >Tambah User <i class="fa fa-plus" style="margin-left:10px;"></i></button>
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