<?php
require '../function.php';
$id = $_GET['id'];
    if (deleteUser($id) > 0) {
        echo "<script>alert('User $id berhasil dihapus.'); document.location.href='index.php';</script>";
    } else {
        echo "<script>alert('User gagal dihapus.'); document.location.href='index.php';</script>";
    }

?>