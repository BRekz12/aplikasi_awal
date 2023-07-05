<?php
include "koneksi.php";

    $nrp = $_GET['nrp'];
    mysqli_query($koneksi, "DELETE FROM personil WHERE nrp = $nrp");
    header("location:index.php")
?>