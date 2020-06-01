<?php

session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
include('koneksi.php');
$id = $_GET["id"];
$query = "DELETE FROM tb_data_pasien WHERE id = $id";
mysqli_query($conn, $query);
echo "<script>
document.location.href = 'data.php';
</script>";
