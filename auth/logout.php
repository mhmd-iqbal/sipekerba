<?php
session_start();
session_destroy();
echo "<script>alert('Berhasil logout dari SIPEKERBA!'); window.location='../index.php';</script>";