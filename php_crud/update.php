<?php

include "koneksi.php";
$nis = $_GET['NIS'];
$nama = $_GET['Nama'];
$alamat = $_GET['Alamat'];
$sql = "UPDATE tbl_alumni WHERE nis = $nis";
$query = mysqli_query($connect, $sql);




?>