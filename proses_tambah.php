<?php
include "koneksi.php";

if (isset($_POST['submit']) ) {

    //menangkap data dari form

    $nrp      = $_POST['nrp'];
    $nama     = $_POST['nama'];
    $jk       = $_POST['jk'];
    $alamat   = $_POST['alamat'];

    // siapkan query
    $query ="INSERT INTO personil VALUES('$nrp', '$nama', '$jk', '$alamat')";
    $simpan =mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    // Jika dismpan maka
    if ($simpan) {
        header('location:index.php');
    }else{
        echo"Gagal menyimpan data";
    }
}