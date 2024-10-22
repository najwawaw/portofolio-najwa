<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_projek = isset($_POST['id_projek']) ? $_POST['id_projek'] : '';
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $nama_projek = isset($_POST['nama_projek']) ? $_POST['nama_projek'] : '';
    $tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
    $hasil = isset($_POST['hasil']) ? $_POST['hasil'] : '';

    // Validasi input
    if (empty($id_projek) || empty($nama) || empty($nama_projek) || empty($tahun) || empty($hasil)) {
        echo "Semua field harus diisi.";
    } else {
        $sql = "INSERT INTO hasilprojek (id_projek, nama, nama_projek, tahun, hasil)
                VALUES ('$id_projek', '$nama', '$nama_projek', '$tahun', '$hasil')";

        if ($connect->query($sql) === TRUE) {
            header("Location: index.php"); 
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tambah Hasil Project</title>
    <style>
        body {
            background-color: pink;
        }
        table {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }


     
    </style>
</head>
<body>
    <center>
    <h1>Tambah Hasil Project</h1>
    <form action="" method="post">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <td>No</td>
                <td>:</td>
                <td><input type="text" name="id_projek" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Nama Projek</td>
                <td>:</td>
                <td><input type="text" name="nama_projek" required></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>:</td>
                <td><input type="text" name="tahun" required></td>
            </tr>
            <tr>
                <td>Hasil</td>
                <td>:</td>
                <td><input type="file" name="hasil" required></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center">
                    <input type="submit" value="Tambah">
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>
