<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "koneksi.php";
        $nis = $_GET['nis'];

        $sql = "SELECT * FROM tbl_alumni WHERE nis = $nis";
        $query = mysqli_query($connect, $sql);
        $array_data = mysqli_fetch_array($query);
    ?>
    <form action = "update.php" method = "GET">
        <label>NIS:</label>
        <input type = "text" name = "NIS" value = "<?php echo $nis; ?>" required><br>
        <label>Nama:</label>
        <input type = "text" name = "Nama" value = "<?php echo $array_data['nama']; ?>" required><br>
        <label>Alamat:</label>
        <input type = "text" name = "Alamat" value = "<?php echo $array_data['alamat']; ?>"required><br>
        <input type = "Submit" name = "submit">
    </form>
</body>
</html>