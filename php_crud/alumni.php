<html>
    <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>alumni table</title>
	<style type="text/css">
		h3 {
			text-align: center;
		}
		.table_pink {
			margin-left: 20%;
			border: 3px;
			border-style: double;
			border-color: hotpink;
			width: 60%;
		}
		.tbl_heading {
			border: 2px;
			border-style: dashed;
			background-color: lightpink;
			border-color: hotpink;
			font-size: 120%;
		}
		.tbl_input {
			background-color: floralwhite;
			font-size: 90%;
		}
		.link-style {
			text-decoration: none;
			font-style: italic;
		}
	</style>
    </head>

    <body>
        <?php
            include "koneksi.php";
            $sql = "SELECT * FROM tbl_alumni";
            $data = mysqli_query($connect, $sql);
        ?>
        <table class = "table_pink">
            <tr>
                <td class = "tbl_heading">NIS</td>
                <td class = "tbl_heading">Nama</td>
                <td class = "tbl_heading">Alamat</td>
                <td class = "tbl_heading">Opsi </td>
            </tr>
            <?php
                while($table = mysqli_fetch_array($data))
                {
                    echo "<tr>";
                    echo "<td>" . $table['nis'] ."</td>";
                    echo "<td>" . $table['nama'] ."</td>";
                    echo "<td>" . $table['alamat'] ."</td>"; 
                    echo "<td>" . "<a href = 'form_update.php?nis=" . $table['nis'] ."'> Update </a>";
                    echo "<a href = 'delete.php?nis=" . $table['nis'] ."'> Delete </a>" . "</td>";
                    echo "</tr>";
                }

            ?>
        </table>
    <a href = "form_add.php"> Tambahkan data baru </a>
    </body>
</html>