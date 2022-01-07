<?php
include '../config.php';

if (isset($_GET['id'])) {
    $delete = mysqli_query($conn, "DELETE FROM tbl_cabang WHERE id_cabang = '" . $_GET['id'] . "' ");
    echo '<script>window.location="cabang.php"</script>';
}
