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
                    <?php
                    include('koneksi.php');
                    $query = "SELECT * FROM tb_data_pasien";
                    $data = mysqli_query($conn, $query);
                    $positif = 0;
                    $sembuh = 0;
                    $meninggal = 0;
                    $odp = 0;
                    $pdp = 0;
                    while ($newData = mysqli_fetch_array($data)) {
                        ($newData['status_pasien'] == 'Positif') ? $positif++ : '';
                        ($newData['status_pasien'] == 'Sembuh') ? $sembuh++ : '';
                        ($newData['status_pasien'] == 'Meninggal') ? $meninggal++ : '';
                        ($newData['status_pasien'] == 'ODP') ? $odp++ : '';
                        ($newData['status_pasien'] == 'PDP') ? $pdp++ : '';
                    }

                    ?>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pasien Positf</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $positif; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-frown fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pasien Sembuh</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $sembuh; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-smile fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pasien Meninggal</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $meninggal; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-sad-cry fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">ODP & PDP</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">ODP : <?php echo $odp; ?></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">PDP : <?php echo $pdp; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        include('koneksi.php');
                        $query = "SELECT * FROM tb_donasi";
                        $data = mysqli_query($conn, $query);
                        $totalDonasi = 0;
                        while ($donate = mysqli_fetch_array($data)) {
                            $sum = (int) $donate["jumlah_donasi"];
                            $totalDonasi =  $sum + $totalDonasi;
                        }
                        ?>
                        <?php
                        include('koneksi.php');
                        $query = "SELECT * FROM tb_donasi";
                        $data = mysqli_query($conn, $query);
                        $totalOrang = 0;
                        while ($dataDonate = mysqli_fetch_array($data)) {
                            ($dataDonate['nama_donatur']) ? $totalOrang++ : '';
                        }
                        ?>
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-success text-uppercase mb-1">Total Donasi</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">Rp.<?php echo $totalDonasi; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-donate fa-3x text-success "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">Jumlah Orang Yang Berdonasi</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800"><?php echo $totalOrang; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-3x text-primary "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Content Wrapper -->
            </div>
            <!-- End of Page Wrapper -->
            <!-- Bootstrap core JavaScript-->
            <script src="assets/vendor/jquery/jquery.min.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="assets/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

            <!-- Page level custom scripts -->
            <!-- <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script> -->

</body>
<?php include('footer.php'); ?>

</html>