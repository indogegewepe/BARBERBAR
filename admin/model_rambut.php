<?php
require "../config.php";

$tbl_model = mysqli_query($conn, "SELECT * FROM model_rambut");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Model
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

<body class="g-sidenav-show bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <!-- Dashboard -->
        <li class="nav-item">
          <a class="nav-link text-white" href="dashboard.php">
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
          <a class="nav-link text-white active bg-gradient-primary" href="model_rambut.php">
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
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-200 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1637448096758-95360e65e72f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1331&q=80');">
        <span class="mask bg-gradient-primary opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row">
          <div class="col-12 mt-4">
            <div class="mb-5 ps-3">
              <h3 class="mb-1">Model Rambut</h3>
            </div>
            <div class="row">
              <?php while ($Model = mysqli_fetch_assoc($tbl_model)) { ?>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="../assets/img/<?php echo $Model["foto_model"] ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <h5>
                        <?php echo $Model["nama_model"] ?>
                      </h5>
                      <p class="mb-4 text-sm">
                        <?php echo $Model["deskripsi"] ?>
                      </p>
                      <div class="d-flex" style="justify-content: space-evenly;">
                        <div class="d-flex align-items-center justify-content-between">
                          <a href="hapusmodel.php?id=<?php echo $Model['id_model'] ?>" type="button" class="btn btn-outline-primary mb-0">Hapus</a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                          <a href="editmodel.php?id=<?php echo $Model['id_model'] ?>" type="button" class="btn btn-outline-primary mb-0">Edit</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
              <button type="button" class="btn btn-outline-primary col-xl-3 col-md-6 mb-xl-0 mb-4" data-bs-toggle="modal" data-bs-target="#TambahModel">Tambah Model</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- modal model -->
    <div class="modal fade" id="TambahModel" tabindex="-1" role="dialog" aria-labelledby="TambahModelLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-weight-normal" id="TambahModelLabel">Tambah Model</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="user" method="POST" action="../config.php" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">Nama</label>
                  <input name="nama" type="text" class="form-control" required>
                </div>
                <div class=" input-group input-group-outline my-3 is-filled">
                  <label class="form-label">File To Upload</label>
                  <input name="foto" type="file" class="form-control" id="foto" required>
                </div>
                <div class=" input-group input-group-outline my-3">
                  <textarea name="deskripsi" type="text" class="form-control" placeholder="Deskripsi" required></textarea>
                </div>
              </div>
              <div class=" modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-gradient-primary" name="insertModel">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
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

  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <script src="assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>