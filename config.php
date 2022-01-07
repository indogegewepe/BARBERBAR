<?php

date_default_timezone_set('Asia/Jakarta');

$conn = mysqli_connect("localhost", "root", "", "db_barberbar");

$result = $conn->query("SELECT id_pegawai FROM pegawai ORDER BY id_pegawai DESC LIMIT 1");
$lastId = "";
while ($row = mysqli_fetch_assoc($result)) {
    $lastId = $row["id_pegawai"];
}
$pieces = explode("-", $lastId);
$id = (int)$pieces[1] + 1;
$newId = "P-" . str_pad((string)$id, 1, "0", STR_PAD_LEFT);

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function test_input($dataIn){
    $dataIn = trim($dataIn);
    $dataIn = stripslashes($dataIn);
    $dataIn = htmlspecialchars($dataIn);
    return $dataIn;
}

// Insert
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // insert pegawai
    if (isset($_POST["insertPegawai"])) {

        function upload()
        {
            $namaFile = $_FILES['fileToUpload']['name'];
            $error = $_FILES['fileToUpload']['error'];
            $tempName = $_FILES['fileToUpload']['tmp_name'];

            // sudah pilih file
            if (
                $error === 4
            ) {
                echo "<script>
                alert('Mohon masukan gambar!!!')
                </script>";
            }

            // validasi gambar
            $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
            $ekstensiGambar = explode('.', $namaFile);
            $ekstensiGambar = strtolower(end($ekstensiGambar));
            if (
                !in_array($ekstensiGambar, $ekstensiGambarValid)
            ) {
                echo "<script>
                alert('Mohon masukan gambar sesuai tipe yang ditentukan!!!')
            </script>";
                return false;
            }

            // pindah gambar
            move_uploaded_file($tempName, 'assets/img/' . $namaFile);

            return $namaFile;
        }

        $fileToUpload = upload();
        if (!$fileToUpload) {
            return false;
        }

        $nama = test_input($_POST["nama"]);
        $nohp = test_input($_POST["nohp"]);
        $email = test_input($_POST["email"]);
        $pass = test_input($_POST["pass"]);
        $conn->query("INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `no_hp`, `email`, `pass`, `pp`) VALUES ('$newId', '$nama', '$nohp', '$email', '$pass', '$fileToUpload');");
        header("location:admin/pegawai.php");

        return header("location:admin/pegawai.php");
    }
    
    //insert Model
    if (isset($_POST["insertModel"])) {

        function upload()
        {
            $namaFile = $_FILES['foto']['name'];
            $error = $_FILES['foto']['error'];
            $tempName = $_FILES['foto']['tmp_name'];

            // sudah pilih file
            if (
                $error === 4
            ) {
                echo "<script>
                alert('Mohon masukan gambar!!!')
                </script>";
            }

            // validasi gambar
            $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
            $ekstensiGambar = explode('.', $namaFile);
            $ekstensiGambar = strtolower(end($ekstensiGambar));
            if (
                !in_array($ekstensiGambar, $ekstensiGambarValid)
            ) {
                echo "<script>
                alert('Mohon masukan gambar sesuai tipe yang ditentukan!!!')
            </script>";
                return false;
            }

            // pindah gambar
            move_uploaded_file($tempName, 'assets/img/' . $namaFile);

            return $namaFile;
        }

        $foto = upload();
        if (!$foto) {
            return false;
        }

        $nama = test_input($_POST['nama']);
        $deskripsi = test_input($_POST['deskripsi']);
        $conn->query("INSERT INTO `model_rambut` (`id_model`, `nama_model`, `foto_model`, `deskripsi`) VALUES (NULL, '$nama', '$foto', '$deskripsi');");
        header("location:admin/model_rambut.php");

        return mysqli_affected_rows($conn);
    }

    //insert Transaksi
    if (isset($_POST["insertTransaksi"])) {
        $cabang = test_input($_POST['cabang']);
        $bayar = test_input($_POST['bayar']);
        $tanggal = test_input($_POST['tanggal']);
        $conn->query("INSERT INTO `transaksi` (`id_transaksi`, `tanggal_transaksi`, `id_kategori`, `id_cabang`) VALUES ('', '$tanggal', '$bayar', '$cabang');");
        header("location:admin/index.php");
    }

    //insert Kategori
    if (isset($_POST["insertKategori"])) {
        $kategori = test_input($_POST['kategori']);
        $harga = test_input($_POST['harga']);
        $conn->query("INSERT INTO `tbl_kategori` (`id_kategori`, `kategori`, `harga`) VALUES ('', '$kategori', '$harga');");
        header("location:admin/kategori.php");
    }

    //insert Cabang
    if (isset($_POST["insertCabang"])) {
        $nama = test_input($_POST['nama']);
        $nohp = test_input($_POST['nohp']);
        $alamat = test_input($_POST['alamat']);
        $conn->query("INSERT INTO `tbl_cabang` (`id_cabang`, `nama_cabang`, `no_hp`, `alamat`) VALUES ('', '$nama', '$nohp', '$alamat');");
        header("location:admin/cabang.php");
    }
}

?>