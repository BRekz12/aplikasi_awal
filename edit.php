<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Personil</title>
</head>

<body>
    <h2>Data Personil</h2>
    <br>if{

    }
    <a href="index.php">Kembali</a>
    <br />
    <br />
    <h3>Edit Data Mahasiswa</h3>


    <?php
    include 'koneksi.php';
    $nrp = $_GET['nrp'];
    $data = mysqli_query($koneksi, "SELECT * FROM personil WHERE nrp='$nrp'");
    while ($d = mysqli_fetch_array($data)); {
    ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>
                        <input type="hidden" name="nrp" value="<?php echo $d['nrp']; ?>">

                    </td>
                </tr>
                <tr>

                    <td>NRP</td>
                    <td><input type="number" name="nrp" value="<?php echo $d['nrp']; ?>"></td>
                    <td><input type="text" name="nrp" value="<?php echo $nrp ?>"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="radio" name="jk" value="L"> Laki-Laki
                    <td><input type="radio" name="jk" value="P"> Perempuan

                </tr>
                <tr>
                    <td valign="top">alamat</td>
                    <td><textarea name="alamat" cols="40" rows="8"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>