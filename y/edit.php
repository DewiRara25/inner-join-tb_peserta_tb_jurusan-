<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("koneksi.php");

    $id = $_GET['jurusan_id'];
    $query = mysqli_query($koneksi,"SELECT * FROM tb_jurusan INNER JOIN tb_peserta ON 
    tb_jurusan.jurusan_id = tb_peserta.jurusan_id");
    
    while ($row = mysqli_fetch_array($query)){
        ?>
        <table border="0">
            <form action="proses-edit.php" method="POST">
                <tr><h2>EDIT DATA</h2></tr>
                <input type="hidden" name="id" value="<?php echo $row['id']?>"/>

                <tr>
                    <td><label for="jurusan" value="<?php $row['jurusan']; ?>">jurusan</label></td>
                    <td><input type="text" name="jurusan"></td>
    </tr>
    
    <tr>
                    <td><label for="kapasitas" value="<?php $row['kapasitas']; ?>">kapasitas</label></td>
                    <td><input type="text" name="kapasitas" value="<?php $row['kapasitas']; ?>"b></td>>
    </tr>
    <tr>
                    <td><label for="terisi" value="<?php $row['terisi']; ?>">terisi</label></td>
                    <td><input type="text" name="terisi" value="<?php $row['terisi']; ?>"b></td>>
    </tr>
    <tr>
                    <td><label for="nama" value="<?php $row['nama']; ?>">nama</label></td>
                    <td><input type="text" name="nama"></td>
    </tr>
    <tr>
                    <td><label for="gender" value="<?php $row['gender']; ?>">gender</label></td>
                    <td><input type="text" name="gender" value="<?php $row['gender']; ?>"b></td>
    </tr>
    <tr>
                    <td><label for="asalsekolah" value="<?php $row['asalsekolah']; ?>">asalsekolah</label></td>
                    <td><input type="text" name="asalsekolah" value="<?php $row['asalsekolah']; ?>"b></td>>
    </tr>
    <tr>
                    <td><label for="tempatlahir" value="<?php $row['tempatlahir']; ?>">tempatlahir</label></td>
                    <td><input type="text" name="tempatlahir" value="<?php $row['tempatlahir']; ?>"b></td>>
    </tr>
    <tr>
                    <td><label for="tanggallahir" value="<?php $row['tanggallahir']; ?>">tanggallahir</label></td>
                    <td><input type="date" name="tanggallahir" value="<?php $row['tanggallahir']; ?>"b></td>
    </tr>

    <button type="submit" id="simpan" name="simpan">Simpan</button>
    </form>
    <?php
    }
    ?>
</body>
</html>