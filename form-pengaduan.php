<?php
include 'templates/header2.php';
require 'function.php';
if (isset($_POST['submit'])) {
    if (insertPengaduan($_POST) > 0) {
        echo "<script>alert('Data pengaduan Anda berhasil terkirim.'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Data pengaduan Anda gagal terkirim.'); window.location='form-pengaduan.php';</script>";
    }
}

$query = mysqli_query($conn, "SELECT max(id) as kodeTerbesar FROM pengaduan");
$r = mysqli_fetch_array($query);
$kodeBarang = $r['kodeTerbesar'];

// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
// dan diubah ke integer dengan (int)
$urutan = (int) substr($kodeBarang, 4, 4);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;

// membentuk kode barang baru
// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
$huruf = "NP";
$kodeBarang = $huruf . sprintf("%04s", $urutan);
?>      
      <h1 style="margin-top: -40px;">Form Pengaduan Kerusakan Barang</h1>
      <form action="" method="POST">
        <div class="form-row p-3">
          <div class="form-group">
              <label for="id">Nomor Pengaduan</label>
              <input type="text" name="id" id="id" class="form-control" value="<?= $kodeBarang; ?>" style="cursor: default;" readonly>
              <p class="text-sm"><span style="color: red;">*</span>Harap catat kode ini untuk melakukan pengecekan sendiri melalui kolom pencarian.</p>
          <div>
          <div class="form-group">
              <label for="nama">Nama Pelapor</label>
              <input type="text" name="nama" id="nama" class="form-control"  required>
          <div>
          <div class="form-group">
              <label for="jabatan">Jabatan Pelapor</label>
              <input type="text" name="jabatan" id="jabatan" class="form-control" required>
          <div>
          <div class="form-group">
              <label for="dept">Departemen</label>
              <input type="text" name="dept" id="dept" class="form-control" required>
          <div>
          <div class="form-group">
              <label for="nama_barang">Nama Barang</label>
              <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
          <div>
          <div class="form-group">
              <label for="ket">Keterangan</label>
              <textarea name="ket" id="ket" class="form-control" required></textarea>
          <div>
          <button class="btn btn-outline-success mt-3 mr-3" type="submit" name="submit" style="width: 100px;"><span class="fas fa-paper-plane mr-2"></span>Kirim</button>
          <button class="btn btn-outline-danger mt-3" type="reset" name="reset" style="width: 130px;"><span class="fas fa-undo mr-2"></span>Reset Form</button>
        </div>
      </form>
<?php
include 'templates/footer.php';
?>
