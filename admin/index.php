<?php

require "../config.php";

$tbl_cabang = mysqli_query($conn, "SELECT * FROM tbl_cabang");
$tbl_kategori = mysqli_query($conn, "SELECT * FROM tbl_kategori");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>
        Transaksi
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
    <link id="pagestyle" href="../nganu.css" rel="stylesheet" />
</head>

<body class="bg-gray-200">
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1543332164-6e82f355badc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');">
            <span class="mask bg-gradient-primary opacity-1"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Transaksi</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form role="form" class="text-start" action="../config.php" method="POST">
                                    <div class="row text-center py-2 mt-3">
                                        <div class="mx-auto text-start">
                                            <?php while ($cabang = mysqli_fetch_assoc($tbl_cabang)) { ?>
                                                <div class="form-check">
                                                    <input name="cabang" value="<?= $cabang['id_cabang'] ?>" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault<?= $cabang['nama_cabang'] ?>" required>
                                                    <label class="form-check-label" for="flexRadioDefault<?= $cabang['nama_cabang'] ?>">
                                                        <?= $cabang["nama_cabang"] ?>
                                                    </label>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row text-center py-2 mt-3">
                                        <div class="mx-auto text-start">
                                            <?php while ($kategori = mysqli_fetch_assoc($tbl_kategori)) { ?>
                                                <div class="form-check">
                                                    <input name="bayar" value="<?= $kategori['id_kategori'] ?>" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault<?= $kategori['kategori'] ?>" required>
                                                    <label class="form-check-label" for="flexRadioDefault<?= $kategori['kategori'] ?>">
                                                        <?= $kategori["kategori"] ?>
                                                    </label>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-static my-3 focused is-focused is-filled">
                                        <label class="form-label">Tanggal</label>
                                        <input name="tanggal" type="date" class="form-control" required>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" name="insertTransaksi" class="btn bg-gradient-primary w-100 my-2 mb-1">Submit</button>
                                        <a href="dashboard.php" type="button" class="btn bg-gradient-primary w-100 my-2 mb-2"><i class="material-icons opacity-10">dashboard</i> Dashboard</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        function toast() {
            Toast.fire({
                icon: 'success',
                title: 'Signed in successfully'
            })
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>