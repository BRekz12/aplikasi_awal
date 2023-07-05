<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Personil</title>
</head>
<body>
    
<h2><center>Tambah Personil</center></h2>
<form method="post" action="proses_tambah.php">
    <table>
        <tr>
            <td>Nrp</td>
            <td><input type="text" name="nrp"</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="radio" name="jk" value="L"> Laki-Laki
            <td><input type="radio" name="jk" value="P"> Perempuan
        </td>
        </tr>
        <tr>
            <td valign="top">alamat</td>
            <td><textarea name="alamat" cols="40" rows="8"></textarea></td>
        </tr>
        <tr>
            <td>Submit</td>
            <td><input type="submit" name="submit" value= "Simpan"></td>
        </tr>
    </table>
</form>
</body>
</html>