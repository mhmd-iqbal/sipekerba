<?php
include "templates/header.php";
include "templates/sidebar-atur-akun.php";
$id = $_SESSION['login']['user_id'];

$data = query("SELECT * FROM user WHERE user_id = '$id'")[0];

if (isset($_POST['submit'])) {
  if (updatePhoto($_POST) > 0) {
    echo "<script>alert('Foto profil Anda berhasil diperbarui!'); window.location='profil.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui foto profil!'); window.location='profil.php';</script>";
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
            <h1>Profil Akun</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pengaturan Akun</a></li>
              <li class="breadcrumb-item active">Profil Akun</li>
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
          <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label">Nomor Induk Pegawai</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="id" value=":  <?= $data['user_id'];?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="username" value=":  <?= $data['username'];?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Full Name</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="username" value=":  <?= $data['name'];?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Profile Picture</label>
            <div class="col-sm-10">
              <div class="col-md-5">
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="input-group mb-3">
                  <div class="custom-file">
                    <input type="file" name="foto" class="custom-file-input" id="foto" style="cursor: pointer;">
                    <label class="custom-file-label" for="foto">Pilih foto...</label>
                  </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mb-3"><span class="fas fa-upload mr-2"></span>Upload</button>  
              </form>
              </div>
              <img src="../assets/img/profile/<?= $data['img']; ?>" alt="user image" width="200" height="200" style="border: 1px;">
            </div>
          </div>
        </div>
      </div>
        <!-- /.card-body -->

    </section>
    <!-- /.content -->
  </div>
<?php
include "templates/footer.php";
?>
