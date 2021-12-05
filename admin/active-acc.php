<?php
require '../function.php';
// get value user_id
$id = $_GET["user_id"];

// update status to 1
$status = "1";

$query = "UPDATE user SET status='$status' WHERE user_id='$id'";
$result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>
                alert('Akun berhasil diaktifkan!'); window.location='index.php';
            </script>";
    } else {
        echo "<script>
                alert('Akun gagal diaktifkan!'); window.location='index.php';
            </script>";
    }
?>