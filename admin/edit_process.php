<?php

session_start();
if (!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
}

include('koneksi.php');
$id = $_POST["id"];
// echo $id;
$nama = $_POST["nama"];
$umur = $_POST["umur"];
$gender = $_POST["gender"];
$status = $_POST["status"];
$provinsi = $_POST["provinsi"];
$wn = $_POST["wn"];
$rs = $_POST["rs"];
$query = "UPDATE tb_data_pasien SET 
        nama_pasien = '$nama',
        umur_pasien = '$umur',
        gender = '$gender',
        status_pasien = '$status',
        provinsi = '$provinsi',
        wn = '$wn',
        rumah_sakit = '$rs'
        WHERE id = $id
";
mysqli_query($conn, $query);
echo "<script>
        alert('Data Berhasil Diubah!');
        document.location.href = 'data.php';
        </script>";
