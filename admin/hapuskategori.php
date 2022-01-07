<?php
    include '../config.php';

    if (isset($_GET['id'])) {
        $delete = mysqli_query($conn, "DELETE FROM tbl_kategori WHERE id_kategori = '" . $_GET['id'] . "' ");
        echo '<script>window.location="kategori.php"</script>';
    }
