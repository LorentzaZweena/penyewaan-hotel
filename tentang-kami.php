<?php
    include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BNSP | Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container">
                <a class="navbar-brand fw-semibold" href="../portal-bnsp/">HOTEL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mt-1" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="jenis-kamar.php">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="harga.php">Harga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Pesan kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tentang-kami.php">Tentang kami</a>
                    </li>
                </ul>
            </div>
    </div>
</nav>

<!-- main content -->
<div class="container mt-5">
    <h1 class="mb-4">Tentang kami</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Hotel</h5>
            <p class="card-text text-warp">Hotel adalah sebuah bangunan, atau perusahaan yang akan menyediakan sebuah jasa. Umumnya jasa yang ditawarkan oleh hotel berupa penginapan. Akan tetapi, masih banyak lagi jasa yang bisa ditawarkan oleh suatu hotel. Seperti menyediakan berbagai makanan dan minuman, membuat resto atau kafe, dapat digunakan untuk menggelar sebuah acara, dan lain sebagainya. Seluruh fasilitas yang ada di dalam hotel akan diperuntukan bagi pengunjungnya. Hotel adalah tempat yang sering digunakan untuk seseorang menginap atau beristirahat. Seperti untuk para wisatawan di sebuah daerah tempat wisata.</p>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
        <div class="card-body">
            <h5 class="card-title">Hubungi kami</h5>
            <p class="card-text text-warp">
                <ul>
                    <li>Email : hotel@gmail.com</li>
                    <li>No. Telp : 08123456789</li>
                    <li>Alamat : Jl. Raya No. 123, Kota Bandung</li>
                </ul>
            </p>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>