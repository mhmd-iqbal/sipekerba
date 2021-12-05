<?php
session_start();
require '../function.php';

if (isset($_SESSION['login'])) {
    header("Location: ../admin/index.php");
    exit;
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username' OR user_id = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            if ($row['status'] == 1) {
                $_SESSION["login"] = true;
                $_SESSION["login"] = $row;
                echo "<script>alert('Login Success!'); window.location='../admin/index.php';</script>";
                exit;
            } else {
                echo "<script>alert('Akun anda belum diaktifkan, mohon konfirmasi kepada admin untuk pengaktifan akun.');</script>";
            }
        } else {
            echo "<script>alert('Password yang Anda masukkan salah!');</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan di database!');</script>";
    }

    $error = true;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SI-PEKERBA DISKOMINFO</title>
    <!-- icon diskominfo -->
    <link rel="icon" href="../assets/dist/img/diskominfo-logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap4/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="../assets/img/login-img.svg" class="img-fluid" alt="login image">
            </div>
            <div class="col-md-6">
                <a class="btn logo" href="../index.php">SI-PEKERBA</a>
                <img src="css/diskominfo-logo.png" width="40" height="40">
                <p class="lead">Dinas Komunikasi dan Informasi Palembang</p>
                <h4 class="signin-text mb-3">Sign In</h4>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="form-group form-check">
                        
                        <input type="checkbox" class="form-check-input" name="checkbox" id="checkbox">
                        <label for="checkbox" class="form-check-label">Remember Me</label>
                    </div>
                    <button class="btn btn-signin" value="login" name="login">Login</button>
                    <hr> 
                    <p>Don't have an account? Register here!</p>
                    <a href="sign-up.php" class="btn btn-signup">Sign up</a>
                </form>
            </div>
        </div>
    </div>
<!-- JavaScript -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap4/js/bootstrap.min.js"></script>
</body>
</html>