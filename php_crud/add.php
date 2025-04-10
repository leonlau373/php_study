<?php
    include "koneksi.php";
    $nis = $_GET['NIS'];
    $nama = $_GET['Nama'];
    $alamat = $_GET['Alamat'];

    $sql = "INSERT INTO tbl_alumni (nis, nama, alamat) VALUES ($nis, '$nama', '$alamat')";
    $input = mysqli_query($connect,$sql);

    if($input)
    {
        echo "Data berhasil ditambahkan <br>";
        echo "<a href = 'alumni.php'> Kembali ke halaman awal </a>";
    }
    else
    {
        echo "Data gagal ditambahkan <br>";
        echo "<a href = 'alumni.php'> Kembali ke halaman awal </a>";
    }

?>