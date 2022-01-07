<?php
    include '../config.php';
    
    if(isset($_GET['id'])){
        $delete = mysqli_query($conn, "DELETE FROM model_rambut WHERE id_model = '".$_GET['id']."' ");
        echo '<script>window.location="model_rambut.php"</script>';
    }
