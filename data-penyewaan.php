<?php
    include "koneksi.php";
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
                        <a class="nav-link active" aria-current="page" href="">Jenis kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Pesan kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="">Tentang kami</a>
                    </li>
                </ul>
            </div>
    </div>
</nav>

<!-- hasil -->
<div class="container mt-5">
    <h1 class="mb-3">Data penyewaan</h1>
<table class="table text-center border border-dark mt-">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tipe kamar</th>
      <th scope="col">Harga</th>
      <th scope="col">Gambar</th>
    </tr>
  </thead>
  <tbody class="table-group-divider mt-3">
  <?php 
            $no = 1;
            $sql = "SELECT * FROM penyewaan";

            $query = mysqli_query($connect, $sql);

            while($data = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$data['jenis_kamar']."</td>";
                echo "<td>".$data['harga']."</td>";
                echo "<td><img src='./image/".$data['image']."' width='100' height='100' class='img-thumbnail'></td>";
                echo "</tr>";
            }
        ?>

  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>