<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>Manajamen Bengkel | KURSUS INGRRIS FLASH</title>
</head>

<body>
    <header>
        <h3>DAFTAR KARYAWAN</h3>
    </header>

    <nav>
        <input type="button" value="Tambah" onclick=top.location="form-karyawan.php" />
        <input type="button" value="Kembali" onclick="history.back(-1)" />
    </nav>

    <br>

    <table align = "center" border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomer Telpon</th>
            <th>Tindakan</th>            

        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM karyawan";
        $query = mysqli_query($db, $sql);

        while($user = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$user['id_karyawan']."</td>";
            echo "<td>".$user['nama_karyawan']."</td>";
            echo "<td>".$user['alamat']."</td>";
            echo "<td>".$user['no_telp']."</td>";

            echo "<td>";
            echo "<a href='form-editkaryawan.php?id_karyawan=".$user['id_karyawan']."'>Edit</a> | ";
            echo "<a href='hapus-karyawan.php?id_karyawan=".$user['id_karyawan']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    </body>
</html>