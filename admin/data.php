<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lawan Corona - Donasi</title>

    <!-- Custom fonts for this template-->
    <!-- <link rel="stylesheet" href="http://localhost/lawancorona/admin/assets/fa/css/font-awesome.min.css"> -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include('sidebar.php'); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin: 30px">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="logout.php" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-power-off fa-sm text-white-50"></i> Logout</a>
                    </div>
                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Pasien COVID-19</h6>
                            <a href="add.php" class="btn btn-sm btn-primary shadow-sm" style="margin: -20px 0 0 900px;"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <?php
                            include('koneksi.php');
                            $query = "SELECT * FROM tb_data_pasien";
                            $sql = mysqli_query($conn, $query);
                            ?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Umur</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Provinsi</th>
                                        <th scope="col">WN</th>
                                        <th scope="col">Dirawat Di</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                while ($data = mysqli_fetch_array($sql)) {

                                ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $i; ?></th>
                                            <td><?php echo $data["nama_pasien"] ?></td>
                                            <td><?php echo $data["umur_pasien"]; ?></td>
                                            <td><?php echo $data["gender"] ?></td>
                                            <td><?php echo $data["status_pasien"] ?></td>
                                            <td><?php echo $data["provinsi"] ?></td>
                                            <td><?php echo $data["wn"] ?></td>
                                            <td><?php echo $data["rumah_sakit"] ?></td>
                                            <td>
                                                <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-warning shadow-sm">
                                                    <i class="fas fa-cog"></i> </a>
                                                <a href="delete.php?id=<?php echo $data["id"]; ?>" class="btn btn-sm btn-danger shadow-sm" Onclick="return ConfirmDelete();">
                                                    <i class="fas fa-times"></i> </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php
                                    $i++;
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End of Content Wrapper -->
            </div>
            <!-- End of Page Wrapper -->
            <script>
                function ConfirmDelete() {
                    var x = confirm("Are you sure you want to delete?");
                    if (x)
                        return true;
                    else
                        return false;
                }
            </script>
            <!-- Bootstrap core JavaScript-->
            <script src="/assets/vendor/jquery/jquery.min.js"></script>
            <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="/assets/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

            <!-- Page level custom scripts -->
            <!-- <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script> -->

</body>
<?php include('footer.php'); ?>

</html>