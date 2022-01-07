<?php

require "../config.php";

$transaksi = ("SELECT * FROM transaksi");

$monthNow = date("Y/m");

if ($result = mysqli_query($conn, $transaksi)) {
  $totaltransaksi = mysqli_num_rows($result);
}

$pendBulan = mysqli_query(
  $conn,
  "SELECT DATE_FORMAT(transaksi.tanggal_transaksi,'%Y/%m') AS tahun_bulan, SUM(tbl_kategori.harga) AS jumlah_bulanan FROM transaksi INNER JOIN tbl_kategori ON transaksi.id_kategori = tbl_kategori.id_kategori GROUP BY DATE_FORMAT(tanggal_transaksi,'%Y/%m')"
);

// SELECT DATE_FORMAT(transaksi.tanggal_transaksi,'%Y/%m') AS tahun_bulan, SUM(tbl_kategori.harga) AS jumlah_bulanan FROM transaksi INNER JOIN tbl_kategori ON transaksi.id_kategori = tbl_kategori.id_kategori GROUP BY DATE_FORMAT(tanggal_transaksi,'%Y/%m');

$total_bulanan = 0;
while ($row = mysqli_fetch_assoc($pendBulan)) {
  if ($row['tahun_bulan'] == $monthNow) $total_bulanan += $row['jumlah_bulanan'];
}

$pelangganBulan = mysqli_query(
  $conn,
  "SELECT DATE_FORMAT(tanggal_transaksi,'%Y/%m') AS tahun_bulan, count(id_transaksi) AS jml FROM transaksi GROUP BY DATE_FORMAT(tanggal_transaksi,'%Y/%m')"
);
$total_pelanggan = 0;
while ($row = mysqli_fetch_assoc($pelangganBulan)) {
  if ($row['tahun_bulan'] == $monthNow) $total_pelanggan += $row['jml'];
}

$tbl_cabang = mysqli_query($conn, "SELECT * FROM tbl_cabang");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <!-- Dashboard -->
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <!-- Karyawan -->
        <li class="nav-item">
          <a class="nav-link text-white" href="pegawai.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Pegawai</span>
          </a>
        </li>

        <!-- Model Rambut -->
        <li class="nav-item">
          <a class="nav-link text-white" href="model_rambut.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">interests</i>
            </div>
            <span class="nav-link-text ms-1">Model Rambut</span>
          </a>
        </li>

        <!-- Model Jam Kerja -->
        <li class="nav-item">
          <a class="nav-link text-white" href="jamkerja.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10"><span class="material-icons-outlined">schedule</span></i>
            </div>
            <span class="nav-link-text ms-1">Jam Kerja</span>
          </a>
        </li>

        <!-- Cabang -->
        <li class="nav-item">
          <a class="nav-link text-white " href="cabang.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10"><span class="material-icons-outlined">place</span></i>
            </div>
            <span class="nav-link-text ms-1">Cabang</span>
          </a>
        </li>

        <!-- Kategori -->
        <li class="nav-item">
          <a class="nav-link text-white" href="kategori.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10"><span class="material-icons-outlined">category</span></i>
            </div>
            <span class="nav-link-text ms-1">Kategori</span>
          </a>
        </li>

        <!-- Transaksi -->
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10"><span class="material-icons-outlined">receipt_long</span></i>
            </div>
            <span class="nav-link-text ms-1">Transaksi</span>
          </a>
        </li>

      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg my-4">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-hand-holding-usd"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Pemasukan Bulan Ini</p>
                <h4 class="mb-0"><?= "Rp." . number_format($total_bulanan) ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6 my-5 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-user"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Pelanggan Bulan Ini</p>
                <h4 class="mb-0"><?= $total_pelanggan ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6 my-5 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-danger shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-user"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Pelanggan</p>
                <h4 class="mb-0"><?= $totaltransaksi ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>

        <!-- Pendapatan di setiap cabang -->
        <?php
        while ($cabang = mysqli_fetch_assoc($tbl_cabang)) {
          $anu =
            mysqli_query(
              $conn,
            "SELECT DATE_FORMAT(transaksi.tanggal_transaksi,'%Y/%m') AS tahun_bulan, SUM(tbl_kategori.harga) AS jumlah_bulanan, tbl_cabang.nama_cabang AS Kota FROM transaksi INNER JOIN tbl_kategori ON transaksi.id_kategori = tbl_kategori.id_kategori INNER JOIN tbl_cabang ON transaksi.id_cabang = tbl_cabang.id_cabang GROUP BY Kota"
            );
          $total = 0;
          while ($row = mysqli_fetch_assoc($anu)) {
            if ($row['tahun_bulan'] == $monthNow AND $row['Kota'] == $cabang['nama_cabang']) $total += $row['jumlah_bulanan'];
          } ?>
          <div class="col-xl-4 col-sm-6 my-5 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="fas fa-money-bill-wave-alt"></i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Pendapatan Perbulan Cabang <?= $cabang["nama_cabang"] ?></p>
                  <h4 class="mb-0"><?= "Rp." . number_format($total) ?></h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
              </div>
            </div>
          </div>
        <?php } ?>
      </div>

      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://github.com/indogegewepe" class="font-weight-bold" target="_blank">Bagas Uwaidha</a>
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://github.com/indogegewepe" class="nav-link text-muted" target="_blank">Bagas Uwaidha</a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/Responsi%20BasDat/Responsi/" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>