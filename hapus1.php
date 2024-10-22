<?php
include 'koneksi.php';

if (isset($_GET['id_projek'])) {
    $id_projek = $_GET['id_projek'];
    $sql = mysqli_query($connect, "DELETE FROM hasilprojek WHERE id_projek ='$id_projek'");
    if ($sql) {
        header('Location: index.php');
        exit();
    } else {
        echo "Data gagal dihapus! ". mysqli_error($connect);
    }
}
?>