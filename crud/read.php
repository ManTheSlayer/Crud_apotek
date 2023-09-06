<?php
include "koneksi.php";
function formatRupiah($number)
{
    return "Rp " . number_format($number, 0, ',', '.');
}

// Fungsi untuk menghitung total harga produk
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </link>
    <!-- Style Css -->
    <link rel="stylesheet" href="../css/navbar.css" />
    <!-- Fontawesome  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- AOS CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <title>Tampilkan Data</title>

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
    <!-- End Navbar -->


    <div class="container mt-5">
        <a href="add.php" class="btn btn-primary btn-md mb-3 mt-5">
            <i class="fas fa-plus"></i> Tambah Data</a>
        <h3>Data List Obat</h3>
        <div class="card nt-3 mt-3">
            <div class="card-header bg-success text-white">Tabel Data Obat</div>
        </div>
        <!--Form Tampilan table data obat akan muncul semua yang di input-->
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Bentuk Produk</th>
                    <th>Jumlah Produk</th>
                    <th>Harga Produk</th>
                    <th>Harga Total Produk</th>
                    <th>Aksi</th>
                </tr>

                <?php
                $no = 1;
                $tampil = mysqli_query($koneksi, "SELECT * from produk_obat order by id_produk desc");
                while ($data = mysqli_fetch_array($tampil)):
                    ?>
                    <tr>
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td>
                            <?= $data['kode_produk'] ?>
                        </td>
                        <td>
                            <?= $data['nama'] ?>
                        </td>
                        <td>
                            <?= $data['deskripsi'] ?>
                        </td>
                        <td>
                            <?= $data['bentuk_produk'] ?>
                        </td>
                        <td>
                            <?= $data['jumlah_produk'] ?>
                        </td>
                        <td>
                            <?= (formatRupiah($data['harga_produk'])) ?>
                        </td>
                        <td>
                            <?= formatRupiah(total_biaya($data['jumlah_produk'], $data['harga_produk'])) ?>

                        </td>
                        <td>
                            <a href="edit.php?hal=edit&id=<?= $data['id_produk'] ?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?hal=hapus&id=<?= $data['id_produk'] ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>