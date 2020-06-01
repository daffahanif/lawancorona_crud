<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
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
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

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
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-power-off fa-sm text-white-50"></i> Logout</a> -->
                    </div>
                    <!-- Content Row -->
                    <div class="col-lg-8">


                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Tambah Donatur</h6>
                            </div>
                            <div class="card-body">
                                <form action="add_process.php" method="POST">
                                    <label for="">Nama Donatur</label>
                                    <input type="text" class="form-control" placeholder="Nama Donatur" name="nama" required><br>
                                    <label for="">Jumlah Donasi</label>
                                    <input type="text" class="form-control" placeholder="10000" name="jumlah" required><br>
                                    <label for="">Alamat Donatur</label>
                                    <input type="text" class="form-control" placeholder="Alamat Donatur" name="alamat" required><br>
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Content Wrapper -->
            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>


            <!-- Bootstrap core JavaScript-->
            <script src="../assets/vendor/jquery/jquery.min.js"></script>
            <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="../assets/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

            <!-- Page level custom scripts -->
            <!-- <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script> -->

</body>
<?php include('../footer.php'); ?>

</html>