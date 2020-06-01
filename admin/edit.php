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

    <title>Lawan Corona - Dashboard</title>

    <!-- Custom fonts for this template-->
    <!-- <link rel="stylesheet" href="http://localhost/lawancorona/admin/assets/fa/css/font-awesome.min.css"> -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/lawancorona/admin/assets/css/bootstrap.min.css">
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
                        <!-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> -->
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-power-off fa-sm text-white-50"></i> Logout</a> -->
                    </div>
                    <!-- Content Row -->
                    <div class="col-lg-8 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Edit Data Pasien COVID-19</h6>
                            </div>
                            <div class="card-body">
                                <?php
                                include('koneksi.php');
                                $id = $_GET["id"];
                                $query = "SELECT * FROM tb_data_pasien WHERE id = $id";
                                $sql = mysqli_query($conn, $query);
                                $data = mysqli_fetch_array($sql);
                                ?>
                                <form action="edit_process.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $data["id"]; ?>">
                                    <label for="">Nama Pasien</label>
                                    <input type="text" class="form-control" placeholder="Nama Pasien" name="nama" value="<?php echo $data["nama_pasien"]; ?>" required>
                                    <br>
                                    <label for="">Umur</label>
                                    <input type="text" class="form-control" placeholder="Umur Pasien" name="umur" value="<?php echo $data["umur_pasien"]; ?>" required>
                                    <br>
                                    <label for="">Gender</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Laki-Laki" <?php if ($data['gender'] == 'Laki-Laki') echo 'checked'; ?>>
                                        <label class="form-check-label" for="inlineRadio1">L</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Perempuan" <?php if ($data['gender'] == 'Perempuan') echo 'checked'; ?>>
                                        <label class="form-check-label" for="inlineRadio1">P</label>
                                    </div>
                                    <br><br>
                                    <label for="">Status</label>
                                    <select class="form-control form-control-sm" name="status" required>
                                        <option value="Sembuh" <?php if ($data['status_pasien'] == 'Sembuh') echo 'selected'; ?>>Sembuh</option>
                                        <option value="Positif" <?php if ($data['status_pasien'] == 'Positif') echo 'selected'; ?>>Positif</option>
                                        <option value="Meninggal" <?php if ($data['status_pasien'] == 'Meninggal') echo 'selected'; ?>>Meninggal</option>
                                        <option value="ODP" <?php if ($data['status_pasien'] == 'ODP') echo 'selected'; ?>>Orang Dalam Pengawasan</option>
                                        <option value="PDP" <?php if ($data['status_pasien'] == 'PDP') echo 'selected'; ?>>Pasien Dalam Pengawasan</option>
                                    </select>
                                    <br>
                                    <label for="">Provinsi</label>
                                    <input type="text" class="form-control" placeholder="Provinsi Pasien" name="provinsi" value="<?php echo $data["provinsi"]; ?>" required>
                                    <br>
                                    <label for="">Warga Negara</label>
                                    <input type="text" class="form-control" placeholder="Warga Negara" name="wn" value="<?php echo $data["wn"]; ?>" required>
                                    <br>
                                    <label for="">Dirawat Di</label>
                                    <input type="text" class="form-control" placeholder="Nama Pasien" name="rs" value="<?php echo $data["rumah_sakit"]; ?>" required> <br>
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


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