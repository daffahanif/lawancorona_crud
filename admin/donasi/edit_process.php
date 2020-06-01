<?php

session_start();
if (!isset($_SESSION["login"])) {
        header("Location: ../login.php");
        exit;
}

include('../koneksi.php');
$id = $_POST["id"];
$nama = $_POST["nama"];
$jumlah = $_POST["jumlah"];
$alamat = $_POST["alamat"];
$query = "UPDATE tb_donasi SET 
        nama_donatur = '$nama',
        jumlah_donasi = '$jumlah',
        alamat_donatur = '$alamat'
        WHERE id = $id
";
mysqli_query($conn, $query);
echo "<script>
        alert('Data Berhasil Diubah!');
        document.location.href = 'index.php';
        </script>";
