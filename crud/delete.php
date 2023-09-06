<!-- delete.php -->

<?php
include('koneksi.php'); // Pastikan Anda mengatur koneksi ke database

if (isset($_GET['id'])) {
    $id_produk = $_GET['id'];
    $hapus = mysqli_query($koneksi, "DELETE FROM produk_obat WHERE id_produk = '$id_produk'");

    if ($hapus) {
        echo "<script>
        alert('Hapus Data Sukses!');
        document.location='read.php';  
    </script>";
    } else {
        echo "<script>
        alert('Hapus Data Gagal!');
        document.location='read.php';  
    </script>";
    }
}
?>