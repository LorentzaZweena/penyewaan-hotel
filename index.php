<?php
    include "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penyewaan hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                        <a class="nav-link" aria-current="page" href="jenis-beasiswa.php">Jenis kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Pesan kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="hasil.php">Tentang kami</a>
                    </li>
                </ul>
            </div>
    </div>
</nav>

    <!-- form -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <h5 class="card-header fs-2 p-4 text-center bg-dark text-light">Form pemesanan</h5>
                    <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-semibold">Nama pemesan</label>
                                <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukkan nama lengkap" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label" fw-semibold>Jenis kelamin</label>
                                <div class="d-flex flex-row mb-3">
                                    <div class="p-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-laki" checked>
                                            <label class="form-check-label" for="laki_laki">
                                                Laki laki
                                            </label>
                                        </div>
                                    </div>
                                    <div class="p-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                                            <label class="form-check-label" for="perempuan">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-semibold">Nomor identitas</label>
                                <input type="number" class="form-control" id="no_identitas" aria-describedby="emailHelp" placeholder="Masukkan nomor identitas anda" name="no_identitas" oninput="validateIdentitas(this)" required>
                                <div id="identitasError" class="text-danger" style="display: none;">Isian salah, data harus 16 digit</div>
                            </div>

                            <div class="mb-3">
                                <label for="jenis_kamar" class="form-label fw-semibold">Jenis kamar</label>
                                <select class="form-select" aria-label="Default select example" name="jenis_kamar" id="jenis_kamar" required>
                                <option selected disabled value="">-- Pilih jenis kamar --</option>
                                    <?php
                                        $sql = "SELECT * FROM kamar";
                                        $result = mysqli_query($connect, $sql);
                                        while ($data = mysqli_fetch_array($result)) {
                                            echo "<option value='" . $data['id_tipe'] . "' data-price='" . $data['harga'] . "'>" . $data['jenis_kamar'] . "</option>";
                                        }

                                        // foreach ($result as $data) {
                                        //     echo "<option value='" . $data['id'] . "'>" . $data['jenis_kamar'] . "</option>";
                                        // }
                                    ?>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-semibold">Harga</label>
                                <input type="text" class="form-control" id="harga" aria-describedby="emailHelp" name="harga" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-semibold">Tanggal pesan</label>
                                <input type="date" class="form-control" id="tanggal" aria-describedby="emailHelp" name="tanggal">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-semibold">Durasi menginap</label>
                                <input type="number" class="form-control" id="durasi" aria-describedby="emailHelp" name="durasi" oninput="validateNumber(this)" required>
                                <div id="numberError" class="text-danger" style="display: none;">Harus diisi dengan angka</div>
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="sarapan">
                                    <label class="form-check-label" for="flexCheckDefault">Sarapan</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-semibold">Total bayar</label>
                                <input type="text" class="form-control" id="total" aria-describedby="emailHelp" name="total" readonly>
                            </div>
                            <div class="d-flex flex-row mb-3">
                                <div class="p-2">
                                    <button type="button" class="btn btn-secondary me-2" id="hitungTotal">Hitung Total Bayar</button>
                                </div>
                                <div class="p-2">
                                    <button type="submit" class="btn btn-dark" id="submit" name="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $no_identitas = $_POST['no_identitas'];
            $jenis_kamar = $_POST['jenis_kamar'];
            $tanggal = $_POST['tanggal'];
            $durasi = $_POST['durasi'];
            $total = $_POST['total'];
            $sarapan = $_POST['sarapan'];

            $sql = "INSERT INTO pemesanan (nama, jenis_kelamin, no_identitas, id_kamar, tanggal_pesan, durasi_menginap, total, sarapan) VALUES ('$nama', '$jenis_kelamin', '$no_identitas', '$jenis_kamar', '$tanggal', '$durasi', '$total', '$sarapan')";

            if($connect->query($sql)){
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Data berhasil disimpan',
                        confirmButtonColor: '#212529'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'index.php';
                        }
                    });
                </script>";
            }
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>

  </body>
</html>