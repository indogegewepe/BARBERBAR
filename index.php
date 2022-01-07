<?php

require "config.php";

$jamKerja = mysqli_query($conn, "SELECT * FROM jam_kerja");
$tbl_pegawai = mysqli_query($conn, "SELECT * FROM pegawai");
$tbl_kategori = mysqli_query($conn, "SELECT * FROM tbl_kategori");
$tbl_model = mysqli_query($conn, "SELECT * FROM model_rambut");
$tbl_cabang = mysqli_query($conn, "SELECT * FROM tbl_cabang");

?>

<!doctype html>
<html lang="en">

<head>
  <title>BARBERBAR</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <script src="https://kit.fontawesome.com/b9fbc0251e.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-kit.css?v=3.0.0" rel="stylesheet" />
  <link href="nganu.css" rel="stylesheet" />
</head>

<body>
  <!-- Navbar Transparent -->
  <nav class="navbar navbar-expand-lg border-radius-xl position-fixed z-index-3 w-auto shadow py-2 m-4 start-0 end-0 navbar-blur">
    <div class="container">
      <a class="navbar-brand" href="#" rel="tooltip" title="Designed and Coded by Bagas Uwaidha" data-placement="bottom">
        <h3 class="text-white"> <i class="fab fa-d-and-d"></i> BARBERBAR</h3>
      </a>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Banner -->
  <div class="page-header min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1562696676-819de700158a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80')">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="text-center">
            <h1 class="text-white">Welcome to the BARBERBAR</h1>
            <h3 class="text-white">Lo belom BARBAR kalo potong rambutnya ke tempat laen</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Point BARBERBAR -->
  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6 z-index-2">
    <div class="container">
      <div class="mx-auto">
        <div class="text-center">
          <h1>Mengapa Harus BARBERBAR</h1>
        </div>
      </div>
      <div class="row">

        <div class="col-md-4">
          <div class="card-body text-center">
            <h5 class="font-weight-normal mt-3">
              <a>Hair-Style</a>
            </h5>
            <p class="mb-0">
              Jangan takut mati gaya. Karena kami selalu update model-model rambut dan skill demi kepuasan Anda sepenuhnya.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body text-center">
            <h5 class="font-weight-normal mt-3">
              <a>Tarif Terjangkau</a>
            </h5>
            <p class="mb-0">
              Kami memberikan layanan untuk anak-anak, remaja dan dewasa dengan tarif yang cukup terjangkau.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body text-center">
            <h5 class="font-weight-normal mt-3">
              <a>Pengalaman Terbaik</a>
            </h5>
            <p class="mb-0">
              Kami memberikan pengalaman yang menyenangkan dan berbeda. Konsumen merasakan seperti memiliki penata rambut pribadi.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-body text-center">
            <h5 class="font-weight-normal mt-3">
              <a>Kemudahan</a>
            </h5>
            <p class="mb-0">
              Konsumen diberikan kebebasan untuk Cukur setelah itu Ganteng.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body text-center">
            <h5 class="font-weight-normal mt-3">
              <a>Jangkauan Pelayanan</a>
            </h5>
            <p class="mb-0">
              Kami tersedia di kota-kota besar sehingga memudahkan konsumen untuk memesan.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body text-center">
            <h5 class="font-weight-normal mt-3">
              <a>BARBAR</a>
            </h5>
            <p class="mb-0">
              Jika ingin terlihat keren dan BARBAR wajib cukur di BARBERBAR
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- END Point BARBERBAR -->

  <!-- About Us -->
  <div class="page-header min-vh-100 mt-n6" style="background-image: url('https://images.unsplash.com/photo-1602893100637-6cd8d9279c92?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1182&q=80')">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
      <div class="row">
        <h1 class="text-white">About Us</h1>
        <h5 class="text-white">BARBERBAR TERBENTUK PADA TAHUN 2022. BARBERBAR MERUPAKAN TEMPAT CUKUR RAMBUT YANG MEMPUNYAI KONSEP MENGGABUNGKAN ANTARA BARBERSHOP DAN SALON. INI LAH KAMI YANG PEDULI DENGAN KUALITAS HASIL POTONGAN RAMBUT UNTUK PARA CUSTOMER KAMI. RAMBUT ADALAH KANVAS KAMI UNTUK MEMBUAT SEBUAH KARYA.</h5>
      </div>
    </div>
  </div>

  <!-- Model -->
  <div class="card card-body shadow-xl mx-3 mx-md-4 z-index-2 mt-n6">
    <div class="container">
      <div class="mx-auto">
        <div class="text-center">
          <h1>Model</h1>
        </div>
      </div>
      <div class="row" style="justify-content: center;">
        <?php while ($Model = mysqli_fetch_assoc($tbl_model)) { ?>
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
            <div class="card card-blog card-plain">
              <div class="card-header p-0 mx-3">
                <a class="d-block shadow-xl border-radius-xl">
                  <img src="assets/img/<?php echo $Model["foto_model"] ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                </a>
              </div>
              <div class="card-body text-center">
                <h5 class="font-weight-normal mt-3">
                  <?php echo $Model["nama_model"] ?>
                </h5>
                <p class="mb-4 text-sm">
                  <?php echo $Model["deskripsi"] ?>
                </p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <!-- END Model -->

  <!-- Harga -->
  <div class="page-header min-vh-100 mt-n6" style="background-image: url('https://images.unsplash.com/photo-1596362601603-b74f6ef166e4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1026&q=80')">
    <span class="mask bg-gradient-dark opacity-8"></span>
    <div class="container">
      <div class="row w-100 text-center z-index-2 hiya">
        <div class="col-md-12 mx-auto">
          <div class="text-center">
            <h1>Harga</h1>
          </div>
        </div>
        <div class="row" style="justify-content: center;">
          <?php while ($kategori = mysqli_fetch_assoc($tbl_kategori)) { ?>
            <div class="col-md-4">
              <div class="card-body text-center">
                <h5 class="font-weight-normal mt-3">
                  <a><?= $kategori["kategori"] ?></a>
                </h5>
                <p class="font-weight-normal mt-3">
                  <a><?= $kategori["harga"] ?></a>
                </p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <!-- end Harga -->

  <!-- Team -->
  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <div class="container">
      <div class="mx-auto">
        <div class="text-center">
          <h1>Our Team</h1>
        </div>
      </div>
      <div class="row">
        <?php while ($Pegawai = mysqli_fetch_assoc($tbl_pegawai)) { ?>
          <div class="col-md">
            <div class="card-body text-center">
              <a class="card-header p-0 mx-3">
                <img src="assets/img/<?php echo $Pegawai["pp"] ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl" width="100">
              </a>
              <h5 class="font-weight-normal mt-3">
                <a><?php echo $Pegawai["nama_pegawai"] ?></a>
              </h5>
              <p class="font-weight-normal mt-3">
                <a><?php echo $Pegawai["no_hp"] ?></a>
              </p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <!-- END Team-->

  <footer class="footer pt-5 mt-5">
    <div class="container">
      <div class=" row">
        <div class="col-lg-2 ms-auto">
          <h6 class="font-weight-bolder mb-4"><a href="#"><i class="fab fa-d-and-d"></i></a> BARBERBAR</h6>
          <!-- Link -->
          <div>
            <ul class="d-flex flex-row ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.facebook.com" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://twitter.com" target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://instagram.com" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.youtube.com" target="_blank">
                  <span><i class="fab fa-youtube"></i></span>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Opening Hours -->
        <div class="col-lg-7">
          <h6 class="font-weight-bolder mb-4">Opening Hours</h6>
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hari</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Buka</th>
                  <th></th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tutup</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($jam_kerja = mysqli_fetch_assoc($jamKerja)) { ?>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0"><?php echo $jam_kerja["hari"] ?></h6>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary font-weight-normal"><?php echo substr($jam_kerja["buka"], 0, -3) ?> AM</span>
                    </td>
                    <td class="align-middle text-center">
                      -
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary font-weight-normal"><?php echo substr($jam_kerja["tutup"], 0, -3) ?> PM</span>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Location -->
        <div class="col-lg-3">
          <div>
            <h6 class="text-sm">Lokasi Cabang</h6>
            <ul class="hiragana flex-column">
              <?php while ($cabang = mysqli_fetch_assoc($tbl_cabang)) { ?>
                <li>
                  <a href="https://www.google.com/maps/place/<?= $cabang["nama_cabang"] ?>" target="_blank">
                    <?= $cabang["nama_cabang"] ?> <a href="https://wa.me/<?= $cabang["no_hp"] ?>" target="_blank"><?= $cabang["no_hp"] ?></a>
                  </a>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>

        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              Copyright © <script>
                document.write(new Date().getFullYear())
              </script> by <a href="https://github.com/indogegewepe" target="_blank">Bagas Uwaidha</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>