<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Personil</title>
</head>
<body>
    <center>
        <h1>Data Personil</h1>

    <table width="800" border="1">
        <tr>
            <td>No</td>
            <td>Nrp</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td align="center">Aksi</td>
        </tr>

        <?php
        // melakukan koneksi
        include "koneksi.php";

        // siapkan query
        $query = "SELECT * FROM personil";

        //jalankan query diambil dari koneksi yang sebelumnya
        $tampil = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));

        //inisiasi variabel nomor
        $no = 1;
        while($data = mysqli_fetch_array($tampil)):  ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data  ['nrp'] ?></td>
                <td><?php echo $data  ['nama'] ?></td>
                <td><?php echo $data  ['jk'] ?></td>
                <td><?php echo $data ['alamat'] ?></td>
                <td>
                    <a href="edit.php?nrp=<?php echo $data['nrp']; ?>">Edit</a>
                    <a href="hapus.php?nrp=<?php echo $data['nrp']; ?>">Hapus</a>
                </td>
            </tr>

        <?php endwhile; ?>


        <tr>
            <td colspan= "6" align="center">
                <a href= "tambah.php">Tambah</a>
            </td>
        </tr>
    </table>
    </center>

</body>
</html>