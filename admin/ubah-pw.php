<?php
include "templates/header.php";
include "templates/sidebar-atur-akun.php";
$id = $_SESSION['login']['user_id'];

$data = query("SELECT * FROM user WHERE user_id = '$id'")[0];

if (isset($_POST['submit'])) {
  if (updatePass($_POST) > 0) {
    echo "<script>alert('Password changed successfully!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Password changed failed!'); window.location='ubah-pw.php';</script>";
    }
  }

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pengaturan Akun</a></li>
              <li class="breadcrumb-item active">Ubah Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body">
          <form action="" method="POST">
          <div class="col-md-6">
              <div class="form-group">
                <label for="id">NIP</label>
                <input type="text" class="form-control" name="id" value="<?= $data['user_id'];?>" readonly style="cursor: default;">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="password_baru">Password Baru</label>
                <input type="text" class="form-control" name="password_baru">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <button class="btn btn-outline-success mr-2 mb-2" value="submit" name="submit" style="width: 200px;">Submit</button>
                <button class="btn btn-outline-danger mb-2" name="reset" style="width: 200px;">Reset</button>
              </div>
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
<?php
include "templates/footer.php";
?>
