<?php
include "koneksi.php";
function total_biaya($jumlah_produk, $harga_produk)
{
    return $jumlah_produk * $harga_produk;


}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Data</title>
    <!-- Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Style Css -->
    <link rel="stylesheet" href="../css/navbar.css" />
    <!-- Fontawesome  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- AOS CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body>
    <!-- START:Navbar -->
    <nav class="nav navbar fixed-top navbar-expand-lg  navbar bg-dark">
        <div class="container">
            <a href="#home" class="navbar-brand text-light">Program Crud</a>
            <button type="button" class="navbar-toggler navbar-dark" data-bs-target="#navbarNav"
                data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mt-1" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-auto">
                        <a class="nav-link" href="../index.html">home</a>
                    </li>
                    <li class="nav-item mx-auto">
                        <a class="nav-link" href="../index.html #about">about</a>
                    </li>
                    <li class="nav-item mx-auto">
                        <a class="nav-link" href="read.php">Tampilkan</a>
                    </li>
                    <li class="nav-item mx-auto">
                        <a class="nav-link" href="add.php">Tambah</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END:Navbar -->

    <!-- FORM INPUT DATA -->
    <div class=" p-4 border rounded shadow mt-3">
        <h1 class="text-center mt-5 mb-3"><b>APOTEK GUNAFARMA</b></h1>
        <h4 class="row justify-content-center">Input Data Produk</h4>
        <div class="row justify-content-center">
            <div class="card mt-2 col-lg-8">
                <div class="card-header bg-primary text-white">Data Produk</div>
                <div class="card-body">
                    <!--Form Action Data Produk -->
                    <form method="post" action="">
                        <div class="row form-group mb-4">
                            <div class="col-lg-2 col-md-3 col-sm-4"><label>Kode Produk</label></div>
                            <div class="col-lg-10 col-md-5 col-sm-8">
                                <input type="text" name="kode_produk" value="<?= @$kode_produk ?>" class="form-control"
                                    placeholder="Masukkan Kode Produk" required>
                            </div>
                        </div>

                        <div class="row form-group mb-4">
                            <div class="col-lg-2 col-md-3 col-sm-4"><label>Nama Produk</label></div>
                            <div class="col-lg-10 col-md-5 col-sm-8">
                                <input type="text" name="nama" value="<?= @$nama ?>" class="form-control"
                                    placeholder="Masukkan Nama Produk" required>
                            </div>
                        </div>

                        <div class="row form-group mb-4">
                            <div class="col-lg-2 col-md-3 col-sm-4"><label>Deskripsi Produk</label></div>
                            <div class="col-lg-10 col-md-5 col-sm-8">
                                <textarea class="form-control" name="deskripsi"
                                    placeholder="Masukkan Deskripsi Produk"><?= @$deskripsi ?></textarea>
                            </div>
                        </div>

                        <div class="row form-group mb-4">
                            <div class="col-lg-2 col-md-3 col-sm-4"><label>Bentuk Produk</label></div>
                            <div class="col-lg-10 col-md-5 col-sm-8">
                                <select class="form-control" name="bentuk_produk">
                                    <option value="">-- Jenis Produk --</option>
                                    <option value="pil">pil</option>
                                    <option value="kapsul">kapsul</option>
                                    <option value="tablet">tablet</option>
                                    <option value="sirup">sirup</option>
                                </select>
                            </div>
                        </div>

                        <div class="row form-group mb-4">
                            <div class="col-lg-2 col-md-3 col-sm-4"><label>Jumlah Produk</label></div>
                            <div class="col-lg-10 col-md-5 col-sm-8"><input type="number" name="jumlah_produk"
                                    value="<?= @$jumlah_produk ?>" class="form-control"
                                    placeholder="Masukkan jumlah Produk" required>
                            </div>
                        </div>

                        <div class="row form-group mb-4">
                            <div class="col-lg-2 col-md-3 col-sm-4"><label>Harga Jual Produk</label></div>
                            <div class="col-lg-10 col-md-5 col-sm-8">
                                <input type="number" name="harga_produk" value="<?= @$harga_produk ?>"
                                    class="form-control mb-3" placeholder="Masukkan Harga Produk" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success" name="simpan">
                            <i class="fas fa-pencil-alt"></i> Simpan
                        </button>
                    </form>

                    <a href="read.php" class="btn button-back mt-4">
                        <i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</body>

<?php
// Proses saat tombol 'Simpan' ditekan
if (isset($_POST['simpan'])) {
    $kode_produk = $_POST['kode_produk'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $bentuk_produk = $_POST['bentuk_produk'];
    $jumlah_produk = $_POST['jumlah_produk'];
    $harga_produk = $_POST['harga_produk'];

    // Melakukan query untuk menyimpan data ke database
    $simpan = mysqli_query($koneksi, "INSERT INTO produk_obat (kode_produk, nama, deskripsi, bentuk_produk, jumlah_produk, harga_produk, total_harga) VALUES ('$_POST[kode_produk]', '$_POST[nama]', '$_POST[deskripsi]', '$_POST[bentuk_produk]', '$_POST[jumlah_produk]', '$_POST[harga_produk]', '" . total_biaya($_POST['jumlah_produk'], $_POST['harga_produk']) . "')");

    // Menampilkan pesan berdasarkan hasil dari query
    if ($simpan) {
        echo "<script>
        alert('Simpan data berhasil!');
        document.location='add.php';
        </script>";
    } else {
        echo "<script>
        alert('Simpan data gagal!');
        document.location='add.php';
        </script>";
    }
}

?>