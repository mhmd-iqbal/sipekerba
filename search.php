<?php
include 'templates/header.php';
require 'function.php';
?>      
  <h1 class="display-4" style="margin-top: -50px;">Status Pengaduan Anda</h1>

  <div class="row">
    <div class="col">
        <?php
          $keyword = $_POST['keyword'];
          $data = query("SELECT * FROM pengaduan WHERE id = '$keyword'");
          if ($data) {
          foreach ($data as $d) :
        ?>
          <p>Nomor Pengaduan : <?= $d['id']; ?></p>
          <p>Tanggal Pengaduan : <?= $d['tgl_lapor']; ?></p>
          <p>Nama Pelapor : <?= $d['n_pelapor']; ?></p>
          <p>Jabatan : <?= $d['j_pelapor']; ?></p>
          <p>Departemen : <?= $d['d_pelapor']; ?></p>
          <p>Nama Barang : <?= $d['n_barang']; ?></p>
          <p>Keterangan : <?= $d['ket']; ?></p>
          <p>Status : <?= $d['status']; ?></p>
          <p><b><u>Catatan dari petugas</u></b> <br><?= $d['ket_petugas']; ?></p>
          <br>
          <a href="index.php" class="btn btn-sm btn-primary" style="width: 80px;"><span class="fas fa-arrow-left mr-2"></span>Back</a>
        <?php
        endforeach;
        } else {
            echo"<p>Data pengaduan tidak ditemukan.</p>";
        }
        ?>
    </div>
    
  </div>
<?php
include 'templates/footer.php';
?>
