<?php
$connect = mysqli_connect("localhost","root","");
$database = mysqli_select_db($connect, "db_library");

/*
if($connect)
{
    echo "Koneksi berhasil <br>";
}
else
{
    echo "Koneksi gagal <br>";
}

if($database)
{
    echo "Database berhasil tersambung";
}
else
{
    echo "Database gagal tersambung";
}

*/

?>