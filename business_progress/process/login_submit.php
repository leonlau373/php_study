<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $koneksi = new mysqli("localhost", "root", "", "data_progress_business");

    $sql = "SELECT * FROM user_tbl WHERE username = '$username' AND password = '$password'";
    $q_user = mysqli_query($koneksi, $sql);
    $rowuser = mysqli_fetch_assoc($q_user);
    //$rowuser = $q_user->fetch_assoc();

    if(!empty($rowuser))
    {
        $_SESSION['username'] = $username;
        header("location:../index.php");
    }
    else
    {
        echo "Username / Password Yang Anda Masukan Salah <br>
        <a href='../index.php'> Kembali Ke Home </a> Atau Silahkan
        <a href='../register.php'> Registrasi </a> "; 
    }
?>