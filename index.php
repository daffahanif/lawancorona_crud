<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bersama Lawan Corona</title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/assets/css/sb-admin-2.min.css">
    <link href="admin/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">


</head>

<body>
    <style>
        body {
            background-color: #f4f4f4;
        }

        .navbar-custom {
            background-color: #4e73df;
        }

        .text1 {
            font-family: 'Titillium Web', sans-serif;
        }
    </style>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><b>LAWAN</b>CORONA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <!-- <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul> -->
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <div>
        <h1 class="text-center text1">
            INDONESIA <br>VS<br> COVID-19
        </h1>
    </div>
    <?php
    include('admin/koneksi.php');
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

    <div class="row" style="margin: 30px 50px 30px;">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-1">
                            <div class="text-xl font-weight-bold text-danger text-uppercase mb-1">Total Positf</div>
                            <div class="h1 mb-0 font-weight-bold text-gray-800"><?php echo $positif; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-frown fa-3x text-danger "></i>
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
                            <div class="text-xl font-weight-bold text-success text-uppercase mb-1">Total Sembuh</div>
                            <div class="h1 mb-0 font-weight-bold text-gray-800"><?php echo $sembuh; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-smile fa-3x text-success "></i>
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
                            <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">Total Meninggal</div>
                            <div class="h1 mb-0 font-weight-bold text-gray-800"><?php echo $meninggal; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-sad-cry fa-3x text-warning "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">ODP & PDP</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">ODP : <?php echo $odp; ?></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">PDP : <?php echo $pdp; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-exclamation-triangle fa-3x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row-xl-12" style="margin: 30px 100px;">
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DAFTAR PASIEN COVID-19</h6>
            </div>
            <div class="card-body">
                <?php
                include('admin/koneksi.php');
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
    <div class="" style="margin:30px 0 0 0;">
        <h1 class="text-center text1">
            <b>
                Ingin berdonasi?
            </b>
        </h1>
        <h5 class="text-center text1">
            donasi akan disalurkan untuk membeli peralatan APD untuk tenaga medis
        </h5>
    </div>
    <div class="row text1" style="margin:30px 80px;">
        <div class="col " style="margin:0 0 0 200px;">
            <div class="card shadow" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-center"><b>BANK TRANSFER</b></h5>
                    <hr>
                    <h6 class="card-subtitle mb-2 text-muted"><b>BRI</b></h6>
                    <p class="card-text">1234-5678-1234-123<p>
                            <h6 class="card-subtitle mb-2 text-muted"><b>BCA</b></h6>
                            <p class="card-text">1234-5678-12<p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-center"><b>DIGITAL PAYMENT</b></h5>
                    <hr>
                    <h6 class="card-subtitle mb-2 text-muted"><b>DANA</b></h6>
                    <p class="card-text">0812-1234-1234<p>
                            <h6 class="card-subtitle mb-2 text-muted"><b>GOPAY</b></h6>
                            <p class="card-text">0812-1234-1234<p>
                </div>
            </div>

        </div>
    </div>

    <div>
        <div class="row" style="margin: 50px 200px 30px;">
            <?php
            include('admin/koneksi.php');
            $query = "SELECT * FROM tb_donasi";
            $data = mysqli_query($conn, $query);
            $totalDonasi = 0;
            while ($donate = mysqli_fetch_array($data)) {
                $sum = (int) $donate["jumlah_donasi"];
                $totalDonasi =  $sum + $totalDonasi;
            }
            ?>
            <?php
            include('admin/koneksi.php');
            $query = "SELECT * FROM tb_donasi";
            $data = mysqli_query($conn, $query);
            $totalOrang = 0;
            while ($dataDonate = mysqli_fetch_array($data)) {
                ($dataDonate['nama_donatur']) ? $totalOrang++ : '';
            }
            ?>
            <div class="col-sm-6 col-md-6 mb-4">
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

    <div style="margin: 30px 100px;">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Donatur</h6>
            </div>
            <div class="card-body">
                <?php
                include('admin/koneksi.php');
                $query = "SELECT * FROM tb_donasi";
                $sql = mysqli_query($conn, $query);
                ?>
                <table class="table table-bordered">
                    <thead>
                        <tr class="d-flex">
                            <th scope="col" class="col-1">No</th>
                            <th scope="col" class="col-4">Nama</th>
                            <th scope="col" class="col-3">Jumlah Donasi</th>
                            <th scope="col" class="col-4">Alamat</th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    while ($data = mysqli_fetch_array($sql)) {

                    ?>
                        <tbody>
                            <tr class="d-flex">
                                <th scope="row" class="col-1"><?php echo $i; ?></th>
                                <td class="col-4"><?php echo $data["nama_donatur"] ?></td>
                                <td class="col-3"><?php echo $data["jumlah_donasi"]; ?></td>
                                <td class="col-4"><?php echo $data["alamat_donatur"] ?></td>
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

    <script src="admin/assets/vendor/jquery/jquery.min.js"></script>
    <script src="admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin/assets/js/sb-admin-2.min.js"></script>
</body>
<?php
include('admin/footer.php');
?>

</html>