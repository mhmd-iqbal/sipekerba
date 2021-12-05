<?php
require '../function.php';
$id = $_GET['id'];
    if (deletePengaduan($id) > 0) {
        echo "<script>alert('Data dengan nomor pengaduan $id berhasil dihapus.'); document.location.href='data-pengaduan.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus.'); document.location.href='data-pengaduan.php';</script>";
    }

?>