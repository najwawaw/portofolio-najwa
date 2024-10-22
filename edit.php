<?php
include 'koneksi.php';


if (isset($_GET['id_projek'])) {
    $id_projek = $_GET['id_projek'];

    $sql = "SELECT * FROM hasilprojek WHERE id_projek='$id_projek'"; 
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Record not found.";
        exit();
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_projek = $_POST['id_projek'];
    $nama = $_POST['nama'];
    $nama_projek = $_POST['nama_projek'];
    $tahun = $_POST['tahun']; 
    $hasil = $_POST['hasil'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_projek = $_POST['id_projek'];
        $nama = $_POST['nama'];
        $nama_projek = $_POST['nama_projek'];
        $tahun = $_POST['tahun'];
        $hasil = $_POST['hasil'];
    
        $sql = "UPDATE hasilprojek SET 
                    id_projek='$id_projek', 
                    nama='$nama', 
                    nama_projek='$nama_projek', 
                    tahun='$tahun', 
                    hasil='$hasil',
                WHERE id_projek='$id_projek'"; 
    
        if ($connect->query($sql) === TRUE) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error updating record: " . $connect->error;
        }
    }
}
?>    

<head>
    <title>Edit Data Barang</title>
    <style>
        body {
            background-color: pink; 
            padding: 20px;
            margin-bottom: 20px;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        form {
            display: inline-block;
            text-align: left;
            margin-top: 20px;
        }
        input[type="text"], input[type="email"], select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Edit Hasil Project</h1>
    <form action="" method= "POST">
        <label for="id_projek">No </label>
        <input type="text" id="id_projek" name="id_projek" required>

        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required>

        <label for="nama_projek"> Nama Projek </label>
        <input type="text" id="nama_projek" name="nama_projek" required>

        <label for="tahun">tahun:</label>
        <input type="text" id="tahun" name="tahun"  required>

        <label for="hasil">Hasil:</label>
        <input type="file" id="hasil" name="hasil"  required>

        <input type="submit" value="Update Data">
    </form>

    <a href="index.php">Kembali</a>
</body>
