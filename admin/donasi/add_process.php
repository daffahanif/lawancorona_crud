<?php

session_start();
if (!isset($_SESSION["login"])) {
        header("Location: ../login.php");
        exit;
}

include('../koneksi.php');
$nama = $_POST["nama"];
$jumlah = $_POST["jumlah"];
$alamat = $_POST["alamat"];
$query = "INSERT INTO tb_donasi VALUES('','$nama','$jumlah','$alamat')";
mysqli_query($conn, $query);
echo "<script>
        alert('Data Berhasil Ditambahkan!');
        document.location.href = 'index.php';
        </script>";
