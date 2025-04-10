<?php
    $connect = mysqli_connect("localhost","root","","data_progress_business");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $photo = $_FILES['photo_member']['name'];

    move_uploaded_file($_FILES['photo_member']['tmp_name'],'../photo_member/'.$photo);
    //$_FILES['photo_member']['name'] ini adalah string source
    //'../photo_member/.$photo adalah lokasi fotonya
    $sql = "INSERT INTO user_tbl(username, password, city, email, gender, photo_member, address, joindate) VALUES ('$username', '$password', '$city', '$email', '$gender', '$photo', '$address', now())";

    $q_member = mysqli_query($connect,$sql);

    header('location:../index.php')
?>