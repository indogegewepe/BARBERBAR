<?php
require "../config.php";

$tbl_pegawai = mysqli_query($conn, "SELECT * FROM pegawai");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Pegawai
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
          <a class="nav-link text-white" href="dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <!-- Karyawan -->
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="pegawai.php">
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
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Tabel Pegawai</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0 m-4">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No Hp</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($Pegawai = mysqli_fetch_assoc($tbl_pegawai)) { ?>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/<?php echo $Pegawai["pp"] ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="Foto">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm"><?php echo $Pegawai["nama_pegawai"] ?></h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0"><?php echo $Pegawai["no_hp"] ?></p>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0"><?php echo $Pegawai["email"] ?></p>
                        </td>
                        <td class="align-middle text-center">
                          <a class="btn btn-primary" href="editpegawai.php?id=<?php echo $Pegawai['id_pegawai'] ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                          <a class="btn btn-primary" href="hapuspegawai.php?id=<?php echo $Pegawai['id_pegawai'] ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Hapus
                          </a>
                        </td>
                      </tr>
                    <?php } ?>
                    <td class="text-center">
                      <buttons class="btn btn-primary text-secondary font-weight-bold text-xs text-white" data-bs-toggle="modal" data-bs-target="#TambahPegawai">
                        Tambah Pegawai
                      </buttons>
                    </td>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- modal tambah pegawai -->
      <div class="modal fade" id="TambahPegawai" tabindex="-1" role="dialog" aria-labelledby="TambahPegawaiLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-weight-normal" id="TambahPegawaiLabel">Tambah Pegawai</h5>
            </div>
            <div class="modal-body">
              <form class="user" method="POST" action="../config.php" enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label"><?= $newId; ?></label>
                    <input type="text" class="form-control" readonly>
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" required>
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">No.Hp</label>
                    <input name="nohp" type="number" class="form-control" required>
                  </div>
                  <div class=" input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" required>
                  </div>
                  <div class=" input-group input-group-outline my-3">
                    <label class="form-label">Password</label>
                    <input name="pass" type="password" class="form-control" required>
                  </div>
                  <div class=" input-group input-group-outline my-3 is-filled">
                    <label class="form-label">Profile Photo</label>
                    <input name="fileToUpload" type="file" class="form-control" id="fileToUpload" required>
                  </div>
                </div>
                <div class=" modal-footer">
                  <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn bg-gradient-primary" name="insertPegawai">Save changes</button>
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
  </main>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>