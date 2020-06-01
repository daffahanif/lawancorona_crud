<?php

session_start();
if (!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
}

include('koneksi.php');
$nama = $_POST["nama"];
$umur = $_POST["umur"];
$gender = $_POST["gender"];
$status = $_POST["status"];
$provinsi = $_POST["provinsi"];
$wn = $_POST["wn"];
$rs = $_POST["rs"];

$query = "INSERT INTO tb_data_pasien VALUES (
            '','$nama','$umur','$gender','$status','$provinsi',
            '$wn','$rs')";
mysqli_query($conn, $query);
// var_dump($query);
echo "<script>
        alert('Data Berhasil Ditambah!');
        document.location.href = 'data.php';
        </script>";
